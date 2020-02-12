<?php
require 'Cylinder.php';
if (isset($_POST['sub'])) {
        $radius = $_POST['radius'];
        $color = $_POST['color'];
        $h = $_POST['h'];
        $cyr = new Cylinder($radius, $color, $h);
        echo $cyr->toString();
        echo '<br>';
        echo 'Thể tích là: ' . $cyr->volume($radius, $h);
    }
?>