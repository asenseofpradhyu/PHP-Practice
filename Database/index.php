<?php
require('config/config.php');
require('config/Db.php');

// Query
$query  = 'select * from blogdata';

// Get Result
$result = mysqli_query($con, $query);

// Fetch Data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

// var_dump($posts);
// Free Result
mysqli_free_result($result);


// Close
mysqli_close($con);
?>

<?php include('config/header.php');?>

    <div class="container">
    <h1>Posts</h1>
        <?php foreach((array)$posts as $post) :?>
                <div class="well">
                    <h3><?php echo $post['title'];?></h3>
                        <small><?php echo $post['author'];?></small>
                    <p><?php echo $post['body'];?></p>
                    <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id'];?>">Read More</a>
                </div>
        <?php endforeach; ?>
    </div>
<?php include('config/footer.php');?>