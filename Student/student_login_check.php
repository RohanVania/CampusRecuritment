<?php
require_once("../campus_config.php");
$student_email = $_POST['student_email'];
$student_password = $_POST['student_password'];
echo $select = "SELECT * FROM campus_recuritment_students WHERE S_EMAIL='$student_email' AND S_PASSWORD='$student_password' ";
$query = mysqli_query($connect, $select);
$check = mysqli_num_rows($query);
if ($check > 0) {
    $row = mysqli_fetch_assoc($query);
    session_start();
    $_SESSION['studentid'] = $row['S_ID'];
    $_SESSION['studentusername'] = $row['S_NAME'];
    header("location:student_main_page.php");
} else {
    header("location:student_login_page.php?studentlogin_error=1");
}