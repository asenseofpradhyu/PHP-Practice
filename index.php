<?php
    // Update Cookie
    setcookie('name', 'Frank', time()+3600);

    // Delete cookie
    setcookie('name', 'Frank', time()-3600);

    // Set Cookie In Array
    $user = array('name'=>'Hello', 'age'=> 20, 'email'=> 'test@test.com');

    $user = serialize($user);

    setcookie('user', $user, time()+3600);

    $user = unserialize($_COOKIE['user']);
    
    echo $user['name'];
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php if(isset($_COOKIE['name'])) :?>
        <h1>Hello <?php echo 'Cookie is set for ' .$_COOKIE['name']; ?></h1>
<?php endif; ?>

    <?php if(!isset($_COOKIE['name'])) :?>
    <h1>Cookie not set</h1>

    <?php endif; ?>

</body>
</html>