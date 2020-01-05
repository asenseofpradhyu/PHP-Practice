<?php 
 
 $host = "localhost";
 $user = "pradhuman";
 $password = "12345";
 $db_name = "php_pdo";

$dsn = "mysql:host = ".$host.";"."dbname=".$db_name;

$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AJAX TEST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
</head>
<body>
    



    <select name="test" id="test">
    <?php 

    $query = "SELECT author FROM posts";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $select = $stmt->fetch();


    foreach ($select as $data) {
        echo "<option>".$data."</option>";
    }
    
    ?>
    </select>




<script>


</script>


</body>
</html>