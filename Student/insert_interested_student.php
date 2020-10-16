<?php
session_start();
require_once("../campus_config.php");
$s_id = $_SESSION['studentid'];
$c_id = $_GET['c_id'];
$v_id = $_GET['v_id'];
$profile = $_GET['profile'];
$insert = "INSERT INTO campus_recuritment_applied (S_ID,C_ID,V_ID,PROFILE) VALUES ($s_id,$c_id,$v_id,'$profile')";
mysqli_query($connect, $insert);
header("location:student_view_vacancy.php");