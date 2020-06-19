<link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./icon/piggy-bank.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
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
    echo "<div class='cen'>";
    if($res==1){
        echo "<h1 class='text-info'>新增成功</h1>";
     
        echo "<meta http-equiv='refresh' content='2;url=list.php'> ";
        // echo "<a href='index.php'>繼續輸入</a><br>";

        // echo "<div><a href='list.php'>發票列表</a></div></div>";
        echo "</div>";

    }else{
        echo "新增失敗";
        echo "<meta http-equiv='refresh' content='3;url=index.php'></div> ";
    }


?>
   <!-- <script>
        alert('新增成功');
        
        </script> -->