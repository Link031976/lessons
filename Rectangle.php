<?php
    class Rectangle
    {
        private $a;//side of the rectangle
        private $b;//side of the rectangle

        public function Rectangle()
            {return $this->a*$this->b;}
            
        public function getPerimeter()
            {return ($this->a+$this->b)*2;}
    }
