<?php
require 'MoveablePoint.php';
$point = new Point(6,6);
echo $point->setX(5);
echo $point->toString();
echo '<br>';
$moveablepoint = new MoveablePoint(3,5,5,2);
print_r($moveablepoint->getSpeed());
echo '<br>';
echo $moveablepoint->move();