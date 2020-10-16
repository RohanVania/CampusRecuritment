<?php
require_once("../campus_config.php");
$studentid = $_GET['studentid'];
$vacancyid = $_GET['vacancyid'];
$select = "SELECT * FROM campus_recuritment_applied WHERE V_ID=$vacancyid AND S_ID=$studentid";
$query = mysqli_query($connect, $select);
$row = mysqli_fetch_assoc($query);
if ($row['STATUS'] != 1) {

    $select3 = "SELECT * FROM vacancy WHERE ID=$vacancyid";
    $query3 = mysqli_query($connect, $select3);
    $res = mysqli_fetch_assoc($query3);
    if ($res['C_VACANCY'] > 0) {
        $update = "UPDATE campus_recuritment_applied SET STATUS=1 WHERE V_ID=$vacancyid AND S_ID=$studentid";
        $query = mysqli_query($connect, $update);
        $update2 = "UPDATE vacancy SET C_VACANCY=C_VACANCY-1 WHERE ID=$vacancyid";
        $query2 = mysqli_query($connect, $update2);
        header("location:company_interested_students.php");
    } else {
        header("location:company_interested_students.php?msg=Vacancy Completed");
    }
} else {
    header("location:company_interested_students.php?msg=Already Applied");
}