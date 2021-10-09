<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX4</title>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Mitr', sans-serif;
            background-color: #eee;
        }

        .fa {
            font-size: 22px;
        }

        .text {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 5;
            /* number of lines to show */
            -webkit-box-orient: vertical;
        }
    </style>
    <script src="https://kit.fontawesome.com/7763e5ee12.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container mt-2">
        <div class="row ">
            <div class="col-5 mx-auto">
                <div class="card ">
                    <div class="card p-3">
                        <?php
                        $url = "https://www.themealdb.com/api/json/v1/1/random.php";
                        $response = file_get_contents($url);
                        $result = json_decode($response, true);


                        echo "<img src=\"" . $result['meals'][0]['strMealThumb'] . "\" class=\"card-img-top\" alt=\"card-img-top\">";

                        echo "<div class=\"card-body\">";
                        echo "<h2 class=\"card-title text-center\">" . $result['meals'][0]['strMeal'] . "</h2>";
                        
                        ?>
                        <div class="text">
                            <?php
                                echo "<p class=\"card-text\">".$result['meals'][0]['strInstructions']."</p>";
                            ?>
                        </div>



                        <div class=" d-flex justify-content-evenly ">
                            <a href="index.php" class="btn btn-warning"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                            <form action="detail.php" method="POST">
                                <?php
                                foreach ($result['meals'][0] as $key => $value) {
                                    echo "<input type=\"hidden\" name=\"$key\" value=\"$value\">";
                                }
                                echo "<a class=\"btn btn-info\" href=\"" . $result['meals'][0]['strYoutube'] . "\" target=\"_blank\" rel=\"noopener noreferrer\">Learn more</a>";
                                ?>
                                <!-- <button type="submit" class="btn btn-info" name="submit">Learn more</button> -->
                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>


    </div>



</body>

</html>