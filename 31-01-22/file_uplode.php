<?php
   if(isset($_FILES['myfile'])){
      $errors= array();
      $file_name = $_FILES['myfile']['name'];
      $file_size =$_FILES['myfile']['size'];
      $file_tmp =$_FILES['myfile']['tmp_name'];
      $file_type=$_FILES['myfile']['type'];

       $ext = explode('.',$file_name);
       $ext = strtolower(end($ext));
    //   $file_ext=explode('.',$_FILES['myfile']['name']);
    //   $file_ext=strtolower(end($file_ext));
      
      $exts= array("jpeg","jpg","png");
      
      if(in_array($ext,$exts)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo " uploded Successfully <br><br>";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="myfile" />
         <input type="submit"/>
      </form>
      
   </body>
</html>
