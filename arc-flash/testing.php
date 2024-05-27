   <?php
     include('../php/db_con.php');
 /*   // Include database connection
   if(isset($_GET['id'])){
      
        $id=$_GET['id'];
    // Query to fetch data GROUP BY MONTH(Date)
    
    
    */

  //  $total_assessment_time = array();
    $sql = "SELECT (SUM(Assessment_Time) + SUM(Training_Time))/60 AS total_assessment_time  FROM arc_flash WHERE Emp_ID ='inn_003' GROUP BY MONTH(Date)";
    $result = mysqli_query($con, $sql);

    // Loop through results
    while($data = mysqli_fetch_array($result)) {
       
      $total_assessment_time[] = $data['total_assessment_time'];
    }
    echo count($total_assessment_time);
    
        for ($i = 0; $i < count($total_assessment_time); $i++) {
    
        if($i != 0){
            $total_assessment_time[$i] += $total_assessment_time[$i -1];
        }
        
    }
   
    
      ?>
      