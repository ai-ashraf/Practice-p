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
    <?php
    include_once './../../vendor/autoload.php';

    use Project\Controllers\Student;

    $student = new Student();

    $studentInfo = $student->details($_GET['id']);

    // print_r($studentInfo);

    ?>

    <div style="width: 500px; margin:0 auto;">
        <a class="btn btn-primary my-2" href="./index.php">List</a>

        <form action="./update.php?id=<?= $studentInfo['id'] ?>" method="post">
            <input name="student_id" value="<?= $studentInfo['student_id'] ?>" placeholder="Enter Student ID">
            <input name="name" value="<?= $studentInfo['name'] ?>" placeholder="Enter Student Name">
            <button class="btn btn-success">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>