<?php

include 'Factory.php';

class VolkswagenFactory extends Factory
{
    private const COUNTRY = 'Germany';

    public function __construct(){

        $this->brand = 'Volkswagen';
    }

    public function getCountry(): string
    {
        return self::COUNTRY;
    }
}