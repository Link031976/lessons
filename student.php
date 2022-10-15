<?php
    class Student
    {
        public $name;
        public $course;

        public function transferToNextCourse()
        {
            if ($this->course +1 >5) $this->course=' закінчив 5';
                else $this->course++;
        }

    }
    