<?php 
    if (isset($_POST['number_submit'])) {
        $number = $_POST['number'];
        if(is_numeric($number) && $number > 0){
            if($number % 2 == 0){
                $evenResult = "Even Number: ".$number;
            } else {
                $evenResult = "Odd Number: ".$number;
            }
        } else {
            $errorEvenOdd = "Please Insert Valuable Number";
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
            <h5 class="text-center">Task 4: Even or Odd Checker</h5>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card p-3">
                    <div class="text-center text-danger p-3">
                        <?php echo (!empty($errorEvenOdd)) ? $errorEvenOdd : ""; ?>
                    </div>
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="number">
                            <button class="btn btn-info" type="submit" name="number_submit">Check</button>
                        </div>
                        <div class="mb-3">
                            <b>Result</b>: <?php echo (!empty($evenResult)) ? $evenResult : ""; ?>
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