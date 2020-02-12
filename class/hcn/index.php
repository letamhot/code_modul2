<?php


include "Rectangle.php";

$width  = 10;
$height = 20;

$rectangle = new Rectangle($width, $height);

echo $rectangle->width; // 0utput: 10
echo $rectangle->height; // 0utput: 20
echo "<br>";
$rectangle->height = 30;
$rectangle->width = 20;
echo $rectangle->height; // 0utput: 30
echo $rectangle->width; // 0utput: 20
echo "<br>";
echo "Chu vi là: " . $rectangle->getPerimeter(); // 0utput: 100
echo "<br>";
echo "Diện tích là: " . $rectangle->getArea(); // Output: 600
echo "<br>";
echo ("Your Rectangle :"." ". $rectangle->display());