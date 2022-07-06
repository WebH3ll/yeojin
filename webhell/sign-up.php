<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 여진이의 게시판 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- <div class="container d-flex align-items-center justify-content-center vh-100"> </div> -->
        <div class="row justify-content-center">  
            <div class="col-lg-6 col-md-10">
                    <div class="card border-primary mb-3" style="max-width: 35rem;">
                        <div class="card-header text-bg-primary">😊여진이의 게시판😊</div>
                            <div class="card-body text-primary">
                                <div class="card-body p-5">
                                    <h4 class="text-dark mb-5">Sign Up!</h4>
                                    
                                    <form action="sign-upProc.php" method="post">
                                        <div class="row">
                                            <div class="form-group col-md-12 mb-4">
                                                <input type="text" class="form-control input-lg" name="name" id="name" aria-describedby="nameHelp" placeholder="Name">
                                            </div>

                                            <div class="form-group col-md-12 mb-4">
                                                <input type="email" class="form-control input-lg" name="user_id" id="user_id" aria-describedby="emailHelp" placeholder="Username">
                                            </div>

                                            <div class="form-group col-md-12 ">
                                                <input type="password" class="form-control input-lg" name="pwd" id="pwd" placeholder="Password">
                                            </div>


                                            <div class="col-md-12">

                                                <div class="d-flex my-2 justify-content-between">
                                                    </label>
                                                </div>

                                                <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign Up</button>

                                                <p>Already have an account?
                                                <a class="text-blue" href="login.php">Sign in</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
</body>
</html>