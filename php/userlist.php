<?php
//session_start();
include ('db_con.php');

$output = '';
if(isset($_POST["Project_Name"]))
{
 $search = mysqli_real_escape_string($con, $_POST["Project_Name"]);
 $query = "SELECT * FROM user_details WHERE Project='$search'";
}else {
        $query = "SELECT *  FROM user_details";
       
    }
$result = mysqli_query($con, $query);
 $json_array = array();
 while($row = mysqli_fetch_assoc($result)) {  
 $json_array[] = array( 
       "id" => $row['id'],
       "Name" => $row['Name'],
       "Emp_ID" => $row['Emp_ID'],
        "Project" => $row['Project'],
         "Pin" => $row['Pin'],
         "TrainingAttempted" => $row['TrainingAttempted'],
         "TotalSessionTime" => $row['TotalSessionTime'],
         "LoginAttempts" => $row['Login_Attempts'],
         "Date" => $row['Date']
   
 );
   
 }

 echo json_encode($json_array, JSON_PRETTY_PRINT);
?>