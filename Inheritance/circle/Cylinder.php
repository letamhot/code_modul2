<?php
require 'circle.php';
class Cylinder extends Circle
    {
        public $h;
        public function __construct($radius, $color ,$h)
        {
            parent::__construct($radius, $color);
            $this->h = $h;
        }
        public function volume($radius, $h){
            return pi() * pow($radius,2) * $h; 
        }
        public function toString()
        {
            return 'Bán kính: ' . $this->radius . '<br>' .'Màu sắc: '. $this->color .'<br>'.'Chiều cao: '.$this->h;
        }

    }
?>