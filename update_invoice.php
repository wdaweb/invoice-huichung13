
<?php
include "./com/base.php";

    $data=[
        'id'=>$_GET['id'],
        'period'=>$_POST['period'],
        'year'=>$_POST['year'],
        'code'=>$_POST['code'],
        'number'=>$_POST['number'],
        'expend'=>$_POST['expend'],
    ];
    echo $data['id'];
    $res=save("invoice",$data);
    if($res==1){
        echo "<h1 class='text-info pb-3'>編輯完成</h1>";
     
        // echo "<meta http-equiv='refresh' content='2;url=list.php'> ";
        // echo "<a href='list.php'>繼續輸入</a><br>";

        echo "<a href='list.php'>發票列表</a>";
    }else{
        echo "編輯失敗";
        // echo "<meta http-equiv='refresh' content='3;url=list.php'> ";
    }


?>
   <!-- <script>
        alert('新增成功');
        
        </script> -->