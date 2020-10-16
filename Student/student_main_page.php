<?php
session_start();
if (isset($_SESSION['studentid'])) {
    ?>


<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Student Main Page !!</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
    <!-- Style-CSS -->

    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->


</head>
<style>
.apply-main {
    background: url(./css/img4.jpg) no-repeat center;
    background-size: cover;
    min-height: 30em;

}
</style>

<body>

    <!-- mian-content -->
    <div class="banner-content" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <h1> <a href="index.html"><span>H</span>igh Edu</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li><a href="#"><?php echo $_SESSION['studentusername']; ?></a></li>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#officers">Officers</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="student_view_vacancy.php">View Vacancies</a></li>
                        <li><a href="student_view_companies.php"> View Companies</a></li>
                        <li><a href="student_logout.php"> Logout</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->

        <!--/banner-->
        <div class="banner-info-w3pvt">
            <h3>Are you ready to apply?</h3>
            <p class="my-4">High Edu is a place where you can find an amalgamation of learning,
                fun, culture, lore, literature and many such life preaching activities.</p>
            <div class="ban-buttons">
                <a href="#" class="btn mb-2 mr-2">Read More</a>
                <a href="student_view_vacancy.php" class="btn active scroll mb-2 mr-2">Apply Now</a>
            </div>
        </div>
        <!--// banner-inner -->
    </div>
    <!-- //header -->

    <section class="hand-crafted bg-light py-5" id="about">
        <div class="container py-xl-5 py-lg-3">
            <div class="row banner-grids">
                <div class="col-md-6 banner-image">
                    <div class="effect-w3">
                        <img src="../images/img.jpg" class="img-fluid image1">
                    </div>
                </div>
                <div class="col-md-6 last-img pl-lg-5 p-3">
                    <h3 class="tittle my-lg-5 my-3"><span class="sub-tittle"> Now You can get </span>Placed
                        for Bright Career.</h3>
                    <p class="mb-4"> High Edu is a place where you can find an amalgamation of learning,
                        fun, culture, lore, literature and many such life preaching activities. I am thankful to
                        Training & Placement cell, Parul University for providing a platform to enhance my skills
                        and an opportunity to showcase them.</p>
                    <p class="mb-4"> High Edu is a place where you can find an amalgamation of learning,
                        fun, culture, lore, literature and many such life preaching activities. I am thankful to
                        Training & Placement cell, Parul University for providing a platform to enhance my skills
                        and an opportunity to showcase them.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- middle section -->
    <section class="apply-main py-4" id="apply">
        <div class="container">
            <div class="row py-lg-4">
                <div class="col-lg-7 apply-info px-lg-5">
                    <h3 class="tittle text-white mb-lg-5 mb-3"><span class="sub-tittle">It’s limited seating! Hurry
                            up.</span> Get the Coaching Training for Free</h3>
                    <p class="mt-3 text-white">High Edu is a place where you can find an amalgamation of learning,
                        fun, culture, lore, literature and many such life preaching activities.</p>

                </div>
            </div>
        </div>
    </section>
    <!-- //middle section -->

    <!--//team -->
    <section class="banner-bottom py-lg-5 py-4" id="officers">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5 py-4">
                <h3 class="tittle text-center my-lg-5 my-3"><span class="sub-tittle">Amazing People</span> Our Great
                    Placement Officers</h3>
                <div class="row mt-lg-5 mt-4">
                    <div class="col-md-4 team-gd text-center">
                        <div class="team-img mb-4">
                            <img src="../images/te6.jpg" class="img-fluid rounded-circle" alt="user-image">
                        </div>
                        <div class="team-info">
                            <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">TPO</span> Jason Donoghue</h3>
                        </div>
                    </div>

                    <div class="col-md-4 team-gd second text-center">
                        <div class="team-img mb-4">
                            <img src="../images/te4.jpg" class="img-fluid rounded-circle" alt="user-image">
                        </div>
                        <div class="team-info">
                            <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Employee</span> Mariana Noe</h3>
                        </div>
                    </div>
                    <div class="col-md-4 team-gd text-center">
                        <div class="team-img mb-4">
                            <img src="../images/te5.jpg" class="img-fluid rounded-circle" alt="user-image">
                        </div>
                        <div class="team-info">
                            <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Professor</span> Daniel Doe</h3>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="hand-crafted py-lg-4 py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="row banner-grids">
                <div class="col-md-6 banner-image">
                    <div class="effect-w3">
                        <img src="../images/img2.jpg" alt="" class="img-fluid image1">
                    </div>
                </div>
                <div class="col-md-6 last-img pl-lg-5 p-3">
                    <h3 class="tittle text-white my-lg-5 my-3"><span class="sub-tittle"> Now You can get </span>The Best
                        Company for Bright Future</h3>
                    <p class="mb-4"> Apple is an American multinational technology company headquartered in Cupertino,
                        California, that designs, develops, and sells consumer electronics, computer software, and
                        online services. It is considered one of the Big Four tech companies along with Amazon, Google,
                        and Facebook.
                    </p>
                    <p class="mb-3"> The company's hardware products include the iPhone smartphone, the iPad tablet
                        computer, the Mac
                        personal computer, the iPod portable media player, the Apple Watch smartwatch, the Apple TV
                        digital media player, the AirPods wireless earbuds and the HomePod smart speaker. Apple's
                        software includes the macOS, iOS, iPadOS, watchOS, and tvOS operating systems.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //hand-crafted -->
    <!-- testimonials -->
    <section class="testimonials py-5" id="testimonials">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center mb-lg-5 mb-3"><span class="sub-tittle">See what Students are saying</span>
                Testimonials</h3>
            <div class="row">
                <div class="col-lg-6 testimonials_grid">
                    <div class="bg-white rounded p-lg-5 p-3">
                        <p class="sub-test">High Edu is a place where you can find an amalgamation of learning,
                            fun, culture, lore, literature and many such life preaching activities. I am thankful to
                            Training & Placement cell, Parul University for providing a platform to enhance my skills
                            and an opportunity to showcase them.
                        </p>
                        <div class="row mt-4">
                            <div class="col-3 testi-img-res">
                                <img src="../images/te1.jpg" alt=" " class="img-fluid" />
                            </div>
                            <div class="col-9 testi_grid mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                                <h5 class="mb-2">Thomas Carl</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 testimonials_grid mt-lg-0 mt-4">
                    <div class="bg-white rounded p-lg-5 p-3">
                        <p class="sub-test"> High Edu is a place where you can find an amalgamation of learning,
                            fun, culture, lore, literature and many such life preaching activities. I am thankful to
                            Training & Placement cell, Parul University for providing a platform to enhance my skills
                            and an opportunity to showcase them.
                        </p>
                        <div class="row mt-4">
                            <div class="col-3 testi-img-res">
                                <img src="../images/te2.jpg" alt=" " class="img-fluid" />
                            </div>
                            <div class="col-9 testi_grid  mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                                <h5 class="mb-2">Adam Ster</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--footer -->
    <footer>
        <section class="footer footer_1its py-2">
            <div class="footer-grid_section text-center">
                <div class="footer-title-w3ls mb-3">
                    <a href="index.html"><span>H</span>igh Edu</a>
                </div>
            </div>
        </section>
    </footer>

    <!-- //footer -->

    <!-- copyright -->
    <div class="cpy-right text-center py-3">
        <p class="">© 2019 High Edu. All rights reserved | Design by
            <a href="#"> RohanVania.</a>
        </p>
    </div>
    <!-- //copyright -->

</body>

</html>

<?php
} else {
    header("location:../index.php");
}
?>