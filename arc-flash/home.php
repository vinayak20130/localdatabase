<?php 
include ('../authentication.php');
include ('../inc/header.php');
?>



                <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                    <div class="main-dashboard-content-box">
                        <div class="row">
                            <!--<div class="col-lg-7">-->
                            <!--    <div class="row">-->
                                    <div class="col-lg-4 col-md-6 col-sm-6 p-1">
                                        <div class="main-users-box-arc">
                                            <div class="total-user-box">
                                                 <?php 
                                                         include('../php/db_con.php');
                                                    $sql = "SELECT COUNT(id)AS total_user  FROM user_details WHERE Project ='arc_flash'";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $totalUser = $row['total_user'];
                                                        
                                                        // Output the total assessment time in minutes
                                                        echo '<p class="color19 fpw6 fs14 ln20">Total no. of users </p>';
                                                        echo '<h3 class="color20 fpw4"> ' . $totalUser . '</h3>';
                                                    } else {
                                                        // Handle query error
                                                        echo "Error executing query: " . mysqli_error($con);
                                                    }
                                                   ?>
                                            </div>
                                        </div>
                                        <div class="graph-box-arc">
                                            
                                            <div class="content" id="tabContent2">
                                                <canvas id="arcGp10" height="120"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 p-1">
                                        <div class="main-users-box-arc">
                                            <div class="total-user-box">
                                                <?php 
                                                         include('../php/db_con.php');
                                                    $sql = "SELECT SUM(Assessment_Time) + SUM(Training_Time) AS total_assessment_training_time FROM arc_flash";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $total_assessment_training_time = $row['total_assessment_training_time'];
                                                        
                                                       
                                                        $total_assessment_training_time_minutes = $total_assessment_training_time ;
                                                         $total_assessment_time_minutess =$total_assessment_training_time_minutes/ 60;
                                                    
                                                    
                                                     $total_assessment_time_minutes_rounded = floor($total_assessment_time_minutess);
                                                     
                                                      if ($total_assessment_training_time_minutes - $total_assessment_time_minutes_rounded >= 0.6) {
                                                            $total_assessment_time_minutes_rounded += 1;
                                                        }
                                                    
                                                        // Output the total assessment time in minutes
                                                        echo '<p class="color19 fpw6 fs14 ln20">Total time spent (mins) </p>';
                                                        echo '<h3 class="color20 fpw4"> ' . $total_assessment_time_minutes_rounded . '</h3>';
                                                    } else {
                                                        // Handle query error
                                                        echo "Error executing query: " . mysqli_error($con);
                                                    }
                                                        ?>
                                               
                                            </div>
                                        </div>
                                        <div class="graph-box-arc">
                                            <div class="content" id="tabContent2">
                                                <canvas id="arcGp2" height="120"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12  p-1">
                                        
                                       <div class="tab-respinsive">
                                            <div class="main-users-box-arc">
                                            <div class="total-user-box">
                                                  <p class="color19 fpw6 fs14 ln20">Average times spent (mins)</p>
                                                  <?php 
                                                         include('../php/db_con.php');
                                                    $sql = "SELECT SUM(Login_Attempts) AS total_assessment_time FROM user_details WHERE Project ='arc_flash'";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $total_assessment_time_seconds = $row['total_assessment_time'];
                                                        $total_assessment_time_minutess = $total_assessment_time_seconds ;
                                                     
                                                   if ($total_assessment_time_minutess === "0") {
                                               
                                                $total_assessment_time_minutess = 0/1 ;
                                                 $total_assessment_time_minutess ;
                                                                                            
}else{
                                                    $sql = "SELECT SUM(Assessment_Time) + SUM(Training_Time)  AS total_assessment_time FROM arc_flash";
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
                                                     }}}
                                                        echo '<h3 class="color20 fpw4"> ' . $total_assessment_time_minutes_rounded . '</h3>';
                                                      //   echo '<h3 class="color20 fpw4"> ' . $total_assessment_time_minutess . '</h3>';
                                                    
                                                    
                                                        ?>

                                              
                                            </div>
                                        </div>
                                         <div class="main-users-box-arc mt-2">
                                            <div class="total-user-box">
                                                      <?php 
                                                             include('../php/db_con.php');
                                                             
                                                             $thirty_days_ago = date('Y-m-d', strtotime('-30 days'));
                                                             
                                                        $sql = "SELECT COUNT(id)AS total_assessment_time  FROM user_details WHERE Project ='arc_flash' AND Date>='$thirty_days_ago'";
                                                        $result = mysqli_query($con, $sql);
                                                        
                                                        if ($result) {
                                                            $row = mysqli_fetch_assoc($result);
                                                            $total_assessment_time_seconds = $row['total_assessment_time'];
                                                            
                                                            // Convert total assessment time from seconds to minutes
                                                            $total_assessment_time_minutes = $total_assessment_time_seconds ;
                                                        
                                                            // Output the total assessment time in minutes
                                                            echo '<p class="color19 fpw6 fs14 ln20">No. of users in last 30 days</p>';
                                                            echo '<h3 class="color20 fpw4"> ' . $total_assessment_time_minutes . '</h3>';
                                                        } else {
                                                            // Handle query error
                                                            echo "Error executing query: " . mysqli_error($con);
                                                        }
                                                            ?>
                                            </div>
                                        </div>
                                       <div class="main-users-box-arc mt-2">
                                            <div class="total-user-box">
                                                 <?php 
                                                     include('../php/db_con.php');
                                                     
                                                   $thirty_days_ago = date('Y-m-d', strtotime('-30 days'));
                                                $sql = "SELECT SUM(Assessment_Time) + SUM(Training_Time) AS total_assessment_time FROM arc_flash WHERE Date>='$thirty_days_ago'";
                                                $result = mysqli_query($con, $sql);
                                                
                                                if ($result) {
                                                    $row = mysqli_fetch_assoc($result);
                                                    $total_assessment_time_seconds = $row['total_assessment_time'];
                                                    
                                                    // Convert total assessment time from seconds to minutes
                                                    $total_assessment_time_minutes = $total_assessment_time_seconds ;
                                                
                                                      $total_assessment_time_minutess =$total_assessment_time_minutes/ 60;
                                                        
                                                        
                                                         $total_assessment_time_minutes_rounded = floor($total_assessment_time_minutess);
                                                         
                                                          if ($total_assessment_time_minutes - $total_assessment_time_minutes_rounded >= 0.6) {
                                                                $total_assessment_time_minutes_rounded += 1;
                                                            }
                                                
                                                
                                                    // Output the total assessment time in minutes
                                                    echo ' <p class="color19 fpw6 fs14 ln20">Time spent (mins) in last 30 days</p>';
                                                    echo '<h3 class="color20 fpw4"> ' . $total_assessment_time_minutes_rounded . '</h3>';
                                                } else {
                                                    // Handle query error
                                                    echo "Error executing query: " . mysqli_error($con);
                                                }
                                                    ?>
                                               
                                            </div>
                                        </div>
                                       </div>

                                        
                                    </div>
                            <!--    </div>-->
                            <!--</div>-->
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 p-1">
                            <div class="pi-chart-box">
                                <p class="color19 fpw6 fs14 ln20">Training Completed Count</p>
                                <div class="chart-container" style="position: relative;">
                                  <canvas id="myPieChart"></canvas>
                                  <div id="pieLabelsTrain" class ="othercontent-out"></div>
                                </div>

                            </div>
                        </div>
                         <div class="col-lg-6 col-md-6 col-sm-12 p-1">
                            <div class="pi-chart-box">
                                <p class="color19 fpw6 fs14 ln20">Assessment Completed Count</p>
                                 <div class="chart-container" style="position: relative;" id="pieChartContainer">
                                   <canvas id="anotherPieChart"></canvas>
                                  <div id="pieLabels" class ="othercontent-out"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6 p-1">
                            <div id="training-employee-box" class="training-employee-box">
                                <div id="tab-option" class="tab-option">
                                    <ul id="tabs" class="tabs">
                                        <li class="tab-link current" id="tab-1" data-tab="tab-1" onclick="changeTab(this)">Training Section</li>
                                        <li class="tab-link" id="tab-2" data-tab="tab-2" onclick="changeTab(this)">Employee Report</li>
                                    </ul>
                                    <div id="tab-1-content" class="tab-content current">
                                        <div class="mb20">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-6 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            
                                                                 <?php 
                                                                         include('../php/db_con.php');
                                                                         
                                                                       $thirty_days_ago = date('Y-m-d', strtotime('-30 days'));
                                                                    $sql = "SELECT COUNT(TrainingAttempted)AS total_assessment_time  FROM user_details WHERE TrainingAttempted ='1' AND Project='arc_flash'";
                                                                    $result = mysqli_query($con, $sql);
                                                                    
                                                                    if ($result) {
                                                                        $row = mysqli_fetch_assoc($result);
                                                                        $total_assessment_time_seconds = $row['total_assessment_time'];
                                                                        
                                                                        // Convert total assessment time from seconds to minutes
                                                                        $total_assessment_time_minutes = $total_assessment_time_seconds ;
                                                                    
                                                                        // Output the total assessment time in minutes
                                                                        echo '  <p class="color19 fpw6 fs14 ln20">Total no. of participants</p>';
                                                                        echo '<h3 class="color20 fpw4"> ' . $total_assessment_time_minutes . '</h3>';
                                                                    } else {
                                                                        // Handle query error
                                                                        echo "Error executing query: " . mysqli_error($con);
                                                                    }
                                                                        ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12  col-6  p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                    <?php 
                                                             include('../php/db_con.php');
                                                        
                                                        $sql = "SELECT SUM(Training_Time) AS total_assessment_time  FROM arc_flash";
                                                        $result = mysqli_query($con, $sql);
                                                        
                                                        if ($result) {
                                                            $row = mysqli_fetch_assoc($result);
                                                            $total_assessment_time_seconds = $row['total_assessment_time'];
                                                            
                                                            // Convert total assessment time from seconds to minutes
                                                            $total_assessment_time_minutes = $total_assessment_time_seconds ;
                                                            
                                                              $total_assessment_time_minutess =$total_assessment_time_minutes/60;
                                                    
                                                    
                                                     $total_assessment_time_minutes_rounded = floor($total_assessment_time_minutess);
                                                     
                                                      if ($total_assessment_time_minutes - $total_assessment_time_minutes_rounded >= 0.6) {
                                                            $total_assessment_time_minutes_rounded += 1;
                                                        }
                                                            
                                                        
                                                            // Output the total assessment time in minutes
                                                            echo '<p class="color19 fpw6 fs14 ln20">Total training time (mins)</p>';
                                                            echo '<h3 class="color20 fpw4"> ' . $total_assessment_time_minutes_rounded . '</h3>';
                                                        } else {
                                                            // Handle query error
                                                            echo "Error executing query: " . mysqli_error($con);
                                                        }
                                                            ?>
                                                            
                                                           
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 p-1"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="tab-2-content" class="tab-content">
                                        <div class="mb20">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                              <?php 
                                                                     include('../php/db_con.php');
                                                                     
                                                                $sql = "SELECT COUNT(TrainingAttempted) AS total_assessment_time FROM user_details WHERE Project='arc_flash' AND TrainingAttempted = 1";
                                                                $result = mysqli_query($con, $sql);
                                                                
                                                                if ($result) {
                                                                    $row = mysqli_fetch_assoc($result);
                                                                    $total_assessment_time_seconds = $row['total_assessment_time'];
                                                                    
                                                                    // Convert total assessment time from seconds to minutes
                                                                    $total_assessment_time_minutes = $total_assessment_time_seconds ;
                                                                
                                                                    // Output the total assessment time in minutes
                                                                    echo '<p class="color19 fpw6 fs14 ln20">Completed count</p>';
                                                                    echo '<h3 class="color20 fpw4"> ' . $total_assessment_time_minutes . '</h3>';
                                                                } else {
                                                                    // Handle query error
                                                                    echo "Error executing query: " . mysqli_error($con);
                                                                }
                                                                    ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                               <?php 
                                                                     include('../php/db_con.php');
                                                                     
                                                                $sql = "SELECT COUNT(TrainingAttempted) AS total_assessment_time FROM user_details WHERE Project='arc_flash' AND TrainingAttempted = 0";
                                                                $result = mysqli_query($con, $sql);
                                                                
                                                                if ($result) {
                                                                    $row = mysqli_fetch_assoc($result);
                                                                    $total_assessment_time_seconds = $row['total_assessment_time'];
                                                                    
                                                                    // Convert total assessment time from seconds to minutes
                                                                    $total_assessment_time_minutes = $total_assessment_time_seconds ;
                                                                
                                                                    // Output the total assessment time in minutes
                                                                    echo ' <p class="color19 fpw6 fs14 ln20">Incompleted count</p>';
                                                                    echo '<h3 class="color20 fpw4"> ' . $total_assessment_time_minutes . '</h3>';
                                                                } else {
                                                                    // Handle query error
                                                                    echo "Error executing query: " . mysqli_error($con);
                                                                }
                                                                    ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                          

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                         
                                                        <th class="fpw6">Employee Name</th>
                                                        <th class="fpw6">Employee ID</th>
                                                        <th class="fpw6">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php 
                                                        include('../php/db_con.php');
                                                      $sql = "SELECT * FROM user_details WHERE Project = 'arc_flash' ";
                                                                        $result = mysqli_query($con, $sql);
                                                                        
                                                                        if($result){
                                                                            
                                                                                            $counter = 1;                                              
                                                                             // Initialize array outside the loop
                                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                            $Emp_ID = $row['Emp_ID'];
                                                                                
                                                                              
                                                                                
                                                                                // Add data to the array
                                                                echo '<tr>';
                                                                echo '<td class="wid1" data-label="Account">' . $counter . '.</td>';
                                                                      echo '<td class="wid6" data-label="Emp_ID">' . $row['Name'] . '</td>';
                                                                echo '<td class="wid3" data-label="Emp_ID">' . $row['Emp_ID'] . '</td>';
                                                                
                                                                echo '<td class="wid1" data-label="Amount">';
                                                                
                                                              if ($row['TrainingAttempted'] == '0') {
                                                                    echo '<span><img src="../assets/img/image/red-circle.png" /></span> &nbsp; Incomplete';
                                                                } else {
                                                                    echo '<span><img src="../assets/img/image/circle.png" /></span> &nbsp; Complete';
                                                                }
                                                                                                                        echo '</td>';
                                                                echo '</tr>';
                                                                
                                                                   $counter++;
                                                            }
                                                            
                                                                } else {
                                                                    // Handle query error
                                                                    echo "Error executing query: " . mysqli_error($con);
                                                                }
                                                            
                                                        ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 p-1">
                            <div class="tab-parent">
                                <div class="tab-container">
                                    <div class="tabs">
                                        <button class="tab-btn active" data-tab="tab1">Assessment Section</button>
                                        <button class="tab-btn" data-tab="tab2">Employee Report</button>
                                    </div>
                                    <div class="tab-content active" id="tab1">
                                        <div class="mb20">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12  col-6  p-1">
                                                    <div class="main-box-assessment">
                                                        <div class="total-user-box">
                                                           <?php 
                                                                 include('../php/db_con.php');
                                                            
                                                            $sql = "SELECT COUNT(DISTINCT Emp_ID) AS total_assessment_time FROM arc_flash WHERE Assessment_Time > 0 ";
                                                            $result = mysqli_query($con, $sql);
                                                            
                                                            if ($result) {
                                                                $row = mysqli_fetch_assoc($result);
                                                                $total_assessment_time_seconds = $row['total_assessment_time'];
                                                                
                                                                // Convert total assessment time from seconds to minutes
                                                                $total_assessment_time_minutes = $total_assessment_time_seconds ;
                                                            
                                                                // Output the total assessment time in minutes
                                                                echo ' <p class="color19 fpw6 fs14 ln20">Assessments participants count</p>';
                                                                echo '<h3 class="color20 fpw4"> ' . $total_assessment_time_minutes . '</h3>';
                                                            } else {
                                                                // Handle query error
                                                                echo "Error executing query: " . mysqli_error($con);
                                                            }
                                                                ?>
                                                            
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12  col-6  p-1">
                                                    <div class="main-box-assessment">
                                                        <div class="total-user-box">
                                                            <?php 
                                                                     include('../php/db_con.php');
                                                                
                                                                $sql = "SELECT SUM(Assessment_Time) AS total_assessment_time FROM arc_flash ";
                                                                $result = mysqli_query($con, $sql);
                                                                
                                                                if ($result) {
                                                                    $row = mysqli_fetch_assoc($result);
                                                                    $total_assessment_time_seconds = $row['total_assessment_time'];
                                                                    
                                                                    // Convert total assessment time from seconds to minutes
                                                                    $total_assessment_time_minutes = $total_assessment_time_seconds ;
                                                                    
                                                                    $total_assessment_time_minutess =$total_assessment_time_minutes/ 60;
                                                    
                                                    
                                                             $total_assessment_time_minutes_rounded = floor($total_assessment_time_minutess);
                                                             
                                                              if ($total_assessment_time_minutes - $total_assessment_time_minutes_rounded >= 0.6) {
                                                            $total_assessment_time_minutes_rounded += 1;
                                                                  }
                                                                
                                                                    // Output the total assessment time in minutes
                                                                    echo ' <p class="color19 fpw6 fs14 ln20">Total assessment time (mins)</p>';
                                                                    echo '<h3 class="color20 fpw4"> ' . $total_assessment_time_minutes_rounded . '</h3>';
                                                                } else {
                                                                    // Handle query error
                                                                    echo "Error executing query: " . mysqli_error($con);
                                                                }
                                                                    ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 p-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content" id="tab2">
                                        <div class="mb20">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                                       <?php
                                                            include('../php/db_con.php');
                                                            
                                                            // Check database connection
                                                            if (!$con) {
                                                                echo "Connection failed";
                                                            }
                                                            
                                                            // Initialize pass and fail counts
                                                            $pass_count = 0;
                                                            $fail_count = 0;
                                                            $not_Att = 0;
                                                            // Query to fetch all employee IDs
                                                            $sql_emp_ids = "SELECT Emp_ID,Name FROM user_details WHERE Project = 'arc_flash'";
                                                            $result_emp_ids = mysqli_query($con, $sql_emp_ids);
                                                            
                                                            // Check if the query executed successfully
                                                            if ($result_emp_ids) {
                                                                // Loop through each employee ID
                                                                while ($row_emp_ids = mysqli_fetch_assoc($result_emp_ids)) {
                                                                    $emp_ID = $row_emp_ids['Emp_ID'];
                                                                 $Name =  $row_emp_ids['Name'];
                                                                    // Query to count passes and fails for each employee ID
                                                                    $sql_counts = "SELECT Status AS status FROM arc_flash WHERE Emp_ID = '$emp_ID' ORDER BY Date DESC LIMIT 1" ;
                                                                    $result_counts = mysqli_query($con, $sql_counts);
                                                                    $row_counts = mysqli_fetch_assoc($result_counts);
                                                                   $status = $row_counts['status'];
                                                                   
                                                                   
                                                                    // Update pass and fail counts based on status
                                                                    if ($status == null) {
                                                                      $not_Att++;
                                                                    } else  if ($status > '0'){
                                                                          $pass_count++;
                                                                    }else{
                                                                          $fail_count++;
                                                                    }
                                                                }
                                                                
                                                                echo '<p class="color19 fpw6 fs14 ln20">Pass count</p>';
                                                                echo '<h3 class="color20 fpw4">' . $pass_count . '</h3>';
                                                                 //echo '<h3 class="color20 fpw4">' . $fail_count . '</h3>';
                                                            } else {
                                                                // Handle query error
                                                                echo "Error executing query: " . mysqli_error($con);
                                                            }
                                                            
                                                            // Close database connection
                                                         //   mysqli_close($con);
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                               
                                                                <p class="color19 fpw6 fs14 ln20">Fail count</p>
                                                               <h3 class="color20 fpw4"><?php echo  $fail_count; ?></h3>

                                                           

                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-4 col-sm-4 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                               
                                                                <p class="color19 fpw6 fs14 ln20">Not Attempted</p>
                                                             <h3 class="color20 fpw4"><?php echo $not_Att; ?></h3>

                                                           

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                         <?php
                                    include('../php/db_con.php');
                                    
                                    // Check database connection
                                    if (!$con) {
                                        echo "Connection failed";
                                    }
                                    
                                    // Query to fetch employee IDs and names
                                    $sql_emp_ids = "SELECT Emp_ID, Name FROM user_details WHERE Project = 'arc_flash'";
                                    $result_emp_ids = mysqli_query($con, $sql_emp_ids);
                                    
                                    // Check if the query executed successfully
                                    if ($result_emp_ids) {
                                        // Start the table
                                        echo '<table>';
                                        echo '<tr class="bg23">';
                                        echo '<th>Serial</th>';
                                        echo '<th>Name</th>';
                                        echo '<th>Emp_ID</th>';
                                        echo '<th>Status</th>';
                                        echo '</tr>';
                                        
                                        // Initialize counter
                                        $counter = 1;
                                        
                                        // Loop through each employee
                                        while ($row_emp_ids = mysqli_fetch_assoc($result_emp_ids)) {
                                            $emp_ID = $row_emp_ids['Emp_ID'];
                                            $Name =  $row_emp_ids['Name'];
                                            
                                            // Query to fetch the latest status for each employee
                                            $sql_status = "SELECT Status FROM arc_flash WHERE Emp_ID = '$emp_ID' ORDER BY Date DESC LIMIT 1";
                                            $result_status = mysqli_query($con, $sql_status);
                                            
                                            // Check if the query executed successfully
                                            if ($result_status) {
                                                $row_status = mysqli_fetch_assoc($result_status);
                                                $status = $row_status['Status'];
                                                
                                                // Output the row with employee details and status
                                                echo '<tr>';
                                                echo '<td>' . $counter . '</td>';
                                                echo '<td>' . $Name . '</td>';
                                                echo '<td>' . $emp_ID . '</td>';
                                                echo '<td>';
                                                // if ($status == '0') {
                                                //     echo '<span><img src="../assets/img/image/red-circle.png" /></span> Fail';
                                                // } else {
                                                //     echo '<span><img src="../assets/img/image/circle.png" /></span> Pass';
                                                // }
                                                
                                                if ($status == null) {
                                        echo '<span><img src="../assets/img/image/greydot.png" /></span> &nbsp; Not Attempted';
                                    } else if ($status == '1') {
                                        echo '<span><img src="../assets/img/image/circle.png" /></span> &nbsp; Pass';
                                    } else {
                                         echo '<span><img src="../assets/img/image/red-circle.png" /></span> &nbsp; Fail';
                                    }
                                                echo '</td>';
                                                echo '</tr>';
                                                
                                                // Increment the counter
                                                $counter++;
                                            } else {
                                                // Handle query error
                                                echo "Error executing query: " . mysqli_error($con);
                                            }
                                        }
                                        
                                        // End the table
                                        echo '</table>';
                                    } else {
                                        // Handle query error
                                        echo "Error executing query: " . mysqli_error($con);
                                    }
                                    
                                    // Close database connection
                                    mysqli_close($con);?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-sm-12"></div>
            </div>
        </div>
    </section>

    <?php
         include ('../inc/footer.php'); 
    ?>

<script>
    
      function renderArcGp1Chart() {
     <?php
     $total_assessment_time_seconds = array();
       $total_assessment_time_months = array();
    // Include database connection
    include('../php/db_con.php');
    if (!$con) {
        echo "heell";
    }
    // Query to fetch data
    $sql = "SELECT COUNT(id) AS total_assessment_time  FROM user_details WHERE Project ='arc_flash' GROUP BY MONTH(Date)";
    $result = mysqli_query($con, $sql);

    // Loop through results
    while($data = mysqli_fetch_array($result)) {
       
          
        $total_assessment_time[] = $data['total_assessment_time'];
    }
        for ($i = 0; $i < count($total_assessment_time); $i++) {
    
        if($i != 0){
            $total_assessment_time[$i] += $total_assessment_time[$i -1];
        }
        
    }
    
    $sql = "SELECT DISTINCT MONTHNAME(Date) AS Month FROM user_details";
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
    
                                                        $sql = "SELECT COUNT(id)AS total_assessment_time  FROM user_details WHERE Project ='arc_flash'";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $totalUser = $row['total_assessment_time'];
                                                    }
    
      ?>
    const valueArray = <?php echo json_encode($total_assessment_time); ?>;
    const valueArrays = <?php echo json_encode($total_assessment_time_months); ?>;
    const totalUsers = <?php echo ($totalUser); ?>;


// Construct the data object
const arcGp1Data = {
    labels: valueArrays,
    datasets: [{
        label: "",
        data: valueArray, // Use the fetched data here
        fill: false,
        borderColor: "#2C59AF",
        tension: 0.1,
    }],
};

    // Configuration for the chart
    const arcGp1Config = {
        type: "line",
        data: arcGp1Data,
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
                     stepSize: 1,
                      min: 0, // Set the minimum value of the y-axis
                        max: totalUsers + 2,
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

    // Initialize the chart
    const arcGp1ChartInstance = new Chart(
        document.getElementById("arcGp10").getContext("2d"),
        arcGp1Config
    );
}

// Call the function to render the chart when the document is ready
document.addEventListener("DOMContentLoaded", renderArcGp1Chart);
</script>

<script>
   <?php
        // Include database connection
        include('../php/db_con.php');
        
        // Check database connection
        if (!$con) {
            echo "Connection failed";
        }
        
        // Query to fetch completed assessments count
        $sql_completed = "SELECT COUNT(*) AS completed_count FROM user_details WHERE Project = 'arc_flash' AND TrainingAttempted = 1";
        $result_completed = mysqli_query($con, $sql_completed);
        $row_completed = mysqli_fetch_assoc($result_completed);
        $completed_count = $row_completed['completed_count'];
        
        // Query to fetch incompleted assessments count
        $sql_incompleted = "SELECT COUNT(*) AS incompleted_count FROM user_details WHERE Project = 'arc_flash' AND TrainingAttempted = 0";
        $result_incompleted = mysqli_query($con, $sql_incompleted);
        $row_incompleted = mysqli_fetch_assoc($result_incompleted);
        $incompleted_count = $row_incompleted['incompleted_count'];
        
        // Calculate total count
        $total_count = $completed_count + $incompleted_count;
        
        // Calculate percentages
        $completed_percentage = ($completed_count / $total_count) * 100;
        $incompleted_percentage = ($incompleted_count / $total_count) * 100;
        
        // Close database connection
        mysqli_close($con);
        ?>
// 'Completed - <?php echo number_format($completed_percentage, 2); ?>%', 'Incompleted - <?php echo number_format($incompleted_percentage, 2); ?>%'

        const completedCount = <?php echo $completed_count; ?>;
        const incompletedCount = <?php echo $incompleted_count; ?>;
                
        document.addEventListener('DOMContentLoaded', function () {
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
            'Completed - <?php echo number_format($completed_percentage, 2); ?>%',
            'Incompleted - <?php echo number_format($incompleted_percentage, 2); ?>%'
          ]; // Adjust these labels and percentages as needed
          labels.forEach(function(label, index) {
            pieLabelsTrain.innerHTML += '<div class="intxtchart"><span class="dotcls" style="background-color:' + myPieChart.data.datasets[0].backgroundColor[index] + ';"></span>' + label + '</div>';
          });
        });



</script>

<script>
        <?php
        // Include database connection
        include('../php/db_con.php');
        
        // Check database connection
        if (!$con) {
            echo "Connection failed";
        }
        
        // Initialize pass, fail, and not attempted counts
        $pass_count = 0;
        $fail_count = 0;
        $not_Att = 0;
        
        // Query to fetch all employee IDs
        $sql_emp_ids = "SELECT Emp_ID, Name FROM user_details WHERE Project = 'arc_flash'";
        $result_emp_ids = mysqli_query($con, $sql_emp_ids);
        
        // Check if the query executed successfully
        if ($result_emp_ids) {
            // Loop through each employee ID
            while ($row_emp_ids = mysqli_fetch_assoc($result_emp_ids)) {
                $emp_ID = $row_emp_ids['Emp_ID'];
                $Name = $row_emp_ids['Name'];
        
                // Query to count passes and fails for each employee ID
                $sql_counts = "SELECT Status AS status FROM arc_flash WHERE Emp_ID = '$emp_ID' ORDER BY Date DESC LIMIT 1";
                $result_counts = mysqli_query($con, $sql_counts);
                $row_counts = mysqli_fetch_assoc($result_counts);
                $status = $row_counts['status'];
        
                // Update pass, fail, and not attempted counts based on status
                if ($status == null) {
                    $not_Att++;
                } else if ($status > '0') {
                    $pass_count++;
                } else {
                    $fail_count++;
                }
            }
        
            // Close database connection
            mysqli_close($con);
        
            // Calculate total count
            $total_count = $pass_count + $fail_count + $not_Att;
        
            // Calculate percentages
            $pass_percentage = ($pass_count / $total_count) * 100;
            $fail_percentage = ($fail_count / $total_count) * 100;
            $not_Att_percentage = ($not_Att / $total_count) * 100;
        } else {
            // Handle query error
            echo "Error executing query: " . mysqli_error($con);
        }
        ?>
        // 'Pass - <?php echo number_format($pass_percentage, 2); ?>%', 'Fail - <?php echo number_format($fail_percentage, 2); ?>%', 'Not Attempted - <?php echo number_format($not_Att_percentage, 2); ?>%'
 document.addEventListener('DOMContentLoaded', function () {
    var pass_count = <?php echo $pass_count; ?>;
    var fail_count = <?php echo $fail_count; ?>;
    var not_Att = <?php echo $not_Att; ?>;
    var total_count = pass_count + fail_count + not_Att;

    var ctx = document.getElementById('anotherPieChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [],
            datasets: [{
                label: 'Assessment Status',
                data: [pass_count, fail_count, not_Att],
                backgroundColor: [
                    '#2C59AF',
                    '#E42900', 
                    '#D0E0FF' 
                ]
            }]
        },
        options: {
            hoverOffset: 4
        }
    });

    // Custom function to add labels with percentages to the right side of the pie chart
    var pieLabels = document.getElementById('pieLabels');
    var labels = [
        'Pass - <?php echo number_format(($pass_count / $total_count) * 100, 2); ?>%',
        'Fail - <?php echo number_format(($fail_count / $total_count) * 100, 2); ?>%',
        'Not Attempted - <?php echo number_format(($not_Att / $total_count) * 100, 2); ?>%'
    ]; // Adjust these labels and percentages as needed
    labels.forEach(function(label, index) {
    pieLabels.innerHTML += '<div class="intxtchart" >' +
        '<span class="dotcls" style="background-color:' + myPieChart.data.datasets[0].backgroundColor[index] + '; "></span>' +
        label +
        '</div>';
});

});
</script>
























