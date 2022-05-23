<?php

session_start();

// session_destroy() 會清除所有的session，不建議使用

unset($_SESSION['user']);
// user移除陣列中某個元素
// 以這個例子來說，是移除'user'對應的值

// 轉向，redirect
header('Location:0523-4-login.php');


// status 302（http的狀態碼），有找到 轉向