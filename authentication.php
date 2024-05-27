<?php 
session_start();
//echo "<script>console.log('Console: " . $_SESSION['auth']. "' );</script>";
if(!isset($_SESSION['auth']))
{
 $_SESSION['auth_status'] = "login to Access Dashboard";
 header("Location: ../index.php");
 exit(0);
 }
// else
// {
//    if($_SESSION['role'] == "1")
//     {
   
//     } 
// else{
//     header("Location: index-admin.php");
//     exit(0);
// } 
// }
?>
