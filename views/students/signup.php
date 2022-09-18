<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
<?php include_once("./navbar.php");?>
    <div class="container mb-5 mt-5">
        <div class="text-center">
        <h1>Please Signup</h1>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-md-6">
                <div class="card border-warning">
                    <div class="card-body ">
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-6 ">

                            
                
                <form action="">
                      <div>
                        <label for="first-name" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="first-name" id="first-name" placeholder="Enter yout First Name">
                    </div>
                    <div class="mt-2">
                        <label for="last-name" class="form-label">Last Name</label>
                        <input type="last-name" class="form-control" name="last-name" id="last-name" placeholder="Enter your Last Name">
                    </div>
                    <div class="mt-2">
                        <label for="mobile" class="form-label">Mobile Number</label>
                        <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Enter yout Mobile Number">
                    </div>
                      <div class="mt-2">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter yout email">
                    </div>
                    <div class="mt-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                    </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-success mb-3">Sign-Up</button>
                          </div>
                      
                </form>
            </div>
        </div>
            </div>
        </div>
            </div>
        </div>
    </div>
    <?php include_once("./footer.php");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>