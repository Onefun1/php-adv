<?php

class Engine
{
    protected int $maxSpeed;

    public function __construct(int $maxSpeed){
        $this->maxSpeed = $maxSpeed;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
}