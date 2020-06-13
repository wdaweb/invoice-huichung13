
<?php
include "./com/base.php";


/* $sql="insert into invoice (
    `period`,
    `year`,
    `code`,
    `number`,
    `expend`) values(
    '".$_POST['period']."',
    '".$_POST['year']."',
    '".$_POST['code']."',
    '".$_POST['number']."',
    '".$_POST['expend']."')";

    echo $sql;
    $res=$pdo->exec($sql); */

    $data=[
        'period'=>$_POST['period'],
        'year'=>$_POST['year'],
        'code'=>$_POST['code'],
        'number'=>$_POST['number'],
        'expend'=>$_POST['expend'],
    ];
    $res=save("invoice",$data);
    if($res==1){
        echo "<h1 class='text-info pb-3'>新增成功</h1>";
        echo "<meta http-equiv='refresh' content='3;url=list.php'> ";
        // echo "<a href='index.php'>繼續輸入</a><br>";

        echo "<a href='list.php'>發票列表</a>";
    }else{
        echo "新增失敗";
        echo "<meta http-equiv='refresh' content='3;url=index.php'> ";
    }


?>