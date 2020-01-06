<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Multidimensional Array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    
    <input type="text" name="one" placeholder="TextBox 1">
    <input type="text" name="two" placeholder="TextBox 2">
    <input type="text" name="three" placeholder="TextBox 3"><br>
    <input type="text" name="four" placeholder="TextBox 4"> 
    <input type="text" name="five" placeholder="TextBox 5">
    <input type="text" name="six" placeholder="TextBox 6"><br>
    <input type="text" name="seven" placeholder="TextBox 7"> 
    <input type="text" name="eight" placeholder="TextBox 8">
    <input type="text" name="nine" placeholder="TextBox 9">
<br><br><br>
    
    <input type="text" name="mat_one" placeholder="TextBox 1">
    <input type="text" name="mat_two" placeholder="TextBox 2">
    <input type="text" name="mat_three" placeholder="TextBox 3"><br>
    <input type="text" name="mat_four" placeholder="TextBox 4"> 
    <input type="text" name="mat_five" placeholder="TextBox 5">
    <input type="text" name="mat_six" placeholder="TextBox 6"><br>
    <input type="text" name="mat_seven" placeholder="TextBox 7"> 
    <input type="text" name="mat_eight" placeholder="TextBox 8">
    <input type="text" name="mat_nine" placeholder="TextBox 9">
    
    <input  type="submit" value="Sum" name="sum">
    <input  type="submit" value="Multiply" name="multiply">
    <input type="submit" value="Maximum" name="max">
    <input type="submit" value="Minimum" name="min">
    <input type="submit" value="Ascending" name="ascending">
    
    
    
<br>
<br>    
</form>

    <!-- Matrix Sum -->

<?php 

if(isset($_POST['sum'])){

    // Matrix 1
    $one = $_POST['one']; 
    $two = $_POST['two']; 
    $three = $_POST['three']; 
    $four = $_POST['four']; 
    $five = $_POST['five']; 
    $six = $_POST['six'];
    $seven = $_POST['seven'];
    $eight = $_POST['eight'];
    $nine = $_POST['nine']; 

    // Matrix 2
    $mat_one = $_POST['mat_one'];
    $mat_two = $_POST['mat_two'];
    $mat_three = $_POST['mat_three'];
    $mat_four = $_POST['mat_four'];
    $mat_five = $_POST['mat_five'];
    $mat_six = $_POST['mat_six'];
    $mat_seven = $_POST['mat_seven'];
    $mat_eight = $_POST['mat_eight'];
    $mat_nine = $_POST['mat_nine'];


    $mat1 = array(array($one, $two, $three),
                  array($four, $five, $six),
                  array($seven, $eight, $nine));
        
    $mat2 = array(array($mat_one, $mat_two, $mat_three),
                  array($mat_four, $mat_five, $mat_six),
                  array($mat_seven, $mat_eight, $mat_nine));                

        for($row = 0; $row<3; $row++){
            for($col=0; $col<3; $col++){
                
                $sum[$row][$col] = $mat1[$row][$col] + $mat2[$row][$col];
                echo $sum[$row][$col]." ";
            }
            echo "<br>";
        }
}

?>


<!-- Matrix Multiplication -->

<?php 

if(isset($_POST['multiply'])){

    // Matrix 1
    $one = $_POST['one']; 
    $two = $_POST['two']; 
    $three = $_POST['three']; 
    $four = $_POST['four']; 
    $five = $_POST['five']; 
    $six = $_POST['six'];
    $seven = $_POST['seven'];
    $eight = $_POST['eight'];
    $nine = $_POST['nine']; 

    // Matrix 2
    $mat_one = $_POST['mat_one'];
    $mat_two = $_POST['mat_two'];
    $mat_three = $_POST['mat_three'];
    $mat_four = $_POST['mat_four'];
    $mat_five = $_POST['mat_five'];
    $mat_six = $_POST['mat_six'];
    $mat_seven = $_POST['mat_seven'];
    $mat_eight = $_POST['mat_eight'];
    $mat_nine = $_POST['mat_nine'];

    $mat1 = array(array($one, $two, $three),
                  array($four, $five, $six),
                  array($seven, $eight, $nine));
        
    $mat2 = array(array($mat_one, $mat_two, $mat_three),
                  array($mat_four, $mat_five, $mat_six),
                  array($mat_seven, $mat_eight, $mat_nine)); 


            for($row=0; $row<3; $row++){
                for($col=0; $col<3; $col++){
                    $mul=0;
                    for($index = 0; $index < 3; $index++){
                        $mul += $mat1[$row][$index] * $mat2[$index][$col];
                        $ans[$row][$col] = $mul;
                    }
                }
            }

            for($row=0; $row < 2; $row++){
                for($col=0;$col<3; $col++){
                    echo $ans[$row][$col]." ";
                }
                echo "<br>";
            }

}
?>

    <!-- Matrix Maximum Number -->
<?php 

if(isset($_POST['max'])){

    // Matrix 1
    $one = $_POST['one']; 
    $two = $_POST['two']; 
    $three = $_POST['three']; 
    $four = $_POST['four']; 
    $five = $_POST['five']; 
    $six = $_POST['six'];
    $seven = $_POST['seven'];
    $eight = $_POST['eight'];
    $nine = $_POST['nine']; 

    $mat = array(array($one, $two, $three),
                  array($four, $five, $six),
                  array($seven, $eight, $nine));
    
$max = $mat[0][0];
    for($row=0; $row<3; $row++){
        for ($col=0; $col<3; $col++) { 
            if($max < $mat[$row][$col]){
                $max = $mat[$row][$col];
            }
        }
    }
    echo $max;
}
?>

<!-- Matrix Minimum Number -->
<?php 

if(isset($_POST['min'])){

    // Matrix 1
    $one = $_POST['one']; 
    $two = $_POST['two']; 
    $three = $_POST['three']; 
    $four = $_POST['four']; 
    $five = $_POST['five']; 
    $six = $_POST['six'];
    $seven = $_POST['seven'];
    $eight = $_POST['eight'];
    $nine = $_POST['nine']; 

    $mat = array(array($one, $two, $three),
                  array($four, $five, $six),
                  array($seven, $eight, $nine));
    
$min = $mat[0][0];
    for($row=0; $row<3; $row++){
        for ($col=0; $col<3; $col++) { 
            if($min > $mat[$row][$col]){
                $min = $mat[$row][$col];
            }
        }
    }
    echo $min;
}
?>


    <!-- Matrix Ascending Order -->
<?php 

if(isset($_POST['ascending'])){

    // Matrix 1
    $one = $_POST['one']; 
    $two = $_POST['two']; 
    $three = $_POST['three']; 
    $four = $_POST['four']; 
    $five = $_POST['five']; 
    $six = $_POST['six'];
    $seven = $_POST['seven'];
    $eight = $_POST['eight'];
    $nine = $_POST['nine']; 

    $mat = array(array($one, $two, $three),
                  array($four, $five, $six),
                  array($seven, $eight, $nine));


    for($row = 0; $row<3; $row++){
        for($col = 0; $col<3-1; $col++){
            for($index=$col+1; $index<3; $index++){
                if($mat[$row][$col] > $mat[$row][$index]){
                    $temp = $mat[$row][$col];
                    $mat[$row][$col] = $mat[$row][$index];
                    $mat[$row][$index] = $temp;
                }
            }
        }
    }

    for($row=0; $row<3; $row++){
        for($col=0; $col<3; $col++){
            echo $mat[$row][$col]." ";
        }
        echo "<br>";
    }
}
?>








</body>
</html>


