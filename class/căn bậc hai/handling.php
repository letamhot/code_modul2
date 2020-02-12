<?php
require 'ads.php';
if (isset($_POST['submit'])) {
    $first = $_POST['first'];
    $second = $_POST['second'];
    $three = $_POST['three'];
    echo "Phương trình: " . $first . "x2 + " . $second . "x + " . $three . " = 0";
    echo "<br>";
    if (is_nan($first) || is_nan($second) || is_nan($three)) {
        echo "error";
    }
    if ($first == 0) {
        if ($second == 0) {
            if ($three == 0) {
                echo ("Phương trình vô số nghiệm");
            } else {
                echo ("Phương trình vô nghiệm!");
            }
        } else {
            echo ("Phương trình có một nghiệm: " . "x = " . (-$three / $second)) . '<br>';
        }
    } else {
        $qua = new QuadraticEquation($first, $second, $three);
        $delta = $qua->getDiscriminant();
        if ($delta < 0) {
            echo " Phương trình vô nghiệm";
        } elseif ($delta == 0) {
            echo "Phương trình có một nghiệm kép: " . '$x1 = $x2 = ' . $qua->getBothRoot() . '<br>';
        } else {
            echo "Phương trình có 2 nghiệm: ";
            echo '<br>';
            echo 'x1 = ' . $qua->getRoot1();
            echo '<br>';
            echo 'x2 = ' . $qua->getRoot2();
        }
    }
}
?>