<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- ========== Meta Tags ========== -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="dev_raj" />
  <!-- ======== Page title ============ -->
  <title>ghfh</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <meta name="description" content="Call Analog" />
  <!-- ========== Favicon Icon ========== -->
  <link rel="shortcut icon" href="assets/img/solar/favicon.png" />
  <!--  Bootstrap css plugins -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <!-- template main style css file -->
  <link rel="stylesheet" href="custom.css" />
  <link rel="stylesheet" href="assets/css/dashboard.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="responsive.css" />

</head>

<body class="body-wrapper bg4">
  <?php
  include "header.php";
  ?>

  <section class="main-dashboard">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1 col-sm-1">
          <div class="main-icons-box">
            <a href="dashboard.php"><img src="assets/img/image/data.png" class="icon icon1" /></a>
            <a href="employee.php"><img src="assets/img/image/embl.png" class="icon icon2" /></a>
            <a href="add-employee.php"><img src="assets/img/image/plui.png" class="icon icon3" style="background-color: #105A71;" /></a>
            <a href="javascript:void(0);"><img src="assets/img/image/Logout.png" class="icon icon3" /></a>
          </div>
        </div>

        <div class="col-lg-10 col-sm-11">
          <div class="row">
            <div class="col-lg-6">
              <div class="add-em-box mb-3">
                <h4 class="color21">Add employee</h4>
                <form action="">
                  <div class="form-group">
                    <label>Employee Name*</label>
                    <input type="text" placeholder="Enter employee's full name">
                  </div>
                  <div class="form-group">
                    <label>Employee ID*</label>
                    <input type="text" placeholder="Enter emplyees n digit number">
                  </div>
                  <div class="form-group">
                    <label>Set Pin*</label>
                    <input type="password" placeholder="Placeholder Text">
                  </div>

                  <div class="buttons-box">
                    <div class="add-user">
                      <a href="">Add user</a>
                    </div>
                    <div class="clr-input">
                      <a href="">Clear input</a>
                    </div>
                  </div>
                </form>
              </div>
              <div class="recenlty-addded-box">
                <h4 class="color21 pb-2">Recently Added</h4>
                <div class="emp-name-flex-box">
                  <p class="color20 fs14 fpw6">Employee Name</p>
                  <p class="color20 fs14 fpw6">Employee Id</p>
                </div>
                <div class="emp-name-flex-box">
                  <p class="color20 fs14">Shaswat Bisoyi</p>
                  <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                </div>
                <div class="emp-name-flex-box">
                  <p class="color20 fs14">Shaswat Bisoyi</p>
                  <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                </div>
                <div class="emp-name-flex-box">
                  <p class="color20 fs14">Shaswat Bisoyi</p>
                  <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                </div>

              </div>

            </div>
            <div class="col-lg-6">
              <div class="add-employee-search">
                <div class="row align-items-center">
                  <div class="col-xl-4 col-lg-4">
                    <h4 class="color21">Added employees</h4>
                  </div>
                  <div class="col-xl-3 col-lg-4">
                    <h4 class="color21">Added employees</h4>
                  </div>
                  <div class="col-xl-4 col-lg-4"> <input type="text" placeholder="Search employees"></div>
                  <div class="col-lg-1"></div>
                </div>
                <div class="emp-name-flex-box">
                  <p class="color20 fs14 fpw6">Employee Name</p>
                  <p class="color20 fs14 fpw6">Employee Id</p>
                </div>
                <div class="ovay">
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                  <div class="emp-name-flex-box">
                    <p class="color20 fs14">Shaswat Bisoyi</p>
                    <p class="color20 fs14">12323477293 &nbsp; <span><img src="assets/img/image/dlbtn.png" /></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-1"></div>
      </div>
    </div>
  </section>

  <?php
  include "footer.php";
  ?>


  <!--  ALl JS Plugins
    ====================================== -->
  <script src="assets/js/active.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>







</body>

</html>