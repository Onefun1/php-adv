<?php

class Transmission
{
    protected int $step;

    public function __construct($step){
        $this->step = $step;
    }

    public function getStep(): int
    {
        return $this->step;
    }

}