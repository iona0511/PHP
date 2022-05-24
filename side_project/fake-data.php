<?php require __DIR__ . '/parts/0523-connect-db.php';

// 資料如果是從外面來的話，一律用prepare搭配execute， 不要直接用sql執行
// $sql= "INSERT INTO `member_center`(`name`, `birthday`, `mobile`, `address`, `email`, `account`, `password`, `membership_level`, `coupon`, `food_order`, `course_order`, `merchandise＿order`, `created_at`) VALUES ('李曉明','1991-05-11','0910-010-000','abc@','1','1','金','1','1','1','1','1',NOW())";
// $statement = $pdo->query($sql);


$sql = "INSERT INTO `member_center`(`name`, `birthday`, `mobile`, `address`, `email`, `account`, `password`, `membership_level`, `coupon`, `food_order`, `course_order`, `merchandise＿order`, `created_at`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,NOW())";

$statement = $pdo->prepare($sql);

$statement -> execute(["大名",'1990-10-12','09','台北','1','1','1','1','1','1','1','1',

]
);

echo $statement->rowCount();
// rowcount會拿到新增的筆數()


