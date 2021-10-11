<?php

include 'src/Autoloader.php';

spl_autoload_register([Autoloader::class, 'autoload']);


function pr($item)
{
    echo '<br>';
    echo '<pre>';
    echo $item;
    echo '</pre>';
}

$engine = new Engine(200);
$transmission = new Transmission(5);

$defaultCar = new Car('model-default', $engine, $transmission); // variant 1

$staticCar = Car::fromValues('model-static', 300, 6);   // variant 2

function runTestProcess(MovableInterface $car)
{
    pr($car->start());
    pr($car->up());
    pr($car->up());
    pr($car->up());
    pr($car->up());
    pr($car->up());
    pr($car->up());
    pr($car->down());
    pr($car->down());
    pr($car->down());
    pr($car->down());
    pr($car->down());
    pr($car->down());
    pr($car->stop());

    pr($car->getInfo());
}


runTestProcess($defaultCar);
runTestProcess($staticCar);