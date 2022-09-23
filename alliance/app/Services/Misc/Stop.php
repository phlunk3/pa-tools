<?php

namespace App\Services\Misc;

use App\Ship;

class Stop
{
	private $id;
	private $name;
	private $amount;

	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	public function setAmount($amount)
	{
		$this->amount = $amount;
		return $this;
	}

	public function execute()
	{
		$amount = short2num($this->amount);

                if($this->name) {
                        if(Ship::where('name', 'LIKE', '%' . $this->name . '%')->count() == 1) {
                                $ship = Ship::where('name', 'LIKE', '%' . $this->name . '%')->first();
                        } elseif(Ship::where('name', 'LIKE', '%' . $this->name . '%')->count() == 0) {
                                return "Can't find a ship with that name";
                        } elseif(Ship::where('name', 'LIKE', '%' . $this->name)->count() == 1) {
                                $ship = Ship::where('name', 'LIKE', '%' . $this->name)->first();
                        } elseif(Ship::where('name', 'LIKE', $this->name)->count() == 1) {
                                $ship = Ship::where('name', 'LIKE', $this->name)->first();
                        }
                        if(!isset($ship)) {
                            $ships = Ship::where('name', 'LIKE', '%' . $this->name . '%')->get()->pluck('name')->toArray();
                            return "Ship name is too ambiguous (" . implode(", ", $ships) . ")";
                        }
		}

		if($this->id) $ship = Ship::find($this->id);

		$armour = $ship->armor * $amount;
		$eres = $ship->empres * $amount;

		$shipValue = number_shorten((($ship->metal + $ship->crystal + $ship->eonium) * $amount) / 100, 1);

		$reply = sprintf('%s %s (%s) will be stopped by ' . PHP_EOL, number_format($amount), $ship->name, $shipValue);

		$ships = $this->getShips($ship);

		foreach($ships as $eff => $targetGroup) {
			$eff = $eff / 100;
			foreach($targetGroup as $targetShip) {
				if($targetShip->type == 'EMP') {
					$stopped = ceil($amount/((100-$ship->empres)/100)/($targetShip->guns)/$eff);
				} else {
					$stopped = ceil(($armour / $targetShip->damage)/$eff);
				}
				
				// process stop
				if ($ship->init <= $targetShip->init):
					$effCmd = new \App\Telegram\Custom\EffCommand();
					$effCmd->basic = $targetShip->name;
					$effCmd->text = $amount . ' ' . $ship->name;
					$stops = $effCmd->execute();
					if (is_numeric($stops))
						$stopped += $stops;
				endif;
				
				$value = (($targetShip->metal + $targetShip->crystal + $targetShip->eonium) * $stopped) / 100;

				$reply .= sprintf(" %d %s (%s) " . PHP_EOL, $stopped, $targetShip->name, number_shorten($value, 1));
			}
		}

		return substr($reply, 0, -2);
	}

	private function getShips($ship)
	{
		$ships = [];

		$ships[100] = Ship::where('t1', $ship->class)->get();

		if($targeted = Ship::where('t2', $ship->class)->get()) $ships[70] = $targeted;
		if($targeted = Ship::where('t3', $ship->class)->get()) $ships[50] = $targeted;

		return $ships;
	}
}
