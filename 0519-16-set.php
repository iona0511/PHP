<?php
$output = [];
$ar1=[
    'name'=>'bill',
    'age'=>18,
];

$ar2=$ar1; // 設定值，copy ar1 
$ar3=&$ar1;// & 是設定位址（參照）

$ar1['name']='QQ';

$output['ar1'] = $ar1;
$output['ar2'] = $ar2; 
$output['ar3'] = $ar3;

$a=10;
$b=&$a;
$a=99;
$output['b']=$b;

echo json_encode($output,JSON_UNESCAPED_UNICODE);