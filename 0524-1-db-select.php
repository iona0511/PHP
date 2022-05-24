<?php
require __DIR__ . '/0523-connect-db.php';
// require跟inclue的功能是一樣的

// 取資料的代理物件
// limit後面只加一個數字，代表取的筆數
// 加兩個數字，第一個是索引，第二個是取的筆數
$statememt = $pdo->query("SELECT * FROM test LIMIT 10");

// 一般是關聯式陣列
// fetch是取出一筆，fetch all是取出limit中的全部
// $row = $statememt->fetch(PDO::FETCH_NUM); // 以索引式陣列的格式取得資料
$rows = $statememt->fetchAll(); // 取出recordSet所有資料
echo json_encode($rows);

// fetch是一筆一筆拿




