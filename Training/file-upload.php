<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>File Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php 
$display = "none";
$path = $size = $type = "";
if(isset($_POST['upload'])){

    if($_FILES['file']['error'] > 0 ){
        echo "Please Upload a file";
    } else {

        $file_path = "img/";
        $target_file = $file_path.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
        



        $display = "inline-block";
    }
}
?>


<body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">

    <input type="file" name="file" id="">

    <input type="submit" value="Upload" name="upload">

        </form>

        <img src="<?php echo $target_file;?>" style="width:200px;  height:200px; display: <?php echo $display?>;"> <br>
        <?php echo $size;?>
        <?php echo " Type :- ".$type;?>
</body>
</html>