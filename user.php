<?php

class User
    {
        public $surname; // прізвище
        public $name; // ім'я
        public $patronymic; // по батькові
            public function __construct($surname, $name, $patronymic)
            {
                $this->surname = $surname;
                $this->name = $name;
                $this->patronymic = $patronymic;

                          
            }

    }

