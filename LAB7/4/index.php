<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX4</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Mitr', sans-serif;
        }

        .box {
            /* width: 600;
            height: 750; */
            background-color: #555;
            border-radius: 40px;

        }

        .color {
            background-color: aquamarine;
        }

        .flexbox {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;

        }



        .err {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    // define variables and set to empty values
    $nameErr = $lnameErr = $addressErr = $tumErr = $idErr = $aumErr = $provinceErr = $zipErr = $phoneErr = "";
    $name = $lname = $address = $tum = $id = $aum = $province = $zip = $phone = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (strlen($_POST["name"]) < 5) {
            $nameErr = "err";
            $name = $lname = $address = $tum = $id = $aum = $province = $zip = $phone = "";
        } else {
            $name = test_input($_POST["name"]);
        }
        if (strlen($_POST["lname"]) < 5) {
            $lnameErr = "err";
            $name = $lname = $address = $tum = $id = $aum = $province = $zip = $phone = "";
        } else {
            $lname = test_input($_POST["lname"]);
        }
        if (strlen($_POST["id"]) < 5) {
            $idErr = "err";
            $name = $lname = $address = $tum = $id = $aum = $province = $zip = $phone = "";
        } else {
            $id = test_input($_POST["id"]);
        }
        if (strlen($_POST["address"]) < 5) {
            $addressErr = "err";
            $name = $lname = $address = $tum = $id = $aum = $province = $zip = $phone = "";
        } else {
            $address = test_input($_POST["address"]);
        }
        if (strlen($_POST["tum"]) < 5) {
            $tumErr = "err";
            $name = $lname = $address = $tum = $id = $aum = $province = $zip = $phone = "";
        } else {
            $tum = test_input($_POST["tum"]);
        }
        if (strlen($_POST["aum"]) < 5) {
            $aumErr = "err";
            $name = $lname = $address = $tum = $id = $aum = $province = $zip = $phone = "";
        } else {
            $aum = test_input($_POST["aum"]);
        }
        if (strlen($_POST["province"]) < 5) {
            $provinceErr = "err";
            $name = $lname = $address = $tum = $id = $aum = $province = $zip = $phone = "";
        } else {
            $province = test_input($_POST["province"]);
        }
        if (strlen($_POST["zip"]) < 5) {
            $zipErr = "err";
            $name = $lname = $address = $tum = $id = $aum = $province = $zip = $phone = "";
        } else {
            $zip = test_input($_POST["zip"]);
        }
        if (strlen($_POST["phone"]) < 5) {
            $phoneErr = "err";
            $name = $lname = $address = $tum = $id = $aum = $province = $zip = $phone = "";
        } else {
            $phone = test_input($_POST["phone"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="flexbox">
        <div class="m-5 text-white p-4 box">
            <h1>Form</h1>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group mb-3 <?php echo $idErr ?>">
                    <label for="inputAddress">หมายเลขบัตรประชาชน</label>
                    <input type="text" name="id" value="1234567890123" class="form-control" id="inputid" max="13" placeholder="x xxxx xxxxx xx x">
                </div>
                <div class="row">
                    <div class="form-group col-md-6 mb-3 <?php echo $nameErr ?>">
                        <label for="inputname">ชื่อ</label>
                        <input type="text" name="name" value="Michael" class="form-control" id="inputname" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6 mb-3 <?php echo $lnameErr ?>">
                        <label for="inputlname">นามสกุล</label>
                        <input type="text" name="lname" value="Jordan" class="form-control" id="inputlname" placeholder="Lastname">
                    </div>
                </div>
                <div class="form-group mb-3 <?php echo $addressErr ?>">
                    <label for="inputAddress">ที่อยู่</label>
                    <input type="text" name="address" value="283 ม.12" class="form-control" id="inputAddress" placeholder="Address">
                </div>
                <div class="form-group mb-3 <?php echo $tumErr ?>">
                    <label for="inputAddress2">ตำบล</label>
                    <input type="text" name="tum" value="lorem tumbol" class="form-control" id="inputAddress2" placeholder="">
                </div>
                <div class="row">
                    <div class="form-group col-md-6 mb-3 <?php echo $aumErr ?>">
                        <label for="inputCity">อำเถอ</label>
                        <input type="text" name="aum" value="lorem aumpor" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4 mb-3 <?php echo $provinceErr ?>">
                        <label for="inputState">จังหวัด</label>
                        <input type="text" name="province" value="Bangkok" class="form-control" id="inputState">
                    </div>
                    <div class="form-group col-md-2 mb-3 <?php echo $zipErr ?>">
                        <label for="inputZip">รหัสไปรษณีย์</label>
                        <input type="text" name="zip" value="91000" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group mb-3 <?php echo $phoneErr ?>">
                    <label for="inputAddress">หมายเลขโทรศัพท์</label>
                    <input type="text" name="phone" value="0893882844" class="form-control" id="inputid" max="13" min="13" placeholder="Phone Number">
                </div>

                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr class="table-dark">
                    <th scope="col">ลำดับ</th>
                    <th scope="col">หมายเลขบัตรประชาชน</th>
                    <th scope="col">ชื่อ</th>
                    <th scope="col">นามสกุล</th>
                    <th scope="col">ที่อยู่</th>
                    <th scope="col">ตำบล</th>
                    <th scope="col">อำเถอ</th>
                    <th scope="col">จังหวัด</th>
                    <th scope="col">รหัสไปรษณีย์</th>
                    <th scope="col">หมายเลขโทรศัพท์</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <?php
                    echo "<td>";
                    echo $id;
                    echo "</td>";
                    echo "<td>";
                    echo $lname;
                    echo "</td>";
                    echo "<td>";
                    echo $name;
                    echo "</td>";
                    echo "<td>";
                    echo $address;
                    echo "</td>";
                    echo "<td>";
                    echo $tum;
                    echo "</td>";
                    echo "<td>";
                    echo $aum;
                    echo "</td>";
                    echo "<td>";
                    echo $province;
                    echo "</td>";
                    echo "<td>";
                    echo $zip;
                    echo "</td>";
                    echo "<td>";
                    echo $phone;
                    echo "</td>";

                    ?>
                </tr>
            </tbody>
        </table>
    </div>




</body>

</html>