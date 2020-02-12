<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Fan
    {
        const  SLOW = 1;
        const MEDIUM = 2;
        const FAST = 3;
        private $speed = self::MEDIUM;
        private $on = false;
        private  $radius = 5;
        private  $color = "blue";
        public function getSpeed()
        {
            return $this->speed;
        }
        public function getOn()
        {
            return $this->on;
        }
        public function getRadius()
        {
            return $this->radius;
        }
        public function getColor()
        {
            return $this->color;
        }
        public function setSpeedFast()
        {
            $this->speed = self::FAST;
            return $this;
        }
        public function setSpeedMedium()
        {
            $this->speed = self::MEDIUM;
            return $this;
        }
        public function setSpeedSlow()
        {
            $this->speed = self::SLOW;
            return $this;
        }
        public function setOn($boolean)
        {
            $this->on = $boolean;
            return $this;
        }
        public function setRadius($radius)
        {
            $this->radius = $radius;
            return $this;
        }
        public function setColor($color)
        {
            $this->color = $color;
            return $this;
        }
        public function toString()
        {
            if ($this->on) {
                return "<br>Tốc độ: " . $this->speed . "<br>Màu:" . $this->color . "<br>Bán kính :" . $this->radius ."<br>Trạng thái: fan is on";
            } else {
                return "<br>Màu:" . $this->color . "<br>Bán kính :" . $this->radius ."<br>Trạng thái: fan is off";
            }
        }
    }
    ?>
</body>
</html>