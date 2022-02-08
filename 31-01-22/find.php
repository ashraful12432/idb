<?php
class myfile{
      public function find($fid){

      $fh = fopen("file.txt",'r');
      while (!feof($fh)){
          $data = fgets($fh);
          $out = explode(",",$data);
          $info = $out[0];
          if ($fid ==$info){
            echo $data . "<br>";
          }

         
      }
    }
  }
  $object = new myfile();
  $object->find(6);
?>