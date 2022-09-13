<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student List</title>
</head>

<body>

    <?php
    include_once './../../vendor/autoload.php';

    use Project\Controllers\Student;

    $studentObj = new Student();

    $students = $studentObj->index();

    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
<div class="container">
    <div class="row">
        <div class="col">

    
    <a class="btn btn-primary my-3" href="./create.php">Create </a>
    <table class="table table-striped" border="1" style="width: 100%;">
        <thead>
            <tr>
                <th>SL</th>
                <th>Student Id</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sl = 0;
            foreach ($students as $student) { ?>
                <tr>
                    <td><?= ++$sl ?></td>
                    <td><?= $student['student_id'] ?></td>
                    <td><?= $student['name'] ?></td>
                    <td>
                        <a class="btn btn-primary" href="show.php?id=<?= $student['id'] ?>">Details</a>
                        <a class="btn btn-success" href="edit.php?id=<?= $student['id'] ?>">Edit</a>
                        <a class="btn btn-danger" href="delete.php?id=<?= $student['id'] ?>" onclick="return confirm('Are You Sure Want to Delete ?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>