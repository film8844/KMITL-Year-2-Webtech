<!--   63070234  -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final location</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <?php
        $url = "http://161.246.38.86/final-restapi/places";
        $response = file_get_contents($url);
        $result = json_decode($response, true);
        ?>


        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Choose a tourist attraction</label>
            </div>
            <div class="col-auto">
                <select class="form-select" name="name" id="name">
                    <option selected>Choose...</option>
                    <?php
                    foreach ($result['places'] as $key) {
                        echo "<option value=\"" . $key['name'] . "\">" . $key['name'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-auto">
                <input type="submit" value="Find!" onclick="byname()" class="btn btn-success">
            </div>
        </div>

        <div id="map"></div>
        <iframe id="map1" width="100%" height="80%" src="" frameborder="0" allowfullscreen>
        </iframe>
    </div>


    <script>
        function byname() {
            document.getElementById("map1").style.display = "block";
            document.getElementById("map").style.display = "none";
            var name = document.getElementById("name").value;
            console.log(name)
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $n = $_POST["tr"];
                echo $_POST["tr"];
            } ?>
            document.getElementById('map1').src = 'https://maps.google.com/maps?q=' + name + '&t=&z=15&ie=UTF8&iwloc=&output=embed';

        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDlvhrrzIPfuW5j-yNXKphYh9HTZplW8">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>