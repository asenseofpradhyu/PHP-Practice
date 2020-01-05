<?php
// $hello = 'Hello';
// $world  ='World';

// // $concat = $hello .' '. $world;
// $concat = "$hello $world";

// $new = 'they\'re here';

// // Constant

// define('NAME','Pradhumansinh Padhiyar',true);
// echo name;
?>

<?php

// Arrays

#1.Indexed Array
// $cars = array("Honda","Ford","Maruti");
// $cars = ["Honda","Ford","Maruti"];

// echo $cars[1];
// print_r($cars);
// var_dump($cars);

#2.Associative Array

// $names = array("Rohan"=>12,"Mohan"=>13,"Soham"=>14);
// echo $names["Mohan"];
// print_r($names);
// var_dump($names);

#3.Multi-Dimensional Array

// $arr = array(
//     array("Rohan",20,30),
//     array("Mohan",22,33),
//     array("Soham",15,10),
// );

// echo $arr[2][0];
// print_r($arr);
// var_dump($arr);

?>

<?php
    
//     // Function By Reference
//     $myNum = 10;

//     function hello ($num){
//         $num+=10;
//     }

//     function hello1(&$num){
//         $num+=10;
//     }

//     hello($myNum);
//     echo "$myNum<br>";

//     hello1($myNum);
//     echo "$myNum<br>";
?>

<?php

    // echo date('Y');      //Year 'Y' is in Capital
    // echo date('m');      //Month
    // echo date('d');      //Date
    // echo date('l');      //Week Day
    // echo date('h');      //Hours
    // echo date('i');      //Minutes
    // echo date('s');      //Seconds
    // echo date('a');      //A.M or P.M

    // Set Time Zone

    // date_default_timezone_set('Asia/kolkata');
    // echo date('h:i:s a');

    // Make Time

    // $time = mktime(4,10,22,3,4,2015); //Hour Minute Second Month Date Year
    // echo $time;
    // echo date('h:i:s d/m/Y',$time);

    // String to Time

    // $time = strtotime('7:02 PM 22 January 2018');
    // $time1 = strtotime('tomorrow');
    // $time2 = strtotime('next Sunday');
    // $time3 = strtotime('+2 Months');

    // echo date('h:i:s a d/m/Y',$time3);


?>

<?php 
    // Get & Post
//     if(isset($_POST['name'])){

//         $name = htmlentities($_POST['name']);
//     }

 ?>

<?php 

    // How to Set Session

    // if(isset($_POST['submit'])){
    //     session_start();
        
    //     $_SESSION['name'] = htmlentities($_POST['name']);

    //     header('Location: index.php');

    // }

?>

<?php
    // How to set Cookies

    //     if(isset($_POST['submit'])){

    //         $name= htmlentities($_POST['name']);
    //         setcookie('name', $name, time()+3600);

    //         header('Location: index.php');
    //     }

    // // Update Cookie
    // setcookie('name', 'Frank', time()+3600);

    // // Delete cookie
    // setcookie('name', 'Frank', time()-3600);

    // // Set Cookie In Array
    // $user = array('name'=>'Hello', 'age'=> 20, 'email'=> 'test@test.com');

    // $user = serialize($user);

    // setcookie('user', $user, time()+3600);

    // $user = unserialize($_COOKIE['user']);
    
    // echo $user['name'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Session</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    
    <label for="name">Name 
    <input type="text" name="name" id="name">
    </label>

    <input type="submit" value="Enter" name='submit'>
    
    </form>

</body>
</html>

