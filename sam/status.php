<?php 
$con = mysqli_connect("localhost","root","","samclimaster"); 
$n = $_POST['action'];
$id = $_POST['querid'];
//echo$n;
$sql2 = "UPDATE `query` SET `status`='$n' WHERE id='$id'";
       $con->query($sql2);
      if($sql2==true){
          echo"success";
       }

?>
<script type="text/javascript">
	window.location.href="admin.php#Querysclk";
</script>
 