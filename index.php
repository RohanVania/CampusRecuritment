<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Campus Recuritment</title>

    <link rel="stylesheet" href="./index.css" />
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./fontawesome-free-5.8.2-web/css/all.css" />


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <!---------------- Navigation Bar ------------------>

    <section id="Top-navigationbar">
        <nav class="navbar navbar-default navbar-fixed-top navbar navbar-expand-sm navbar-dark" style="z-index: 99;">
            <div class="logo">
                <div href="#">
                    <p class="h5 ml-2 p-2 text-danger">University</p>
                </div>
            </div>

            <!----- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-fixed-top" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feature">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown">Company</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./Company/company_login_page.php">Company Login</a>
                            <a class="dropdown-item" href="./Company/company_registration_page.php">Company
                                Registration</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown">Student</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./Student/student_login_page.php">Student Login</a>
                            <a class="dropdown-item" href="./Student/student_registration_page.php">Student Registartion
                                Registration</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <!------------------ HOME PAGE ------------------------>
    <div class="jumbotron home-page-text my-2 px-0">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-sm-12 pt-4 text-uppercase">
                    <h2 class="mb-3">Grad Students</h2>
                    <h2>BE an INNOVATOR,not a SPECTATOR</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron px-0 mb-0 py-0 home-page-image">
        <img src="./images/desktop.jpg" width="100%" />
    </div>

    <!-- ---------------------- Feature  ----------------------------------------->

    <div id="feature">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 my-auto">
                    <div class="text-wrapper">
                        <h2>We are helping students to grow your business.</h2>
                        <p class="mb-5">
                            Jobify offers a way to completely optimize your entire
                            recruiting process. Find better candidates, conduct more focused
                            interviews, and make data-driven hiring decisions.
                        </p>
                        <a href="Student/student_login_page.php" class="btn btn-dark mb-5 text-uppercase">Get
                            Started</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 bg-dark text-white col-sm-12 py-4">
                    <div class="outer my-3">
                        <div class="icon mr-2">
                            <a href="#" class="btn btn-lg">
                                <i class="fas fa-user-tie"></i>
                            </a>
                        </div>
                        <div class="icon-info ml-1">
                            <h3>BUILD PROFILE</h3>
                            <p>
                                Showcase your ability by adding Project,Skills,Certificates,
                                and more. 90% are seen by companies Hr.
                            </p>
                        </div>
                    </div>

                    <div class="outer my-3">
                        <div class="icon mr-2">
                            <a href="#" class="btn btn-lg">
                                <i class="fas fa-city"></i>
                            </a>
                        </div>
                        <div class="icon-info ml-1">
                            <h3>APPLY FOR JOBS</h3>
                            <p>
                                Share your academics profile so companies can see if you're a
                                fit for their program.
                            </p>
                        </div>
                    </div>

                    <div class="outer">
                        <div class="icon mr-2">
                            <a href="#" class="btn btn-lg">
                                <i class="fas fa-medal"></i>
                            </a>
                        </div>
                        <div class="icon-info ml-1">
                            <h3>GET HIRED</h3>
                            <p>
                                Get Hired at your dream Compnay. 75% of committed Student Get
                                Hired by Companies like Google,Insta and more.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------- Feature Part Done ------------------------------->

    <!-- ---------------------Team ---------------------------  -->

    <section id="team">
        <div class="container">
            <div class="team-header text-center">
                <h2 class="text-uppercase mb-3">Meet our Team</h2>
                <p class="">
                    A desire to help and empower others between community contributors
                    in technology
                    <br />
                    began to grow in 2020.
                </p>
            </div>
            <div class="row pt-5">
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="box-shadow">
                        <div class="team-img">
                            <img class="img-fluid" src="./images/team-01.png" />
                            <div class="overlay">
                                <div class="social-icons">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-info text-center border">
                            <h3 class="text-uppercase"><a href="#">David Smith</a></h3>
                            <p>Chief Operating Officer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="box-shadow">
                        <div class="team-img">
                            <img class="img-fluid" src="./images/team-02.png" />
                            <div class="overlay">
                                <div class="social-icons">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-info text-center border">
                            <h3 class="text-uppercase"><a href="#">ERIC PETERSON</a></h3>
                            <p>Product Designer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="box-shadow">
                        <div class="team-img">
                            <img class="img-fluid" src="./images/team-03.png" />
                            <div class="overlay">
                                <div class="social-icons">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-info text-center border">
                            <h3 class="text-uppercase"><a href="#">DURWIN BABB</a></h3>
                            <p>Lead Designer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="box-shadow">
                        <div class="team-img">
                            <img class="img-fluid" src="./images/team-04.png" />
                            <div class="overlay">
                                <div class="social-icons">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-info text-center border">
                            <h3 class="text-uppercase"><a href="#">MARIJN OTTE</a></h3>
                            <p>Front-end Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------------------Team Part Done ---------------------------  -->

    <!-- -----------------------------About Us PART1  ------------------------------------ -->

    <section class="video-promo">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="video-content">
                        <h2 class="text-uppercase">ABOUT US</h2>
                        <button class="btn" href="#">
                            <i class="fas fa-arrow-down"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -----------------------------About Us PART1 Done  ------------------------------------ -->

    <!-- -----------------------------About Us PART2  ------------------------------------ -->

    <section id="about">
        <div class="jumbotron bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col text-center">
                                <p>
                                    We’re here to connect you with people who love what they do,
                                    believe in your company’s vision, and belong on your team.
                                    <br />
                                    "Our mission is to make recruiting about people."<br />
                                    Our services adapt to your company’s recruiting needs. But
                                    no matter how we support you, we promise to put your people
                                    – you, your team, and the talent we approach on your behalf
                                    – first.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -----------------------------About Us PART2 Done ------------------------------------ -->

    <!-- ---------------------- Clients ------------------------------->

    <section id="clients">
        <div class="jumbotron mb-0">
            <div class="header-info text-center">
                <h2 class="text-uppercase">Companies We've Helped</h2>
                <p>
                    Over the last 20 years, Some of the companies we've helped recruit
                    excellent applicants and guided organisations to achieve outstanding
                    results
                </p>
            </div>
            <div class="container">
                <div class="row text-center justify-content-around">
                    <div class="col-lg-3">
                        <img class="img img-fluid" src="./images/img1.png" />
                    </div>
                    <div class="col-lg-3">
                        <img class="img-fluid" src="./images/img2.png" />
                    </div>
                    <div class="col-lg-3">
                        <img class="img-fluid" src="./images/img3.png" />
                    </div>
                    <div class="col-lg-3">
                        <img class="img-fluid" src="./images/img4(2).png" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------------------- Clients Part Done ------------------------------->

    <section id="contact">
        <div class="container text-center">
            <h2>Let's Get In Touch!</h2>
            <p class="text-primary contact-info">
                For Any Queries And To Known About The Process,We are Always There For
                You !! Feel Free to Ask For Help!!
            </p>
            <div class="row contact-icons justify-content-center text-center">
                <div class="col-lg-4 mb-1">
                    <i class="fas fa-phone"></i>
                    <p>123-456-789</p>
                </div>
            </div>
            <div class="row contact-icons justify-content-center text-center">
                <div class="col-lg-4">
                    <i class="far fa-envelope"></i>
                    <p>
                        <a class="text-success" href="#">CampusRecuritment@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>


</body>

</html>