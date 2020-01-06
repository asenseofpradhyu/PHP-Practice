<?php 

$i;


if(isset($_POST['submit'])){
    if(empty($_POST['num1'] || empty($_POST['num2']))){
        echo "Enter the Number";
    } else {
        $num_one = $_POST['num1'];
        $num_two = $_POST['num2'];

        for ($i=$num_one; $i <= $num_two; $i++) { 
            if($i % 2 == 0){
                echo "Even Number :- " .$i."<br>";
            } else {
                echo "Odd Number :- ".$i."<br>";
            }
        }

    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Odd & Even</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="">Number 1
    <input type="text" name="num1" >
    </label>

    <label for="">Number 2
    <input type="text" name="num2" >
    </label>

    <input type="submit" value="Enter" name="submit">
    
    </form>
</body>
</html>