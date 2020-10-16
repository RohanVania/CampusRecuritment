<?php
require_once("../campus_config.php");
$select = "SELECT * FROM campus_recuritment_students";
$query = mysqli_query($connect, $select);
$response = array();
while ($row = mysqli_fetch_assoc($query)) {
    $response[] = $row;
}
echo json_encode($response);