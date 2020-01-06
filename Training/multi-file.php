<?php 
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Multi-file Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    
    <input type="file" name="file" multiple="multiple">
    <input type="submit" value="Upload" name="upload" >    
    <input type="submit" value="View" name="View" >    
    
    </form>


<?php 
if(isset($_POST['View']))
{
    echo $_SESSION["file"]."<br>";
    for ($i=1; $i <= $_SESSION["counter"]; $i++) { 
            echo "<img height='100' width='100' src='".$_SESSION['s'.$i]."' />";
    }
}
if(isset($_POST['upload']))
{
    if(isset($_SESSION["counter"]))
    {
        $_SESSION["counter"] = $_SESSION["counter"] + 1;
    }
    else
    {
        $_SESSION['counter'] = 1;
    }
$file = "img/".$_FILES['file']['name'];
if($_SESSION['counter'] == 1)
{
    $_SESSION['file'] = $_SESSION["counter"]." . ".$_FILES['file']['name']." (".(($_FILES["file"]['size'])/1024)."kb) ";
}
else
{
    $_SESSION['file'] .= $_SESSION["counter"]." . ".$_FILES['file']['name']." (".(($_FILES["file"]['size'])/1024)."kb) ";
}
move_uploaded_file($_FILES['file']['tmp_name'] ,$file);

$_SESSION['s'.$_SESSION["counter"]] = $file;
echo $_SESSION["file"];
}


?>





</body>
</html>