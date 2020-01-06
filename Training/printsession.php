<?php session_start(); ?>


<?php 

if(isset($_POST['logout'])){
    session_destroy();
    header("Location:session.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Print Session</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    
    <input type="submit" value="Logout" name="logout">
    
    </form>

<?php 

if(isset($_SESSION['s1']) || isset($_SESSION['s2']) || isset($_SESSION['s3']) || isset($_SESSION['s4']) || isset($_SESSION['s5']) || isset($_SESSION['s6']) || isset($_SESSION['s7']) || isset($_SESSION['s8'])){

    echo $_SESSION['s1']."<br>";
    echo $_SESSION['s2']."<br>";
    echo $_SESSION['s3']."<br>";
    echo $_SESSION['s4']."<br>";
    echo $_SESSION['s5']."<br>";
    echo $_SESSION['s6']."<br>";
    echo $_SESSION['s7']."<br>";
    echo "<img src=".$_SESSION['s8']." style='object-fit:cover;'>"."<br>";

}

?>


</body>
</html>