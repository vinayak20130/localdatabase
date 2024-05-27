<?php 
session_start(); 
include('db_con.php'); 

if (isset($_POST['login_btn'])) { 

    $uname = $_POST['uname']; 
    $pass = $_POST['password'];
    
    $sql = "SELECT * FROM admin_details WHERE Emp_ID='$uname' AND password='$pass' LIMIT 1";
    $result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) 
		{
			foreach($result as $row){
			$user_id = $row['id'];
			$Emp_ID = $row['Emp_ID'];
			$Name = $row['Name'];
			$password = $row['password'];
			$Project = $row['Project'];
		
		}
            	$_SESSION['auth'] = true ;
            	$_SESSION['role'] = "$Project";
				$_SESSION['auth_user'] = [
						'user_id'=>$user_id,
						'admin_name'=>$Name,
						'admin_project'=>$Project,
						'password'=>$password,
						'role_as'=>$role_as,
						
				];
				if($_SESSION['role'] == "arc_flash"){
					header("Location: ../arc-flash/home.php");
					//header("Location: index-php.php");
					exit(0);
					    }else{
					       header("Location: ../dashboard.php");
							//header("Location: index-php.php");
							exit(0);
							
						   
					    }
		}
		else{
			$_SESSION['status'] = "Incorect User name or password";
			header('Location: ../index.php');
		}
	}
	
else{
	$_SESSION['status'] = "0";
	header("Location: ../index.php");
	
}?>
