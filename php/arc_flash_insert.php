<?php
//session_start();
include ('db_con.php');
$Emp_ID = $_POST['Emp_ID'];
$Login_Attempt = $_POST['Login_Attempt'];
$Training_Time = $_POST['Training_Time'];
$Assessment_Time = $_POST['Assessment_Time'];
$Status = $_POST['Status'];

date_default_timezone_set('Asia/Kolkata');
$Date= date('y-m-d');
$Time = date('H:i'); 
   
     $query = "INSERT INTO arc_flash (`Emp_ID`,`Login_Attempt`,`Training_Time`,`Assessment_Time`,`Status`,`Date`,`Time`) VALUES ('$Emp_ID','$Login_Attempt','$Training_Time','$Assessment_Time','$Status','$Date','$Time')";

   
   
   $result = mysqli_query($con, $query);
   
   if($result)
   {

    $_SESSION['status'] = "1";
				echo $_SESSION['status'];
       //echo 'Data Updated';
   }else{
    $_SESSION['status'] = "0";
				echo $_SESSION['status'];
     //  echo 'Data Not Updated';
   }
   
   
   if($Training_Time >= "0"){
   
     $querys = "UPDATE user_details SET TrainingAttempted = '1' WHERE Emp_ID = '$Emp_ID' ";

   
   
     $result = mysqli_query($con, $querys);
   
   if($result)
   {

    $_SESSION['status'] = "1";
				echo $_SESSION['status'];
       //echo 'Data Updated';
   }else{
    $_SESSION['status'] = "0";
				echo $_SESSION['status'];
     //  echo 'Data Not Updated';
   }
   
   }