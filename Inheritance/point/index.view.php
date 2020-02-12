<?php
require 'point3d.php';
$point2d = new Point2D(3,5);
    $point2d->setX(4);
    echo $point2d->toString();
    echo '<br>';
$point3d = new Point3D(2,5,7);
echo $point3d->toString();
?>