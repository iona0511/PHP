<div>
    <?php require __DIR__ . '/parts/0523-connect-db.php';
    // DIR是程式在磁碟中的位置
    
    exit;
    // 怕下次再點開來又新增一堆資料，先加個exit;

    echo microtime(true) . "<br>";


    $lname = ['李','林','陳','黃','張','謝',];
    $fname = ['小白','小黑','小黃','小菊','小輝','小小',];

    $sql = "INSERT INTO `member_center`(`name`, `birthday`, `mobile`, `address`, `email`, `account`, `password`, `membership_level`, `coupon`, `food_order`, `course_order`, `merchandise＿order`, `created_at`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,NOW())";

    $statement = $pdo->prepare($sql);



    for($i=0;$i<100;$i++){
        shuffle($lname);
        shuffle($fname);
        $ts = rand(strtotime('1900-1-1'),strtotime('2022-05-11'));
        $statement -> execute([$lname[0].$fname[0],date('Y-m-s',$ts),'0987' . rand(100000,999999),'台北',"{$i}@gmail.com",'1','1','1','1','1','1','1',

        ]
        );
    }

    echo microtime(true)."<br>";
    ?>
</div>

