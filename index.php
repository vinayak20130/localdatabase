<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="dev_raj" />
    <!-- ======== Page title ============ -->
    <title>Arc Flash</title>
    <meta name="description" content="Arc Flash" />
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/solar/favicon.png" />
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- template main style css file -->
    <link rel="stylesheet" href="custom.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/headernew.css" />
       <link rel="stylesheet" href="responsive.css?v=<?php echo time(); ?>">

</head>

<body class="body-wrapper bg4 overflow-y">
    <header class="main-header-dashboard">
            <div class="container-fluid">
                <div class="header-flex-main">
             <div class="d-flex">
                   <div>
                    <a href="index.php"><img src="assets/img/image/logo.png" alt=""></a>
               </div>
                <div>
                        <img src="assets/img/image/aditya.png" />
                    </div> 
             </div>

                    <h2 class="color-white">Welcome</h2>
                </div>
        </div>
    </header>

    <section class="main-login-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-2">
                    <div class="image-box">
                        <img src="assets/img/image/login.png" alt="">
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5  py-2">
                    <h4 class="color20 fpw6 mb-3">Please enter your User Id & Password</h4>
                    <div class="form-box">
                        <form action="php/login.php" method="post">
                            <h4 class="color21 pb-2">Log In</h4>
                            <div class="form-group">
                                <label for="">User Id</label>
                                <input type="text" name="uname" placeholder="Search for employee Id">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="Search for employee Id">
                            </div>
                            <div class="loginbtn">
                                <button type="submit" name="login_btn" >Log In</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- start main footer -->
    <?php
    // include "footer.php";
    ?>

    <!-- end footer -->

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/active.js"></script>



</body>

</html>