
    <?php
    class Circle
    {
        public $a;
        public $b;
        public function __construct($radius, $color){
            $this->radius = $radius;
            $this->color = $color;
        }

        public function getter(){
            return $this->radius;
            return $this->color;
        }
        public function setter($radius, $color){
             $this->radius = $radius;
             $this->color = $color;
             $this;
        }
        public function toString(){
            return $this->radius . '<br>' . $this->color;
        }

    }
    
    ?>
