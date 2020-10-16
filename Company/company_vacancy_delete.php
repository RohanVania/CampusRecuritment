<?php
require_once("../campus_config.php");
$id=$_GET['id'];
echo $delete="DELETE FROM vacancy WHERE ID=$id";
mysqli_query($connect,$delete);
header("location:vacancy_list.php");
?>