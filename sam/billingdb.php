<?php

//echo"hello";
 $con = mysqli_connect("localhost","root","","samclimaster"); 
  if(isset($_POST['insert']))
{
    //echo"hello";
   $row = 1;
    $file = fopen($_FILES['file']['tmp_name'], 'r');
    while (($line44 = fgetcsv($file)) !== FALSE)
	{

$zero = $line44[0];
 $one= $line44[1];
$two= $line44[2];
$three= $line44[3];
$four= $line44[4];
$five= $line44[5];
$six= $line44[6];
$seven= $line44[7];
$eight= $line44[8];
$nine= $line44[9];
$ten= $line44[10];
$elev= $line44[11];
$a= $line44[12];
$b= $line44[13];
$c= $line44[14];
$d= $line44[15];
$e= $line44[16];
$f= $line44[17];
$g= $line44[18];
$h= $line44[19];
$i= $line44[20];
$j= $line44[21];
$k= $line44[22];
$l= $line44[23];
$m= $line44[24];
$n= $line44[25];
$o= $line44[26];
$p= $line44[27];
$q= $line44[28];
$r= $line44[29];
$s= $line44[30];
$t= $line44[31];
$u= $line44[32];
 
         
$sql44 = "INSERT INTO `sambillingdetail`(`id`, `billid`, `Receipt_No`, `Cheque_No`, `Cheque_Date`, `Bank_Name`, `Amount`, `Receipt_Remark`, `Receipt_Uploaded_By`, `CliId`, `CliSrNo`, `CliName`, `Bill_Year`, `Bill_No`, `Bill_Date`, `Due_Date`, `Period`, `Software_Type`, `Bill_Particular`, `Remark`, `Bill_Amount`, `Bill_Uploaded_By`, `Deliverd`, `Delivery_Type`, `Delivery_Hand`, `Delivery_Courier`, `Delivery_Email`, `Delivery_Not`, `Delivery_Date`, `Delivery_Remark`, `Delivery_Uploaded_By`, `Bill_Paid`, `UserPassword`, `CliEmail_Id`) VALUES ('','$zero','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten','$elev','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u')";
       $con->query($sql44);

      if($sql44==true){
           $num = count($line44);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
        echo $line44[$c] . "<br />\n";
    }
       }
    }
}
?>