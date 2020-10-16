<?php
session_start();
if (isset($_SESSION['studentid'])) {
    ?>

<?php
        require_once("../campus_config.php");
        $select = "SELECT * FROM campus_recuritment_company ";
        $query = mysqli_query($connect, $select);
        ?>


<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Student View Companies !</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
    <!-- Style-CSS -->
</head>
<style>
.banner-content {
    min-height: 6em;
    background: orangered;
    margin-bottom: 10px;
}
</style>

<body>

    <!-- mian-content -->
    <div class="banner-content" id="home">
        <!-- header -->
        <header class="header ">
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
                        <li class=""><a href="student_main_page.php">Home</a></li>
                        <li><a href="student_view_vacancy.php"> View Vacancies</a></li>
                        <li class="active"><a href="student_view_companies.php">Companies</a></li>
                        <li><a href="student_logout.php"> Logout</a></li>

                    </ul>
                </nav>

                <!-- //nav -->
            </div>
        </header>
    </div>





    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-lg text-center">
                <h2 class=" text-danger "> COMPANIES DETAILS </h2>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5 ">
        <div class="row">
            <div class="col-lg">
                <div class="table-responsive "
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <table class="table table-bordered table-dar table-hover table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>COMPANY</th>
                                <th>ESTABLISHED</th>
                                <th>EMAIL</th>
                                <th>HR</th>
                                <th>CONTACT</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($query)) {
                                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['C_COMPANY']; ?></td>
                                <td><?php echo $row['C_ESTABLISHED']; ?></td>
                                <td><?php echo $row['C_EMAIL']; ?></td>
                                <td><?php echo $row['C_HR']; ?></td>
                                <td><?php echo $row['C_CONTACT']; ?></td>

                            </tr>
                            <?php
                                    }
                                    ?>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>

    <!--footer -->
    <footer>
        <section class="footer footer_1its py-2">
            <div class="footer-grid_section text-center">
                <div class="footer-title-w3ls mb-3">
                    <a href="index.html"><span>H</span>igh Edu</a>
                </div>
            </div>
        </section>

        <!-- copyright -->
        <div class="cpy-right text-center py-3">
            <p class="">© 2019 High Edu. All rights reserved | Design by
                <a href="#"> RohanVania.</a>
            </p>
        </div>
        <!-- //copyright -->

    </footer>

</body>

</html>
<?php
} else {
    header("location:../index.php");
}
?>