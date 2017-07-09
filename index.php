<?php 

require 'vendor/autoload.php';

$calculator = new calculator();
$calculator->setOperation(new Adder);
$calculator->calculate(10,80,10);

$calculator->setOperation(new Subtractor);
$calculator->calculate(20);

$calculator->setOperation(new Multiplier);
$calculator->calculate(10);

$calculator->setOperation(new Divider);
$calculator->calculate(80);

echo $calculator->getResult();
 ?>