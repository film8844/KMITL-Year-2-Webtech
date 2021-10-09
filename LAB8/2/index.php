<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX2</title>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Mitr', sans-serif;
        }
    </style>
</head>

<body>



    <div class="container mt-5 text-center">

        <h1>
            <?php
            $url = "https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces";
            $response = file_get_contents($url);
            $result = json_decode($response);
            $i = 1;
            echo "ข้อมูลวันที่ : ".$result[0]->txn_date;
            ?>
        </h1>
        <table class="table table-hover text-center">
            <thead class="table-dark table-striped">
                <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">จังหวัด</th>
                    <th scope="col">ผู้ติดเชื้อ</th>
                    <th scope="col">เสียชีวิต</th>
                    <th scope="col">ยอดผู้ป่วยสะสม</th>
                    <th scope="col">ยอดเสียชีวิตสะสม</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($result as $key) {
                    echo "<tr>";
                    echo "<th>$i</th>";
                    echo "<td class=\"text-start\">" . $key->province . "</td>";
                    echo "<td>" . number_format(floatval($key->new_case)) . "</td>";
                    echo "<td>" . number_format(floatval($key->new_death)) . "</td>";
                    echo "<td>" . number_format(floatval($key->total_case)) . "</td>";
                    echo "<td>" . number_format(floatval($key->total_death)) . "</td>";
                    echo "</tr>";
                    $i++;
                }
                ?>

            </tbody>
        </table>
    </div>

</body>

</html>