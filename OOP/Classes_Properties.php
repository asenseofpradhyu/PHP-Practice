<?php

class User{

    // Properties
    public $name = 'Hello';

    // Methods
    public function world(){
        return $this->name." World";
    }


}

// Instatiate a user object
$us = new User();

echo $us->name;
echo "<br>";
echo $us->world();





?>