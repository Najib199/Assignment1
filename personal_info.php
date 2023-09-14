<?php
$name = "Nazib Md Badrul";
$age = 29;
$country = "Bangladesh";
$brief = "Hello, I am a student of Ostad";
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
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h5 class="text-center">Task 1: Personal Information</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td><b>Name</b></td>
                            <td><b>Age</b></td>
                            <td><b>Country</b></td>
                            <td><b>Brief Introduction</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $age; ?></td>
                            <td><?php echo $country; ?></td>
                            <td><?php echo $brief; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
</body>
</html>