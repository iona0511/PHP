<?php
header("Cpntent-Type:text/plain");

$str='{"name":"小白","age":19,"gender":"male","date":[1,4,6]}';

// json_decode就是轉換成php的原生類型
$a=json_decode($str,true); // 關聯式陣列
$b=json_decode($str);


print_r($a);
// Array ( [name] => 小白 [age] => 19 [gender] => male [date] => Array ( [0] => 1 [1] => 4 [2] => 6 ) ) 

var_dump($b);
// object(stdClass)#1 (4) { ["name"]=> string(6) "小白" ["age"]=> int(19) ["gender"]=> string(4) "male" ["date"]=> array(3) { [0]=> int(1) [1]=> int(4) [2]=> int(6) } } 小白

echo $b->name; // 小白