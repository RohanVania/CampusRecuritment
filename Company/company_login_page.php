<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Login</title>
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/companylogin.css">
    <link rel="stylesheet" href="../fontawesome-free-5.8.2-web/css/all.css">
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/jquery.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/popper.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>

<body class="bg-primary">

    <section id="companylogin">
        <div class="container">

            <!-- Outer Row -->
            
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card mt-5 ronded border-0 shadow-lg ">
                        <div class="card-body p-0 ">

                            <!-- Nested Row within Card Body -->
                        
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block ">
                                    <img class="img-fluid" src="../images/oliver-spicer-s0q5yyG4Dyc-unsplash.jpg">
                                </div>
                                <div class="col-lg-6">
                                    <div class="px-5 py-5">
                                        <div class="text-center  mt-3 mb-4">
                                            <h1 class="h5 text-uppercase text-primary ">Login Here <span><i
                                                        class="far pl-2 fa-hand-point-down"></i></span></h1>
                                        </div>
                                        <?php
                                        if(isset($_GET['login_error'])&&($_GET['login_error']==2)){
                                             echo "<h6 class='text-danger ml-1'>Email or Username Invalid !</h6><br>";
                                        }
                                        ?>
                                        <form class="user" action="company_login_check.php" method="post" >
                                            <div class="form-group">
                                                <input type="email" name="company_email" class="form-control form-control-user" required
                                                    placeholder="Enter Email Address...">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="company_password" class="form-control form-control-user" required
                                                    placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Remember
                                                        Me</label>
                                                </div>
                                            </div>

                                            <input type="submit" class="btn btn-primary  btn-user btn-block"
                                                value="Login">
                                            <hr>
                                            <a href="#" class="btn btn-google btn-user btn-block">
                                                <i class="fab fa-google fa-fw"></i> Login with Google
                                            </a>
                                        </form>
                                        <hr>
                                        <div class=" text-center createaccount">
                                            <a href="company_registration_page.php">Create an Account!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</body>

</html>