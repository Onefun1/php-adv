<?php

include 'Interface/FactoryInterface.php';

abstract class Factory implements FactoryInterface
{
    protected string $brand;

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand($name)
    {
        $this->brand = $name;
    }
}