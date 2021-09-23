<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Mitr', sans-serif;
        }
    </style>
    
</head>

<body>
    <div class="container mt-4 text-center">
        <div class="col-12">
            <form id="showmsg" action="show.php" method="post">
                <label>Input a message.</label>
                <input type="number" id="txtMsg" name="txtMsg" value="Hello World" />
                <input class="btn btn-warning" type="submit" id="submit" value="Submit">
            </form>
        </div>

        <?php
        $value = intval($_POST['txtMsg']);
        if ($value != 0) {
            echo "<h1>ตารางสูตรคูณแม่ " . $value . "</h1>";
        }
        ?>
        <div class="row align-content-center justify-content-center">
            <div class="col-8 ">
                <table class="table ">
                    <tbody>
                        <?php
                        if ($value != 0) {
                            for ($i = 0; $i < 13; $i++) {
                                echo "<tr>" . "<td>" . $i . "</td>" . "<td>" . " x " . "</td>" . "<td>" . $value . "</td>" . "<td>" . " = " . "</td>" . "<td>" . $i * $value . "</td>" . "</tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>




    </div>


</body>

</html>