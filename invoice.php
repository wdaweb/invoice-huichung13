<?php include_once "./com/base.php";
$period = ceil(date("n") / 2);

$monthStr = [
    '1' => "1,2月",
    '2' => "3,4月",
    '3' => "5,6月",
    '4' => "7,8月",
    '5' => "9,10月",
    '6' => "11,12月",
];

if (isset($_GET['period'])) {
    $period = $_GET['period'];
}
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="shortcut icon" href="./icon/piggy-bank.ico" type="image/x-icon">
</head>

<body class="bg-light text-center">
    <div class="container py-5">
        <?php include "./include/header.php"; ?>
        <h1 class="text-info pb-3">對　　獎</h1>
        <form action="invoice.php" method="post" class="col-4 mx-auto">
            對獎期數<select onchange="location.href=this.options[this.selectedIndex].value">

                <option value="00" selected>--請選擇期數--</option>
                <option value="invoice.php?period=1" <?= ($period == 1) ? "selected" : ""; ?>>1,2月</option>
                <option value="invoice.php?period=2" <?= ($period == 2) ? "selected" : ""; ?>>3,4月</option>
                <option value="invoice.php?period=3" <?= ($period == 3) ? "selected" : ""; ?>>5,6月</option>
                <option value="invoice.php?period=4" <?= ($period == 4) ? "selected" : ""; ?>>7,8月</option>
                <option value="invoice.php?period=5" <?= ($period == 5) ? "selected" : ""; ?>>9,10月</option>
                <option value="invoice.php?period=6" <?= ($period == 6) ? "selected" : ""; ?>>11,12月</option>
            </select>

        </form>


        <!-- <ul class="nav">
        <li><a href="invoice.php?period=1" style="background:<?= ($period == 1) ? 'lightgreen' : 'white'; ?>">1(1,2)</a></li>
        <li><a href="invoice.php?period=2" style="background:<?= ($period == 2) ? 'lightgreen' : 'white'; ?>">2(3,4)</a></li>
        <li><a href="invoice.php?period=3" style="background:<?= ($period == 3) ? 'lightgreen' : 'white'; ?>">3(5,6)</a></li>
        <li><a href="invoice.php?period=4" style="background:<?= ($period == 4) ? 'lightgreen' : 'white'; ?>">4(7,8)</a></li>
        <li><a href="invoice.php?period=5" style="background:<?= ($period == 5) ? 'lightgreen' : 'white'; ?>">5(9,10)</a></li>
        <li><a href="invoice.php?period=6" style="background:<?= ($period == 6) ? 'lightgreen' : 'white'; ?>">6(11,12)</a></li>
    </ul> -->
        <!-- <a href="add_invoice.php"><button>新增獎號</button></a> -->

        <?php

        $num1 = find('award_number', ['period' => $period, 'year' => $year, 'type' => 1]); //單筆
        $num2 = find('award_number', ['period' => $period, 'year' => $year, 'type' => 2]); //單筆
        $num3 = all('award_number', ['period' => $period, 'year' => $year, 'type' => 3]); //多筆
        $num4 = all('award_number', ['period' => $period, 'year' => $year, 'type' => 4]); //多筆

        ?>

        <form action="save_number.php" method="post">

            <table class="table　col-md-8">
                <tr>
                    <th id="months">(新增)年月份</th>
                    <!-- <td><input type="number" name="year" value="<?= $year; ?>"> 年 <?= $monthStr[$period]; ?></td> -->
                    <td><input type="number" name="year" value="<?= $year; ?>"> 年 
                    <form action="invoice.php" method="post" class="col-4">
                    <select name="period">
                <option value="1">1,2月</option>
                <option value="2">3,4月</option>
                <option value="3">5,6月</option>
                <option value="4">7,8月</option>
                <option value="5">9,10月</option>
                <option value="6">11,12月</option>

            </select>
        </form>
                
                </td>
                </tr>
                <tr>
                    <th id="firstPrize" rowspan="2">特別獎</th>
                    <td><input type='text'  name="num1" value='<?= $num1['number'];?>'>
                    <!-- <?php
                    if (!empty($num1['number'])) {
                        echo $num1['number'];
                    };
                    ?>'> -->
                    </input></td>
                    <td><a href="award.php?aw=1&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
                </tr>
                <tr>
                    <td headers="specialPrize"> 同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元 </td>
                </tr>
                <tr>
                    <th id="firstPrize" rowspan="2">特獎</th>
                    <td><input type='text'  name="num2" value='<?= $num2['number'];?>'>
                        <!-- <?php
                        if (!empty($num2['number'])) {
                            echo $num2['number'];
                        };

                        ?> -->
                        </input>

                        </td>
                    <td><a href="award.php?aw=2&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
                </tr>
                <tr>
                    <td headers="grandPrize"> 同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元 </td>
                </tr>
                <tr>
                    <th id="firstPrize" rowspan="2">頭獎</th>
                    <td>
                        <?php
                        if(isset($num3[0])){
                        foreach ($num3 as $num) {
                            echo "<input type='text' name='num3' value='" . $num['number'] . "'></input><br>";
                        }
                    }else{
                        echo  '<input type="number" name="num3[]"><br>';
                        echo  '<input type="number" name="num3[]"><br>';
                        echo  '<input type="number" name="num3[]">'; 
                     }

                        ?>

                    </td>

                    <td><a href="award.php?aw=3&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
                </tr>
                <tr>
                    <td headers="firstPrize"> 同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元 </td>
                </tr>
                <tr>
                    <th id="twoPrize">二獎</th>
                    <td headers="twoPrize"> 同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元 </td>
                    <td><a href="award.php?aw=4&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
                </tr>
                <tr>
                    <th id="threePrize">三獎</th>
                    <td headers="threeAwards"> 同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元 </td>
                    <td><a href="award.php?aw=5&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
                </tr>
                <tr>
                    <th id="fourPrize">四獎</th>
                    <td headers="fourPrizes"> 同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元 </td>
                    <td><a href="award.php?aw=6&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
                </tr>
                <tr>
                    <th id="fivePrize">五獎</th>
                    <td headers="fivePrize"> 同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元 </td>
                    <td><a href="award.php?aw=7&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
                </tr>
                <tr>
                    <th id="sixPrize">六獎</th>
                    <td headers="sixPrize"> 同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元 </td>
                    <td><a href="award.php?aw=8&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
                </tr>
                <tr>
                    <th id="sixPrize">增開六獎</th>
                    <td>
                        <?php
                        if (isset($num4[0])) {
                    
                        foreach ($num4 as $num) {
                            // echo $num['number'] . "<br>";
                            echo "<input type='text'  name='num4' value='" . $num['number'] . "'></input><br>";
                        }
                    }else{
                       echo  '<input type="number" name="num4[]"><br>';
                       echo  '<input type="number" name="num4[]"><br>';
                       echo  '<input type="number" name="num4[]">'; 
                    }
                        ?>
                    </td>
                    <td><a href="award.php?aw=9&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
                </tr>
            </table>
            <input type="submit" value="新增獎號">
        </form>
    </div>
</body>

</html>