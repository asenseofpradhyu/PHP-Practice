<?php

class User{
    protected $name;
    protected $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

class Customer extends User{
    private $balance;

    public function __construct($name, $age, $balance){
        parent::__construct($name, $age);
        $this->balance = $balance;
    }

    public function pay(){
        return $this->name.' '.$this->age.' '.$this->balance;;
    }

}

$cus = new Customer('John',16,500);

echo $cus->pay();



?>