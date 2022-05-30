<?php
header('Content-Type: application/json');

$folder = __DIR__. '/uploaded/';

// 只能移動上傳的檔案 
move_uploaded_file($_FILES['myfile']['tmp_name'], $folder . $_FILES['myfile']['name']);

echo json_encode($_FILES);







// {
//     "myfile": {
//         "name": "coffee-g0d5529a14_1920.jpg",
//         "type": "image/jpeg",
//         "tmp_name": "/Applications/XAMPP/xamppfiles/temp/phpXbkrv1",
//         "error": 0,
//         "size": 559798
//     }
// } 