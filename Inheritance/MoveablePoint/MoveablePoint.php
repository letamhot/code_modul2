<?php
require 'Point.php';
class MoveablePoint extends Point
{
    public $xspeed;
    public $yspeed;
    public function __construct($x, $y, $xspeed, $yspeed)
    {
        parent::__construct($x, $y);
        $this->xspeed = $xspeed;
        $this->yspeed = $yspeed;
    }
    public function getXSpeed()
    {
        return $this->xspeed;
    }
    public function getYSpeed()
    {
        return $this->yspeed;
    }
    public function setXSpeed($xspeed)
    {
        $this->xspeed = $xspeed;
    }
    public function setYpeed($yspeed)
    {
        $this->yspeed = $yspeed;
    }
    public function setpeed($xspeed, $yspeed)
    {
        $this->xspeed = $xspeed;
        $this->yspeed = $yspeed;
    }
    public function getSpeed()
    {
        return array($this->xspeed . $this->yspeed);
    }
    public function __toString()
    {
        return "($this->x,$this->y), speed = ($this->xspeed ,$this->yspeed)";
    }
    public function move()
    {
        $this->x += $this->xspeed;
        $this->y += $this->yspeed;
        return $this;
    }
}
