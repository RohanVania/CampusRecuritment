<?php
require_once("../campus_config.php");
session_start();
if (isset($_SESSION['company_id'])) {
    $id = $_SESSION['company_id'];
    $select = "SELECT * FROM vacancy WHERE C_ID=$id";
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

    <!-- EDIT Modal -->
    <div class="modal fade" id="editvacancymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary " id="exampleModalLabel">EDIT VACANCY</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php

                        ?>
                    <div class="container mt-3 mb-4">
                        <div class="row justify-content-center">
                            <div class=" col">
                                <form action="update_vacancy(ajax).php" method="post">
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
                                        <input type="text" class="form-control vacancy" name="bond"
                                            placeholder="Enter Bond If Any">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control vacancy" required name="vacancy"
                                            placeholder="Enter Vacancy No">
                                    </div>
                                    <input type="hidden" class="form-control vacancy" name="vacancy_id">
                                    <button type="reset" class="btn btn-block vacancy mb-2 btn-danger">Clear</button>
                                    <button type="submit" class="btn btn-primary vacancy btn-block">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ------------------------------------- Company Navbar Done -------------------------------------------  -->

    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-lg text-center">
                <h2 class=" text-danger "> VACANCY DETAILS </h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg text-center">
                <h2 class=" text-primary"> <?php echo $_SESSION['company_name']; ?> Company</h2>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5 ">
        <div class="row">
            <div class="col-lg">
                <div class="table-responsive"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <table class="table table-white table-bordered table-dar table-hover table-striped">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th>ID</th>
                                <th>JOB PROFILE</th>
                                <th>SALARY</th>
                                <th>SSC CRITERIA</th>
                                <th>HSC CRITERIA</th>
                                <th>COLLEG CRITERIA</th>
                                <th>BOND</th>
                                <th>VACANCIES</th>
                                <th>POSTED</th>
                                <th colspan="2">ACTION</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['C_PROFILE']; ?></td>
                                <td><?php echo $row['C_SALARY']; ?></td>
                                <td><?php echo $row['C_SSC_CRITERIA']; ?></td>
                                <td><?php echo $row['C_HSC_CRITERIA']; ?></td>
                                <td><?php echo $row['C_COLLEGE_CRITERIA']; ?></td>
                                <td><?php echo $row['C_BOND']; ?></td>
                                <td><?php echo $row['C_VACANCY']; ?></td>
                                <td><?php echo $row['C_DATE']; ?></td>
                                <td><a class=" btn btn-primary " data-toggle="modal" data-target="#editvacancymodal"
                                        href="" onclick="editfunction(<?php echo $row['ID']; ?>)">EDIT</a>
                                <td><a class=" btn btn-danger"
                                        href="company_vacancy_delete.php?id=<?php echo $row['ID']; ?>">DELETE</a></td>
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
    </div>
    </div>

</body>
<script>
function editfunction(id) {
    $.ajax({
        url: 'vacancy_ajax_data.php',
        data: 'id=' + id,
        method: 'post',
        dataType: 'json',
        success: function(data) {
            $('input[name="job_profile"]').val(data.C_PROFILE);
            $('input[name="salary"]').val(data.C_SALARY);
            $('input[name="ssc_criteria"]').val(data.C_SSC_CRITERIA);
            $('input[name="hsc_criteria"]').val(data.C_HSC_CRITERIA);
            $('input[name="college_criteria"]').val(data.C_COLLEGE_CRITERIA);
            $('input[name="bond"]').val(data.C_BOND);
            $('input[name="vacancy"]').val(data.C_VACANCY);
            $('input[name="vacancy_id"]').val(data.ID);
        }
    });

}
</script>

</html>
<?php
} else {
    header("location:company_login_page.php");
}
?>