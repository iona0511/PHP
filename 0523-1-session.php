<?php

session_start();
// 要放在HTML內容出現之前
// 為了設定cookie

if(!isset($_SESSION['a'])){

    $_SESSION['a']= 0;
}
// 判斷有無設定

$_SESSION['a']++;
echo $_SESSION['a'];

// session的運作都在後端
// 所有資料都是存在server端