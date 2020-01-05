<?php

    class User{
        private $name;
        private $age;

        // Old way of getter & Setter method;
        public function get(){
            return $this->name;
        }
        public function set($name){
            return $this->name = $name;

        }

        // New Way of getter & Getter Method;
        // Called as Magic Method;
        public function __get($property){
            if(property_exists($this, $property)){
                return $this->$property;
            }
        }

        public function __set($property, $value){
            if(property_exists($this, $property)){
                $this->$property = $value;
            }
            return $this;
        }
    }

    $us = new User();
    // Old Way;
    // $us->set('john');
    // echo $us->get();

    // New Way;
    $us->__set('age',20);
    echo $us->__get('age');




?>