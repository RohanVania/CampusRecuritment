<?php
require_once("../campus_config.php");
$select = "SELECT * FROM campus_recuritment_department ";
$query = mysqli_query($connect, $select);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Vacancy</title>
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-5.8.2-web/css/all.css">
    <link rel="stylesheet" href="./css/company.css">
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
                    <li class="nav-item">
                        <a class="nav-link" href="company_main_page.php">Home</a>
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

    <div class="container-fluid mt-5 mb-4 ">
        <div class="row">
            <div class="col-lg text-center">
                <h2 class=" text-danger"> STUDENT DETAILS </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7 mt-4 mb-2 ">
                <p class="text-center text-uppercase text-warning h4">Filter By </p>
            </div>
        </div>
        <div class="row  justify-content-center mb-3">
            <div class="col-lg-9 p-2 ">
                <form class="form-inline" action="/action_page.php">
                    <input type="text" id="hscagg" class="form-control mb-2 mr-sm-2" placeholder="HSC AGG ">
                    <input type="text" id="sscagg" class="form-control mb-2 mr-sm-2" placeholder="SSC AGG ">
                    <input type="text" id="collegeagg" class="form-control mb-2 mr-sm-2" placeholder="COLLEGE AGG">
                    <select id="dept" class=" text-primary  form-control pr-4 mb-2 mr-sm-2">
                        <option> Select a Department </option>
                        <?php
                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <option value="<?php echo $row['D_DEPARTMENT']; ?>"><?php echo $row['D_DEPARTMENT']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <div class="btn-group mb-2">
                        <button type="button" id="btn1" onclick="get_filter_data()"
                            class="btn btn-primary">FILTER</button>
                        <button type="button" value="all" id="btn2" onclick="get_data_all()" class="btn btn-dark">VIEW
                            ALL</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-lg">
                <div class="table-responsive"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <table class="table text-center table-bordered table-striped table-hover ">
                        <thead>
                            <tr>

                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>COLLEGE</th>
                                <th>DEPARTMENT</th>
                                <th>SSC AGG</th>
                                <th>HSC AGG</th>
                                <th>COLLEGE AGG</th>
                                <th>OTHER QUALIFICATION</th>
                                <th>GENDER</th>
                                <th>CONTACT</th>
                                <th>ADDRESS</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

<script>
function get_data_all() {
    $.ajax({
        url: 'company_view_filterall(Students).php',
        type: 'post',
        dataType: 'json',
        success: function(data) {
            var data_html = "";
            $.each(data, function(key, value) {
                data_html += "<tr>";
                data_html += "<td>" + value.S_NAME + "</td>";
                data_html += "<td>" + value.S_EMAIL + "</td>";
                data_html += "<td>" + value.S_COLLEGE + "</td>";
                data_html += "<td>" + value.S_DEPARTMENT + "</td>";
                data_html += "<td>" + value.S_SSC_AGG + "</td>";
                data_html += "<td>" + value.S_HSC_AGG + "</td>";
                data_html += "<td>" + value.S_COLLEGE_AGG + "</td>";
                data_html += "<td>" + value.S_OTHER_QUA + "</td>";
                data_html += "<td>" + value.S_GENDER + "</td>";
                data_html += "<td>" + value.S_CONTACT + "</td>";
                data_html += "<td>" + value.S_ADDRESS + "</td>";
                data_html += "</tr>";
            });
            $('#table_body').html(data_html);
        }
    })
};

function get_filter_data() {
    var hsc = $('#hscagg').val();
    var ssc = $('#sscagg').val();
    var college = $('#collegeagg').val();
    var department = $('#dept').val();
    $.ajax({
        url: 'company_view_filter(Students).php',
        data: 'hscagg=' + hsc + '&sscagg=' + ssc + '&collegeagg=' + college + '&department=' + department,
        type: 'post',
        dataType: 'json',
        success: function(data) {
            var data_html = "";
            $.each(data, function(key, value) {
                data_html += "<tr>";
                data_html += "<td>" + value.S_NAME + "</td>";
                data_html += "<td>" + value.S_EMAIL + "</td>";
                data_html += "<td>" + value.S_COLLEGE + "</td>";
                data_html += "<td>" + value.S_DEPARTMENT + "</td>";
                data_html += "<td>" + value.S_SSC_AGG + "</td>";
                data_html += "<td>" + value.S_HSC_AGG + "</td>";
                data_html += "<td>" + value.S_COLLEGE_AGG + "</td>";
                data_html += "<td>" + value.S_OTHER_QUA + "</td>";
                data_html += "<td>" + value.S_GENDER + "</td>";
                data_html += "<td>" + value.S_CONTACT + "</td>";
                data_html += "<td>" + value.S_ADDRESS + "</td>";
                data_html += "</tr>";
            });
            $('#table_body').html(data_html);
        }
    })
};
</script>

</html>