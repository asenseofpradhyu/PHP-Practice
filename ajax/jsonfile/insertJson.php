<?php


function Dbconnect(){
    $host = "localhost";
    $user = "pradhuman";
    $password = "12345";
    $db_name = "php_pdo";
   
   $dsn = "mysql:host = ".$host.";"."dbname=".$db_name;
   
  return new PDO($dsn, $user, $password);
   
   
}

/*============================================================================ */


$method = $_REQUEST['method'];
$author = $_REQUEST['author'];
$id = $_REQUEST['editid'];
// echo json_encode($method.", ".$author);
// echo $method;
 

if(isset($_REQUEST['author']) && !empty($_REQUEST['author']) && isset($_REQUEST['method']) && !empty($_REQUEST['method']) || isset($_REQUEST['editid']) && !empty($_REQUEST['method'])){
    $action = $_REQUEST['method'];

    switch ($action) {
        case 'getjsondata':
            getjsondata();
            break;

        case 'editjsondata':
                editjsondata();
                break;

        case 'updatejsondata':
                updatejsondata();
                break;
    }
}
/*
if(is_ajax())
 {
    echo json_encode("Method");
    if(isset($_POST['method']) && !empty($_POST['method'])){
        
        $action = $_POST['method'];
        switch($action){
            case "getjsondata" : getjsondata();
                                break;


        }
    }
 } */
function is_ajax() {

    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}


function getjsondata(){
   $pdo = Dbconnect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $author= $_REQUEST['author'];
    $query = "Insert into posts(author) values(:author)";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['author'=>$author]);

    echo json_encode("Success");
}

function editjsondata(){

    $pdo = Dbconnect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id= $_REQUEST['editid'];
    $query = "Select * from posts Where id Like :id";
    $stmt = $pdo->prepare($query);
       $stmt->execute(['id'=>$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($result);
}

function updatejsondata(){
    $pdo = Dbconnect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id= $_REQUEST['editid'];
    $author= $_REQUEST['author'];
    $query = "UPDATE posts SET author =:author WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['id'=>$id, 'author'=>$author]);
    echo json_encode("Success");
}

?>