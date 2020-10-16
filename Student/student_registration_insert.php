<?php

 require_once("../campus_config.php");
 $student_name=$_POST['student_name'];
 $student_email=$_POST['student_email'];
 $student_username=$_POST['student_username'];
 $student_password=$_POST['student_password'];
 $student_gender=$_POST['student_gender'];
 $student_contact=$_POST['student_contact'];
 $student_dob=$_POST['student_dob'];
 $student_sscname=$_POST['student_sscname'];
 $student_sscpassingyear=$_POST['student_sscpassingyear'];
 $student_hscname=$_POST['student_hscname'];
 $student_hscpassingyear=$_POST['student_hscpassingyear'];
 $student_sscaggregate=$_POST['student_sscaggregate'];
 $student_hscaggregate=$_POST['student_hscaggregate'];
 $student_collegename=$_POST['student_collegename'];
 $student_collegepassingyear=$_POST['student_collegepassingyear'];
 $student_collegeaggregate=$_POST['student_collegeaggregate'];
 $student_department=$_POST['student_department'];
 $student_address=$_POST['student_address'];
 $student_otherqualification=$_POST['student_otherqualification'];
 $student_extracurriculum=$_POST['student_extracurriculum'];
 $student_image_name=$_FILES['student_image']['name'];
 $student_image_source=$_FILES['student_image']['tmp_name']; 
 $img_array=explode(".",$student_image_name);
 $ext=$img_array[count($img_array)-1];
 $date=Date('Ymdhis');
 $student_image_new_name=$date.".".$ext;
 $destination="./studentuploads/".$student_image_new_name;
 move_uploaded_file($student_image_source,$destination);
 $insert="INSERT INTO  campus_recuritment_students (S_NAME,S_EMAIL,S_USERNAME,S_PASSWORD,S_GENDER,S_CONTACT,S_ADDRESS,S_PHOTO,S_DOB";
 $insert.=",S_SSC,S_SSC_YP,S_SSC_AGG,S_HSC,S_HSC_YP,S_HSC_AGG,S_COLLEGE,S_COLLEGE_YP,S_DEPARTMENT,S_COLLEGE_AGG,S_EXTRA_CUR,S_OTHER_QUA) ";
 $insert.=" VALUES ('$student_name','$student_email','$student_username','$student_password','$student_gender','$student_contact','$student_address','$student_image_new_name','$student_dob','$student_sscname','$student_sscpassingyear',$student_sscaggregate,'$student_hscname','$student_hscpassingyear',$student_hscaggregate,'$student_collegename','$student_collegepassingyear','$student_department',$student_collegeaggregate,'$student_extracurriculum','$student_otherqualification')";
 mysqli_query($connect,$insert);
 header("location:student_login_page.php");
 
?>