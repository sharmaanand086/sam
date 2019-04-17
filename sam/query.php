<?php

 include('conn.php');
 $name = $_POST['name'];
 $srn =  $_POST['srn'];
 $qu = $_POST['query'];

$query = "INSERT INTO `query`(`id`, `CliName`, `CliSrNo`, `query`) VALUES ( '','$name','$srn',' $qu')";
// Check username and password match
$results = mysqli_query($conn, $query);
if($results==true){
	echo "1";
}
 ?>
