<div>
    <?php require __DIR__ . '/parts/connect_db.php';
    // exit; // 關閉功能
    echo microtime(true) . "<br>";
    exit;

    $lname = ['陳', '林', '李', '吳', '王'];
    $fname = ['小明', '小華', '雅玲', '怡君', '大頭'];


    $sql = "INSERT INTO `test`(
   `name`, `birthday`, `mobile`, 
    `address`, `mail`, `created_at`
    ) VALUES (
        ?, ?, ?,
        ?, ?, NOW()
    )";

    $stmt = $pdo->prepare($sql);

    for ($i = 0; $i < 1000; $i++) {   
        shuffle($lname);
        shuffle($fname);
        $ts = rand(strtotime('1980-01-01'), strtotime('1995-12-31'));
        $stmt->execute([
            $lname[0] . $fname[0],
            date('Y-m-d', $ts),
            '0987' . rand(100000, 999999),
            '南投市',
            "ming{$i}@test.com",   
        ]);
    }

    echo microtime(true) . "<br>";
    ?>
</div>