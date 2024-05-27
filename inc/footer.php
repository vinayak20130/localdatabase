<footer>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-12">
                    <div class="find-address-box">
                        <p><span><img src="../assets/img/image/location.png" /></span> &nbsp; Find us at</p>
                        <p>428 Suncity Success Tower, Sector 65 Gurugram IN</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="terms">
                        <a href="">Terms & Conditions</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-details">
                        <p><span><img src="../assets/img/image/call.png" /></span> &nbsp; In case of help, reach us at</p>
                        <p><a href="tel:9999266184">+91 9999266184</a></p>
                        <p><a href="mailto:gaurav@innovate-labs.com">gaurav@innovate-labs.com
</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <script src="../assets/js/active.js"></script>
    <script src="../assets/js/index.js"></script>
    
<script>
          document.getElementById('popupButton').addEventListener('click', function() {
  document.getElementById('popup').style.display = 'block';
});
 
document.getElementById('closeButton').addEventListener('click', function() {
  document.getElementById('popup').style.display = 'none';
});
</script>
<script>   
document.addEventListener('DOMContentLoaded', function() {
            const activeTabIndex = localStorage.getItem('activeTabIndex');
            if (activeTabIndex) {
                changeColorAndRead(parseInt(activeTabIndex));
            }
        });

        function changeColorAndRead(tabIndex) {
            const tabs = document.querySelectorAll('.main-icons-box .tab');
        
            // Remove 'active' class from all tabs
            tabs.forEach(tab => {
                tab.classList.remove('active');
            });
        
            // Add 'active' class to the clicked tab
            tabs[tabIndex - 1].classList.add('active');
        
            // Store active tab index in localStorage
            localStorage.setItem('activeTabIndex', tabIndex);
        }



</script>
    <script>
  

    function showEmpID(empId) {
        // Display the Employee ID using alert (you can replace this with any other method)
        console.log('Employee ID: ' + empId);
    }

    document.getElementById('popupButton').addEventListener('click', function() {
  document.getElementById('popup').style.display = 'block';
});
 
document.getElementById('closeButton').addEventListener('click', function() {
  document.getElementById('popup').style.display = 'none';
});
        // arcgp1 


        // arcgp2 
        function renderArcGp2Chart() {
            
                <?php
     $total_assessment_time_seconds = array();
      $total_assessment_time_months = array();
    // Include database connection
    include('../php/db_con.php');
if (!$con) {
    echo "heell";
}
    // Query to fetch data
 $sql = "SELECT (SUM(Assessment_Time) + SUM(Training_Time))/60 AS total_assessment_time FROM arc_flash GROUP BY DATE(Date); ";
    $result = mysqli_query($con, $sql);

    // Loop through results
    while($data = mysqli_fetch_array($result)) {
       
        $total_assessment_time_seconds[] = $data['total_assessment_time'];
    }
        for ($i = 0; $i < count($total_assessment_time_seconds); $i++) {
    
        if($i != 0){
            $total_assessment_time_seconds[$i] += $total_assessment_time_seconds[$i -1];
        }
        
    }
    // months querys 
    $sql_month = "SELECT DISTINCT MONTHNAME(Date) AS Month FROM arc_flash ";
    $result = mysqli_query($con, $sql_month);
    
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
const valueArray = <?php echo json_encode($total_assessment_time_seconds); ?>;
const valueArrays = <?php echo json_encode($total_assessment_time_months); ?>;

            
            const arcGp2Data = {
                labels: valueArrays,
                datasets: [{
                    label: "",
                    data: valueArray,
                    fill: false,
                    borderColor: "#2C59AF",
                    tension: 0.1,
                }],
            };

            const arcGp2Config = {
                type: "line",
                data: arcGp2Data,
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

            // Initialize the chart
            const arcGp2ChartInstance = new Chart(
                document.getElementById("arcGp2").getContext("2d"),
                arcGp2Config
            );
        }

        // Call the function to render the chart when the document is ready
        document.addEventListener("DOMContentLoaded", renderArcGp2Chart);


        // arcgp 3 
        function renderArcGp3Chart() {
                <?php
            // Initialize variables
            $total_assessment_time_minutes_rounded = array();
            $total_assessment_time_months = array();
            $total_assessment_time_seconds = 0; // Initialize to 0
            $total_assessment_time_minutes_rounded = 0; // Initialize to 0
            
                 include('../php/db_con.php');
                                                    $sql = "SELECT SUM(Login_Attempts) AS total_assessment_time FROM user_details WHERE Project ='arc_flash'";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $total_assessment_time_seconds = $row['total_assessment_time'];
                                                        $total_assessment_time_minutess = $total_assessment_time_seconds ;
                                                    } else {
                                                        // Handle query error
                                                        echo "Error executing query: " . mysqli_error($con);
                                                    }
                                                        ?>
                                                        
                                                                             <?php 
                                                         include('../php/db_con.php');
                                                    $sql = "SELECT SUM(Assessment_Time) + SUM(Training_Time)  AS total_assessment_time FROM arc_flash";
                                                    $result = mysqli_query($con, $sql);
                                                    
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $total_assessment_time_seconds = $row['total_assessment_time'];
                                                        if($total_assessment_time_minutess === "0"){
                                                         $total_assessment_time_minutes_rounded = 0;
                                                         $total_assessment_time_minutes_rounded;
                                                     }else{
                                                        // Convert total assessment time from seconds to minutes
                                                        $total_assessment_time_minutes = $total_assessment_time_seconds/$total_assessment_time_minutess ;
                                                    $total_assessment_time_minutess =$total_assessment_time_minutes/ 60;
                                                    
                                                    $total_assessment_time_minutes_rounded = array();
                                                     $total_assessment_time_minutes_rounded[] = round($total_assessment_time_minutess);
                                                     
                                                      }}
            // Query to get distinct months from 'arc_flash' table
            $sql = "SELECT DISTINCT MONTHNAME(Date) AS Month FROM arc_flash";
            $result = mysqli_query($con, $sql);
            
            
            
            // Process data
            $total_assessment_time_months = array();
            while ($data = mysqli_fetch_assoc($result)) {
                $total_assessment_time_months[] = $data['Month'];
            }?>
            const start = <?php echo json_encode($total_assessment_time_minutes_rounded); ?>;
            const valueArrays = <?php echo json_encode($total_assessment_time_months); ?>;
            
            
            
            
            const arcGp3Data = {
                labels: valueArrays,
                datasets: [{
                    label: "",
                    data: start,
                    fill: false,
                    borderColor: "#2C59AF",
                    tension: 0.1,
                }],
            };
        console.log(start);
            const arcGp3Config = {
                type: "line",
                data: arcGp3Data,
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
            const arcGp3ChartInstance = new Chart(
                document.getElementById("arcGp3").getContext("2d"),
                arcGp3Config
            );
        }

        // Call the function to render the chart when the document is ready
        document.addEventListener("DOMContentLoaded", renderArcGp3Chart);
        
// Retrieve active tab index from localStorage if available
     
// // Assuming you're using jQuery for simplicity
// $(document).ready(function(){
//     $('.delete-btn').click(function(){
        
//         $(this).closest('.emp-name-flex-box').remove();
//     });
// });






    </script>




</body>

</html>