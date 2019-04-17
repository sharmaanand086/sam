<?php
 session_start();
 
include('conn.php');
 $password = $_POST['pass'];
 $username =  $_POST['email'];

$login = "SELECT * FROM `climaster` WHERE Email='$username' AND ClientPassword='$password'";
// Check username and password match
$results = mysqli_query($conn, $login);
if (mysqli_num_rows($results) == 1) {             
			$logged_in_user = mysqli_fetch_assoc($results);			 
			$logged_in_user['CliName'];
			$logged_in_user['ClientId'];
			$logged_in_user['CliSrNo'];
			$srn = $logged_in_user['CliSrNo'];
				$_SESSION['CliSrNo'] = $srn;

				$id = $logged_in_user['ClientId'];
				$_SESSION['ClientId'] = $id;
			     $name = $logged_in_user['CliName'];
   				 $_SESSION['CliName'] = $name;
			var_dump($logged_in_user['CliName']);
			if ($logged_in_user['user_type'] == 'admin') {
                 
    			 $name = $logged_in_user['CliName'];
   				 $_SESSION['CliName'] = $name;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin.php');		  
			}else{				 
				  $name = $logged_in_user['CliName'];
   				 $_SESSION['CliName'] = $name;
				$_SESSION['success']  = "You are now logged in";
				header('location: client.php');
			}
		}else {
			header('location: index.php');
		}
?>