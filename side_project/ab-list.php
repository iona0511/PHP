<?php require __DIR__ . '/parts/0523-connect-db.php';

$perpage = 5;

// 用戶要看第幾頁
$page = isset($_GET['page'])? intval($_GET['page']):1; 
if($page<1){
    // 用戶看的頁數小於1，就轉向
    header('Location: ?page=1');
    exit;
}

$t_sql = "SELECT COUNT(1) FROM member_center";
                                    // 索引式陣列
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0]; // 總筆數   這
$totalPages = ceil($totalRows/$perpage); // 總頁數

$rows =[];

if($totalRows>0){
    if($page>$totalRows){
        header("Location: ?page=$totalPages");
        exit;
    }
    $sql = sprintf("SELECT * FROM member_center LIMIT %s,%s",($page-1)* $perpage,$perpage);
    // 索引／筆數
    $rows = $pdo->query($sql)->fetchAll();
}
?>
<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>

<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
                    </li>
                    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                        <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                    <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">姓名</th>
                <th scope="col">生日</th>
                <th scope="col">手機</th>
                <th scope="col">地址</th>
                <th scope="col">電子信箱</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $r) : ?>
                <tr>
                    <td><?= $r['sid'] ?></td>
                    <td><?= $r['name'] ?></td>
                    <td><?= $r['birthday'] ?></td>
                    <td><?= $r['mobile'] ?></td>
                    <td><?= $r['address'] ?></td>
                    <td><?= $r['email'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>

<?php include __DIR__ . '/parts/scripts.php' ?>
<?php include __DIR__ . '/parts/html-foot.php' ?>