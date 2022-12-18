<?php

namespace OOP\Car;

include_once 'MovableInterface.php';

const COUNTRY_AUDI = 'Germany';
const COUNTRY_FORD = 'USA';
abstract class Car implements MovableInterface
{
    protected $speed;
    protected $isRunning;
    protected $power;
    protected $maxSpeed;
    protected $braking;
    protected $colour;

    protected function __construct(string $colour)
    {
        $this->speed = 0;
        $this->isRunning = false;
        $this->colour = $colour;
    }

    public function start(): string
    {
        if($this->isRunning) {
            return 'The car already started' . PHP_EOL;
        }
        else {
            return 'Car started' . PHP_EOL;
            $isRunning = true;
        }
    }
    public function stop(): string
    {
        if($this->speed > 0) {
            return 'You cannot stop the car without braking!' . PHP_EOL;
        }
        else {
            $isRunning = false;
            return 'Car stopped' . PHP_EOL;
        }
    }

    protected function speedMessage(): string
    {
        return 'Speed of the car is ' . $this->speed . PHP_EOL;
    }
    abstract public function up(int $unit);
    abstract public function down(int $unit);
}