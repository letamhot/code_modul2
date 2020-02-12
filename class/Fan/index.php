<?php
require 'fan.php';
$fan1 = new Fan();
$fan2 = new Fan();
$fan1->setSpeedFast()->setRadius(10)->setColor("yellow")->setOn(true);
$fan2->setSpeedMedium()->setRadius(5)->setColor("blue")->setOn(false);
echo "Quạt 1:".$fan1->toString()."<hr> Quạt 2:".$fan2->toString();
?>