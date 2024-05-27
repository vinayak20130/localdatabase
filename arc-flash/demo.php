<?php 
include ('../authentication.php');
include ('../inc/header.php');
?>

<style>
    .fs20{
    font-size: 19px!important;
    }
    .ln30{
        line-height: 32px;
    }
    .heightcard{
        height: 225px;
    }
  .pi-chart-box{
    background-color: #ffffff;
    border-radius: 4px;
    padding: 16px;
    margin-top: 10px;
    box-shadow: 0px 0px 10px 0px #0000001A;
    }
    .chart-container {
      width: 250px;
      height: 250px;
    }
</style>

                <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                    <div class="main-employee-page-box">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 p-1">
                                        <div class="box-rates">
                                            <p class="color19 fs14 fpw6">Total time spent (mins)</p>
                                             <?php 
                                             if(isset($_GET['id'])){
                                                         include('../php/db_con.php');
                                                         $id=$_GET['id'];
                                                    $sql = "SELECT SUM(Assessment_Time) + SUM(Training_Time) AS total_emp_time_spent  FROM arc_flash WHERE Emp_ID ='$id'";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $total_emp_time_spent_seconds = $row['total_emp_time_spent'];
                                                        
                                                        // Convert total assessment time from seconds to minutes
                                                        $total_assessment_time_minutes = $total_emp_time_spent_seconds ;
                                                        
                                                        $total_assessment_time_minutess =$total_assessment_time_minutes/ 60;
                                                    
                                                    
                                                     $total_assessment_time_minutes_rounded = floor($total_assessment_time_minutess);
                                                     
                                                      if ($total_assessment_time_minutes - $total_assessment_time_minutes_rounded >= 0.6) {
                                                            $total_assessment_time_minutes_rounded += 1;
                                                        }
                                                                
                                                        // Output the total assessment time in minutes
                                                        echo '';
                                                        echo '<h3 class="color20 fpw4"> ' . $total_assessment_time_minutes_rounded . '</h3>';
                                                    } else {
                                                        // Handle query error
                                                        echo "Error executing query: " . mysqli_error($con);
                                                    }
                                                    }
                                                   ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 p-1">
                                        <div class="box-rates">
                                                   <p class="color19 fs14 fpw6">Avg. time spent (mins)</p>
                                                   <h3 class="color20 fpw4">
                                                   <?php 
                                                          if(isset($_GET['id'])){
                                                         include('../php/db_con.php');
                                                         $id=$_GET['id'];
                                                    $sql = "SELECT SUM(Login_Attempts) AS avg_time_spent FROM user_details WHERE Emp_ID ='$id'";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $total_assessment_time_seconds = $row['avg_time_spent'];
                                                        $total_assessment_time_minutess = $total_assessment_time_seconds ;
                                                      $total_assessment_time_minutess;
                                                    } if ($total_assessment_time_seconds === "0") {
                                               
                                                    $total_assessment_time_minutes = 0/1 ;
                                                    echo $total_assessment_time_minutes ;
                                                    echo '</h3>';                                            
                                                    }else{
                                                    
                                                            $sql = "SELECT SUM(Assessment_Time) + SUM(Training_Time)  AS total_assessment_time FROM arc_flash WHERE Emp_ID ='$id'";
                                                            $result = mysqli_query($con, $sql);
                                                            
                                                            if ($result) {
                                                                
                                                                 $row = mysqli_fetch_assoc($result);
                                                                $total_assessment_time_seconds = $row['total_assessment_time'];
                                                                 
                                                        
                                                                $total_assessment_time_minutes = $total_assessment_time_seconds/$total_assessment_time_minutess ;
                                                                
                                                                $total_assessment_time_minutess =$total_assessment_time_minutes/ 60;
                                                            
                                                            
                                                             $total_assessment_time_minutes_rounded = floor($total_assessment_time_minutess);
                                                             
                                                              if ($total_assessment_time_minutes - $total_assessment_time_minutes_rounded >= 0.6) {
                                                                    $total_assessment_time_minutes_rounded += 1;
                                                                }
                                                            
                                                                // Output the total assessment time in minutes
                                                                
                                                                echo '<h3 class="color20 fpw4"> ' . $total_assessment_time_minutes_rounded . '</h3>';
                                                            } }}
                                                        ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 p-1">
                                        <div class="box-rates">
                                            <p class="color19 fs14 fpw6">Total no. of session taken</p>
                                             <?php 
                                                         if(isset($_GET['id'])){
                                                         include('../php/db_con.php');
                                                         $id=$_GET['id'];
                                                    $sql = "SELECT Login_Attempts AS total_session_taken  FROM user_details WHERE Emp_ID ='$id'";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $total_session_taken_seconds = $row['total_session_taken'];
                                                        
                                                        // Convert total assessment time from seconds to minutes
                                                        $total_session_taken_minutes = $total_session_taken_seconds ;
                                                    
                                                        // Output the total assessment time in minutes
                                                     $total_session_taken_minutes;
                                                        echo '<h3 class="color20 fpw4"> ' . $total_session_taken_minutes . '</h3>';
                                                    } else {
                                                        // Handle query error
                                                        echo "Error executing query: " . mysqli_error($con);
                                                    }}
                                                   ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-lg-6  col-md-4 col-sm-12 p-1">
                                        <div class="box-rates">
                                            <p class="color19 fs14 fpw6">Full name</p>
                                            <?php 
                                                    if(isset($_GET['id'])){
                                                    include('../php/db_con.php');
                                                    $id=$_GET['id'];
                                                    $sql = "SELECT Name AS emp_full_name  FROM user_details WHERE Emp_ID ='$id'";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $emp_full_name = $row['emp_full_name'];
                                                    
                                                        echo '<h3 class="color20 fpw4"> ' . $emp_full_name . '</h3>';
                                                    } else {
                                                        // Handle query error
                                                        echo "Error executing query: " . mysqli_error($con);
                                                    }}
                                                   ?>   
                                        </div>
                                    </div>
                                    <div class="col-lg-6  col-md-4 col-sm-12 p-1">
                                        <div class="box-rates">
                                            <p class="color19 fs14 fpw6">Employee Id</p>
                                            <?php 
                                                       if(isset($_GET['id'])){
                                                         include('../php/db_con.php');
                                                         $id=$_GET['id'];
                                                     $sql = "SELECT Emp_ID AS emp_id  FROM user_details WHERE Emp_ID ='$id'";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $emp_id = $row['emp_id'];
                                                        
                                                        echo '<h3 class="color20 fpw4"> ' . $emp_id . '</h3>';
                                                    } else {
                                                        // Handle query error
                                                        echo "Error executing query: " . mysqli_error($con);
                                                    }}
                                                   ?>   
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-7 mgt">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 p-1">
                                        <div class="box-rates-graphs-arcflashtab1">
                                            <div class="graph-box">
                                                <div class="contents" style="height:100%">
                                                    <canvas id="EmployeeAvgTimeChart" height="200"></canvas>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                        <div class="col-lg-4 col-md-4 col-sm-6 p-1">
                                        <div class="box-rates mt-2 heightcard">
                                            <p class="color19 fs14 fpw6">Last training taken</p>
                                              <?php 
                                            if(isset($_GET['id'])){
                                                       include('../php/db_con.php');
                                                    $id=$_GET['id'];
                                                    $sql = "SELECT * FROM arc_flash WHERE Training_Time > 0 AND Emp_ID ='$id' ORDER BY Date DESC, Time DESC LIMIT 1";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $total_assessment_time_seconds = strtotime($row['Date']);
                                                        $status = $row['Status'];
                                                        $formattedDate = is_numeric($total_assessment_time_seconds) ? date('d F, Y', $total_assessment_time_seconds) : "-";
                                                        $statusStr = $status === "1" ? "Completed" : "Incompleted";
                                                        $statusStr = is_numeric($status) ? $statusStr : "-";
                                                        $trainingTime = $row['Training_Time'];
                                                        $trainingTime = $trainingTime/60;
                                                        $trainingTime = !is_numeric($trainingTime) ? "-" : "$trainingTime";
                                                        $trainingLogTime = $row['Time'];
                                                        
                                                        echo '<h3 class="color20 fpw6 fs20 ln30">' . $formattedDate . '  &nbsp; &nbsp;    |  &nbsp; &nbsp;    ' . $trainingLogTime . '</h3>';
                                                        echo '<p class="color19 fs14 fpw6 mt-2">Time spent in last training (mins)</p>';
                                                        echo '<h3 class="color20 fpw6 fs20 ln30">  ' . round($trainingTime) . '</h3>';
                                                        echo '<p class="color19 fs14 fpw6 mt-2">Status of training</p>';
                                                        echo '<h3 class="color20 fpw6 fs20 ln30"> ' .$statusStr  . '</h3>';
                                                    } else {
                                                        // Handle query error
                                                        echo "Error executing query: " . mysqli_error($con);
                                                    }
                                                }
                                                else {
                                                echo '<h3 class="color20 fpw6 fs20 ln30">-</h3>';
                                                echo '<p class="color19 fs14 fpw6 mt-2">Time spent in last training (mins)</p>';
                                                echo '<h3 class="color20 fpw6 fs20 ln30">-</h3>';
                                                echo '<p class="color19 fs14 fpw6 mt-2">Status of training</p>';
                                                echo '<h3 class="color20 fpw6 fs20 ln30">-</h3>';
                                                
                                                }
                                                ?>
                                        </div>
                                    </div>
                                     <div class="col-lg-4 col-md-4 col-sm-6 p-1">
                                        <div class="box-rates heightcard mt-2">
                                            <p class="color19 fs14 fpw6">Last Assessment Taken</p>
                                          <?php 
                                            if(isset($_GET['id'])){
                                                include('../php/db_con.php');
                                                $id = $_GET['id'];
                                                $sql = "SELECT * FROM arc_flash WHERE Assessment_Time > 0 AND Emp_ID ='$id' ORDER BY Date DESC, Time DESC LIMIT 1";
                                                $result = mysqli_query($con, $sql);
                                            
                                                if ($result) {
                                                    $row = mysqli_fetch_assoc($result);
                                                    $total_assessment_time_seconds = strtotime($row['Date']);
                                                    $formattedDate = is_numeric($total_assessment_time_seconds) ? date('d F, Y', $total_assessment_time_seconds) : "-";
                                                    
                                                    $status = $row['Status'];
                                                    $assessmentTime = $row['Assessment_Time'];
                                                    $assessmentTime=$assessmentTime/60;
                                                    $assessmentTime = is_numeric($assessmentTime) ? $assessmentTime : "-";
                                                    
                                                    $statusStr = $status === "1" ? "Pass" : "Fail";
                                                    $statusStr = is_numeric($status) ? $statusStr : "-";
                                                    $trainingLogTime = $row['Time'];
                                                    echo '<h3 class="color20 fpw6 fs20 ln30">' . $formattedDate . '  &nbsp; &nbsp;    |  &nbsp; &nbsp;    ' . $trainingLogTime . '</h3>';
                                                    echo '<p class="color19 fs14 fpw6 mt-2">Time spent in last assessment (mins)</p>';
                                                    echo '<h3 class="color20 fpw6 fs20 ln30">  ' . round($assessmentTime)  . '</h3>';
                                                    echo '<p class="color19 fs14 fpw6 mt-2">Status of assessment</p>';
                                                    echo '<h3 class="color20 fpw6 fs20 ln30"> ' . $statusStr . '</h3>';
                                                } else {
                                                    // Handle query error
                                                    echo "Error executing query: " . mysqli_error($con);
                                                }
                                            } else {
                                                // Placeholder text when ID is not set
                                                echo '<h3 class="color20 fpw6 fs20 ln30">-</h3>';
                                                echo '<p class="color19 fs14 fpw6 mt-2">Time spent in last assessment (mins)</p>';
                                                echo '<h3 class="color20 fpw6 fs20 ln30">-</h3>';
                                                echo '<p class="color19 fs14 fpw6 mt-2">Status of assessment</p>';
                                                echo '<h3 class="color20 fpw6 fs20 ln30">-</h3>';
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-lg-12 p-2">
                                        <div class="box-rates-employee-search">
                                            <!--<p class="fpw6">Search by</p>-->
                                            <!--<form action="#">-->
                                            <!--    <div class="row">-->
                                            <!--        <div class="col-lg-6">-->
                                            <!--            <div class="form-group">-->
                                            <!--                <label class="fs14 color21 fpw6">Name</label>-->
                                            <!--                <input type="text" placeholder="Search for a name">-->
                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--        <div class="col-lg-6">-->
                                            <!--            <div class="form-group">-->
                                            <!--                <label class="fs14 color21 fpw6">Employee Id</label>-->
                                            <!--                <input type="text" placeholder="12233435">-->
                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--</form>-->
                                                        <div class="data-show-suggesstion" style="scrollbar-width: thin; scrollbar-color: #2C59AF #D0E0FF;">
                                                            <p class="fpw6 color21 pb-2">Search Results:</p>
                                                            
                                                                    <?php 
                                                                       
                                                                        include('../php/db_con.php');
        
                                                                        $projects = "arc_flash"; // Corrected typo in variable name
                                                                        // Assuming $con is the database connection object
                                                                        $sql = "SELECT * FROM user_details WHERE Project = '$projects'";
                                                                        $result = mysqli_query($con, $sql);
                                                                        if ($result) {
                                                                           while ($row = mysqli_fetch_assoc($result)) {
                                                                                 $color = ($row['Emp_ID'] == $_GET['id']) ? '#D0E0FF' : '';
                                                                                 $borderRadius = '4px';
                                                                                 $border =($row['Emp_ID'] == $_GET['id']) ? '1px solid #2C59AF' : '';
                                                                              //   echo'<div href="?id=sharma_0015">';
                                                                           echo '<div class="flex-item" onclick="window.location.href=\'?id=' . $row['Emp_ID'] . '\'" style="background-color:' . $color . '; border-radius: ' . $borderRadius . '; border: ' . $border . ';">';

                                                                            echo '<p class="fs14 fpw6 color21 name">' . $row['Name'] . '</p>';
                                                                            echo '<p class="fs14 fpw6 color21">' . $row['Emp_ID'] . '</p>';
                                                                            echo '</div>';
                                                                        }
                                                                        } else {
                                                                            // Add error handling
                                                                            echo "Error: " . mysqli_error($con);
                                                                        }  
                                                                    ?>
                                                                    
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                   
                    
                    
                    
                    <div class="employee-training-assessment-box">
                        <div class="row">
                            <div class="col-lg-6 p-1">
                                <div class="training-box">
                                    <h4 class="heading">Training Section</h4>
                                    <div class="white-box">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 pb-3">
                                                <?php
                                                    include('../php/db_con.php');
                                                   
                                                    // Query to fetch session options
                                                    $sessionSql = "SELECT * FROM user_details WHERE Emp_ID = '$id'";
                                                    $sessionResult = mysqli_query($con, $sessionSql);
                                                    
                                                    $allSql = "SELECT SUM(Training_Time) AS Total_Training_Time, SUM(Status) AS Average_Status FROM arc_flash WHERE Emp_ID = '$id' AND Training_Time > 0";
                                                    $allSessionResult = mysqli_query($con, $allSql);
                                                    if ($allSessionResult) {
                                                        $row = mysqli_fetch_assoc($allSessionResult);
                                                        $totalSessionTime = $row['Total_Training_Time'];
                                                        $avgStatus = $row['Average_Status'];
                                                    }
                                                    
                                                    // Check if query was successful
                                                    if ($sessionResult) {
                                                            echo '<div class="slection-option">';
                                                            echo '<ul id="sessionSelect">'; 
                                                                echo "<li value='$totalSessionTime, $avgStatus'>All</li>"; 

                                                        
                                                        // Fetch session options and populate select element
                                                        while ($sessionRow = mysqli_fetch_assoc($sessionResult)) {
                                                            $session = $sessionRow['Login_Attempts'];
                                                            $trainingTime = $sessionRow['Training_Time']; 
                                                            $statusTime = $sessionRow['Status']; 
                                                            //echo "<option value=''>$session</option>";
                                                             for ($i = $session; $i >= 1; $i--) {
                                                                   $allSql = "SELECT SUM(Training_Time) AS Total_Training_Time, SUM(Status) AS Average_Status FROM arc_flash WHERE Emp_ID = '$id' AND Login_Attempt='$i' AND Training_Time > 0 ";
                                                            $allSessionResult = mysqli_query($con, $allSql);
                                                            if ($allSessionResult) {
                                                                $row = mysqli_fetch_assoc($allSessionResult);
                                                                $trainingTime = $row['Total_Training_Time'];
                                                                $statusTime = $row['Average_Status'];
                                                            }
                                                            echo "<li value='$trainingTime, $statusTime'>Session $i</li>";
                                                        }
                                                        }

                                                        // End select element
                                                        echo '</ul>';
                                                        echo '</div>';
                                                    } else {
                                                        // Handle query error
                                                        echo "Error executing query: " . mysqli_error($con);
                                                    }
                                                ?>
                                            </div>
                                            <div class="col-xl-12 col-lg-7 col-sm-5 pb-3">
                                                <div class="box-rates-wt">
                                                    <p class="color19 fs14 fpw6">Total time spent (mins) in training</p>
                                                   <h3 id="selectedTrainingTimeDiv" class="color20 fpw4"> </h3>
                                                     
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-1 col-sm-5 pb-3">
                                                <div class="box-rates-wt">
                                                    <p class="color19 fs14 fpw6">Status</p>
                                                     <?php 
                                                           if(isset($_GET['id'])){
                                                         include('../php/db_con.php');
                                                         $id=$_GET['id'];
                                                     $sql = "SELECT Status AS emp_training_status FROM arc_flash WHERE Emp_ID ='$id' AND Status > 0 ";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $emp_training_status_seconds = $row['emp_training_status'];
                                                        echo '<h3  id="statusTrainingTime" class="color20 fpw4"> ' . $emp_training_status_seconds . '</h3>';
                                                    } else {
                                                        // Handle query error
                                                        echo "Error executing query: " . mysqli_error($con);
                                                    }}
                                                   ?>   
                                                   
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 p-1">
                                <div class="training-box">
                                    <h4 class="heading">Assessment Section</h4>
                                    <div class="white-box">
                                        <div class="row">
                                             <div class="col-lg-2 col-sm-2 pb-3">
                                                 <?php
                                                    include('../php/db_con.php');
                                                   
                                                    // Query to fetch session options
                                                    $sessionSql = "SELECT * FROM user_details WHERE Emp_ID = '$id'";
                                                    $sessionResult = mysqli_query($con, $sessionSql);
                                                    
                                                    $allSql = "SELECT SUM(Assessment_Time) AS Total_Assessment_Time, AVG(Status) AS Average_Status FROM arc_flash WHERE Emp_ID = '$id' AND Assessment_Time > 0";
                                                    $allSessionResult = mysqli_query($con, $allSql);
                                                    if ($allSessionResult) {
                                                        $row = mysqli_fetch_assoc($allSessionResult);
                                                        $totalSessionTime = $row['Total_Assessment_Time'];
                                                        $avgStatus = $row['Average_Status'];
                                                    }
                                                    
                                                    // Check if query was successful
                                                    if ($sessionResult) {
                                                            echo '<div class="slection-option">';
                                                            echo '<select id="sessionSelectAssessment">'; 
                                                            echo "<option value='$totalSessionTime, $avgStatus'>All</option>"; 

                                                        
                                                        // Fetch session options and populate select element
                                                        while ($sessionRow = mysqli_fetch_assoc($sessionResult)) {
                                                            $session = $sessionRow['Login_Attempts'];
                                                            $assessmentTime = $sessionRow['Assessment_Time']; 
                                                            $statusTime = $sessionRow['Status']; 
                                                            //echo "<option value=''>$session</option>";
                                                             for ($i = $session; $i >= 1; $i--) {
                                                                   $allSql = "SELECT SUM(Assessment_Time) AS Total_Assessment_Time, AVG(Status) AS Average_Status FROM arc_flash WHERE Emp_ID = '$id' AND Login_Attempt='$i' AND Assessment_Time > 0";
                                                    $allSessionResult = mysqli_query($con, $allSql);
                                                    if ($allSessionResult) {
                                                        $row = mysqli_fetch_assoc($allSessionResult);
                                                        $assessmentTime = $row['Total_Assessment_Time'];
                                                        $statusTime = $row['Average_Status'];
                                                    }
                                                            echo "<option value='$assessmentTime, $statusTime'>Session $i</option>";
                                                        }
                                                        }

                                                        // End select element
                                                        echo '</select>';
                                                        echo '</div>';
                                                    } else {
                                                        // Handle query error
                                                        echo "Error executing query: " . mysqli_error($con);
                                                    }
                                                ?>
                                            </div>
                                            <div class="col-xl-12 col-lg-7 col-sm-5 pb-3">
                                                <div class="box-rates-wt">
                                                    <p class="color19 fs14 fpw6">Total time spent (mins) in Assessment</p>
                                                       <?php 
                                                         if(isset($_GET['id'])){
                                                         include('../php/db_con.php');
                                                         $id=$_GET['id'];
                                                    $sql = "SELECT SUM(Assessment_Time)AS emp_assessment_time_spent FROM arc_flash WHERE Emp_ID ='$id'";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $emp_assessment_time_spent_seconds = $row['emp_assessment_time_spent'];
                                                        
                                                        // Convert total assessment time from seconds to minutes
                                                        $emp_assessment_time_spent_minutes = $emp_assessment_time_spent_seconds ;
                                                        $emp_assessment_time_spent_minutess =$emp_assessment_time_spent_minutes/ 60;
                                                    
                                                    
                                                     $emp_assessment_time_spent_rounded = floor($emp_assessment_time_spent_minutess);
                                                     
                                                      if ($emp_assessment_time_spent_minutes - $emp_assessment_time_spent_rounded >= 0.6) {
                                                            $emp_assessment_time_spent_rounded += 1;
                                                        }
                                                    
                                                        // Output the total assessment time in minutes
                                                        echo '';
                                                       echo '<h3 id="selectedAssessmentTimeDiv" class="color20 fpw4"> ' . $emp_assessment_time_spent_rounded . '</h3>';
                                                    } else {
                                                        // Handle query error
                                                        echo "Error executing query: " . mysqli_error($con);
                                                    }}
                                                   ?>   
                                                    
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-2 col-sm-5 pb-3">
                                                <div class="box-rates-wt">
                                                    <p class="color19 neww fs14 fpw6">Status</p>
                                                       <?php 
                                                          if(isset($_GET['id'])){
                                                         include('../php/db_con.php');
                                                         $id=$_GET['id'];
                                                     $sql = "SELECT COUNT(Training_Time)AS emp_assessment_status FROM arc_flash WHERE Emp_ID ='$id' AND Assessment_Time > 0";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $emp_assessment_status = $row['emp_assessment_status'];
                                                        
                                                        echo '<h3 id="statusAssessmentTime" class="color20 fpw4"> ' . $emp_assessment_status . '</h3>';
                                                    } else {
                                                        // Handle query error
                                                        echo "Error executing query: " . mysqli_error($con);
                                                    }}
                                                   ?> 
                                                </div>
                                            </div>
                                           
                                        </div>
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
    include ('../inc/footer.php'); 
    ?>
    <script>
    
    function showEmpID(empId) {
        // Display the Employee ID using alert (you can replace this with any other method)
       console.log('Employee ID: ' + empId);
    }



document.getElementById('sessionSelect').addEventListener('change', function() {
    var selectedValue = this.value;

    // Split the selected value to get Training Time and Status separately
    var selectedValues = selectedValue.split(',');
    var selectedTrainingTimeSeconds = parseInt(selectedValues[0]);
    var selectedStatus = selectedValues[1];

    var selectedTrainingTimeMinutes = Math.floor(selectedTrainingTimeSeconds / 60);

    var selectedStatusValue = parseInt(selectedStatus);
    var status;
    var borderColor;

   if (!isNaN(selectedStatusValue)) {
        if (selectedStatusValue > 0) {
            status = "Completed";
            // Add the completed-border class to the parent element
            document.getElementById('statusTrainingTime').parentNode.classList.add('completed-border');
        } else {
            status = "Incomplete";
            // Remove the completed-border class from the parent element
            document.getElementById('statusTrainingTime').parentNode.classList.remove('completed-border');
        }
    } else {
        selectedTrainingTimeMinutes = "-";
        status = "-";
        // Remove the completed-border class if status is not a number
        document.getElementById('statusTrainingTime').parentNode.classList.remove('completed-border');
    }

    document.getElementById('selectedTrainingTimeDiv').innerText = selectedTrainingTimeMinutes;
    document.getElementById('statusTrainingTime').innerText = status;

    fetchStatusFromDatabase(selectedTrainingTimeSeconds); 
});

window.addEventListener('load', function() {
    // Trigger change event on sessionSelect to set default values
    var event = new Event('change');
    document.getElementById('sessionSelect').dispatchEvent(event);
});

// 2


document.getElementById('sessionSelectAssessment').addEventListener('change', function() {
    var selectedValue = this.value;

    // Split the selected value to get Assessment Time and Status separately
    var selectedValues = selectedValue.split(',');
    var selectedAssessmentTimeSeconds = parseInt(selectedValues[0]);
    var selectedStatus = selectedValues[1];

    var selectedAssessmentTimeMinutes = Math.floor(selectedAssessmentTimeSeconds / 60);

    var selectedStatusValue = parseFloat(selectedStatus);
    var status;
    var borderColor;
    
    
 if (!isNaN(selectedStatusValue)) {
        if (selectedStatusValue > 0.5) {
            status = "Pass";
            borderColor = "green"; 
            document.getElementById('statusAssessmentTime').parentNode.classList.add('completed-border');
        } else {
            status = "Fail";
             borderColor = "red"; 
              document.getElementById('statusAssessmentTime').parentNode.classList.remove('completed-border');
            document.getElementById('statusAssessmentTime').parentNode.classList.add('completed-border-fail');
        }
    } else {
       selectedAssessmentTimeMinutes = "-";
        status = "-";
        borderColor = ""; 
          document.getElementById('statusAssessmentTime').parentNode.classList.remove('completed-border-fail');
        document.getElementById('statusAssessmentTime').parentNode.classList.remove('completed-border');
    }
    
    document.getElementById('selectedAssessmentTimeDiv').innerText = selectedAssessmentTimeMinutes;
    document.getElementById('statusAssessmentTime').innerText = status;
    fetchStatusFromDatabase(selectedAssessmentTimeSeconds); 
    
 
});

    window.addEventListener('load', function() {
        // Trigger change event on sessionSelectAssessment to set default values
        var event = new Event('change');
        document.getElementById('sessionSelectAssessment').dispatchEvent(event);
    });


 </script>
 
 <script>
 
     // graph chart 1 
     
      <?php
     $total_assessment_time_seconds = array();
      $total_assessment_time_months = array();
    // Include database connection
   if(isset($_GET['id'])){
      include('../php/db_con.php');
        $id=$_GET['id'];
    // Query to fetch data GROUP BY MONTH(Date)
    

    
    $sql = "SELECT (SUM(Assessment_Time) + SUM(Training_Time))/60 AS total_assessment_time  FROM arc_flash WHERE Emp_ID ='$id' GROUP BY MONTH(Date)";
    $result = mysqli_query($con, $sql);

    // Loop through results
    $total_assessment_time = array();
    while($data = mysqli_fetch_array($result)) {
       
        $total_assessment_time[] = $data['total_assessment_time'];
        
    }
    
        for ($i = 0; $i < count($total_assessment_time); $i++) {
    
        if($i != 0){
            $total_assessment_time[$i] += $total_assessment_time[$i -1];
        }
        
    }
    }
    $sql = "SELECT DISTINCT MONTHNAME(Date) AS Month FROM arc_flash";
    $result = mysqli_query($con, $sql);
    
    // Check for errors
    if (!$result) {
        die('Error in SQL query: ' . mysqli_error($con));
    }
    
    // Loop through results
    $total_assessment_time_months = array();
    while ($data = mysqli_fetch_assoc($result)) {
        $total_assessment_time_months[] = $data['Month'];
    }
    
      ?>
    const valueArray = <?php echo json_encode($total_assessment_time); ?>;
    const valueArrays = <?php echo json_encode($total_assessment_time_months); ?>;
     

    const EmployeeAvgTime = {
          labels: valueArrays, 
          datasets: [
            {
              label: "",
              data: valueArray, 
              fill: false,
              borderColor: "#2C59AF", 
              tension: 0.1,
            },
          ],    
        };
        
        const newConfigEmployeeAvgTime = {
          type: "line",
          data: EmployeeAvgTime,
          options: {
            scales: {
              x: {
                ticks: {
                  color: "#2C59AF",
                  font: {
                    size: 12,
                    weight: 400,
                  },
                },
              },
              y: {
                  beginAtZero: true,
                ticks: {
                  color: "#2C59AF",
                  font: {
                    size: 12,
                    weight: 600,
                  },
                },
              },
            },
            elements: {
              line: {
                borderWidth: 2,
              },
              point: {
                radius: 2,
              },
            },
            plugins: {
              legend: {
                display: false,
              },
              tooltip: {
                 enabled: true, 
                mode: 'index', 
                intersect: false, 
                callbacks: {
                    label: function(context) {
                        return context.dataset.data[context.dataIndex]; 
                    }
                }
              },
            },
          },
        };
        
        // Initialize the yearly chart for the new chart box when the document is ready
        document.addEventListener("DOMContentLoaded", () => {
          const ctxNewEmployeeAvgTime = document.getElementById("EmployeeAvgTimeChart").getContext("2d");
          new Chart(ctxNewEmployeeAvgTime, newConfigEmployeeAvgTime);
        });
</script>

<script>
 <?php 
if(isset($_GET['id'])){
    include('php/db_con.php');
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM arc_flash WHERE Training_Time > 0 AND Emp_ID = '$id'";
    
    $result = mysqli_query($con, $sql);
    
    $completeCount_usertraining = 0;
    $incompleteCount_usertraining = 0;
    
    if ($result) {
        while($row = mysqli_fetch_assoc($result)){
            $status = $row['Status'];
            if($status == 0){
                $incompleteCount_usertraining++;
            } else if($status == 1){
                $completeCount_usertraining++;
            } else {
                // Error Handling for null status
            }
        }
    } else {
        // Handle query error
        echo "Error executing query: " . mysqli_error($con);
    }
} else {
    echo '<h2 class="fs32 color-black fpw7">-</h2>';
}
?>

const completedCount = <?php echo $completeCount_usertraining; ?>;
const incompletedCount = <?php echo $incompleteCount_usertraining; ?>;
                
        document.addEventListener('DOMContentLoaded', function () {
            
              if (completedCount === 0 && incompletedCount === 0) {
        console.log("No data available");
        document.getElementById('pieLabelsTrain').innerHTML = '<p style="text-align: center; font-size: 16px; color: #848484;">No data available</p>';
    }else{
          var ctx = document.getElementById('myPieChart').getContext('2d');
          var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
              labels: [],
              datasets: [{
                label: 'Training Status',
                data: [completedCount, incompletedCount],
                backgroundColor: [
                  '#002F8A', 
                  '#D0E0FF',
                ],
                hoverOffset: 4
              }]
            },
            options: {
              legend: {
                display: false
              }
            }
          });
        
          // Custom function to add labels with percentages to the right side of the pie chart
          var pieLabelsTrain = document.getElementById('pieLabelsTrain');
          var labels = [
            'Completed - <?php echo number_format($completeCount_usertraining, 2); ?>%',
            'Incompleted - <?php echo number_format($incompleteCount_usertraining, 2); ?>%'
          ]; // Adjust these labels and percentages as needed
          labels.forEach(function(label, index) {
            pieLabelsTrain.innerHTML += '<div class="intxtchart" ><span style="background-color:' + myPieChart.data.datasets[0].backgroundColor[index] + '; " class="dotcls"></span>' + label + '</div>';
          });
        }});



</script>

<script>
<?php 
if(isset($_GET['id'])){
    include('php/db_con.php');
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM arc_flash WHERE Assessment_Time > 0 AND Emp_ID = '$id'";
    
    $result = mysqli_query($con, $sql);
    
    $passCount_userassessment = 0;
    $failCount_userassessment = 0;
    $pass_percentage = 0;
    $fail_percentage = 0;

    if ($result) {
        while($row = mysqli_fetch_assoc($result)){
            $status = $row['Status'];
            if($status == 0){
                $failCount_userassessment++;
            } else if($status == 1){
                $passCount_userassessment++;
            } else {
                // Error Handling for null status
            }
        }

        $total_count = $passCount_userassessment + $failCount_userassessment;
        if ($total_count > 0) {
            $pass_percentage = ($passCount_userassessment / $total_count) * 100;
            $fail_percentage = ($failCount_userassessment / $total_count) * 100;
        }
    } else {
        // Handle query error
        echo "Error executing query: " . mysqli_error($con);
    }
} else {
    echo '<h2 class="fs32 color-black fpw7">-</h2>';
}
?>

document.addEventListener('DOMContentLoaded', function () {
    var pass_count = <?php echo $passCount_userassessment; ?>;
    var fail_count = <?php echo $failCount_userassessment; ?>;
    var pass_percentage = <?php echo $pass_percentage; ?>;
    var fail_percentage = <?php echo $fail_percentage; ?>;
    var total_count = pass_count + fail_count;

    if (total_count === 0) {
        console.log("No data available");
        document.getElementById('pieLabels').innerHTML = '<p style="text-align: center; font-size: 16px; color: #848484;">No data available</p>';
    } else {
        var ctx = document.getElementById('anotherPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [],
                datasets: [{
                    label: 'Assessment Status',
                    data: [pass_count, fail_count],
                    backgroundColor: [
                        '#2C59AF',
                        '#E42900'
                    ]
                }]
            },
            options: {
                hoverOffset: 4
            }
        });

        var pieLabels = document.getElementById('pieLabels');
        var labels = [
            'Pass - ' + pass_percentage.toFixed(2) + '%',
            'Fail - ' + fail_percentage.toFixed(2) + '%'
        ];
        labels.forEach(function (label, index) {
            pieLabels.innerHTML += '<div class="intxtchart">' +
                '<span style="background-color:' + myPieChart.data.datasets[0].backgroundColor[index] + '; " class="dotcls"></span>' +
                label +
                '</div>';
        });
    }
});


</script>

