<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 2</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <style>
        body {
            font-family: 'Mitr', sans-serif;
        }

        .fontw {
            color: white;
        }


        .sun {
            background-color: #FF5C58;

        }

        .mon {
            background-color: #FFEF78;

        }

        .tue {
            background-color: #FFDEFA;

        }

        .wed {
            background-color: #B1E693;

        }

        .thu {
            background-color: #FFB085;

        }

        .fri {
            background-color: cyan;

        }

        .sat {
            background-color: purple;

        }
    </style>
</head>

<body>



    <div class="container box">
        <div class="col text-center pt-5">
            <h1>
                <?php
                // รหัสนศ.
                $id = 63070230;
                $id = $id % 10;
                if ($id == 0){
                    $id = 10;
                }

                $d1 = strtotime("2021/" . $id . "/1");
                $Months = [
                    "Januaray",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December"
                ];
                $DayOfMonth = array(
                    "Januaray" => 31,
                    "February" => 28,
                    "March" => 31,
                    "April" => 30,
                    "May" => 31,
                    "June" => 30,
                    "July" => 31,
                    "August" => 31,
                    "September" => 30,
                    "October" => 31,
                    "November" => 30,
                    "December" => 31
                );
                $thismonts = $Months[$id - 1];
                echo  $Months[$id - 1];
                $wd = date("l", $d1);
                echo " 2021 start at " . $wd;
                $bd = array(
                    "Sunday" => 0,
                    "Monday" => 1,
                    "Tuesday" => 2,
                    "Wednesday" => 3,
                    "Thursday" => 4,
                    "Friday" => 5,
                    "Saturday" => 6,
                )
                ?>
            </h1>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <?php
                    $weekday = ["sun", "mon", "tue", "wed", "thu", "fri", "sat"];
                    foreach ($weekday as $day) {
                        echo "<th scope=\"col\" class=\"\"><div class=\"col rounded m-4 fontw text-center text-uppercase pt-4 $day\"><h1>$day</h1></div></th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $w = $bd[$wd];
                echo "<tr>";
                for ($i = 0; $i < $w; $i++) {
                    echo "<td></td>";
                }
                for ($i = 1; $i <= $DayOfMonth[$thismonts]; $i++) {

                    if ($w == 0) {
                        echo "<tr>";
                    }


                    echo "<td class=\" text-center\">$i</td>";
                    if ($w == 6) {
                        echo "</tr>";
                    }
                    $w++;
                    $w = $w % 7;
                }
                for ($i = 0; $i < 7 - $w; $i++) {
                    echo "<td></td>";
                }

                ?>

            </tbody>
        </table>
    </div>




</body>

</html>