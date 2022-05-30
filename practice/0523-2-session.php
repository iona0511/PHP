<?php

// 判斷session有無啟動
if(!isset($_SESSION)){
    session_start();
}

echo $_SESSION['a'];

// session可放php的原生類型
// cookie只能放字串
