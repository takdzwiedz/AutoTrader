<?php
/**
 * Created by PhpStorm.
 * User: Takdzwiedz
 * Date: 12.06.2018
 * Time: 06:15
 */

namespace CarBundle\Service;

use CarBundle\Entity\Car;

class DataChecker
{
    public function checkCar(Car $car)
    {
        return "Car ".$car->getModel()." checked";
    }

}