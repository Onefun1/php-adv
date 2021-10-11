<?php

include 'VolkswagenFactory.php';
include 'Interface/MovableInterface.php';


class Car extends VolkswagenFactory implements MovableInterface
{
    protected string $model;
    protected object $engine;
    protected object $transmission;
    protected int $speed = 0;
    protected int $transmissionPosition = 0;


    public function __construct($model, $engine, $transmission){

        parent::__construct();

        $this->model = $model;
        $this->engine = $engine;
        $this->transmission = $transmission;
    }

    public static function fromValues($model, $maxSpeed, $step): self
    {
        return new self($model, new Engine($maxSpeed), new Transmission($step));
    }

    public function getBrand(): string
    {
        return parent::getBrand() . ' / ' . parent::getCountry();
    }

    public function getMaxSpeed(): int
    {
        return $this->engine->getMaxSpeed();
    }

    public function getSteps(): int
    {
        return $this->transmission->getStep();
    }

    public function getInfo(){
        echo 'Creator - ' . $this->getBrand() . '<br>';
        echo 'Model - ' . $this->model . '<br>';
        echo 'Max Speed - ' . $this->getMaxSpeed() . '<br>';
        echo 'Max steps - ' . $this->getSteps();
    }

    public function start()
    {
        echo 'Engine Start! Speed = ' . $this->speed . ' transmission position = ' . $this->transmissionPosition;
    }

    public function stop()
    {
        $this->speed = 0;
        $this->transmissionPosition = 0;

        echo 'Engine Stop! Speed = ' . $this->speed . ' transmission position = ' . $this->transmissionPosition;
    }

    public function up()
    {
        if($this->getMaxSpeed() > $this->speed)
        {
            $this->speed += 40;
            $this->transmissionPosition += 1;

            echo 'Speed up! Speed = ' . $this->speed . ' transmission position = ' . $this->transmissionPosition;
        }
        elseif($this->getMaxSpeed() == $this->speed)
        {
            echo 'Yours speed is MAX!!! Dude, calm down!)';
        }
    }

    public function down()
    {
        if($this->speed > 0){
            $this->speed -= 40;
            $this->transmissionPosition -= 1;
            echo 'Speed down! Speed = ' . $this->speed . ' transmission position = ' . $this->transmissionPosition;

            if($this->speed == 0){
                echo '<br>';
                echo 'you can stop engine';
            }
        }
        elseif($this->speed == 0){
            echo 'Yours speed is ' . $this->speed . ' you can stop engine';
        }
    }

}