<?php
    class Student
    {
        public $name;
        public $course;

        private function chekinToNextCourse()
            {
                if ($this->course +1 >5) $this->course=' закінчив 5';                    
            }

        public function transferToNextCourse()
        {
            $this->course++;
            $this->chekinToNextCourse();
        }

    }
