<?php 

    require('config/config.php');
    require('config/Db.php');

    if(isset($_POST['submit'])){
        
        // Get Data
        $update_id = mysqli_real_escape_string($con, $_POST['update_id']);
        $title = mysqli_real_escape_string($con, $_POST['title']);
        $author = mysqli_real_escape_string($con, $_POST['author']);
        $body = mysqli_real_escape_string($con, $_POST['body']);

        $query_insert = "UPDATE blogdata SET
                         title = '$title',
                         author = '$author',
                         body = '$body'
                         WHERE id = {$update_id}";

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

        // var_dump($posts);
        // Free Result
        mysqli_free_result($result);


        // Close
        mysqli_close($con);
?>

<?php 
    include('config/header.php');
?>

    <div class="container">
        <h1>Edit Post</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $post['title'];?>">
                </div>
                <div class="form-group">
                    <label for="">Author</label>
                    <input type="text" name="author" class="form-control" value="<?php echo $post['author'];?>">
                </div>
                <div class="form-group">
                    <label for="">Body</label>
                    <textarea name="body" class="form-control"><?php echo $post['body'];?></textarea>
                </div>
                <input type="hidden" name="update_id" value="<?php echo $post['id'];?>">
                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
            </form>
    </div>