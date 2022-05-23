<?php
header("Content-Type:text/pain");

$ar =[];

for($i=0;$i<10;$i++){
    $ar[]=rand(1,99);
};

foreach($ar as $v){
    echo "$v<br>";
};