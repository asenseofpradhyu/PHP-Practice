<?php

if(isset($_POST['submit'])){
    echo "<pre>";

    // Use this print_r function to check the $_FILES Array;
    print_r($_FILES);

    // File upload Location
    $saveAt = "img/".basename($_FILES["fileupload"]["name"]);

    // get file extension
    $extension = pathinfo($saveAt, PATHINFO_EXTENSION);



    if($_FILES['fileupload']['size'] > 500000){
        
        // File Upload limit size use in bytes
        echo "File limit is less than 500KB";

    } else if($extension != "png" && $extension != "jpg" && $extension != "jpeg"){
        // Restrict the file upload
        echo "Only Image file can be uploaded";

    } else if(file_exists($saveAt)){

        // check for file exist in folder using its name
        echo "File Already Exists !!";

    } else if(move_uploaded_file($_FILES['fileupload']['tmp_name'], $saveAt)){

        // upload the file from temp folder to targeted folder
        echo "File Uploaded";
    }

}


?>

<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">

    <input type="file" name="fileupload" id="file">
    <input type="submit" value="Submit" name="submit">

    </form>
</body>
</html>