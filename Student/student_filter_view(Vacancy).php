<?php
require_once("../campus_config.php");
session_start();
$user_id = $_SESSION['studentid'];
$profile = $_POST["profile"];
$range1 = $_POST["range1"];
$range2 = $_POST["range2"];


if (($range1 != "" && $range2 != "") && $profile == "") {
	$select = "SELECT vacancy.*,campus_recuritment_company.C_COMPANY FROM vacancy JOIN campus_recuritment_company ON vacancy.C_ID=campus_recuritment_company.C_ID WHERE  C_SALARY Between $range1 and $range2 ";
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
} else if ((isset($profile) && $profile != "") && ($range1 == "" && $range2 == "")) {
	$select = "SELECT vacancy.*,campus_recuritment_company.C_COMPANY FROM vacancy JOIN campus_recuritment_company ON vacancy.C_ID=campus_recuritment_company.C_ID WHERE  C_PROFILE='$profile' ";
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
} else {
	$select = "SELECT vacancy.*,campus_recuritment_company.C_COMPANY FROM vacancy JOIN campus_recuritment_company ON vacancy.C_ID=campus_recuritment_company.C_ID WHERE  C_SALARY Between $range1 and $range2 AND C_PROFILE='$profile' ";
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
}