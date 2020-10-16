<?php
session_start();
if (isset($_SESSION['company_id'])) {
    $c_id = $_SESSION['company_id'];
    require_once("../campus_config.php");
    $select = "SELECT campus_recuritment_applied.*,campus_recuritment_students.*,vacancy.C_VACANCY FROM campus_recuritment_applied JOIN campus_recuritment_students ON  campus_recuritment_applied.S_ID=campus_recuritment_students.S_ID JOIN vacancy ON campus_recuritment_applied.V_ID=vacancy.ID WHERE campus_recuritment_applied.C_ID=$c_id ";
    $query = mysqli_query($connect, $select);
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
                    <img class="img-fluid mr-4 ml-4" width="100px" src="../images/logo3.png" alt="">
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

    <!-- ------------------------------------- Company Navbar Done -------------------------------------------  -->

    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-lg text-center">
                <h2 class=" text-danger "> INTERESTED STUDENTS</h2>
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
                                <th>S.N</th>
                                <th>NAME</th>
                                <th>DEPARTMENT</th>
                                <th>SSC AGG</th>
                                <th>HSC AGG</th>
                                <th>COLLEGE AGG</th>
                                <th>PASSOUT YEAR</th>
                                <th>POST</th>
                                <th>AVAILABLE VACANCIES</th>
                                <th>EMAIL</th>
                                <th>CONTACT</th>
                                <th>ADDRESS</th>
                                <th>ACTION</th>

                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php $i = 1;
                                    while ($row = mysqli_fetch_assoc($query)) {

                                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['S_NAME']; ?></td>
                                <td><?php echo $row['S_DEPARTMENT']; ?></td>
                                <td><?php echo $row['S_SSC_AGG']; ?></td>
                                <td><?php echo $row['S_HSC_AGG']; ?></td>
                                <td><?php echo $row['S_COLLEGE_AGG']; ?></td>
                                <td><?php echo $row['S_COLLEGE_YP']; ?></td>

                                <td><?php echo $row['PROFILE']; ?></td>
                                <td><?php echo $row['C_VACANCY']; ?></td>
                                <td><?php echo $row['S_EMAIL']; ?></td>
                                <td><?php echo $row['S_CONTACT']; ?></td>
                                <td><?php echo $row['S_ADDRESS']; ?></td>

                                <?php
                                                if ($row['STATUS'] == 0) {
                                                    if ($row['C_VACANCY'] > 0) {
                                                        ?>

                                <td><a href="company_hired_page.php?studentid=<?php echo $row['S_ID']; ?>&&vacancyid=<?php echo $row['V_ID'] ?>"
                                        class="btn btn-danger">HIRE</a></td>
                                <?php
                                                        } else {
                                                            ?>
                                <td><a href="" class="btn disabled btn-dark">VACANCIES HIRED</a></td>

                                <?php

                                                        }
                                                    } else {
                                                        ?>
                                <td><a href="" class="btn btn-success disabled">HIRED</a></td>
                                <?php
                                                }
                                                ?>
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

</body>

</html>
<?php
} else {
    header("location:company_login_page.php");
}
?>