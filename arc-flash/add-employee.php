
<?php 
include ('../authentication.php');
include ('../inc/header.php');
?>


        <div class="col-lg-10 col-sm-10 col-10">
          <div class="row">
            <div class="col-lg-6">
              <div class="add-em-box mb-3">
                <h4 class="color21">Add User</h4>
                <?php
                include('../php/db_con.php');
                
                // Handling form submission
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve form data
                    $employeeName = $_POST['Name'];
                    $employeeID = $_POST['Emp_ID'];
                    $Pin = $_POST['Pin'];
                   
                    date_default_timezone_set('Asia/Kolkata');
                     $Date= date('Y-m-d');
                     $Time = date('H:i'); 
                
                    // Check if employee ID already exists
                    $checkDuplicateSql = "SELECT * FROM user_details WHERE Emp_ID = '$employeeID'";
                    $checkDuplicateResult = mysqli_query($con, $checkDuplicateSql);
                    if (mysqli_num_rows($checkDuplicateResult) > 0) {
                    echo  "Employee ID already exists.";
                    } else {
                        // Insert data into the database
                        $insertSql = "INSERT INTO user_details (Name, Emp_ID, Pin, Project, TrainingAttempted, Date,Time) VALUES ('$employeeName', '$employeeID', '$Pin', 'arc_flash', 'false', '$Date', '$Time')";
                        if (mysqli_query($con, $insertSql)) {
                           
                        } else {
                            echo "Error: " . $insertSql . "<br>" . mysqli_error($con);
                        }
                    }
                }
                
                // Echoing the HTML form
                echo '<form method="POST" action="">
                    <div class="form-group">
                        <label>Employee Name*</label>
                        <input type="text" name="Name" placeholder="Enter employee\'s full name" required>
                    </div>
                    <div class="form-group">
                        <label>Employee ID*</label>
                        <input type="text" name="Emp_ID" placeholder="Enter employee ID" required>
                    </div>
                    <div class="form-group">
                        <label>Set Pin*</label>
                        <input type="password" name="Pin" placeholder="Enter 4-digit PIN" pattern="\d{4}" title="Please enter a 4-digit PIN" required>
                    </div>
                
                    <div class="buttons-box">
                        <div class="add-user">
                            <button type="submit">Add user</button>
                        </div>
                        <div class="clr-input">
                            <a href="">Clear input</a>
                        </div>
                    </div>
                </form>';
                ?>


              </div>
                              <div class="recenlty-addded-box">
                                <h4 class="color21 pb-2">Recently Added</h4>
                                <div class="emp-name-flex-box">
                                  <p class="color20 fs14 fpw6">Employee Name</p>
                                  <p class="color20 fs14 fpw6">Employee Id</p>
                                </div>
                                    <?php
                                        include('../php/db_con.php');
                                        
                                        $sql = "SELECT * FROM user_details WHERE Project='arc_flash' ORDER BY id DESC LIMIT 2"; 
                                        
                                        
                                        $result = mysqli_query($con, $sql);
                                        
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $Name = $row['Name'];
                                            $Emp_ID =  $row['Emp_ID'];
                                            echo '<div class="emp-name-flex-box">';
                                            echo '<p class="color20 fs14">' . $Name . '</p>';
                                            echo '<p class="color20 fs14">' . $Emp_ID . '</p>';
                                            echo '</div>';
                                        }
                                        ?>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="add-employee-search">
                                            <div class="row align-items-center">
                                              <div class="col-xl-4 col-lg-4">
                                                <h4 class="color21">User List</h4>
                                              </div>
                                              <!--<div class="col-xl-3 col-lg-4">-->
                                              <!--  <h4 class="color21">Added employees</h4>-->
                                              <!--</div>-->
                                              <!--<div class="col-xl-4 col-lg-4"> <input type="text" placeholder="Search employees"></div>-->
                                              <div class="col-lg-1"></div>
                                            </div>  
                                            <div class="emp-name-flex-box">
                                                <p class="color20 fs14 fpw6">Employee Name</p>
                                                <p class="color20 fs14 fpw6">Employee Id</p>
                                            </div>
                                            
                                            <div class="ovay">
                                                    
                                     <?php
                                    include('../php/db_con.php');
                                    $sql = "SELECT * FROM user_details WHERE Project='arc_flash'";
                                    $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $Name = $row['Name'];
                                           $Emp_ID =  $row['Emp_ID'];
                                           $id = $row['id'];
                                       echo'  <div class="emp-name-flex-box">';
                                                 echo '<p class="color20 fs14">' . $Name . '</p>';
                                               echo '<p class="color20 fs14">' . $Emp_ID . '&nbsp; <a class="delete-btn" href="../php/delete.php?id=' . $row['id'] . '" onclick="return confirmDelete();"><img src="../assets/img/image/dlbtn.png" /></a></p>';

                                                 echo ' </div>';
                                                     }
                                        ?>
                                               
                                            </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-1"></div>
      </div>
    </div>
  </section>
  
  <script>
function confirmDelete() {
    // Display a confirmation dialog
    var result = confirm("Are you sure you want to delete?");
    
    // If the user confirms, proceed with the deletion
    if (result) {
        return true;
    } else {
        // If the user cancels, prevent the default action (link navigation)
        return false;
    }
}
</script>


  <?php
 include ('../inc/footer.php'); 
  ?>
