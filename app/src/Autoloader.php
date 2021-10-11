<?php

class Autoloader
{

//    public const AUTOLOAD_MAP = ['App\Car'=>'src/Car.php'];

  public static function autoload($className)
  {
//    $path = self::AUTOLOAD_MAP[$className] ?? 'src/' . str_replace('\\', '/', $className) . '.php';

      $fileName = 'src/' . $className . '.php';

    if (file_exists($fileName))
    {
      include  $fileName;
    }
  }
}