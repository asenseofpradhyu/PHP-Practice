<?php

        // Error Messages
        $error_text='';
        $error_class='';

    if(filter_has_var(INPUT_POST, 'submit')){
       
     //Data Variable
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $msg = htmlspecialchars($_POST['message']);

    if(!empty($name) && !empty($email) && !empty($msg)){
        // Passed
        if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
            // Failed
            $error_text='Enter Valid Email';
            $error_class = 'alert-danger';
        }
    }       else {
        // Passed
        $toemail = 'Pradhu619@gmail.com';
        $subject='Contact Request Form: '.$name;
        $body='<h2>Contact Request</h2>
        <h4>Name: </h4><p>'.$name.'</p>
        <h4>Email: </h4><p>'.$email.'</p>
        <h4>Name: </h4><p>'.$msg.'</p>';

        // EMail Header
        $headers = "MIME-VERSION:1.0"."\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";

        // Additional Headers
        $headers.= "Form:".$name."<".$email.">"."\r\n";

        // Send Mail 
        if(mail($tomail, $subject, $body, $headers)){

            $error_text="Your Mail has been Send";
            $error_class="alert-success";

        } else {
            $error_text='Your Mail not been send';
            $error_class='alert-danger';
        }
        
    }
        
    } else {
        //Failed
    }
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navigation bar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>
  </nav>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <?php if($error_text!=''): ?>

    <div class=" alert <?php echo $error_class?>"> <?php echo $error_text; ?> </div>

        <?php endif; ?>

        <input type="text" name="name" placeholder="Full Name" value="<?php echo isset($_POST['name']) ? $name : ''?>" style="margin-bottom:10px; margin-left:30px;margin-top:10px;"><br>

        <input type="text" name="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? $email : ''?>"  style="margin-bottom:10px; margin-left:30px;"><br>

        <textarea name="message" id="msg" style="margin-bottom:10px; margin-left:30px;">
        <?php echo isset($_POST['message']) ? $msg : ''?>
        </textarea><br>

        <input type="submit" name="submit" value="Submit" style="margin-bottom:10px; margin-left:30px;">
    
    </form>

  
</body>
</html>