<?php
    $host = 'localhost';
    $user = 'pradhuman';
    $password = '12345';
    $dbname = 'php_pdo';

    // Set DSN(Data Source Name)
    $dsn  = 'mysql:host='.$host.';'.'dbname='.$dbname;

    // Create Pdo Instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    # PDO QUERY

    // $stmt = $pdo->query('select * from posts');

    //Using Array
    // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){            //Override Is Possible 
    //     echo $row['title'].'<br>';
    // }  

    // Using Object
    // while($row = $stmt->fetch(PDO::FETCH_OBJ)){
    //     echo $row->title.'<br>';
    // }

    // Using Default as Set Attribute
    // while($row = $stmt->fetch()){
    //     echo $row->title.'<br>';
    // }


    # PREPARED STATEMENTS (Prepare & Execute)

    //   Unsafe Way 
    // $sql = 'SELECT * FROM POSTS WHERE AUTHOR = "$author"'; 

    // FETCH MULTIPLE POSTS

    // User Input
    // $author = 'First Author';
    // $id = 2;

    // 1.Positional Params

    // $sql = 'SELECT * FROM posts WHERE author = ?';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$author]);      //Should be in order with query
    // $posts = $stmt->fetchAll();     //Take Default Parameter(setattribute)



    // 2.Named Params
    // $sql = 'SELECT * FROM posts WHERE author = :author';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['author'=>$author]);      //Should be in order with query
    // $posts = $stmt->fetchAll();

    // // var_dump($posts);
    // foreach($posts as $post){
    //     echo $post->title.'<br>';
    // }   


    // FETCH SINGLE POST

    // $sql = 'SELECT * FROM posts WHERE id = :id';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['id'=>$id]);      //Should be in order with query
    // $posts = $stmt->fetch();

    // echo $posts->title;

    
    // INSERT DATA
    // $title = 'Php Practical';
    // $author = 'Hello World';
    // $body = 'Data is Inserted through PDO';

    // $sql = "INSERT INTO posts(title, author, body) VALUES(:title, :author, :body)";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['title'=>$title, 'author'=>$author, 'body'=>$body]);
    // echo 'Data Inserted';


    // UPDATE DATA
    // $id = 1;
    // $body = 'Body is Updated with PDO';

    // $sql = "UPDATE posts SET body = :body WHERE id = :id";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['body'=>$body, 'id'=>$id]);
    // echo "Data Updated";

     
    // DELETE DATA
    $id = 5;

    $sql = "DELETE FROM posts WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
    echo "Data Deleted";





?>