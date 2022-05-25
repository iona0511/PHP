<?php require __DIR__ . '/parts/connect_db.php';

/*
$sql = "INSERT INTO `address_book`(
    `name`, `email`, `mobile`, 
    `birthday`, `address`, `created_at`
    ) VALUES (
        '李小明', 'ming@test.com', '0918123456',
        '1987-11-23', '南投市', NOW()
    )";
$stmt = $pdo->query($sql);
*/

// 避免 SQL injection (SQL 隱碼攻擊)
// 問號必須對應欄位！
$sql = "INSERT INTO `test`(
    `name`, `birthday`, `mobile`, 
    `address`, `mail`, `created_at`
    ) VALUES (
        ?, ?, ?,
        ?, ?, NOW()
    )";

// 資料如果是從外面來（用戶端）的話，一律用prepare搭配execute， 不要直接用sql執行
$stmt = $pdo->prepare($sql);
// prepare &execute讓字元跳脫

// execute才是真正的執行
$stmt->execute([
    "李小明's pen",
    '1987-11-23',
    '0918123456',
    '南投市',
    'ming@test.com',
]);

// 會拿到新增、更新、刪除的筆數
echo $stmt->rowCount();
