<?php
//declaring names array
$names=array("Ram", "Sita", "Gita", "Ramesh", "Manisha");
echo $names[2]; //print Gita

//prinint all names at once
foreach($names as $n){
    echo  $n."<br>";
}
echo "================";

for($i=0;$i<count($names);$i++){
    echo  $names[$i]."<br>";
}


//associative array
$names=array("Ram"=>35, "Sita"=>30, "Gita"=>36, "Ramesh"=>69, "Manisha"=>16);

echo $names["Gita"];
echo "===================<br>";
var_dump($names);
echo "<br>";
foreach($names as $k=>$v){
    echo $k."  is  ".$v . " years old <br>";
}


//multidimension array
$names=array(
    "Ram"=>array("age"=>34, "Zodic"=>"Leo", "color"=>"white"),
    "sita"=>array("age"=>45, "Zodic"=>"Libra", "color"=>"Black"),
    "Manish"=>array("age"=>25, "Zodic"=>"Libra", "color"=>"White")
);

echo "We have ".count($names). "Members <br>";
foreach($names as $n=>$v){
    echo $n."<br>";
    foreach($v as $k=>$j){
        echo $k. " = " . $j . " ";
    }
    echo "<hr>";
}


?>