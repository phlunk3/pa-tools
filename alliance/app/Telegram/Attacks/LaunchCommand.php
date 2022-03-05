<?php
namespace App\Telegram\Attacks;

use App\Telegram\Custom\BaseCommand;
use App;
use App\Attack;
use App\AttackBooking;
use App\AttackTarget;
use App\Planet;
use App\User;
use App\Galaxy;
use App\Alliance;
use App\Tick;
use Carbon\Carbon;

class LaunchCommand extends BaseCommand
{
	protected $command = "!launch";

	public function execute()
	{
		if(!$this->isWebUser()) return "Error: you are not registered with the tools. Please do !setnick <your_username>";
		
		$string = explode(" ", $this->text);
		
		// validate
		if (!isset($string[0]))
			return 'Usage: !launch <fi|co|fr|de|cr|bs|eta>';
		switch ($string[0]):
			case 'fi':
			case 'co':
				$travel = 7;
				break;
			case 'fr':
			case 'de':
				$travel = 8;
				break;
			case 'cr':
			case 'bs':
				$travel = 9;
				break;
			default:
			if (isset($string[0]) && $string[0] >= 7 && $string[0] <= 14)
				$travel = $string[0];
			else
				return 'Usage: !launch <fi|co|fr|de|cr|bs|eta>';
		endswitch;
		
		// get current time
		$user = User::where('tg_username',  (isset($this->message->from['id'])?$this->message->from['id']:'1552608528'))->first();
		
		
		$currentTick = Tick::orderBy('tick', 'DESC')->first();

		// get bookings
		$reply = '';
		$attacks = Attack::where(['is_opened' => 1, 'is_closed' => 0])->get();
		foreach ($attacks as $attack):
			$bookings = AttackBooking::where('attack_id', $attack->id)->get();
			foreach ($bookings as $booking):
				$attackTarget = AttackTarget::where('attack_id', $attack->id)->where('id', $booking->attack_target_id)->get();
				foreach ($attackTarget as $target):
					$planet = Planet::find($target->planet_id);
					$user = User::where('tg_username',  (isset($this->message->from['id'])?$this->message->from['id']:'1552608528'))->first();
					if (isset($booking->user_id) && $booking->user_id == $user->id):
						$prelaunch = $booking->land_tick - $currentTick->tick - $travel;
						$time = Carbon::parse(Carbon::now($user['timezone'])->startOfHour());
						$travelTicks = $booking->land_tick - $currentTick->tick;
						$landingTime = date('h:i', strtotime('+' . $travelTicks . ' hours', strtotime($time)));						
						$reply .= sprintf('Booking %s:%s:%s LT%s PL%s landing at %s' . PHP_EOL, $planet->x, $planet->y, $planet->z, $booking->land_tick, $prelaunch, $landingTime);
					endif;
				endforeach;
			endforeach;
		endforeach;
		//$time = Carbon::parse(Carbon::now($user['timezone'])->startOfHour());
		
		return (strlen($reply) > 0?$reply:'No bookings found');
		
	}
}