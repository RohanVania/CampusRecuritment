<?php
require_once("../campus_config.php");
$jobprofile=$_POST['job_profile'];
$salary=$_POST['salary'];
 $ssc_criteria=$_POST['ssc_criteria'];
 $hsc_criteria=$_POST['hsc_criteria'];
 $college_criteria=$_POST['college_criteria'];
$bond=$_POST['bond'];
$vacancy=$_POST['vacancy'];
$date=date('Y-m-d');
$company_id=$_POST['company_id'];
$insert="INSERT INTO vacancy (C_ID,C_PROFILE,C_SALARY,C_SSC_CRITERIA,C_HSC_CRITERIA,C_COLLEGE_CRITERIA,C_BOND,C_VACANCY,C_DATE)  VALUES ($company_id,'$jobprofile',$salary,$ssc_criteria,$hsc_criteria,$college_criteria,'$bond','$vacancy','$date')";
mysqli_query($connect,$insert);
header("location:company_vacancy_page.php?msg=1");
?>