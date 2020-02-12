<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Point2D 
    {
        public $x;
        public $y;
        public function __construct($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
            
        }
        public function getX(){
            return $this->x;
        }
        public function getY(){
            return $this->y;
        }
        public function getXY(){
            return array($this->x, $this->y);
        }
        public function setX($x){
            $this->x =$x;
        }
        public function setY($y){
            $this->y =$y;
        }
        public function setXY($x, $y){
            $this->x =$x;
            $this->y =$y;
        }
        public function toString()
        {
            return $this->x . $this->y;
        }
    }
   
    ?>
</body>
</html>