<?php
include_once './../../vendor/autoload.php';

use Project\Controllers\Student;

$student = new Student();

$studentInfo = $student->details($_GET['id']);

// print_r($studentInfo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container " >
    <a class="btn btn-primary mt-3" href="./index.php">List</a>
        <div class="row">
            <div class="col-md-6">
                <h1>Student Info</h1>
                <p>Student ID: <?= $studentInfo['student_id'] ?></p>
                <p>Name: <?= $studentInfo['name'] ?></p>
                
            </div>
            <div class="col-md-6 " style="width:200px">
                <p><img src="./../../assets/image/<?= $studentInfo['picture'] ?>" class="img-thumbnail" alt="Profile Picture"></p>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
