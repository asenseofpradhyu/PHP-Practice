<?php 


    if(isset($_POST['like'])){
       

        if(isset($_COOKIE['like'])){
            $val = $_COOKIE['like'];
            $val++;
            setcookie('like', $val,time() + 3600);
            echo $_COOKIE['like'];
        } else {
            setcookie('like', 0, time()+3600);
            echo $_COOKIE['like'];
        }

        
    } 

    if(isset($_POST['dislike'])){
        if(isset($_COOKIE['like'])){
            $val = $_COOKIE['like'];
            $val-=1;
            setcookie('like', $val,time() + 3600);
            echo $val;
        }   
     }




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Like Button</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">


        <button type="btn" value="like" name="like">Like</button>
        <button type="btn" value="dislike" name="dislike">Dislike</button>
    
    </form>
    
</body>
</html>