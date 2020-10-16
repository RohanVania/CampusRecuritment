<?php
require_once("../campus_config.php");
$companyname=$_POST['companyname'];
$established=$_POST['companyestablished'];
$companyemail=$_POST['companyemail'];
$Hrname=$_POST['Hrname'];
$contactno=$_POST['contactno'];
$companyusername=$_POST['companyusername'];
$companypassword=$_POST['companypassword'];


$select="SELECT * FROM campus_recuritment_company WHERE C_EMAIL='$companyemail' OR C_USERNAME='$companyusername'";
$query=mysqli_query($connect,$select);
$check=mysqli_num_rows($query);

if($check>0){
    header("location:company_registration_page.php?error_msg=1");
}
else{
 $insert="INSERT INTO campus_recuritment_company (C_COMPANY,C_ESTABLISHED,C_EMAIL,C_CONTACT,C_HR,C_USERNAME,C_PASSWORD) VALUES ('$companyname',$established,'$companyemail','$contactno','$Hrname','$companyusername','$companypassword')";
mysqli_query($connect,$insert);
header("location:company_registration_page.php?msg=1");
}
?>