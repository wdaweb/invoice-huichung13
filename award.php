<?php include_once "com/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./icon/piggy-bank.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
</head>
</head>

<body class="bg-light text-center">
    <div class="container py-5">

        <?php include "./include/header.php"; ?>
<h1 class="text-info pb-3">開　　獎</h1>
        <?php

        // if(empty($_GET)){
        //     echo "請選擇要對獎的項目<a href='invoice.php'>各期獎號</a>";
        //     exit();

        //     // 抓現在的日期，帶出兌獎表

        // }

        $award_type = [
            1 => ["特別獎", 1, 8],
            2 => ["特獎", 2, 8],
            3 => ["頭獎", 3, 8],
            4 => ["二獎", 3, 7],
            5 => ["三獎", 3, 6],
            6 => ["四獎", 3, 5],
            7 => ["五獎", 3, 4],
            8 => ["六獎", 3, 3],
            9 => ["增開六獎", 4, 3],
        ];
        $aw = $_GET['aw'];
        echo "獎別:" . $award_type[$aw][0] . "<br>";
        echo "年份:" . $_GET['year'] . "<br>";
        echo "期別:" . $_GET['period'] . "<br>";

        $award_nums = nums("award_number", [
            "year" => $_GET['year'],
            "period" => $_GET['period'],
            "type" => $award_type[$aw][1]
        ]);

        echo "獎號數量:" . $award_nums;
        $award_numbers = all("award_number", [
            "year" => $_GET['year'],
            "period" => $_GET['period'],
            "type" => $award_type[$aw][1]
        ]);

        echo "<h4>對獎獎號</h4>";
        $t_num = [];
        foreach ($award_numbers as $num) {
            echo $num['number'] . "<br>";
            $t_num[] = $num['number'];
        }


        /* if($award_nums>1){
    $award_numbers=all("award_number",[
        "year"=>$_GET['year'],
        "period"=>$_GET['period'],
        "type"=>$award_type[$_GET['aw']][1]
    ]) ;
}else{
    $award_numbers=find("award_number",[
        "year"=>$_GET['year'],
        "period"=>$_GET['period'],
        "type"=>$award_type[$_GET['aw']][1]
    ]) ;
}

echo "<pre>";
print_r($award_numbers);
echo "</pre>"; */
        echo "<h4>中獎發票號碼</h4>";

        $invoices = all("invoice", [
            "year" => $_GET['year'],
            "period" => $_GET['period'],
        ]);

        foreach ($invoices as $ins) {

            foreach ($t_num as $tn) {

                $len = $award_type[$aw][2];


                $start = 8 - $len;

                //針對增開六獎號特別處理
                if ($aw != 9) {
                    $target_num = mb_substr($tn, $start, $len);
                } else {
                    $target_num = $tn;
                }

                if (mb_substr($ins['number'], $start, $len) == $target_num) {
                    echo "<span style='color:red;font-size:20px'>" . $ins['number'] . "中獎了</span>";
                    echo "<br>";
                } 
            }
        }
        if(isset($ins['number'])){
        echo "沒有這種東西o_o";
        }

        ?>


    </div>
</body>

</html>