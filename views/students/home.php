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

    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }


    ?>
    <!-- Header Section -->
    <header >
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container ">
              <a class="navbar-brand " href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <ul>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person"></i> User
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="index.php">Log in</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="reg.html">Sign up</a></li>
                    
                  </ul>
                </ul>
              </div>
            </div>
          </nav>
    </header>
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

     <section product-category >
      <div class="title text-center mt-5">
      <h3>Product Category</h3>
    </div>
      <div class="container mt-5 mb-5">
        <div class="row">
        <?php foreach ($students as $student) { ?>
          <div class="col-md-3 ">
            <div class="card">
              <img src="./../../assets/image/<?= $student['picture'] ?>" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title"><?= $student['name'] ?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">See All</a>
              </div>
            </div>
          </div>
          <?php } ?>

          <!-- END -->



          <!-- <div class="col-md-3">
            <div class="card">
              <img src="image/cat2.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Cosmetics</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">See All</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="image/cat3.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Mens Perfume</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">See All</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="image/item6.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Watch</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">See All</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->


     </section>
     <!-- Featured Product  -->
     <section>
      <div class="title text-center mb-3 mt-3">
        <h3>Featured Product</h3>
      </div>
      <div class="container-fluid">
        <div class="card-item d-flex responsive">
        <div class="card">
          <img src="image/item1.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card">
          <img src="image/item6.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card">
          <img src="image/item3.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card">
          <img src="image/item7.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
     


      </div>
    </div>
     </section>

          <!-- New Product  -->
          <section>
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
           </section>


      <!--Footer section-->
<footer class=" footer border-top mt-5 py-5">
  <div class="container">
      <div class="row">
          <div class="col-lg-3">
              <img src="" height="80" alt="">
              <h4 class="mt-3">E-commerce</h4>
              
              
          </div>
          <div class="col-lg-3">
              <h4>Information</h4>
              <ul class="footer-list">
                  <li><a href="">About us</a></li>
                  <li><a href="">Shipping Policy</a></li>
                  <li><a href="">Terms & Conditions</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Contact Us</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h4>User Area</h4>
              <ul class="footer-list">
                  <li><a href="">My account</a></li>
                  <li><a href="">My Cart</a></li>
                  <li><a href="">Login</a></li>
                  <li><a href="">Checkout</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h4>Contact Info</h4>
              <p> <i class="bi bi-telephone-fill"></i> 01521411947</p>
              <p> <i class="bi bi-geo-alt-fill"></i> Bashundhara R/A</p>
              <p> <i class="bi bi-envelope-check"></i> ai22524@gmail.com</p>
          </div>
      </div>
      <hr>
      <!-- <div class="copyright">
        <p>&copy;Dynamic Minds Limited</p>
      </div> -->
      <div class="copyright-text mt-3 text-center">
          <p>Copyright © 2022 Md Ashraful Islam<p>
      </div>
  </div>
</footer>

  



    
    
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>