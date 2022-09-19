<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">

  <title>Document</title>
</head>

<body>
  <?php
  include_once './../../vendor/autoload.php';

  use Project\Controllers\Student;

  $studentObj = new Student();

  $students = $studentObj->index();
  $products = $studentObj->ProductIndex();
  // print_r ($students) ;
  if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  }


  ?>
  <?php include_once("./navbar.php");?>

  <!--image slider section -->
  <section image-slider>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active img-banner">
          <img src="../../assets/image/img-2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../../assets/image/img1.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../../assets/image/img-3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </section>
  <!-- Category Section -->

  <section product-category>
    <div class="title text-center mt-5">
      <h3>Product Category</h3>
    </div>
    <div class="container mt-5 mb-5">
      <div class="row">
        <?php foreach ($students as $student) { ?>
          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="./../../assets/image/<?= $student['picture'] ?>" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title"><?= $student['name'] ?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="categorydetails.php?category=<?= $student['name'] ?>" class="btn btn-primary">See All</a>
              </div>
            </div>
          </div>
        <?php } ?>

        </section>
        <!-- END -->

  


  <section New Product>
    
    <div class="title text-center mt-5">
      <h3> New Product </h3>
    </div>
    <div class="container-fluid mt-5 mb-5">
      <div class="row">
        <?php foreach ($products as $student) { ?>
          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="./../../assets/image/<?= $student['picture'] ?>" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title"><?= $student['name'] ?></h5>
                <h5 class="card-title"> Price : <?= $student['price'] ?> TK</h5>
                <!-- <p class="card-text"><?= $student['details'] ?></p> -->
                <a href="./product_details.php?id=<?= $student['id'] ?>" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    
  </section>

  <!-- New Product  -->
  <!-- <section>
    <div class="title text-center mb-3 mt-5">
      <h3>New Product</h3>
    </div>
    <div class="container-fluid">
      <div class="card-item d-flex responsive">
        <div class="card">
          <img src="image/cat1.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card">
          <img src="image/item4.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card">
          <img src="image/item2.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card">
          <img src="image/item5.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>



      </div>
    </div>
  </section> -->
  <?php include_once("./footer.php");?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>