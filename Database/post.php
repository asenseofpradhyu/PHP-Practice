<?php
require('config/config.php');
require('config/Db.php');

if(isset($_POST['delete'])){
        
    // Get Data
    $delete_id = mysqli_real_escape_string($con, $_POST['delete_id']);

    $query_insert = "DELETE FROM blogdata WHERE id = {$delete_id}";

    if(mysqli_query($con, $query_insert)){
        header('Location: '.ROOT_URL.'');
    } else {
        echo "ERROR: ".mysqli_error($con);
    }
}
// Get Id
$id = mysqli_real_escape_string($con, $_GET['id']);

// Query
$query  = 'select * from blogdata WHERE id = '.$id;

// Get Result
$result = mysqli_query($con, $query);

// Fetch Data
$post = mysqli_fetch_assoc($result);

// var_dump($post);
// Free Result
mysqli_free_result($result);


// Close
mysqli_close($con);
?>
<?php include('config/header.php');?>
    <div class="container">
    <a href="<?php echo ROOT_URL;?>" class="btn btn-primary">Back</a>
    <h1><?php echo $post['title'];?></h1>
                    <small><?php echo $post['author'];?></small>
                    <p> <?php echo $post['body'];?></p>
                    <hr>
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="pull-right">
                            <input type="hidden" name="delete_id" value="<?php echo $post['id'];?>">
                            <input type="submit" value="Delete" class="btn btn-danger" name = "delete">
                        </form>
                    <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id'];   ?>">Edit</a>
    </div>

<?php include('config/footer.php');?>