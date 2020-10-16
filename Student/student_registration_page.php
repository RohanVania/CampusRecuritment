<?php
require_once("../campus_config.php");
$select = "SELECT * FROM campus_recuritment_department";
$query = mysqli_query($connect, $select);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/student_registration_page.css">
    <link rel="stylesheet" href="../fontawesome-free-5.8.2-web/css/all.css">
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/jquery.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/popper.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>


<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h2 class="text-uppercase h4">Student Registration Form</h2>
            </div>
            <div class="card-body studentregistration">
                <form class="user was-validated" action="student_registration_insert.php" method="post"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group ">
                                <label>Student <span class="ml-2 text-danger">Name</span></label>
                                <input type="text" required name="student_name" class="form-control btn-student"
                                    placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Student <span class="ml-2 text-danger">Email</span></label>
                                <input type="email" required name="student_email" class="form-control btn-student"
                                    placeholder="Enter Email">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="text-danger">Username</label>
                                <input type="text" required name="student_username" class="form-control btn-student"
                                    placeholder="Enter Username">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="text-danger">Password</label>
                                <input type="password" required name="student_password" class="form-control btn-student"
                                    placeholder="Enter Password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="text-danger">Gender</label>
                                <div class="form-control py-1 text-center btn-student">
                                    <div class="form-check-inline ">
                                        <label class="form-check-label">
                                            <input type="radio" required class="form-check-input " name="student_gender"
                                                value="Male">Male
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" required class="form-check-input" name="student_gender"
                                                value="Female">Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="text-danger">Contact</label>
                                <input type="text" required name="student_contact" class="form-control btn-student"
                                    placeholder="Enter Contact Number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group ">
                                <label>Student <span class="ml-2 text-danger">Photo</span></label>
                                <input type="file" required name="student_image"
                                    class="form-control-file border py-1  btn-student ">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="text-danger">DOB</label>
                                <input type="date" required name="student_dob" class="form-control btn-student">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>SSC <span class="ml-2 text-danger"> School Name </span></label>
                                <input type="text" required name="student_sscname" class="form-control btn-student"
                                    placeholder="Enter SSC School Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>SSC <span class="ml-2 text-danger"> Year of Passing </span></label>
                                <input type="text" required name="student_sscpassingyear"
                                    class="form-control btn-student" placeholder="Enter SSC School Passing Year">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>HSC <span class="ml-2 text-danger"> College Name </span></label>
                                <input type="text" required name="student_hscname" class="form-control btn-student"
                                    placeholder="Enter HSC College Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>HSC <span class="ml-2 text-danger"> Year of Passing </span></label>
                                <input type="text" required name="student_hscpassingyear"
                                    class="form-control btn-student" placeholder="Enter HSC College Passing Year">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>SSC <span class="text-danger ml-2 ">Aggregate</span></label>
                                <input type="number" required name="student_sscaggregate"
                                    class="form-control btn-student" placeholder="Enter SSC Aggregate">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>HSC <span class="text-danger ml-2 ">Aggregate</span></label>
                                <input type="number" required name="student_hscaggregate"
                                    class="form-control btn-student" placeholder="Enter HSC Aggregate">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>College <span class="text-danger ml-2">Name</span></label>
                                <input type="text" required name="student_collegename" class="form-control btn-student"
                                    placeholder="Enter College Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>College <span class="text-danger ml-2">Year of Passing</span></label>
                                <input type="text" required name="student_collegepassingyear"
                                    class="form-control btn-student" placeholder="Enter College Year Of Passing">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>College <span class="text-danger ml-2">Aggregate</span></label>
                                <input type="number" required name="student_collegeaggregate"
                                    class="form-control btn-student" placeholder="Enter College Aggregate">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="text-danger">Department</label>
                                <select required name="student_department" class="form-control btn-student py-0">
                                    <option>Select Department</option>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($query)) {
                                        ?>
                                    <option value="<?php echo $row['D_DEPARTMENT']; ?>">
                                        <?php echo $row['D_DEPARTMENT']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="form-group text-center">
                                <label class="text-danger">Address:</label>
                                <textarea required name="student_address" class="form-control btn-student" rows="1"
                                    placeholder="Enter Your Address"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="form-group text-center">
                                <label class="text-success">Other Qualifications:</label>
                                <textarea required name="student_otherqualification" class="form-control btn-student"
                                    rows="1" placeholder="Enter Other Qualifiaction"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="form-group text-center">
                                <label class="text-success">Extra Curriculum:</label>
                                <textarea required name="student_extracurriculum" class="form-control btn-student"
                                    rows="1" placeholder="Enter Details"></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="reset" value="Clear"
                        class=" text-uppercase btn text-white btn-danger btn-student btn-block">
                    <br>
                    <input type="submit" value="Register Account"
                        class="btn btn-success text-uppercase btn-student text-white btn-block">
                </form>
            </div>
        </div>

    </div>


</body>

</html>