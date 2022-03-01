<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <p>
        <input type="text" name="email" placeholder="email here">
        <input type="password" name="pass" placeholder="password here">
    </p><br>
    <input type="submit" value="Submit">
</form>
<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
       
       
        if($_POST['email']=='' && $_POST['pass']==''){
            echo "Email and Password must fill up...!";
        }else{
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $errors= array();
            if(filter_var($email, FILTER_VALIDATE_EMAIL)==true){
               
            }else{
                $errors[]= "Your have put an invalid email address..!";
            }
            if(strlen($pass)<5 || strlen($pass)>10){
                $errors[]="Password lenth must be 5 to 10..!";
            }
            if(empty($errors)){
                echo "All data are valid";
            }else{
                foreach($errors as $err){
                    echo "<h2>$err</h2>";
                }
            }
        }
    }


?>


</body>
</html>