<?php
$students = array (
    array ("id"=>1267744,"name"=>"asraful","mcq"=>40,"descriptive"=>37,"evidance"=>30),
    array ("id"=>1267743,"name"=>"fehore","mcq"=>'28',"descriptive"=>40,"evidance"=>40),
);
foreach($students as $student => $value){
    $sh = $value['mcq']+$value['descriptive'];
    if ($sh>=70 && $value ['evidance']>=30){
        $result = "pass";
    }
    else{
        $result = "fail";
    }
    echo "<pre>";
    echo $value['name'].":".$sh."(".$result.")";
    
}
