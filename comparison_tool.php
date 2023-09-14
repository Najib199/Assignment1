<?php
if ( isset( $_POST['submit'] ) ) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number1'];

    // check numeric value 
    if(is_numeric($number1) && is_numeric($number2)){
        $compare = ($number1 > $number2) ? "The Larger Number Is: $number1" : 'The Larger Number is: '.$number2;
    }else{
        $errorNumber = "Please Insert Numeric/Number Value";
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
                <h5 class="text-center">Task 6: Comparison Tool</h5>
                <div class="card p-3">
                    <div class="text-center text-danger mb-3">
                        <?php echo (!empty($errorNumber)) ? $errorNumber : ""; ?>
                    </div>
                    <form action="" method="post">
                        <div class="my-3">
                            <input class="form-control" type="text" id="number1" name="number1" placeholder="Number 1" required>
                        </div>
                        <div class="my-3">
                            <input class="form-control" type="text" id="number2" name="number2" placeholder="Number 2" required>
                        </div>
                        <div class="text-center">
                            <input class="btn btn-success my-3" type="submit" name="submit" value="Compare">
                        </div>
                        <div class="p-4 bg-light text-center">
                            <?php if ( !empty( $compare ) ) {echo $compare;}?>
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