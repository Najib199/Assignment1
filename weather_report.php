<?php

if ( isset( $_POST['submit'] ) ) {
    $value = $_POST['temp'];
    $convertTo = $_POST['temperature'];

    // check numeric value 
    if(is_numeric($value)){
        if ( $convertTo == "F" ) {
            $result = 5 / 9 * ( $value - 32 );
            $result = $result . "&deg; Celsius";
        } elseif ( $convertTo == "C" ) {
            $result = $value * 9 / 5 + 32;
            $result = $result . "&deg; Fahrenheit";
        } else {
            echo "Please Input Information";
        }
    }else{
        $errorTemp = "Please Insert Numeric/Number value";
    }

    if($result <= 4){
        $weatherReport = "It's freezing!";
    } elseif($result >= 4 && $result <= 20) {
        $weatherReport = "It's cool!";
    } else {
        $weatherReport = "It's warm";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container my-5">


        <div class="row mt-3">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h5 class="text-center">Task 5: Weather Report</h5>
                <div class="card p-3">

                    <form action="" method="post">
                        <label for="temperature">Temperature:</label>
                        <select class="form-control" id="temperature" name="temperature" required>
                            <option value="">Please select a temperature...</option>
                            <option value="C">Celsius To Fahrenheit</option>
                            <option value="F">Fahrenheit To Celsius</option>
                        </select>
                        <div class="input-group my-3">
                            <input class="form-control" type="text" id="temp" name="temp" placeholder="Your Temperature">
                            <input class="btn btn-success" type="submit" name="submit" value="Convert">
                        </div>
                        <div class="text-center text-danger mb-3">
                        <?php echo (!empty($errorTemp)) ? $errorTemp : ""; ?>
                        </div>
                        <div class="p-4 bg-light text-center">
                            <?php if ( !empty( $result ) ) {echo $result;}?>
                            <br>
                            <?php if ( !empty( $weatherReport ) ) {echo $weatherReport;}?>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>