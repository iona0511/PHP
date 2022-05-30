<?php
header("Cpntent-Type:text/plain");

class Person{


    // 屬性宣告
    static private $count = 0; // 靜態屬性
    var $name;
    public $mobile;
    private $sno = 'secret';
    // 建構函式定義
    function __construct($name='',$mobile='')
{   
    Person::$count++;
    $this->name=$name;
    $this->mobile=$mobile;
}
    // 方法定義
    static function count(){
        return Person::$count;
    }
}

$p1 = new Person;
$p1->name = 'QQQQ';
$p1->mobile = '09878787';
echo "{$p1->name} \n";
// echo "{$p1->sno} \n";     // 會發生錯誤

$p2 = new Person('Johnnnnnn','324324749385');
var_dump($p2);


// 呼叫靜態的方法(前提是function裡面不能用到$this)
// Person::count();


$p3 = new Person();
echo "共有".Person::count()."人\n";