<?php
require __DIR__ . '/0523-connect-db.php';
// require跟inclue的功能是一樣的

// statement取資料的代理物件
$statememt = $pdo->query("SELECT * FROM test LIMIT 5");

// 一筆一筆取資料
while($r= $statememt->fetch()){
    echo "{$r['name']}<br>{$r['birthday']}<br>{$r['mobile']}<br>";
}
