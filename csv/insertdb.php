<?php
set_time_limit(0);
if(isset($_POST['addtag']))
{
	$con = mysqli_connect("localhost","root","","90days"); 
	 
	$date=date('Y-m-d');
	$date2=date('H:i:s');
	$date1=str_replace('-','',$date).str_replace(':','',$date2);
	$temp = explode(".",$_FILES["uploadfile"]["name"]);
	$extension = end($temp);
	$uploaddir = './csv/';
	$file = $uploaddir.$date1.".".$extension;
       	$file_name= trim($date1.".".$extension);
      
	//echo"<script type=\"text/javascript\">alert(\"Please wait... Uploading file...\");</script>";
	if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file))
	{
		 
			if (($handle = fopen($file, "r")) !== FALSE) 
			{
				fgetcsv($handle);   
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
				{
					$name= $data[0];
					$username= $data[1];
					$phone= $data[2];
					$password= $data[3];
					$start =$data[4];
					$end =$data[5];
					$active =$data[6];
					$ftime  =$data[7];
					$ltime =$data[8];
				$sql2 = "INSERT INTO `login`(`id`, `name`, `username`, `password`, `start`, `end`, `active`, `ftime`, `ltime`) VALUES('','$name','$username','$phone','$password','$start','$end','$ftime','$ltime')";
       $con->query($sql2);
      if($sql2==true){
          echo"success";
       }
				
				}
				fclose($handle);
			}
			echo "File data successfully imported to database!!";
		 
	}
}
?>
