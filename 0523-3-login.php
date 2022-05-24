<?php
    session_start();
$users = [
    "ming"=>[
        'password'=>'1234',
        'nickname'=>'QQ',
    ],
    "two"=>[
        'password'=>'5678',
        'nickname'=>'哈哈',
    ]
];

$output= [
    'postData'=>$_POST,
];

// isset只判斷有無設定，不管是否有值
// 先判斷欄位
if(isset($_POST['account'])){
    
    // echo json_encode($_POST);
    // exit;
    // 會立刻停止php程式執行，後面就不會再執行

    // 判斷帳號密碼是否都有值，有的話才進行下一步
    if(!empty($_POST['account']) and !empty($_POST['password'])){
        if(!empty($users[$_POST['account']])){
            if($_POST['password']===$users[$_POST['account']]['password']){
                $output['msg']='登入成功';
                echo json_encode($output);
                exit;
            }else{
                $output['msg']='帳號對，密碼錯';
                echo json_encode($output);
                exit;
            }
        }else{
            $output['msg']='帳號錯誤';
            echo json_encode($output);
            exit;
        }
    }else{
        $output['msg']='其中有一欄沒有填';
        echo json_encode($output);
        exit;
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="account" placeholder="帳號">
        <br>
        <input type="password" name="password" placeholder="密碼">
        <br>
        <button>登入</button>



    </form>
</body>
</html>