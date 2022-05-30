<?php

setcookie('mycookie','12345',time()+30);

echo $_COOKIE['mycookie'];
// local storage使用時機
// 資料的刪除＆新增要透過JAVASCRIPT,即使關機再開機，資料還是會存在，請評估資料的重要性，重要的再存入localstorage

// localstorage.key
// localstorage.length

// session storage只針對一個頁面做暫存，頁面關閉後，資料就會消失

// cookie的特性
// 1.以網域為單位
// 2.user可看到並設定cookie
// 3.有期限,過期就會失效
// 4.一般來說都從server端設定
// 5.只能存放字串
// 6.內容不要太多，一個網站最多4K

// 小專
// 管理者需要可以登入，CRUD
// 分別有存放商品的表,圖片的表,不要直接存放圖片在資料庫裡