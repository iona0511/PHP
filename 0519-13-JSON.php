<?php
header("Content-Type:text/plain");

$ar =[
    'name'=>'小新',
    'age'=> 19,
    'gender'=>[1,4,6]
];

echo json_encode($ar,JSON_UNESCAPED_UNICODE);