<?php 

class User{

    public $name;
    public $age;
    public static $minpasslen = 6;

    public static function validate($pass){
        if(strlen($pass) >= self::$minpasslen){          //Use Self:: instead of this because of Static;
            return true;
        } else {
            return false;
        }
    }
}


$password = 'hello1';
if(User::validate($password)){       //Class name:: for using static function;
    echo "validate password";       //ex:(User::)
} else {
    echo "Not validate";
}

?>