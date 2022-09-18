<?php
include_once './../../vendor/autoload.php';

use Project\Controllers\Student;

$student = new Student();

$student = $student->categorydetails($_GET['category']);
// $students = $student->categorydetails();
// print_r($studentInfo);
// print_r ($student) ;
// die();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- Header Section -->
    <?php include_once("./navbar.php");?>
  <!-- Product Section  -->
<section New Product>
    
    <div class="title text-center mt-5">
      <h3> <?= $_GET['category']?> Products </h3>
    </div>
    <div class="container-fluid mt-5 mb-5">
      <div class="row">
      <?php foreach ($student as $student) { ?>
          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="./../../assets/image/<?= $student['picture'] ?>" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title"><?= $student['name'] ?></h5>
                <h5 class="card-title"> Price : <?= $student['price'] ?> TK</h5>
                <!-- <p class="card-text"><?= $student['details'] ?></p> -->
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    
  </section>
  <?php include_once("./footer.php");?>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>