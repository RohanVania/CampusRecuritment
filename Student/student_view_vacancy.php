<?php
session_start();
if (isset($_SESSION['studentid'])) {
    require_once("../campus_config.php");
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Student View Vacancy </title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<style>
.banner-content {
    background-size: cover;
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
                        <li><a href="student_main_page.php">Home</a></li>
                        <li class="active"><a href="#"> View Vacancies</a></li>
                        <li><a href="student_view_companies.php">View Companies</a></li>
                        <li><a href="student_logout.php"> Logout</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
    </div>


    <div class="container-fluid mt-5 ">
        <div class="row">
            <div class="col-lg text-center">
                <h2 class=" text-primary text-danger"> VACANCY DETAILS </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7 mt-3 mb-1 ">
                <p class="text-center text-uppercase text-warning h4">Filter By </p>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-9 p-3">
                <div class="form-inline pl-lg-5">
                    <input type="text" id="inp1" name="profile" class="form-inline form-control mb-2 mr-sm-2"
                        placeholder="JOB PROFILE ">
                    <input type="number" id="inp2" name="range1" class="form-inline form-control mb-2 mr-sm-2"
                        placeholder="SALARY RANGE ">
                    <p class="h5 text-warning">TO</p>
                    <input type="number" id="inp3" name="range2" class="form-inline form-control ml-lg-2 mb-2 mr-sm-2"
                        placeholder="SALARY RANGE">
                    <div class="btn-group mb-2">
                        <button type="button" onclick="get_data()" class="btn btn-primary">FILTER</button>
                        <button type="button" onclick="get_data_all()" class="btn btn-dark">VIEW ALL</button>
                    </div>
                </div>
                <!-- </form>s -->
            </div>
        </div>
    </div>

    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-lg">
                <div class="table-responsive"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <table class="text-center table table-bordered table-hover  table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>COMPANY</th>
                                <th>PROFILE</th>
                                <th>SALARY</th>
                                <th>BOND</th>
                                <th>VACANCY</th>
                                <th>ACTION</th>

                            </tr>
                        </thead>
                        <tbody id="table_body">

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
<script>
function get_data() {
    var profile = $('#inp1').val();
    var range1 = $('#inp2').val();
    var range2 = $('#inp3').val();
    $.ajax({
        url: 'student_filter_view(Vacancy).php',
        data: 'profile=' + profile + '&range1=' + range1 + '&range2=' + range2,
        type: 'post',
        dataType: 'json',
        success: function(data) {
            var data_html = "";
            var i = 1;
            $.each(data, function(key, value) {

                data_html += "<tr>";
                data_html += "<td>" + i++ + "</td>";
                data_html += "<td>" + value.C_COMPANY + "</td>";
                data_html += "<td>" + value.C_PROFILE + "</td>";
                data_html += "<td>" + value.C_SALARY + "</td>";
                data_html += "<td>" + value.C_BOND + "</td>";
                data_html += "<td>" + value.C_VACANCY + "</td>";
                if (value.check == "One") {
                    data_html +=
                        "<td><a class='btn btn-success disabled' href='insert_interested_student.php?c_id=" +
                        value.C_ID + " && v_id=" + value.ID + " && profile=" + value.C_PROFILE +
                        "' >APPLIED</a></td>";
                } else {
                    data_html +=
                        "<td><a class='btn btn-danger' href='insert_interested_student.php?c_id=" +
                        value.C_ID + " && v_id=" + value.ID + " && profile=" + value.C_PROFILE +
                        "' >APPLY</a></td>";
                }

                data_html += "</tr>";
            });

            $('#table_body').html(data_html);
        }
    })
};

function get_data_all() {
    $.ajax({
        url: 'student_filter_viewall(Vacancy).php',
        type: 'post',
        dataType: 'json',
        success: function(data) {
            // console.log(data);
            var data_html = "";
            var i = 1;
            $.each(data, function(key, value) {
                if (value.C_VACANCY != 0) {
                    data_html += "<tr>";
                    data_html += "<td>" + i++ + "</td>";
                    data_html += "<td>" + value.C_COMPANY + "</td>";
                    data_html += "<td>" + value.C_PROFILE + "</td>";
                    data_html += "<td>" + value.C_SALARY + "</td>";
                    data_html += "<td>" + value.C_BOND + "</td>";
                    data_html += "<td>" + value.C_VACANCY + "</td>";
                    if (value.check == "One") {
                        data_html +=
                            "<td><a class='btn btn-success disabled' href='insert_interested_student.php?c_id=" +
                            value.C_ID + " && v_id=" + value.ID + " && profile=" + value.C_PROFILE +
                            "' >APPLIED</a></td>";
                    } else {
                        data_html +=
                            "<td><a class='btn btn-danger' href='insert_interested_student.php?c_id=" +
                            value.C_ID + " && v_id=" + value.ID + " && profile=" + value.C_PROFILE +
                            "' >APPLY</a></td>";
                    }


                    data_html += "</tr>";
                }
            });

            $('#table_body').html(data_html);
        }
    })
};
</script>

</html>

<?php
} else {
    header("location:../index.php");
}
?>