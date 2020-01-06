<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prime Number</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <label for=""> Enter Number :
        <input type="text" name="num" >
        </label>
        <input type="submit" value="Table" name="table">
        <input type="submit" value="Prime Number" name="prime">
        <input type="submit" value="Perfect Number" name="perfect">
        <input type="submit" value="All Table" name="all">
        <input type="submit" value="Factorial" name="facto">
        <input type="submit" value="Check Armstrong" name="armstrong">
        <input type="submit" value="From Armstrong" name="arms">
        <input type="submit" value="Niven Number" name="niven">
    </form>
    <br>


    <!--Table-->
    <?php 
    
    if(isset($_POST['table'])){
        if(isset($_POST['num'])){
            $num = $_POST['num'];
            $sum = 0;
            for($i=1; $i<= 10; $i++){
                echo $num." x ".$i." = ".$sum=$i*$num."<br>";
                
            }
    
        }
    }
    ?>

<!--Perfect Number-->
<?php 

if (isset($_POST['perfect'])) {
   if(isset($_POST['num'])){
       $num = $_POST['num'];
       $sum = 0;
       for($i=1; $i<= $num; $i++){
           if($i % $num == 0){
               $sum = $sum+$i;
           }
       }
       echo $sum;
   }
}
?>


<!--Prime Number-->
<?php 
$ans = 0;
if(isset($_POST['prime'])){
    if(isset($_POST['num'])){

        $num = $_POST['num'];
        if($num == 1){
            echo $num;
        } 
        for ($i=2; $i < $num; $i++) { 
            if($num%$i == 0){
                $ans++;
                break;
            }
        }
        if($ans == 0 ){
            echo "Prime Number";
        } else {
            echo "Not Prime Number";
        }
    }
}
?>

<!--All Table-->
<?php 
if(isset($_POST['all'])){
    if(isset($_POST['num'])){
        $num = $_POST['num'];
        $arr = array('','yellow','orange', 'blue', 'white','pink','lightblue','red','green','purple');
        for($i=1; $i<=$num; $i++){
            echo "<div style='float:left; height:200px; width:100px; background-color:".$arr[$i]."; margin:5px; text-align:center;'>";
            for($j=1; $j<=10; $j++){
                echo $i." x ".$j." = ".$sum=$j*$i."<br>";
            }
            echo "</div>";
        }
    }
} 
?>
<!--Factorial Number-->
<?php 
if(isset($_POST['facto'])){
    if(isset($_POST['num'])){
        $num = $_POST['num'];
        
        $n= 1;
        for($i=2; $i<=$num; $i++){
            $n = $n*$i;
        }
        echo $n;
    }
}
?>
<!--Armstrong Number-->
<?php 
    if(isset($_POST['armstrong'])){
        if(isset($_POST['num'])){
            $num = $_POST['num'];
            
            function arm($n){
                $sum =0;
                $x= $n;
                while($x!=0){
                    $r = $x %10;
                    $sum = $sum + $r*$r*$r;
                    $x = $x/10;
                }

                if($n == $sum){
                    echo "Armstrong Number";
                } else {
                    echo "Not Armstrong Number";
                }
            }

            arm($num);
            
        }
    }
?>

<!--All Armstrong-->
<?php

if(isset($_POST['arms'])){
    if(isset($_POST['num'])){
        $num = $_POST['num'];
        for($i=1;$i<=$num;$i++){
            $j=$i;
            $sum=0;
      
            while($j>0){
                $m=$j%10;
                $j=$j/10;
                $sum = $sum+($m*$m*$m);
            }
            if($sum==$i){
                echo $i." ";
            }
        }
       
        
    }
}
?>
<?php 
    if(isset($_POST['niven'])){
        if(isset($_POST['num'])){
            $num = $_POST['num'];
            $sum=0;
            while($num!=0){
                $r = $num%10;
                $sum+=$r;
                $num/=10;
                
            }
            if($num % $sum==0){
                echo "Niven Number";
            } else {
                echo "Not a Niven Number";
            }
        }
    }
?>
</body>
</html>






























