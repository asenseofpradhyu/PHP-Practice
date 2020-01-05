<?php
    // Check for Posted Data

    // if(filter_has_var(INPUT_POST,'text')){
    //     echo "Data Found";
    // } else {
    //     echo "No Data";
    // }

// Check Email Address

        // if(filter_has_var(INPUT_POST,'text')){
        //     if(filter_input(INPUT_POST, 'text', FILTER_VALIDATE_EMAIL)){
        //         echo "Email is valid";
        //     } else {
        //         echo "Email is not valid";
        //     }
        // }

// Remove illegal Char


// if(filter_has_var(INPUT_POST,'text')){
//     $email = $_POST['text'];
//     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
//     echo $email.'<br>';

//     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
//         echo "Email is valid";
//     } else {
//         echo "Email is not valid";
//     }
// }



// $var = '12dsdsd1212';
// if(filter_var($var, FILTER_VALIDATE_INT)){
//     echo $var." is a number";
// } else {
//     echo $var." not is a number";
// }


// $var = '10asa29sa1d8a2d6a5';
// echo filter_var($var, FILTER_SANITIZE_NUMBER_INT);


$var = '<script>alert(1)</script>';
echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

// Data input Filter (filter_input_array)
// $filter = array(

//     "text"=> FILTER_VALIDATE_EMAIL,
//     "text2"=>array(
//         "filter"=>FILTER_VALIDATE_INT,
//         "options"=>array(
//             "min_range"=>15,
//             "max_range"=>30
//         )
//     )

// );

// print_r(filter_input_array(INPUT_POST, $filter));


// Data Input filter (filter_var_array)

// $arr = array(
//     "name"=>"pradhumansinh padhiyar",
//     "age"=>"35",
//     "email"=>"gmail@//gmail.com"
// );

// $filter = array(
//     "name"=>array(
//         "filter"=>FILTER_CALLBACK,
//         "options"=>"ucwords"
//     ),
//     "age"=>array(
//         "filter"=>FILTER_VALIDATE_INT,
//         "options"=>array(
//             "min_range"=>15,
//             "max_range"=>30
//         )
//     ),
//     "email"=>FILTER_VALIDATE_EMAIL,
//     );


//     print_r(filter_var_array($arr, $filter));





?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Filter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    
    <input type="text" name="text" id="text" placeholder="Email">
    <input type="text" name="text2" id="text2" placeholder="Age">
    <button type="submit">Submit</button>
    
    </form>

</body>
</html>