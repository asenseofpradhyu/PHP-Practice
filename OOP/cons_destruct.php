<?php

    class User{
        public $name;
        public $age;

        public function __construct($name, $age){
            $this->name= $name;
            $this->age = $age;
        }

        public function hello(){
            return $this->name." Says Hello";
        }

        public function __destruct(){
            echo "Destruct Run";
        }
    }

    $us = new User('John',16);
    echo $us->name.' is '.$us->age.' years old';




?>