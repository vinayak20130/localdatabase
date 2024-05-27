<?php
                                        if (isset($_GET['id'])) {
   include('../php/db_con.php');
    $id = $_GET['id'];
  //  $zoneId_adminId_machineId = $_GET['zoneId_adminId_machineId'];
    $sql = "DELETE FROM user_details WHERE Project='arc_flash' AND id='$id'";
    if(mysqli_query($con,$sql)){
        session_start();
        $_SESSION["status"] = "User Deleted Successfully! ";
        header("Location: ../arc-flash/add-employee.php");
    }else{
        die("Something went wrong");
    }
    
           }                             ?>