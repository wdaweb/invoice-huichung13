<?php include_once "./com/base.php"    ;?>
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
<?php include "./include/header.php"   ;
$period=ceil(date("n")/2);
$year=date("Y");

if(isset($_GET['period'])){
    $period=$_GET['period'];
}
if(isset($_GET['year'])){
    $period=$_GET['year'];
}

?>

<h1 class="text-info pb-3">發票列表</h1>
<!-- <ul class="nav">
<li><a href="list.php?period=1" style="background:<?=($period==1)?'lightgreen':'white';?>">1(1,2)</a></li>
<li><a href="list.php?period=2" style="background:<?=($period==2)?'lightgreen':'white';?>">2(3,4)</a></li>
<li><a href="list.php?period=3" style="background:<?=($period==3)?'lightgreen':'white';?>">3(5,6)</a></li>
<li><a href="list.php?period=4" style="background:<?=($period==4)?'lightgreen':'white';?>">4(7,8)</a></li>
<li><a href="list.php?period=5" style="background:<?=($period==5)?'lightgreen':'white';?>">5(9,10)</a></li>
<li><a href="list.php?period=6" style="background:<?=($period==6)?'lightgreen':'white';?>">6(11,12)</a></li>
</ul> -->

<form action="list.php" method="post" class="col-4">
<!-- <select name="period" class="form-control"> -->
<select onchange="location.href=this.options[this.selectedIndex].value">

                        <option value="00" selected>--請選擇期數--</option>
                        <option value="list.php?period=1" <?=($period==1)?"selected":"";?>>1,2月</option>
                        <option value="list.php?period=2" <?=($period==2)?"selected":"";?>>3,4月</option>
                        <option value="list.php?period=3" <?=($period==3)?"selected":"";?>>5,6月</option>
                        <option value="list.php?period=4" <?=($period==4)?"selected":"";?>>7,8月</option>
                        <option value="list.php?period=5" <?=($period==5)?"selected":"";?>>9,10月</option>
                        <option value="list.php?period=6" <?=($period==6)?"selected":"";?>>11,12月</option>
                    </select>
<!-- <select onchange="location.href=this.options[this.selectedIndex].value">
                        <option value="00" selected>--請選擇年份--</option>
                        <option value="list.php?year=2020" <?=($year==2020)?"selected":"";?>>2020</option>
                        <option value="list.php?year=2021" <?=($year==2021)?"selected":"";?>>2021</option>
                        <option value="list.php?year=2022" <?=($year==2022)?"selected":"";?>>2022</option>
                        
                    </select> -->
</form>
<?php

//$sql="select * from invoice where period='$period'";
$rows=all('invoice',['period'=>$period]);

?>
<div class="container">
<table class="table table-sm table-light text-center col-md-8 mx-auto">
    <tr>
       
        <td>編號</td>
        <td>標記</td>
        <td>號碼</td>
        <td>花費</td>
        <td>修改</td>
    </tr>
    <?php
    foreach($rows as $row){
    ?>
    <tr>
     
        <td><?=$row['id'];?></td>
        <td><?=$row['code'];?></td>
        <td><?=$row['number'];?></td>
        <td><?=$row['expend'];?></td>
        <td><a href='invoice_chg.php?id="<?=$row['id'];?>"'>編輯</a></td>
    </tr>
    <?php
    }
    
    ?>
</table>
</div>


</body>
</html>