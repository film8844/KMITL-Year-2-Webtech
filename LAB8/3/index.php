<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX3</title>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Mitr', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">


        <?php
        $url = "http://10.0.15.20/lab8/restapis/movies90";
        $response = file_get_contents($url);
        $result = json_decode($response);

        for ($i = 0; $i < count($result); $i++) {
            echo "<div class=\"card p-3 col-8 my-5\">";
            echo "<h2>";
            echo $result[$i]->title . " (" . $result[$i]->year . ")";
            echo "</h2>";




            echo "<h4 class=\"text-secondary\"> Cast </h4>";
            echo "<div class=\"col mx-2 mb-3\">";
            for ($j = 0; $j < count($result[$i]->cast); $j++) {
                echo "<span class=\"badge m-1 bg-warning\">" . $result[$i]->cast[$j] . "</span>";
            }
            echo "</div>";


            echo "<h4 class=\"text-secondary\"> Genres </h4>";
            echo "<div class=\"col mx-2 \">";
            for ($j = 0; $j < count($result[$i]->genres); $j++) {
                echo "<span class=\"badge m-1 bg-info\">" . $result[$i]->genres[$j] . "</span>";
            }
            echo "</div>";




            echo "</div>";
        }

        ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
</body>

</html>