<?php


$country = array("China"=>"Beijing","Maldives"=>"Malé","Nepal"=>"Kathmundu","Bangladesh"=>"Dhaka","Argentina"=>"Buenos Aires");
ksort($country);
foreach($country as $key=>$value){
    echo "Country : ".$key." Capital: ".$value ."<br>";
}