<?php
 require_once("../campus_config.php");
 $vacancyid=$_POST['vacancy_id'];
 $jobprofile=$_POST['job_profile'];
 $salary=$_POST['salary'];
 $ssc_criteria=$_POST['ssc_criteria'];
 $hsc_criteria=$_POST['hsc_criteria'];
 $college_criteria=$_POST['college_criteria'];
 $bond=$_POST['bond'];
 $vacancy=$_POST['vacancy'];
 $date=date('Y-m-d');

 $update="UPDATE vacancy SET C_PROFILE='$jobprofile',C_SALARY=$salary,C_SSC_CRITERIA='$ssc_criteria',C_HSC_CRITERIA='$hsc_criteria',C_COLLEGE_CRITERIA='$college_criteria',C_BOND='$bond',C_VACANCY= '$vacancy',C_DATE='$date' WHERE ID=$vacancyid";
 mysqli_query($connect,$update);
 header("location:vacancy_list.php");

?>