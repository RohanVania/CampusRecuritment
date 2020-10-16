<?php
session_start();
if (isset($_SESSION['company_id'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Vacancy</title>
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/company_vacancy_page.css">
    <link rel="stylesheet" href="../fontawesome-free-5.8.2-web/css/all.css">
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/jquery.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/popper.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>

<body>
    <section id="Top-navigationbar">
        <nav class=" navbar navbar-default navbar-fixed-top navbar navbar-expand-sm ">
            <div class="logo">
                <a href="#">
                    <img class="img-fluid mr-4 ml-4" width="100px" src="../images/logo3.png" alt="">
                </a>
            </div>

            <!----- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse  navbar-collapse navbar-fixed-top " id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-itm">
                        <a class="nav-link" href="company_main_page.php"><?php echo $_SESSION['company_name']; ?> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="company_main_page.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="company_main_page.php">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Vacancy</a>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item text-white bg-dark" href="company_vacancy_page.php">Post Vacancy</a>
                            <a class="dropdown-item text-white bg-dark" href="vacancy_list.php">Vacancy List</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Students</a>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item text-white bg-dark"
                                href="company_interested_students.php">Interested
                                Students</a>
                            <a class="dropdown-item text-white bg-dark" href="company_student_view.php">All Students</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown adm ">
                        <a class="nav-link " href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-user-lock admin mr-2 p-0"></i>
                            Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Do You Want To Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Click "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="company_logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- -------------------------------------------- NAVBAR DONE ------------------------------------------ -->

    <div class="jumbotron bg-white">
        <div class="container">
            <div class="row ">
                <div class="col-lg">
                    <h2 class=" text-center text-primary mb-3">WELCOME TO <?php echo $_SESSION['company_name']; ?></h2>
                    <h2 class="text-center"> VACANCY FORM</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-5 p-5">
                    <p>A successful recruiter will collaborate with department managers on a regular basis and
                        proactively identify future hiring needs. You should also be able to attract candidates using
                        various sources. </p>
                    <img class="img-fluid" src="b11.png">
                </div>
                <div class="col-lg-6 form-vacancy rounded">
                    <h4 class="text-center mb-4 text-dark">POST JOB</h4>
                    <form action="vacancy_insert.php" method="post">
                        <?php
                            if (isset($_GET['msg']) && ($_GET['msg'] == 1)) {
                                echo "<h5 class='text-primary'>Vacancy Posted </h5><br>";
                            }

                            ?>
                        <div class="form-group">
                            <input type="text" name="job_profile" required class="form-control vacancy"
                                placeholder="Enter Job Profile">
                        </div>
                        <div class="form-group">
                            <input type="number" name="salary" required class="form-control vacancy"
                                placeholder="Enter Salary">
                        </div>
                        <div class="form-group">
                            <input type="number" name="ssc_criteria" class="form-control vacancy"
                                placeholder="Enter SSC Criteria">
                        </div>
                        <div class="form-group">
                            <input type="number" name="hsc_criteria" class="form-control vacancy"
                                placeholder="Enter HSC Criteria">
                        </div>
                        <div class="form-group">
                            <input type="number" name="college_criteria" class="form-control vacancy"
                                placeholder="Enter College Criteria">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control vacancy" name="bond" placeholder="Enter Bond If Any">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control vacancy" required name="vacancy"
                                placeholder="Enter Vacancy No">
                        </div>
                        <input type="hidden" class="form-control vacancy" name="company_id"
                            value="<?php echo $_SESSION['company_id']; ?>">
                        <button type="reset" class="btn btn-block vacancy mb-2 btn-danger">Clear</button>
                        <button type="submit" class="btn btn-success vacancy btn-block">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
<?php
} else {
    header("location:company_login_page.php");
}
?>