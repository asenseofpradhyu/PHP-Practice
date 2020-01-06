<?php 

    





?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Array Swapping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    
        <label for="">Box 1:
        
        <select name="box1" multiple>
        <option value="Apple">Apple</option>
        <option value="Orange">Orange</option>
        <option value="Mango">Mango</option>
        <option value="Grapes">Grapes</option>
        <option value="Pineapple">Pineapple</option>
        </select>

        </label> <br><br>

        <label for="">Box 2:
        
        <select name="box1" multiple>
        <option value="Lion">Lion</option>
        <option value="Tiger">Tiger</option>
        <option value="Wolf">Wolf</option>
        <option value="Elephant">Elephant</option>
        <option value="Bear">Bear</option>
        </select>

        </label> <br><br>


        <input type="submit" value="Swap to Box-2" name="swap_to_box2">
        <input type="submit" value="Swap all to Box-2" name="swap_all_box2">
        <input type="submit" value="Swap to Box-1" name="swap_to_box1">
        <input type="submit" value="Swap all to Box-1" name="swap_all_box1">

    
    </form>


</body>
</html>