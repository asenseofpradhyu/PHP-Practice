<?php 
$con= mysqli_connect('localhost','root','','phpblog');

if(mysqli_connect_errno()){
    echo 'Failed to Connect to Database '.mysqli_connect_errno();
}
?>