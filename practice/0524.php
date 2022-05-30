<?php require __DIR__ . '/parts/0523-connect-db.php';

// <!-- 自己定一個pagename -->
$pageName = 'index';
$title = '首頁-小新的網站';

?>


<!--以下是HTML -->
<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>
<div class="container">
<h2>HOME</h2>
<p><?= $pdo->quote("Alice's cats") ?></p>
</div>
<?php include __DIR__ . '/parts/scripts.php' ?>
<?php include __DIR__ . '/parts/html-foot.php' ?>

<!-- prepare &ececute 會自動跳脫sql的字元 -->