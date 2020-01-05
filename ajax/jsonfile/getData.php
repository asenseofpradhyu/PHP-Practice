<?php


 $host = "localhost";
 $user = "pradhuman";
 $password = "12345";
 $db_name = "php_pdo";

$dsn = "mysql:host = ".$host.";"."dbname=".$db_name;

$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "SELECT * FROM posts";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $select = $stmt->fetchAll();
    $temp = array();

    foreach ($select as $data) {
        if(empty($temp))
				 {
				   $temp=array($data['id'].",".$data['author']);
				 }
				 else
				 {  
				   array_push($temp,$data['id'].",".$data['author']);
				 }
    }

echo json_encode($temp);

?>    