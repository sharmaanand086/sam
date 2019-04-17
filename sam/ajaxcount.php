<?php
	 session_start();
  include('conn.php');
 $n = $_SESSION['CliName'];
 $id =$_SESSION['ClientId'];
 $srn =$_SESSION['CliSrNo'];

$q ="SELECT * FROM `query` WHERE CliSrNo='$srn'";
$result3=mysqli_query($conn,$q);
 
 while ($row=mysqli_fetch_assoc($result3))
                     //var_dump($rowbill);
                        {
?>
<div class="peer-greed">
<span><?php echo $row['query']; ?></span>
 <?php if($row['status']=='true'){
?>
<span class="badge badge-pill badge-warning">Process</span>
<?php
}else if($row['status']=='1'){
  ?>
<span class="badge badge-pill badge-success">Resolved</span>
  <?php
} else{
	?>
<span class="badge badge-pill badge-danger">Rejected</span>
	<?php
  
}
	?>
 
</div>

<?php } ?>