<?php
session_start(); 
$val=[];



if(isset($_COOKIE["login"])){
    $val = explode("|",$_COOKIE['login']);

}
else
{
    $val[0]="";
    $val[1]="";
}



if(isset($_POST['submit'])){

    if(isset($_SESSION['s2']) && isset($_SESSION['s3'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        if($_SESSION['s2'] == $email && $_SESSION['s3'] == $password){

            if(isset($_POST['check'])){
                $check  = $_POST['check'];
                setcookie("login",$_SESSION['s2']."|".$_SESSION['s3'], time() + 3600);
            }
            else
            {
                setcookie("login","", time() - 3600);
            }

            header("Location: printsession.php");
        } else {
            echo "Enter Valid Email and Password";
        }
        

    }


}


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">

    <input type="email" name="email" placeholder="Email" value="<?php echo $val[0];?>"> <br> <br>
    <input type="password" name="password" placeholder="Password" value="<?php echo $val[1];?>"> <br>
    <input type="checkbox" name="check" value="Remember Me"> Remember Me
    <br><br>
    <input type="submit" value="Submit" name="submit">

</form>


</body>
</html>