<?php 

    require('config/config.php');
    require('config/Db.php');

    if(isset($_POST['submit'])){
        
        // Get Data
        $title = mysqli_real_escape_string($con, $_POST['title']);
        $author = mysqli_real_escape_string($con, $_POST['author']);
        $body = mysqli_real_escape_string($con, $_POST['body']);

        $query_insert = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

        if(mysqli_query($con, $query_insert)){
            header('Location: '.ROOT_URL.'');
        } else {
            echo "ERROR: ".mysqli_error();
        }
    }
?>

<?php 
    include('config/header.php');
?>

    <div class="container">
        <h1>Add Post</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Author</label>
                    <input type="text" name="author" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Body</label>
                    <textarea name="body" class="form-control"> </textarea>
                </div>
                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
            </form>
    </div>