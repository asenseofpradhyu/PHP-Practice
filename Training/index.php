<?php 
$totalsum = 0;
$percentage = 0;
$grade = "*";
$gsub1 = $gsub2 = $gsub3 = $gsub4 = $gsub5 = "";
$gsub_sum = "";

if(isset($_POST['submit'])){
    if(empty($_POST['sub1']) && empty($_POST['sub2']) && empty($_POST['sub3']) && empty($_POST['sub4']) && empty($_POST['sub5'])){
        
        echo "Please Fill the Form";

    } else {
        
        // $gsub = 0;
        $sub1 = $_POST['sub1'];
        $sub2 = $_POST['sub2'];
        $sub3 = $_POST['sub3'];
        $sub4 = $_POST['sub4'];
        $sub5 = $_POST['sub5'];

        // Checks Marks & Do total sum, Percentage
        if(($sub1 > 100 || $sub1 < 0) || ($sub2 < 0 || $sub2 > 100) || ($sub3 < 0 || $sub3 > 100) || ($sub4 < 0 || $sub4 > 100) || ($sub5 < 0 || $sub5 > 100)){
            echo "Please Correct Marks";
        } else if($sub1 < 35 || $sub2 < 35 || $sub3 < 35 || $sub4 < 35 || $sub5 < 35 ){
            
            if($sub1 < 35){
                $gsub1 = 35 - $sub1;
                $gsub1 = $gsub1."*";
                // $sub1 = $gsub + $sub1; 
            }  
            if($sub2 < 35){
                $gsub2 = 35 - $sub2;
                $gsub2 = $gsub2."*";
                // $sub2 = $gsub + $sub2;  
            }
            if($sub3 < 35){
                $gsub3 = 35 - $sub3;
                $gsub3 = $gsub3."*";
                // $sub3 = $gsub + $sub3;  
            }
            if($sub4 < 35){
                $gsub4 = 35 - $sub4;
                $gsub4 = $gsub4."*";
                // $sub4 = $gsub + $sub4;  
            }
            if($sub5 < 35){
                $gsub5 = 35 - $sub5;
                $gsub5 = $gsub5."*";
                // $sub5 = $gsub + $sub5;  
            }


        } 
        // echo $sub1;
        $totalsum = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
        $percentage = ($totalsum * 100) / 500; 
        $gsub_sum = $gsub1 + $gsub2 + $gsub3 + $gsub4 + $gsub5;

        // Check Grade
        if($gsub_sum <= 8 ){
            echo "You pass through Grace";
        } 
        if($gsub_sum > 8  ){
            echo "Fail";
            $grade = "F";
            $percentage = 0;
            $totalsum = 0;
        }  
        if($percentage >= 70){
            $grade = "A";
        }else if($percentage >= 60 && $percentage <= 69){
            $grade = "B";
        }else if($percentage >= 50 && $percentage <= 59){
            $grade = "C";
        }else if($percentage >= 40 && $percentage <= 49){
            $grade = "D";
        } else if($percentage >= 35 && $percentage <= 39){
            $grade = "E";
        }  



    }

}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Practice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>MarkSheet</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="sub1"> Subject 1
        <input type="number" name="sub1" value="<?php echo $sub1; ?>" id="sub1"><?php echo $gsub1;?>
        </label><br><br>
        <label for="sub2"> Subject 2
        <input type="number" name="sub2" id="sub2" value="<?php echo $sub2; ?>"><?php echo $gsub2;?>
        </label><br><br>
        <label for="sub3"> Subject 3
        <input type="number" name="sub3" id="sub3" value="<?php echo $sub3; ?>"><?php echo $gsub3;?>
        </label><br><br>
        <label for="sub4"> Subject 4
        <input type="number" name="sub4" id="sub4" value="<?php echo $sub4; ?>"><?php echo $gsub4;?>
        </label><br><br>
        <label for="sub5"> Subject 5
        <input type="number" name="sub5" id="sub5" value="<?php echo $sub5; ?>"><?php echo $gsub5;?>
        </label><br><br>
        <input type="submit" value="Show Result" name="submit">
    </form>

    <h3>Total Marks: <?php echo $totalsum;?> out of 500</h3>
    <h3>Percentage: <?php echo $percentage;?> &#37;</h3>
    <h3>Grade: <?php echo $grade;?></h3>


 <script>
 const sub1 = document.getElementById('sub1');
 const sub2 = document.getElementById('sub2');
 const sub3 = document.getElementById('sub3');
 const sub4 = document.getElementById('sub4');
 const sub5 = document.getElementById('sub5');

 if(sub1.value < 35 && sub1.value != ""){
     sub1.style.backgroundColor = 'red';
 }
 if(sub2.value < 35 && sub2.value != ""){
     sub2.style.backgroundColor = 'red';
 }
 if(sub3.value < 35 && sub3.value != ""){
     sub3.style.backgroundColor = 'red';
 }
 if(sub4.value < 35 && sub4.value != ""){
     sub4.style.backgroundColor = 'red';
 }
 if(sub5.value < 35 && sub5.value != ""){
     sub5.style.backgroundColor = 'red';
 }
 
 </script>   
</body>
</html>