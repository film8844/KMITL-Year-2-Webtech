<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    
</head>

<body>

    <?php

    $toval = "";
    $url = "http://10.0.15.20/lab8/restapis/currencyrate";
    $response = file_get_contents($url);
    $result = json_decode($response);

    $THB = $result->rates->THB;
    $JPY = $result->rates->JPY;
    $CNY = $result->rates->CNY;
    $SGD = $result->rates->SGD;
    $USD = $result->rates->USD;

    $currency = array("THB" => $THB, "JPY" => $JPY, "CNY" => $CNY, "SGD" => $SGD, "USD" => $USD);

    // echo $result['rates']['THB'];
    // echo "THB: " . $result->rates->THB . " <br>";
    // echo "JPY: " . $result->rates->JPY . " <br>";
    // echo "CNY: " . $result->rates->CNY . " <br>";
    // echo "SGD: " . $result->rates->SGD . " <br>";
    // echo "USD: " . $result->rates->USD . " <br>";
    // foreach ($result as $coin) {
    //     echo "THB:  $coin->THB <br>";
    // }
    ?>


    <div class="container mt-5 ">
    
        <div class="col-9 text-center">
            <h1>Currency Converter</h1>
            <?php
            $from = '';
            $to = '';
            if (isset($_POST['submit'])) {
                if ($_POST['from'] == "" or $_POST['to'] == "" or $_POST['fromValue'] == "") {
                    echo "<p>Please select currency or fill value</p>";
                } else {
                    $toval = ($_POST['fromValue'] / $currency[$_POST['from']]) * $currency[$_POST['to']];
                    $toval = number_format((float)$toval, 2, '.', '');
                }
                $from = $_POST['from'];
                $to = $_POST['to'];
            }
            ?>

            <form action="index.php" method="POST" class="row gy-2 gx-3 align-items-center">
                <div class="col-auto">
                    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                    <select class="form-select" name="from" id="autoSizingSelect">
                        <option value="" <?php if ($from == '') {
                                                echo ' selected';
                                            } ?>>Choose...</option>
                        <option value="THB" <?php if ($from == 'THB') {
                                                echo ' selected';
                                            } ?>>THB</option>
                        <option value="JPY" <?php if ($from == 'JPY') {
                                                echo ' selected';
                                            } ?>>JPY</option>
                        <option value="CNY" <?php if ($from == 'CNY') {
                                                echo ' selected';
                                            } ?>>CNY</option>
                        <option value="SGD" <?php if ($from == 'SGD') {
                                                echo ' selected';
                                            } ?>>SGD</option>
                        <option value="USD" <?php if ($from == 'USD') {
                                                echo ' selected';
                                            } ?>>USD</option>
                    </select>
                </div>
                <div class="col-auto">
                    <label class="visually-hidden" for="autoSizingInput"></label>
                    <input type="number" name="fromValue" class="form-control" value="<?php echo $_POST['fromValue']?>" id="autoSizingInput" placeholder="Value">
                </div>
                <button type="submit" class="col-2 btn btn-warning" name="submit">Convert</button>
                <div class="col-auto">
                    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                    <select class="form-select" name="to" id="autoSizingSelect">
                    <option value="" <?php if ($to == '') {
                                                echo ' selected';
                                            } ?>>Choose...</option>
                        <option value="THB" <?php if ($to == 'THB') {
                                                echo ' selected';
                                            } ?>>THB</option>
                        <option value="JPY" <?php if ($to == 'JPY') {
                                                echo ' selected';
                                            } ?>>JPY</option>
                        <option value="CNY" <?php if ($to == 'CNY') {
                                                echo ' selected';
                                            } ?>>CNY</option>
                        <option value="SGD" <?php if ($to == 'SGD') {
                                                echo ' selected';
                                            } ?>>SGD</option>
                        <option value="USD" <?php if ($to == 'USD') {
                                                echo ' selected';
                                            } ?>>USD</option>
                    </select>
                </div>
                <div class="col-auto">
                    <label class="visually-hidden" for="autoSizingInput"></label>
                    <input type="text" class="form-control" id="autoSizingInput" value="<?php echo $toval; ?>" placeholder="Value">
                </div>


        </div>

</body>

</html>