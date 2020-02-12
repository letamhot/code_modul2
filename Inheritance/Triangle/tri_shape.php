<?php 
require 'triangle.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $sides1 = $_POST['sides1'];
    $sides2 = $_POST['sides2'];
    $sides3 = $_POST['sides3'];
    if($sides1 + $sides2 > $sides3 && $sides1 + $sides3 > $sides2 && $sides2 + $sides3 > $sides1){
        $triangle = new Triangle($name, $sides1, $sides2, $sides3);
        echo "Area: " . $triangle->getArea();
        echo '<br>';
        echo "Perimeter: " . $triangle->getPerimeter();
        echo '<br>';
        echo $triangle->toString();
    }else{
      echo 'error';
    }
}
?>