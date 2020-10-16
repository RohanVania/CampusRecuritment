<?php
require_once("../campus_config.php");
$vacancyid = $_POST['id'];
$select = "SELECT * FROM vacancy WHERE ID=$vacancyid";
$query = mysqli_query($connect, $select);
$row = mysqli_fetch_assoc($query);
echo json_encode($row);