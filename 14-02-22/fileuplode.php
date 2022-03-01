<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit">
    </form>
    <?php
    if (isset($_FILES["myfile"])){
        $errors = array();
        $file_name = $_FILES['myfile']['name'];
        $file_size = $_FILES['myfile']['size'];
        $file_tmp = $_FILES['myfile']['tmp_name'];
        $file_type = $_FILES['myfile']['type'];

        $ext = explode('.',$file_name);
        $exts = strtolower(end($ext));
        $mach = array('txt','jpg','png','jpeg');
        if (in_array($exts,$mach)===false){
            $errors[]='extantion not allowed,please choose txt,jpg,png,jpeg file';
        }
        if($file_size > 4194304){
            $errors[]='uploded file maximum 4 mb';
        }
if(empty($errors)==true){
    move_uploaded_file($file_tmp,'img/g.jpg');
    echo "uploded Successfully";
   
}
else{
    print_r($errors);
}
    }
    ?>
     <img src="img/g.jpg" alt="" width="500">
</body>
</html>