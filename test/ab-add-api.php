<?php
require __DIR__ . '/parts/connect_db.php';
header('Content-Type: application/json');

$output = [
    'success' => false,
    'postData' => $_POST,
    'code' => 0,
    'error' => ''
];

// TODO: 欄位檢查, 後端的檢查
if (empty($_POST['name'])) {
    $output['error'] = '沒有姓名資料';
    $output['code'] = 400;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$name = $_POST['name'];
$birthday = empty($_POST['birthday']) ? NULL : $_POST['birthday'];
$mobile = $_POST['mobile'] ?? '';
$address = $_POST['address'] ?? '';
$mail = $_POST['mail'] ?? '';

if (!empty($mail) and filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
    $output['error'] = 'mail 格式錯誤';
    $output['code'] = 405;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}
// TODO: 其他欄位檢查


$sql = "INSERT INTO `test`(
    `name`, `birthday`, `mobile`, 
    `address`, `mail`, `created_at`
    ) VALUES (
        ?, ?, ?,
        ?, ?, NOW()
    )";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $name,
    $birthday,
    $mobile,
    $address,
    $mail,
]);


if ($stmt->rowCount() == 1) {
    $output['success'] = true;
    // 最近新增資料的 primery key
    $output['lastInsertId'] = $pdo->lastInsertId();
} else {
    $output['error'] = '資料無法新增';
}
// isset() vs empty()


echo json_encode($output, JSON_UNESCAPED_UNICODE);
