<?php 
$day;
$month;
$year;


if(isset($_GET['submit'])){
    
    
     $day = $_GET['day'];
     $month = $_GET['month'];
     $year = $_GET['year']; 
     
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Drop Down</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
        

        <h2>Select Date :</h2>

        <!-- Days -->
        <select name="day" id="day">
        <option value="01" name = "one" >01</option>
        <option value="02" name = "two">02</option>
        <option value="03" name = "three">03</option>
        <option value="04" name = "four">04</option>
        <option value="05" name = "five">05</option>
        </select>
        
        <!-- Months -->
        <select name="month" id="month">
        <option value="January" name = "jan">January</option>
        <option value="Febuary" name = "feb">Febuary</option>
        <option value="March" name = "mar">March</option>
        <option value="April" name = "april">April</option>
        <option value="May" name = "may">May</option>
        </select>

         <!-- Year -->
         <select name="year" id="year">
        <option value="1995" name = "ninty-five">1995</option>
        <option value="1996" name = "ninty-six">1996</option>
        <option value="1997" name = "ninty-seven">1997</option>
        <option value="1998" name= "ninty-eight">1998</option>
        <option value="1999" name="ninty-nine">1999</option>
        </select>

    <input type="submit" value="Click" name = "submit">    
    </form>
    <br>
    
    <?php 
    if(isset($day) && isset($day) && isset($day)){

    $str="<h2> $day/$month/$year ";
    echo $str;

    } else {
       
    }
    ?>
</body>
</html>