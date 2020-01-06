<?php 

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $psw = $_POST['password'];
    $day = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $file = "img/".$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],$file);



    header("Location:registration_saved.php?q1=".$name."&q2=".$email."&q3=".$psw."&q4=".$day."&q5=".$month."&q6=".$year."&q7=".$gender."&q8=".$file);

}



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    
    <input type="text" name="name" placeholder="Name"> <br>

    <input type="email" name="email" placeholder="Email"> <br>
    <input type="password" name="password" placeholder="Password"> <br>
    <br>
    <select name="date" >
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
    </select>

    <select name="month" >
        <option value="January">January</option>
        <option value="Febuary">Febuary</option>
        <option value="March">March</option>
    </select>

    <select name="year" >
        <option value="1997">1997</option>
        <option value="1998">1998</option>
        <option value="1999">1999</option>
    </select>

<br> <br>

<label for="">Gender :
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
</label>
    <br><br>

<input type="file" name="file" >

<br><br>

<input type="submit" value="Submit" name="submit">


</form>


</body>
</html>