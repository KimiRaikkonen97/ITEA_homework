<?php

include_once 'Audi.php';

use OOP\Car\Audi;

$Audi = new Audi('Black');
echo $Audi->start();
echo $Audi->up(50);
echo $Audi->up(50);
echo $Audi->up(50);
echo $Audi->stop();
echo Audi::whatIs();