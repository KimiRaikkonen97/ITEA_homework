<?php

include_once 'Audi.php';

use OOP\Car\Audi;

$Audi = new Audi('Black');
echo $Audi->start();
echo $Audi->stop();
echo $Audi->up(50);
