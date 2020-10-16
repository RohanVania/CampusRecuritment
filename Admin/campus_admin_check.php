<?php
require_once("../campus_config.php");
$username = $_POST['username'];
$password = $_POST['password'];
$select = "SELECT * FROM campus_recuritment_admin WHERE A_USERNAME='$username' AND A_PASSWORD='$password'";
$query = mysqli_query($connect, $select);
$check = mysqli_num_rows($query);

if ($check > 0) {
    session_start();
    $row = mysqli_fetch_assoc($query);
    $_SESSION['username'] = $row['A_USERNAME'];
    $_SESSION['userid'] = $row['A_ID'];
    header("location:campus_admin_dashboard.php");
} else {
    header("location:campus_admin_login.php?error_msg=1");
}