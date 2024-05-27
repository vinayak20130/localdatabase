<!DOCTYPE html>
<?php 
include ('..../authentication.php');

?>
<html lang="zxx">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="dev_raj" />
    <!-- ======== Page title ============ -->
    <title>Arc Flash</title>
       <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <meta name="description" content="Arc Flash" />
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="../assets/img/solar/favicon.png" />
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <!-- template main style css file -->
    <link rel="stylesheet" href="../custom.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/css/dashboard.css?v=<?php echo time(); ?>">
    
    <link rel="stylesheet" href="../assets/css/headernew.css?v=<?php echo time(); ?>">
    
    <!--<link rel="stylesheet" href="../assets/css/headernew.css" />-->
    <link rel="stylesheet" href="../responsive.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     
    <style>
    
    .header-flex-main {
        display: flex;
        justify-content: space-between;
    }

    .header-flex-main span a {
        border: 1px solid #C5C5C5;
        background-color: #D0E0FF;
        border-radius: 4px;
        padding: 8px 12px;
        font-size: 28px;
        font-weight: 400;
        line-height: 40px;
        text-transform:capitalize;
        color: #002F8A;
    }
    .main-icons-box .popup {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  padding: 16px;
  border-radius: 4px;
  z-index: 999;
  border: 1px solid #003344;
  width: 350px;
  height: 170px;
}
 
 
.main-icons-box .close {
    background-color: #003344;
    color: #fff;
    float: right;
    width: 26px;
    font-size: 21px;
    font-weight: bold;
    border-radius: 50%;
    height: 27px;
    display: flex;
    justify-content: center;
    align-items: center;
}
 
.main-icons-box .close:hover,
.main-icons-box .close:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.main-icons-box .nostay-btn a{
    color: #003344;
    font-size: 14px;
    font-weight: 400;
}
.main-icons-box .logout-btn button{
    background: #FFC600;
    padding: 0 8px;
    border-radius: 4px;
    border: 1px solid #EE9D00;
    color: #003344;
    font-weight: 600;
    font-size: 14px;
}
.main-icons-box .rightbtns{
    display: flex;
    gap: 10px;
    float: right;
    text-align: right;
    justify-content: flex-end;
}
.main-icons-box .tab.active {
    background-color: #2C59AF; /* Active tab background color */
    border-radius: 4px;
}

.iconify {
    color: #2C59AF; /* Default icon color */
    font-size: 32px;
    padding: 4px;
}

.tab.active .iconify {
    color: #fff; /* Change icon color to white when tab is active */
}
</style>
</head>

<body class="body-wrapper bg4">
    
<header class="main-header-dashboard">
        <div class="container-fluid">
            <div class="header-flex-main">
            <a href="index.php"><img src="../assets/img/image/logo.png" alt=""></a>

                                                         <?php 
                                                        if(isset($_SESSION['auth'])){
                                                           //echo $_SESSION['auth_user']['admin_name'];
                                                        }else{
                                                            echo "not logged in";
                                                        }
                                                    
                                                        ?>


                <h3 class="color-white fpw4">Hello <?php echo $_SESSION['auth_user']['admin_name'];?>! &nbsp;<span><a href=""><?php echo $_SESSION['auth_user']['admin_project'];
$admin_project_without_underscores = str_replace('_', ' ', $admin_project);
echo $admin_project_without_underscores;?></a></span></h3>
            </div>
        </div>
</header>

 <section class="main-dashboard">
        <div class="container-fluid">
            <div class="row">
                   <div class="col-lg-1 col-md-2 col-sm-2 col-2">
            <div class="main-icons-box">
    <a href="home.php" class="tab" onclick="changeColorAndRead(1)"><span id="icon1" class="iconify" data-icon="majesticons:analytics-line"></span></a>
                                                                   <?php
                                                                   
                                                            include('../php/db_con.php');       
         $sql = "SELECT Emp_ID AS EmpID FROM user_details where Project = 'arc_flash' ORDER BY id LIMIT 1";
             $result = mysqli_query($con, $sql);
             $row = mysqli_fetch_array($result);
           $id = $row['EmpID'];
     
     ?>
    <a href="employee.php?id=<?php echo $id?>" class="tab" onclick="changeColorAndRead(2)"><span id="icon2" class="iconify" data-icon="clarity:employee-solid"></span></a>
    <a href="add-employee.php" class="tab" onclick="changeColorAndRead(3)"><span id="icon3" class="iconify" data-icon="mdi:account-add"></span></a>



                <a href="javascript:void(0);" id="popupButton"><img src="../assets/img/image/Logout.png" class="icon icon3" /></a>

 
                        <div id="popup" class="popup">
                            <div class="popup-content">
                                <span class="close" id="closeButton">&times;</span>
                                <h4 class="color21 fpw6 pb-2">Log out</h4>
                                <p class="color21 fpw4 pb-3">Are you sure you want to log out ?</p>
                               <div class="rightbtns">
                               <div class="nostay-btn">
                                    <a href="">No, Stay</a>
                                </div>
                                <div class="logout-btn">
                                     <form  action="../php/logout.php" method="post">
                                    <button type="submit" name="logindone"  href="">Log out</button>
                                    </form>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
   