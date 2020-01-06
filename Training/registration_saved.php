<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Requested Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <?php

    if(isset($_REQUEST['q1']) && isset($_REQUEST['q2']) && isset($_REQUEST['q3']) && isset($_REQUEST['q4'])&& isset($_REQUEST['q5']) && isset($_REQUEST['q6']) && isset($_REQUEST['q7']) && isset($_REQUEST['q8'])){

        $q1 = $_REQUEST['q1'];
        $q2 = $_REQUEST['q2'];
        $q3 = $_REQUEST['q3'];
        $q4 = $_REQUEST['q4'];
        $q5 = $_REQUEST['q5'];
        $q6 = $_REQUEST['q6'];
        $q7 = $_REQUEST['q7'];
        $q8 = $_REQUEST['q8'];

        echo $q1."<br>".$q2."<br>".$q3."<br>".$q4."<br>".$q5."<br>".$q6."<br>".$q7."<br>"."<br>";
        echo "<img src='".$q8."' style='width:100px; height:100px; object-fit:cover;' />";

    }
    

    ?>
    </form>


</body>
</html>