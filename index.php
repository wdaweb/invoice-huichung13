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

<body class="bg-light text-center">
    <div class="container py-5">
        <?php include "./include/header.php"; ?>
        <h1 class="text-info pb-3"> 統一發票管理系統</h1>

        <form action="save_invoice.php" method="post" class="col-10 mx-auto">
            <div class="form-group row">
                <!-- <label for="period" class="col-sm-4 col-form-label">期別：</label> -->
                <label for="period" class="col-sm-2 col-form-label">期　　別：</label>
                <div class="input-group col-sm-6">
                    <select name="year" class="form-control">
                        <option value="2020" selected>2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>

                    <div class="input-group-append ">
                        <!-- <div class="input-group-text"> -->
                            <div class="form form-inline  ">
                                <select name="period" class="form-control">
                                    <option value="1">1,2月</option>
                                    <option value="2">3,4月</option>
                                    <option value="3" selected>5,6月</option>
                                    <option value="4">7,8月</option>
                                    <option value="5">9,10月</option>
                                    <option value="6">11,12月</option>
                                </select>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="award-num" class="col-sm-2 col-form-label">發票號碼：</label>
                <div class="input-group col-sm-10">
                    <!-- <div class="col-sm-4"> -->
                    <input type="text" class="form-control col-sm-3" name="code" placeholder="英文字母2碼">
                    <div class="input-group-append box-sizing: unset">
                        <div class="input-group-text border-0 p-0 m-0 ">
                            <!-- <div class="input-group-text border-0 p-0 m-0"> -->
                            <div class="form form-inline  ">
                                <input type="number" class="form-control" name="number" placeholder="數字8碼">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <!-- <div class="row"> -->
                <label for="spend" class="col-sm-2 col-form-label">花　　費：</label>

                <div class="input-group col-sm-6">

                    <input type="number" class="form-control" name="expend" placeholder="expend">
                </div>




            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">儲存</button>
                    <button type="reset" class="btn btn-primary">重填</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>