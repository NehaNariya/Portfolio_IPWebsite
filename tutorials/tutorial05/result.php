<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $m = $_POST['month'];
    echo $m;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 05</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <select name="month" id="" required>
               
                <option <?= ($m==1)?"selected":"";?>>January</option>
                <option <?= ($m==2)?"selected":"";?>>February</option>
                <option <?= ($m==3)?"selected":"";?>>March</option>
                <option <?= ($m==4)?"selected":"";?>>April</option>
                <option <?= ($m==5)?"selected":"";?>>May</option>
                <option <?= ($m==6)?"selected":"";?>>June</option>
                <option <?= ($m==7)?"selected":"";?>>July</option>
                <option <?= ($m==8)?"selected":"";?>>August</option>
                <option <?= ($m==9)?"selected":"";?>>September</option>
                <option <?= ($m==10)?"selected":"";?>>October</option>
                <option <?= ($m==11)?"selected":"";?>>November</option>
                <option <?= ($m==12)?"selected":"";?>>December</option>
            </select>

        </div>
    </div>
</body>
</html>