<?php
header('Content-Type: application/json');

$folder = __DIR__ . '/uploaded/';

$extMap =[
    'image/jpeg'=>'.jpg',
    'image/png'=>'.png',
    'image/gif'=>'.gif',
];

$output=[
'success'=>false,
'filename'=>'',
'error'=>'',
];

if(empty ($_FILES['avatar'])){
    $output['error'] = '沒有上傳檔案';
    echo json_encode($output,JSON_UNESCAPED_UNICODE);
    exit;
};
if(empty($extMap[$_FILES['avartar']['type']])){
    $output['error'] = '檔案類型錯誤';
    echo json_encode($output,JSON_UNESCAPED_UNICODE);
    exit;
};
$ext = $extMap[$_FILES['avartar']['type']];
$filename = md5($_FILES['avartar']['name'].rand()).$ext;
$output['filename'] = $filename;

if(move_uploaded_file($_FILES['avatar']['tmp_name'], $folder. $filename)){
    $output['success'] = true; 
}else{
    $output['error'] = '無法搬動檔案';
}

echo json_encode($output);

