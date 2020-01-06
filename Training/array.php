

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    
    <input type="text" name="one" placeholder="TextBox 1">
    <input type="text" name="two" placeholder="TextBox 2">
    <input type="text" name="three" placeholder="TextBox 3">
    <input type="text" name="four" placeholder="TextBox 4">
    <input type="text" name="five" placeholder="TextBox 5">
    <input type="text" name="six" placeholder="TextBox 6">
    <input type="submit" value="Sum" name="sum">
    <input type="submit" value="Max" name="max">
    <input type="submit" value="Min" name="min">
    <input type="submit" value="Ascen" name="ascending">
    <input type="submit" value="Decen" name="decending">
    
    
<br>
<br>    
    </form>

    <!-- Array Sum -->
    <?php 
    if(isset($_POST['sum'])){
        if(isset($_POST['one']) && isset($_POST['two']) && isset($_POST['three']) && isset($_POST['four']) && isset($_POST['five']) && isset($_POST['six'])){

        $one = $_POST['one'];
        $two = $_POST['two'];
        $three = $_POST['three'];
        $four = $_POST['four'];
        $five = $_POST['five'];
        $six = $_POST['six'];
        $sum = 0;

        $arr = [$one, $two, $three, $four, $five, $six];

        for($i=0; $i<sizeof($arr); $i++){
            $sum = $sum + $arr[$i];
        }
        echo $sum;
    }
}
?>

    <!-- Maximum Number -->

    <?php 
    if(isset($_POST['max'])){
        $one = $_POST['one'];
        $two = $_POST['two'];
        $three = $_POST['three'];
        $four = $_POST['four'];
        $five = $_POST['five'];
        $six = $_POST['six'];

        $arr = [$one, $two, $three, $four, $five, $six];
        $max = $arr[0];

        for($i=1; $i<sizeof($arr); $i++){
        
            if($max < $arr[$i]){
                $max = $arr[$i];
            }
        }
        echo $max;
    }    
    ?>



    <!-- Minimum Number -->

    <?php 
    if(isset($_POST['min'])){

        $one = $_POST['one'];
        $two = $_POST['two'];
        $three = $_POST['three'];
        $four = $_POST['four'];
        $five = $_POST['five'];
        $six = $_POST['six'];

        $arr = [$one, $two, $three, $four, $five, $six];
        $min = $arr[0];

        for($i=1; $i<sizeof($arr); $i++){
        
            if($min > $arr[$i]){
                $min = $arr[$i];
            }
        }
        echo $min;
    }    
    ?>

    <!-- Ascending Number-->
    <?php 
    if(isset($_POST['ascending'])){

        $one = $_POST['one'];
        $two = $_POST['two'];
        $three = $_POST['three'];
        $four = $_POST['four'];
        $five = $_POST['five'];
        $six = $_POST['six'];

        $arr = [$one, $two, $three, $four, $five, $six];

        
           for($i=0; $i<sizeof($arr); $i++){
               for($j=$i + 1; $j<sizeof($arr); $j++){
                   if($arr[$i] > $arr[$j]){
                       $temp = $arr[$i];
                       $arr[$i] = $arr[$j];
                       $arr[$j] = $temp;
                   }
               }
           }

           for($k=0;$k<sizeof($arr);$k++){
               echo $arr[$k]." ";
           }
        
    }
    ?>

    <!-- Decending Number-->
    <?php 
    if(isset($_POST['decending'])){

        $one = $_POST['one'];
        $two = $_POST['two'];
        $three = $_POST['three'];
        $four = $_POST['four'];
        $five = $_POST['five'];
        $six = $_POST['six'];

        $arr = [$one, $two, $three, $four, $five, $six];

        
           for($i=0; $i<sizeof($arr); $i++){
               for($j=$i + 1; $j<sizeof($arr); $j++){
                   if($arr[$i] < $arr[$j]){
                       $temp = $arr[$i];
                       $arr[$i] = $arr[$j];
                       $arr[$j] = $temp;
                   }
               }
           }

           for($k=0;$k<sizeof($arr);$k++){
               echo $arr[$k]." ";
           }
        
    }
    ?>


</body>
</html>



















