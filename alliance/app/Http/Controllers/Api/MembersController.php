<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use App\Planet;
use App\PlanetHistory;
use App\User;
use Twilio;
use App\Role;
use DB;
use Hash;

class MembersController extends ApiController
{
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$enabled = User::with('role', 'planet', 'planet.latestA', 'planet.latestA.au')->orderBy('name', 'ASC')->where(['is_enabled' => 1])->get();
		$disabled = User::with('role', 'planet')->orderBy('name', 'ASC')->where(['is_enabled' => 0, 'is_new' => 0])->get();
		$new = User::with('role', 'planet')->orderBy('name', 'ASC')->where(['is_enabled' => 0, 'is_new' => 1])->get();
		// $admins = User::with('planet', 'planet.latestA', 'planet.latestA.au')->orderBy('name', 'ASC')->where(['is_enabled' => 1, 'is_new' => 0])->get();
		// $bcs = User::with('planet', 'planet.latestA', 'planet.latestA.au')->orderBy('name', 'ASC')->where(['is_enabled' => 1, 'is_new' => 0])->get();

		foreach($enabled as $user) {
			$user->timezone = ($user->timezone) ? Carbon::parse(Carbon::now($user->timezone))->format('H:i:s') : null;
			$user->ships = $this->getShips($user);
			$user->tg_user = "";
			if($user->tg_username) {
				$user->tg_user = DB::table('user')->where('id', $user->tg_username)->first();
			}
		}

		// foreach($admins as $user) {
		//	 $user->timezone = ($user->timezone) ? Carbon::parse(Carbon::now($user->timezone))->format('H:i:s') : null;
		//	 $user->ships = $this->getShips($user);
		// }

		$users['enabled'] = $enabled;
		$users['new'] = $new;
		$users['disabled'] = $disabled;
		// $users['admins'] = $admins;
		// $users['bcs'] = $bcs;

		return $users;
	}

	public function show($id)
	{
		if(!$this->hasRole('Admin')) return;

		$user = User::with(['planet' => function($q) {
			$q->select(['id', 'x', 'y', 'z']);
		}])->find($id)->toArray();

		return collect($user);
	}
	public function password ($username, $password) {
		
		$user = User::getUser($username);
		$user->password = Hash::make($password);
		$user->save;
		
	}
	public function update($id, Request $request)
	{

		$user = User::find($id);
		
		// process request
		$user->fill($request->all());
		
		// handle password
		$updated = false;
		if (isset($request->password) && strlen($request->password) > 0) {
			$user->password = Hash::make($request->password);
			$updated = true;
		}

                if($updated && getenv("FORUMSENABLED") !== false) {
			// todo - needs a useful url?
			file_get_contents('https://forum.domain.tld/user-password.php?username=' . $user->name . '&password=' . $request->password);
		}

		if($request->input('x') && $request->input('y') && $request->input('z')) {

			$planet = PlanetHistory::where('x', $request->input('x'))
			  ->where('y', $request->input('y'))
			  ->where('z', $request->input('z'))
			  ->orderBy('tick', 'DESC')
			  ->first();

			if($planet) {
				$planet = Planet::find($planet->planet_id);
			}
		}

		$user->planet_id = (isset($planet)) ? $planet->id : 0;
		$user->save();
		
		
		return $user;
	}

	public function call($id)
	{
		$user = User::find($id);

		//dd(url('/'));
		//$voice = 'http://demo.twilio.com/docs/voice.xml';
		$voice = url('/outgoing');

		if($user->phone) {
			Twilio::call($user->phone, $voice, ['Timeout' => 10]);
			sleep(15);
		}

		return;
	}

	public function enable($id)
	{
		$memberRole = Role::where('name', 'Member')->first();
		User::where('id', $id)->update([
			'is_enabled' => true,
			'is_new' => false,
			'role_id' => $memberRole->id
		]);
		
		// enable on forums	
		$data = User::getUserById($id);
		echo 'Enabling user ' . $data['name'];
		file_get_contents('https://forum.domain.tld/user-enable.php?username=' . $data['name']);
		
		return $this->index();
	}

	public function disable($id)
	{
		User::where('id', $id)->update([
			'is_enabled' => false
		]);
		
		// enable on forums	
		$data = User::getUserById($id);
		echo 'Disabling user ' . $data['name'];
		file_get_contents('https://forum.domain.tld/user-disable.php?username=' . $data['name']);
		
		return $this->index();
	}

	public function admin($id)
	{
		$user = User::find($id);

		$user->is_admin = !$user->is_admin;
		$user->save();

		return $this->index();
	}

	public function role($id, $roleId)
	{
		$user = User::find($id);

		$user->role_id = $roleId;
		$user->save();

		return $this->index();
	}

	public function delete($id)
	{		
		// delete from forums
		$data = User::getUserById($id);
		echo 'Disabling user ' . $data['name'];
		file_get_contents('https://forum.domain.tld/user-delete.php?username=' . $data['name']);
		
		// now delete for real
		if($id != 1) User::where('id', $id)->delete();
		
		return $this->index();
	}

	private function getShips($user)
	{
		$ships = [];

		$totalValue = 0;

		if($user->planet && $user->planet->latestA) {
			foreach($user->planet->latestA->au as $ship) {
				$value = (($ship->ship->metal + $ship->ship->crystal + $ship->ship->eonium) * $ship->amount) / 100;
				$ships[] = [
					'name' => $ship->ship->name,
					'amount' => number_format($ship->amount, 0),
					'value' => $value
				];
				$totalValue = $totalValue + $value;
			}
		}

		foreach($ships as $key => $ship) {
			$ships[$key]['percentage'] = number_format(($ship['value'] / $totalValue) * 100, 2);
		}

		return $ships;
	}
}
