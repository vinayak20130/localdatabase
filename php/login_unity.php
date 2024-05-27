<?php
//session_start();
include ('db_con.php');
 $Emp_ID = $_POST['Emp_ID'];
   $LoginAttempts = $_POST['LoginAttempts'];
   
   
     $query = "UPDATE user_details SET Login_Attempts='$LoginAttempts' WHERE  Emp_ID = '$Emp_ID'";
   
   
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