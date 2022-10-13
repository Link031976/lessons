<?php
    class Rectangle
    {
        private $a;//сторона прямокутника
        private $b;//сторона прямокутника

        public function Rectangle()
            {return $this->a*$this->b;}
            
        public function getPerimeter()
            {return ($this->a+$this->b)*2;}
    }
