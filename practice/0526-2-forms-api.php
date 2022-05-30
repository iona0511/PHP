<?php

$output = [
    'postData' => $_POST,
];

$json = json_encode($output, JSON_UNESCAPED_UNICODE);
file_put_contents('./0526-2-forms-api.json', $json);  // JSON 字串存成檔案

echo $json;
// 把用戶傳來的資料,轉換成json,存成檔案



// f
// 取得資訊
// 檔案存取權限
// 讓所有人可以讀跟寫




