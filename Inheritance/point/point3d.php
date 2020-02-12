<?php
require 'point2d.php';
class Point3D extends Point2D
{
    public $z;
    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function Point3D()
    {

    }
    public function getZ()
    {
        return $this->z;
    }
    public function setZ($z)
    {
        $this->z = $z;
    }
    public function getXYZ()
    {
        return array($this->x, $this->y, $this->z);
    }
    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function __toString()
    {
        return $this->x . $this->y . $this->z;
    }
}
?>