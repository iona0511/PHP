<?php
header("Content-Type:text/plain");

$ar =[
    'name'=>'小新',
    'age'=> 19,
    'gender'=>[1,4,6]
];

foreach($ar as $k=>$v){
    if(is_array($v))$v=implode(',',$v);
    echo "$k:$v<br>";
};

