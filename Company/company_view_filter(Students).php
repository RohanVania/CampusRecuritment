<?php
require_once("../campus_config.php");

$hscagg = $_POST['hscagg'];
$sscagg = $_POST['sscagg'];
$collegeagg = $_POST['collegeagg'];
$department = $_POST['department'];

if ($hscagg != "" && $sscagg != "" && $collegeagg != "" && $department == "Select a Department") {
    $select = "SELECT * FROM campus_recuritment_students WHERE S_HSC_AGG>=$hscagg AND S_SSC_AGG>=$sscagg AND S_COLLEGE_AGG>=$collegeagg ";
    $query = mysqli_query($connect, $select);
    $response = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $response[] = $row;
    }
    echo json_encode($response);
} else if ($department != "Select a Department") {
    $select = "SELECT * FROM campus_recuritment_students WHERE S_DEPARTMENT='$department'";
    $query = mysqli_query($connect, $select);
    $response = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $response[] = $row;
    }
    echo json_encode($response);
} else {
    $select = "SELECT * FROM campus_recuritment_students WHERE S_HSC_AGG>=$hscagg AND S_SSC_AGG>=$sscagg AND S_COLLEGE_AGG>=$collegeagg AND S_DEPARTMENT='$department'";
    $query = mysqli_query($connect, $select);
    $response = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $response[] = $row;
    }
    echo json_encode($response);
}