<?php
	 session_start();
  include('conn.php');
  
$q ="SELECT * FROM `query`";
$result3=mysqli_query($conn,$q);
 
 ?>  

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Description</th>
      <th scope="col">Client name</th>
      <th scope="col">Client sr no.</th>
      <th scope="col"> Status</th>
       <th scope="col"> Action</th>
    </tr>
  </thead>

                   <?php
 while ($row=mysqli_fetch_assoc($result3))
                     //var_dump($rowbill);
                        {
?>
  

  <tbody>
    <tr class="table-active">
      <th scope="row"> <?php echo $row['query']; ?></th>
      <td><?php echo $row['CliName']; ?></td>
      <td><?php echo $row['CliSrNo']; ?></td>
      <td>
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
    </td>
    <td>
    	<form method="post" action="status.php" name="myform<?php echo $row['id']; ?>">  
    	<input type="hidden" name="querid" value="<?php echo $row['id']; ?>">  		 
	         <select name="action" onchange="this.form.submit();" id="mySelect<?php echo $row['id']; ?>">
	    		<option value="">select</option>
	    		<option value="1">Approve</option>
	    		<option value="0">Reject</option>
	    	</select>
    	</form>
    </td>
    </tr>
</tbody>

<?php } ?>
</table>
 