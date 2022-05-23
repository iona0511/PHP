<?php

$db_host = 'localhost';// 設定主機名稱

$db_user = 'root';// 資料庫連線的用戶帳號

$db_pass = '';// 連線用戶的密碼，如果是用root就沒有密碼，用空字串''

$db_name = 'side_project';// 資料庫名稱,如果給空字串，代表沒有選定特定的資料庫


$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8mb4";

$pdo = new PDO($dsn, $db_user, $db_pass);