<?php

//echo"hello";
 $con = mysqli_connect("localhost","root","","samclimaster"); 
  if(isset($_POST['insert']))
{
    //echo"hello";
    $file22 = fopen($_FILES['file']['tmp_name'], 'r');
    while (($line22 = fgetcsv($file22)) !== FALSE)
	{
 
$zero = $line22[0];
$one= $line22[1];
$two= $line22[2];
$three= $line22[3];
$four= $line22[4];
$five= $line22[5];
$six= $line22[6];
$seven= $line22[7];
$eight= $line22[8];
$nine= $line22[9];
$ten= $line22[10];
$elev= $line22[11];
$a= $line22[12];
$b= $line22[13]; 
$c= $line22[14];
$d= $line22[15];
$e= $line22[16];
$f= $line22[17];
$g= $line22[18];
$h= $line22[19];
$i= $line22[20];
$j= $line22[21];
$k= $line22[22];
$l= $line22[23];
$m= $line22[24];
$n= $line22[25];
$o= $line22[26];
$p= $line22[27];
$q= $line22[28];
$r= $line22[29];
$sql22 = "INSERT INTO `samclicomplaint`(`id`, `IDS`, `cliid`, `CliSrNo`, `CliName`, `NewInst`, `Reinstall`, `Training`, `Update_Software`, `Repair_Software`, `Repair_Data`, `AMC_Collect`, `Other_Complaint`, `Complaint_Type`, `Remark`, `On_Line`, `On_Site`, `Telephone`, `Service_Type`, `ComplaintDate`, `Contact_No`, `Email_Id`, `Complaint_Register_User`, `Solved`, `Solved_By`, `Solved_Date`, `Solved_Remark`, `Solved_User`, `Solved_Password`, `Inform_Details`, `Send_Mail`) VALUES ('','$zero','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten','$elev','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r')";
       $con->query($sql22);
      if($sql22==true){
           
             echo "success\r\n";
          }
       
    }

 

}
?>