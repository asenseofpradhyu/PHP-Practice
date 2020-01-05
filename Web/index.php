<?php include 'service_info.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">

    <!-- Server Info -->

    <h1>Server & File Info</h1>
    <?php if($server): ?>
    <ul class="list-group">
    <?php foreach($server as $key => $value) :?>

    <li class="list-group-item">

    <strong><?php echo $key;?>: </strong>
        <?php echo $value; ?>
    </li>

    <?php endforeach; ?>
     </ul>

    <?php endif; ?>

<br><br>

    <!-- Client Info -->

    <h1>Client & File Info</h1>
    <?php if($client): ?>
    <ul class="list-group">
    <?php foreach($client as $key => $value) :?>

    <li class="list-group-item">

    <strong><?php echo $key;?>: </strong>
        <?php echo $value; ?>
    </li>

    <?php endforeach; ?>
     </ul>

    <?php endif; ?>


</div>
    
</body>
</html>