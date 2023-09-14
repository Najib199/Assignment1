<?php

if(isset($_POST['avg_btn'])){
    $mark1 = $_POST['mark1'];
    $mark2 = $_POST['mark2'];
    $mark3 = $_POST['mark3'];

    if (($mark1 <= 100 && $mark1 >= 0) && ($mark2 <= 100 && $mark2 >= 0) && ($mark3 <= 100 && $mark3 >= 0) && is_numeric($mark1) && is_numeric($mark2) && is_numeric($mark3)) {
        $arraymark = [$mark1, $mark2, $mark3];
        $markLength = count($arraymark);

        if(is_numeric($mark1) && is_numeric($mark2) && is_numeric($mark3)){
            $total = $mark1 + $mark2 + $mark3;
            $avg = $total/$markLength;
            if ($avg >= 80 && $avg <=100) {
                $avg = $avg . " A";
            } elseif ($avg >= 70 && $avg <=79) {
                $avg = $avg . " B";
            } elseif ($avg >= 60 && $avg <=69) {
                $avg = $avg . " C";
            } elseif ($avg >= 33 && $avg <=59) {
                $avg = $avg . " D";
            } else {
                $avg = $avg . " F";
            }
        }
    } else {
        $errorAvg = "Please Input Valid Data";
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
            <h5 class="text-center">Task 3: Grade Calculator</h5>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card p-3">
                    <div class="p-3 text-center text-danger">
                        <?php echo (!empty($errorAvg)) ? $errorAvg : "" ?>
                    </div>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="mark1" class="form-label">Mark 1</label>
                            <input type="number" name="mark1" class="form-control" id="mark1" required>
                        </div>
                        <div class="mb-3">
                            <label for="mark2" class="form-label">Mark 2</label>
                            <input type="number" name="mark2" class="form-control" id="mark2" required>
                        </div>
                        <div class="mb-3">
                            <label for="mark3" class="form-label">Mark 3</label>
                            <input type="number" name="mark3" class="form-control" id="mark3" required>
                        </div>
                        <div class="mb-3 text-center">
                            <button name="avg_btn" class="btn btn-success">Average</button>
                        </div>
                    </form>
                    <div class="p-3 bg-light">
                        <code>
                            Mark 80-100 = A | Mark 70-79 = B | Mark 60-69 = C | Mark 33-59 = D | Mark 0-32 = F 
                        </code>
                        <br>
                        <b>Result: </b><?php echo ( !empty( $avg ) ) ? $avg : "No Result Found!" ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>