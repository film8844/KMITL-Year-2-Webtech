<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX5</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>

</head>

<body>


    <div class="container mt-5" id="page">



        <?php
        $url = "http://10.0.15.20/lab8/restapis/10countries";
        $response = file_get_contents($url);
        $result = json_decode($response, true);

        foreach ($result as $key => $value) {
            echo "<div class=\"card mb-4\"><div class=\"row g-0\"><div class=\"col-md-8\">";
            echo "<div class=\"card-body\">";
            echo "<h1 class=\"card-title\">" . $value['name'] . "</h1>";
            echo "<p class=\"card-text\">Capital : " . $value['capital'] . "</p>";
            echo "<p class=\"card-text\">Population : " . $value['population'] . "</p>";
            echo "<p class=\"card-text\">Region : " . $value['region'] . "</p>";
            echo "<p class=\"card-text\">Lacation : " . $value['latlng'][0] . " , " . $value['latlng'][1] . "</p>";
            echo "<p class=\"card-text\">Borders : ";
            foreach ($value['borders'] as $border) {
                echo $border . " ";
            }
            echo "</p></div></div>";
            echo "<div class=\"col-md-4\"> <img src=\"" . $value['flag'] . "\" class=\"img-fluid rounded-end\" alt=\"...\"></div></div></div>";
        }
        ?>



    
    </div>


</body>

</html>