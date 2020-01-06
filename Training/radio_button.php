<?php

// Variable
$correct = 0;
$result = 0;
$cut_of_marks = 0;
$attend = 0;
$wrong = 0;
$not_attend = 0;
$correct_icon = "<i class='fa fa-check' aria-hidden='true'></i>"; //Correct
$wrong_icon = "<i class='fa fa-times' aria-hidden='true'></i>"; //Wrong


if(isset($_POST['submit'])){

    // India Capital
    if(empty($_POST['state'])){
        // Empty
        $not_attend++;
    } else {
        // Not Empty
        $state = $_POST['state'];
        if($state == "Delhi"){
            // Correct
            $correct++;
            $result = $correct*5;
            $attend++;
        } else {
            // Wrong
            $wrong++;
        }
    }

    // Gujarat Capital
    if(empty($_POST['district'])){
        // Empty
        $not_attend++;
    } else {
        // Not Empty
        $district = $_POST['district'];
        if($district == "Gandhinagar"){
            // Correct
            $correct++;
            $result = $correct*5;
            $attend++;
        } else {
            // Wrong
            $wrong++;
        }
    }

    // Addition Sum
    if(empty($_POST['sum'])){
        // Empty
        $not_attend++;
    } else {
        // Not Empty
        $sum = $_POST['sum'];
        if($sum == "5"){
            // Correct
            $correct++;
            $result = $correct*5;
            $attend++;
        } else {
            // Wrong
            $wrong++;
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Radio Button</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <h2>Select Option</h2>

        <label for="">1.What is the Capital of India ?  

        <?php 
        if(isset($_POST['submit'])){
            
        $state = $_POST['state'];
        if($state == "Delhi"){
            
            echo $correct_icon;
        } else if($state == ""){
            
        } else {
            
            echo $wrong_icon;
        }
    }
    ?>        
        <br><br>
        <input type="radio" name="state" id="delhi" value="Delhi">Delhi<br><br>
        <input type="radio" name="state" id="rajasthan" value="Rajasthan">Rajasthan<br><br>
        <input type="radio" name="state" id="gujarat" value="Gujarat">Gujarat<br><br>
        </label>

        <label for="">2.What is the Capital of Gujarat ?
      <?php   
        if(isset($_POST['submit'])){

        $district = $_POST['district'];

        if($district == "Gandhinagar"){
            echo $correct_icon;
        } else if($district == ""){

        }
         else {
            echo $wrong_icon;
        }
    }
    ?>
          
        <br><br>
        <input type="radio" name="district" id="hmt" value="Himmatnagar">Himmatnagar<br><br>
        <input type="radio" name="district" id="gnagar" value="Gandhinagar">Gandhinagar<br><br>
        <input type="radio" name="district" id="ahmd" value="Ahmedabad">Ahmedabad<br><br>
        </label>

        <label for="">3. What is the Answer of : 2+2+1  ? 
        
    <?php    
    if(isset($_POST['submit'])){

    $sum = $_POST['sum'];

    if($sum == "5"){
    echo $correct_icon;
    } else if($sum == ""){
    
    }
    else {
    echo $wrong_icon;
    }
    } 
    ?>
        
        <br><br>
        <input type="radio" name="sum" id="six" value="6">6<br><br>
        <input type="radio" name="sum" id="seven" value="7">7<br><br>
        <input type="radio" name="sum" id="five" value="5">5<br><br>
        </label>

        <input type="submit" value="Check Answer" name="submit">
    </form>


     <!--Show Result  -->
    <h3>Correct Answer : <?php echo $correct; ?></h3>
    <h3>Wrong Answer : <?php echo $wrong; ?></h3>
    <h3>Attempt Answer : <?php echo $attend; ?></h3>
    <h3>Not Attempt Answer : <?php echo $not_attend; ?></h3>
    <h3>Cut of Marks : <?php 
    $ans = 0;
    $ans = ($wrong*2);
    echo $ans; 
    ?></h3>
    <h3>Result : <?php echo $result-$ans;?></h3>

       <!-- Icons -->
       <!-- <i class="fa fa-check" aria-hidden="true"></i> Right-->
       <!-- <i class="fa fa-times" aria-hidden="true"></i> Wrong-->
</body>
</html>

