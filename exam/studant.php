
<?php

class MyFile{

    function __construct($gid){
        $file= 'mytext.txt';
        $fh= fopen($file, 'r');
        while(!feof($fh)){
            $data= fgets($fh);
            $arr=explode(',',$data);
            $id= $arr[0];
            if($gid==$id){
                echo $data;
            }
            
        }  
        
        fclose($fh);
    }
}
$obj =new MyFile(1);

?>