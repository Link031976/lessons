<?php
    class Rectangle
    {
        public $a;
        public $b;

        public function Rectangle()
            {return $this->a*$this->b;}
            
        public function getPerimeter()
            {return ($this->a+$this->b)*2;}
    }
?>