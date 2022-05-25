<?php
require __DIR__ . '/parts/connect_db.php';
header("Content-Type:application/json");
// 這個header是postman新增資料時加的
// 把要傳給前端的東西，用陣列包起來
$output = [
    'success' => false,
    'postData' => $_POST,
    'code'=> 0,
    'error' => ''
];
// TODO: 欄位檢查，這裡是做後端的檢查
// PK key不用給
// TODO: 欄位檢查, 後端的檢查

if (empty($_POST['name'])) {
    $output['error'] = '沒有姓名資料';
    $output['code'] = 400;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}


$name = $_POST['name'];
$mail = $_POST['mail'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$birthday = empty($_POST['birthday']) ? NULL : $_POST['birthday'];
$address = $_POST['address'] ?? '';

// FILTER_VALIDATE_EMAIL是用來檢查mail格式是否正確
if (!empty($mail) and filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
    $output['error'] = 'mail 格式錯誤';
    $output['code'] = 405;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$sql = "INSERT INTO `test`(
    `name`, `birthday`, `mobile`, 
    `address`, `mail`, `created_at`
    ) VALUES (
        ?, ?, ?,
        ?, ?, NOW()
    )";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_POST['name'],
    empty($_POST['birthday']) ? NULL : $_POST['birthday'],
    $_POST['mobile'],
    $_POST['address'],
    $_POST['mail'],
]);


if ($stmt->rowCount() == 1) {
    $output['success'] = true;
    // 最近新增資料的 primery key
    $output['lastInsertId'] = $pdo->lastInsertId();
} else {
    $output['error'] = '資料無法新增';
}
// isset() vs empty()


// 透過ajax和前端溝通
echo json_encode($output, JSON_UNESCAPED_UNICODE);


