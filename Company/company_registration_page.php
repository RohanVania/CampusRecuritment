

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Registration</title>
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/companyregistrationpage.css">
    <link rel="stylesheet" href="../fontawesome-free-5.8.2-web/css/all.css">
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/jquery.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/popper.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>

<body>



    <section id="companyregistration">
        <div class="container">
            <div class="card ">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="pl-5 pr-5 pt-4 pb-4">
                                <div class="text-center">
                                    <h1 class="h3 ">Company Registration</h1>
                                </div>
                                
                                <?php
                                if(isset($_GET['msg'])&&($_GET['msg']==1)){
                                    echo "<h5 class='text-success ml-5'>Succcessfully Registered!</h6><br>";
                                }
                                ?>
                                  
                                <?php
                                if(isset($_GET['error_msg'])&&($_GET['error_msg']==1)){
                                    echo "<h5 class='text-danger ml-5'>Email or Username Invalid !</h5><br>";
                                }
                                ?>

                                <form class="user" method="post" action="company_registration_submit.php">
                                    <div class="form-group row">
                                        <div class="col-sm-6 space">
                                            <input type="text" name="companyname" class="form-control btn-user" required placeholder="Company Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text text-white bg-dark">Established
                                                        In</div>
                                                </div>
                                                <input type="date" name="companyestablished" required  class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" required name="companyemail" class="form-control btn-user" placeholder=" Email Address">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="Hrname" required class="btn-user form-control"
                                                placeholder=" Enter HR Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="contactno" required class="form-control btn-user" placeholder="Contact No">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0 ">
                                            <input type="text" name="companyusername" required class="form-control btn-user" placeholder=" User Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" required name="companypassword" class="form-control btn-user"
                                                placeholder="Password">
                                        </div>
                                    </div>
                                    <br>
                                    <input type="reset" value="Clear"
                                        class="btn text-white btn-danger btn-user btn-block">
                                    <br>
                                    <input type="submit" value="Register Account"
                                        class="btn btn-primary btn-user text-white btn-block">
                                </form>
                                <br>
                                <div class="text-center ">
                                    <a href="company_login_page.php" class="text-dark">Already have an account? Login!</a>
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