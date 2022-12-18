<?php

namespace OOP\Car;

include_once 'Car.php';


class Audi extends Car
{
    public function __construct(string $colour)
    {
        parent::__construct($colour);
        $this->maxSpeed = 300;
        $this->braking = 50;
        $this->power = 40;
    }

    public function up(int $unit)
    {
        $messageOfPower = null;
        if($unit > $this->power){
            $unit = $this->power;
            $messageOfPower = 'For one time speed can be upped only on ' . $this->power . '!' . PHP_EOL;
        }
        if($this->maxSpeed <= $this->speed) {
            return $messageOfPower . 'Max speed!' . PHP_EOL;
        }
        elseif ()
    }
    public function down(int $unit)
    {
        if($this->speed > 0){
            $this->speed -= $this->braking;
        }
        else {
            return 'The car is not moving' . PHP_EOL;
        }
    }
}