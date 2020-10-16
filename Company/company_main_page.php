<?php
session_start();
if (isset($_SESSION['company_id'])) {
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Page</title>
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/company.css">
    <link rel="stylesheet" href="../fontawesome-free-5.8.2-web/css/all.css">
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/jquery.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/popper.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- ------------------------------------- Company Navbar -------------------------------------------  -->

    <section id="Top-navigationbar">
        <nav class=" navbar navbar-default navbar-fixed-top navbar navbar-expand-sm ">
            <div class="logo">
                <a href="#">
                    <img class="img-fluid" width="100px" src="../images/logo3.png" alt="">
                </a>
            </div>

            <!----- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse  navbar-collapse navbar-fixed-top" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-itm">
                        <a class="nav-link" href="company_main_page.php"><?php echo $_SESSION['company_name']; ?> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#company_about_us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
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

    <!-- ------------------------------------- Company Navbar Done -------------------------------------------  -->

    <!-- ------------------------------------- Company Carousel  -------------------------------------------  -->

    <section id="company_front_page">
        <div id="company_background" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid " src="../images/slider1.jpg">
                    <div class="carousel-caption ">
                        <div class="carousel-caption-info">
                            <h2 class="mb-sm-5">We're In The Business Of Helping You Start Your Careers</h2>
                            <button type="button" class="btn btn-primary  mb-3 mx-4">SEE SERVICE</button>
                            <button type="button" class="btn btn-danger  mb-3" data-target="#company_about_us"> ABOUT
                                US</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid " src="../images/slider2.jpg">
                    <div class="carousel-caption">
                        <div class="carousel-caption-info">
                            <h2 class="mb-sm-5">We're In The Business Of Helping You Start Your Careers</h2>
                            <button type="button" class="btn btn-primary  mb-3 mx-4">SEE SERVICE</button>
                            <button type="button" class="btn btn-danger  mb-3">ABOUT US</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid " src="../images/slider3.jpg">
                    <div class="carousel-caption ">
                        <div class="carousel-caption-info">
                            <h2 class="mb-sm-5">We're In The Business Of Helping You Start Your Careers</h2>
                            <button type="button" class="btn btn-primary  mb-3 mx-4">SEE SERVICE</button>
                            <button type="button" class="btn btn-danger  mb-3">ABOUT US</button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#company_background" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#company_background" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>

    <!-- ------------------------------------- Company Carousel Done -------------------------------------------  -->

    <!-- ------------------------------------- Company Services -------------------------------------------  -->

    <section id="services">
        <div class="container">
            <div class="services-header pt-5 text-center">
                <h2 class="pb-4 section-title">Our Services</h2>
                <p class="text-primary">A desire to help and empower others between community contributors in technology
                    <br> began
                    to grow
                    in 2020.</p>
            </div>
            <div class="row pb-2">
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-box ">
                        <div class="icon">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                        <div class="services-content">
                            <h3 class="pt-2 pb-2 text-uppercase"><a href="#">Content Writing</a></h3>
                            <p class="">We will have to make sure the prototype looks finished by inserting text or
                                photo.make sure the prototype looks finished by.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xs-12 ">
                    <div class="services-box  ">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="services-content">
                            <h3 class="pt-2 pb-2 text-uppercase"><a href="#">DIGITAL MARKETING</a></h3>
                            <p class="">We will have to make sure the prototype looks finished by inserting text or
                                photo.make sure the prototype looks finished by.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xs-12 ">
                    <div class="services-box">
                        <div class="icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="services-content">
                            <h3 class=" text-uppercase"><a href="#">WEB DEVELOPMENT</a></h3>
                            <p class="">We will have to make sure the prototype looks finished by inserting text or
                                photo.make sure the prototype looks finished by.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-2 pb-5">
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-box">
                        <div class="icon">
                            <i class="fas fa-mobile"></i>
                        </div>
                        <div class="services-content">
                            <h3 class="pt-2 pb-2 text-uppercase"><a href="#">IOS & ANDROID</a></h3>
                            <p class="">We will have to make sure the prototype looks finished by inserting text or
                                photo.make sure the prototype looks finished by.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xs-12 ">
                    <div class="services-box">
                        <div class="icon">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        <div class="services-content">
                            <h3 class="pt-2 pb-2 text-uppercase"><a href="#">UI/UX DESIGN</a></h3>
                            <p class="">We will have to make sure the prototype looks finished by inserting text or
                                photo.make sure the prototype looks finished by.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xs-12 ">
                    <div class="services-box">
                        <div class="icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="services-content">
                            <h3 class="pt-2 pb-2 text-uppercase"><a href="#">BRANDING & IDENTITY</a></h3>
                            <p class="">We will have to make sure the prototype looks finished by inserting text or
                                photo.make sure the prototype looks finished by.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------- Company Services Done -------------------------------------------  -->

    <!-- ------------------------------------- Company About Us -------------------------------------------  -->

    <section id="company_about_us">
        <div class="skill-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded" src="../images/rohan.jpg">
                    </div>
                    <div class="col-lg-6">
                        <div class="info">
                            <h2>ABOUT US</h2>
                        </div>
                        <div class="info-p">
                            <p class="text-dark"> We are The Information Company Where strategic content meets
                                creative
                                design
                                with
                                cutting-edge technology every day. For
                                some of India's top businesses. For the last 20 years. And counting.
                                Our creations aren't restricted to one medium; rather, they cover the entire gamut –
                                from
                                digital to audio-visual, print to IT and strategy to consultancy services. And it's a
                                top-notch team of technologists, designers, writers, editors, programmers and project
                                managers that make it all happen.</p>

                        </div>
                        <div class="info-progress ">
                            <div class="progress-box ">
                                <h5>Strategy &amp; Analysis <span class="pull-right">88%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-warning bar1"></div>
                                </div>
                            </div>
                            <div class="progress-box">
                                <h5>Economic growth <span class="pull-right">90%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-success bar2"></div>
                                </div>
                            </div>
                            <div class="progress-box ">
                                <h5>Achieves goals <span class="pull-right">85%</span></h5>
                                <div class="progress ">
                                    <div class="progress-bar bg-primary bar3"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ------------------------------------- Company About Us Done -------------------------------------------  -->

</body>

</html>
<?php
} else {
    header("location:company_login_page.php");
}
?>