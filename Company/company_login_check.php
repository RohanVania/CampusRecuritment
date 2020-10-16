<?php
require_once("../campus_config.php");
$company_email=$_POST['company_email'];
$company_password=$_POST['company_password'];
$select="SELECT * FROM campus_recuritment_company WHERE C_EMAIL='$company_email' AND C_PASSWORD='$company_password' ";
$query=mysqli_query($connect,$select);
$check=mysqli_num_rows($query);
if($check>0){
$row=mysqli_fetch_assoc($query);
session_start();
$_SESSION['company_id']=$row['C_ID'];
$_SESSION['company_name']=$row['C_COMPANY'];
header("location:company_main_page.php");
}
else{
    header("location:company_login_page.php?login_error=2");
}
?>