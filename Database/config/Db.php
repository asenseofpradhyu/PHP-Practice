<?php 
$con= mysqli_connect('localhost','pradhuman','12345','phpblog');

if(mysqli_connect_errno()){
    echo 'Failed to Connect to Database '.mysqli_connect_errno();
}
?>