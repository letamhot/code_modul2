<?php

require 'shape.php';
class Triangle extends Shape
{
    public $sides1;
    public $sides2;
    public $sides3;
    public function __construct($name, $sides1, $sides2, $sides3)
    {
        parent::__construct($name);
        $this->sides1 = $sides1;
        $this->sides2 = $sides2;
        $this->sides3 = $sides3;

    }
    public function getSides1()
    {
        return $this->sides1;
    }
    public function getSides2()
    {
        return $this->sides2;
    }
    public function getSides3()
    {
        return $this->sides3;
    }
    public function setSlides1($sides1)
    {
        $this->sides1 = $sides1;
    }
    public function setSlides2($sides2)
    {
        $this->sides2 = $sides2;
    }
    public function setSlides3($sides3)
    {
        $this->sides3 = $sides3;
    }
    public function getArea()
    {
        $p = 1/2*($this->sides1 + $this->sides2 +$this->sides3);
        return pow($p*
        ($p-$this->sides1 + 
        $p-$this->sides2 +
        $p-$this->sides3),0.5) ;
    }
    public function getPerimeter()
    {
        return $this->sides1 + $this->sides2 +$this->sides3;
    }
    public function toString()
    {
        return " $this->name : Cạnh 1: $this->sides1 ,Cạnh 2: $this->sides2 ,Cạnh 3: $this->sides3 ";
    }

}