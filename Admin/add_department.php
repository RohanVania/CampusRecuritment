<?php
require_once("../campus_config.php");
$department_name = $_POST['department'];
$select = "SELECT * FROM campus_recuritment_department WHERE D_DEPARTMENT='$department_name'";
$query = mysqli_query($connect, $select);
$check = mysqli_num_rows($query);
if ($check > 0) {
    header("location:campus_admindepartment.php?error_msg=1");
} else {
    $insert = "INSERT INTO campus_recuritment_department (D_DEPARTMENT) Values ('$department_name')";
    mysqli_query($connect, $insert);
    header("location:campus_admindepartment.php?msg=1");
}