<?php
session_start();
require_once("../campus_config.php");
$user_id = $_SESSION['studentid'];
$select = "SELECT vacancy.*,campus_recuritment_company.C_COMPANY FROM vacancy JOIN campus_recuritment_company ON vacancy.C_ID=campus_recuritment_company.C_ID ";
$query = mysqli_query($connect, $select);
$response = array();
while ($row = mysqli_fetch_assoc($query)) {
    $vac_id = $row['ID'];
    $select2 = "SELECT * FROM campus_recuritment_applied WHERE V_ID=$vac_id AND S_ID=$user_id";
    $query2 = mysqli_query($connect, $select2);
    $num = mysqli_num_rows($query2);
    if ($num > 0) {
        $check = array(
            "check" => "One",
        );
        $row = array_merge($row, $check);
        $response[] = $row;
    } else {
        $response[] = $row;
    }
}
echo json_encode($response);