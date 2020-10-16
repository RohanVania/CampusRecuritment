<?php
session_start();
session_destroy();
header("location:campus_admin_login.php");
?>