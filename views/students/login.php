<?php include_once("./navbar.php");?>
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
    <div class="container  mt-3">
        <div class="text-center">
        <h1>Please Login</h1>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-md-6">
                <div class="card border-warning" style=" height: 25rem;">
                    <div class="card-body ">
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-6 ">

                            
                
                <form action="">
                      <div>
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter yout email">
                    </div>
                    <div class="mt-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                    </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-warning mb-3">Login</button>
                        </div>
                        <div class="mt-2">
                            <a href="signup.php" class="btn btn-success mb-3">Create New Account</a>
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