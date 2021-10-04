<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX5</title>
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
    </style>
</head>

<body>
    <div class="container mt-5">
        <table class="table text-center table-bordered">
            <thead>
                <tr class="table-active">
                    <th scope="col">X</th>
                    <?php
                    for ($i = 1; $i <= 12; $i++) {
                        echo "<th scope=\"col\">$i</th>";
                    }
                    ?>

                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo "<tr><td class=\"table-active\">$i</td>";
                    for ($j = 1; $j <= 12; $j++) {
                        $ij = $i * $j;
                        echo "<td class=\"\">$ij</td>";
                    }
                }
                echo "</tr>";
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>