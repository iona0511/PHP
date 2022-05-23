<?php
session_start();

$users = [
    "ming"=>[
        'password'=>'1234',
        'nickname'=>'QQ'
    ],
    "two"=>[
        'password'=>'5678',
        'nickname'=>'哈哈'
    ]
];

$output= [
    'postData'=>$_POST,
];


// 先判斷欄位
if(isset($_POST['account'])){
    
    // echo json_encode($_POST);
    // exit;
    // 會立刻停止php程式執行，後面就不會再執行



    // 在判斷是否都有值
    if(!empty($_POST['account']) and !empty($_POST['password'])){
        if(!empty($users[$_POST['account']])){
            
            if($_POST['password']===$users[$_POST['account']]['password']){
                 $_SESSION['user']=[
               'account'=> $_POST['account'],
               'nickname'=> $_users[$_POST['account']]['nickname'],
           ];
            }
        }
    }
    if (!isset($_SESSION['user'])) {
        $error_msg = '帳號或密碼錯誤';
    }
}

?>

<!-- 可以透過session來限定登入錯誤的次數 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_SESSION['user'])):?>
        <h2><?= $_SESSION['user']['nickname'] ?>您好</h2>
        <p><a href="0523-5-loginout.php">登出</p>
    <?php else:?>
        <?php if(isset($error_msg)):?>
            <div style="color:red"><?=$error_msg?></div>
        <?php endif; ?>

    <form action="" method="post">
        <input type="text" name="account" placeholder="帳號">
        <br>
        <input type="password" name="password" placeholder="密碼">
        <br>
        <button>登入</button>

            <?php endif;?>

    </form>
</body>
</html>