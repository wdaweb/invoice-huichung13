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
</head>
<body class="bg-light text-center">
<div class="container py-5">
<?php include "./include/header.php";?>
<h1 class="text-info pb-3">新增開獎號碼</h1>
<form action="save_number.php" method="post">
<table class="table">    
        <tbody>
         <tr> 
          <th id="months">年月份</th> 
          <td>
            <input type="number" name="year" id="">
            <select name="period">
                <option value="1">1,2月</option>
                <option value="2">3,4月</option>
                <option value="3">5,6月</option>
                <option value="4">7,8月</option>
                <option value="5">9,10月</option>
                <option value="6">11,12月</option>

            </select>
         </tr> 
         <tr> 
          <th id="specialPrize" rowspan="2">特別獎</th> 
          <td><input type="number" name="num1"></td>
         </tr> 
         <tr> 
          <td headers="specialPrize"> 同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元 </td> 
         </tr> 
         <tr> 
          <th id="grandPrize" rowspan="2">特獎</th> 
          <td><input type="number" name="num2"></td>
         </tr> 
         <tr> 
          <td headers="grandPrize"> 同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元 </td> 
         </tr> 
         <tr> 
          <th id="firstPrize" rowspan="2">頭獎</th> 
          <td>
            <input type="number" name="num3[]"><br>
            <input type="number" name="num3[]"><br>
            <input type="number" name="num3[]"><br>
            <input type="number" name="num3[]"><br>
        </td> </tr> 
         <tr> 
          <td headers="firstPrize"> 同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元 </td> 
         </tr> 
         <tr> 
          <th id="twoPrize">二獎</th> 
          <td headers="twoPrize"> 同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元 </td> 
         </tr> 
         <tr> 
          <th id="threePrize">三獎</th> 
          <td headers="threeAwards"> 同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元 </td> 
         </tr> 
         <tr> 
          <th id="fourPrize">四獎</th> 
          <td headers="fourPrizes"> 同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元 </td> 
         </tr> 
         <tr> 
          <th id="fivePrize">五獎</th> 
          <td headers="fivePrize"> 同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元 </td> 
         </tr> 
         <tr> 
          <th id="sixPrize">六獎</th> 
          <td headers="sixPrize"> 同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元 </td> 
         </tr> 
         <tr> 
          <th id="addSixPrize">增開六獎</th> 
          <td>
            <input type="number" name="num4[]"><br>
            <input type="number" name="num4[]"><br>
            <input type="number" name="num4[]">
        </td>
         </tr> 
         
        </tbody>
       </table> 

<input type="submit" value="送出">

</form>
</div>
</body>
</html>