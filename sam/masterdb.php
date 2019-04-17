<?php

//echo"hello";
 $con = mysqli_connect("localhost","root","","samclimaster"); 
  if(isset($_POST['insert']))
{
    //echo"hello";
    $file = fopen($_FILES['file']['tmp_name'], 'r');
    while (($line = fgetcsv($file)) !== FALSE)
	{
$zero = $line[0];
 $one= $line[1];
$two= $line[2];
$three= $line[3];
$four= $line[4];
$five= $line[5];
$six= $line[6];
$seven= $line[7];
$eight= $line[8];
$nine= $line[9];
$ten= $line[10];
$elev= $line[11];
$a= $line[12];
$b= $line[13]; 
$c= $line[14];
$d= $line[15];
$e= $line[16];
$f= $line[17];
$g= $line[18];
$h= $line[19];
$i= $line[20];
$j= $line[21];
$k= $line[22];
$l= $line[23];
$m= $line[24];
$n= $line[25];
$o= $line[26];
$p= $line[27];
$q= $line[28];
$r= $line[29];
$s= $line[30];
$t= $line[31];
$u= $line[32];
$v= $line[33];
$w= $line[34];
$x= $line[35];
$y= $line[36];
$ya= $line[37];
$yb= $line[38];
$yc= $line[39];
$yd= $line[40];
$ye= $line[41];
$yf= $line[42];
$yg= $line[43];
$yh= $line[44];
$yi= $line[45];
$yj= $line[46];
$yk= $line[47];
$yl= $line[48];
$ym= $line[49];
$yn= $line[50];
$yo= $line[51];
$yp= $line[52];
$yq= $line[53];
$yr= $line[54];
$ys= $line[55];
$yt= $line[56];
$yu= $line[57];
$yv= $line[58];
$yw= $line[59];
$yx= $line[60];
$yy= $line[61];
$yz= $line[62];
$za= $line[63];
$zb= $line[64];
$zc= $line[65];
$zd= $line[66];
$ze= $line[67];
$zf= $line[68];
$zg= $line[69];
$zh= $line[70];
$zi= $line[71];
$zj= $line[72];
$zk= $line[73];
$zl= $line[74];
//$zm= $line[75];
         
$sql2 = "INSERT INTO `climaster`(`id`, `CliId`, `ClientId`, `CliSrNo`, `CliStatus`, `CliName`, `HonSecretary`, `OfficeFlatNo`, `Add1`, `Area`, `PinCode`, `LandMark`, `Busstopname`, `Referby`, `ClientPassword`, `SOFTWAREVERSION`, `ContactPerson`, `Contact`, `Email`, `Design`, `ContactPerson1`, `Contact1`, `Email1`, `Design1`, `ContactPerson2`, `Contact2`, `Email2`, `Design2`, `ContactPerson3`, `Contact3`, `Email3`, `Design3`, `ContactPerson4`, `Contact4`, `Email4`, `Design4`, `ContactPerson5`, `Contact5`, `Email5`, `Design5`, `SetupName`, `Hdno`, `AMCDate`, `AMCDateTo`, `SetupName2`, `Hdno2`, `AMCDate2`, `AMCDateTo2`, `SetupName3`, `Hdno3`, `AMCDate3`, `AMCDateTo3`, `SetupName4`, `Hdno4`, `AMCDate4`, `AMCDateTo4`, `SetupName5`, `Hdno5`, `AMCDate5`, `AMCDateTo5`, `SetupName6`, `Hdno6`, `AMCDate6`, `AMCDateTo6`, `SetupName7`, `Hdno7`, `AMCDate7`, `AMCDateTo7`, `SetupName8`, `Hdno8`, `AMCDate8`, `AMCDateTo8`, `SetupName9`, `Hdno9`, `AMCDate9`, `AMCDateTo9`) VALUES('','$zero','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten','$elev','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$ya','$yb','$yc','$yd','$ye','$yf','$yg','$yh','$yi','$yj','$yk','$yl','$ym','$yn','$yo','$yp','$yq','$yr','$ys','$yt','$yu','$yv','$yw','$yx','$yy','$yz','$za','$zb','$zc','$zd','$ze','$zf','$zg','$zh','$zi','$zj','$zk','$zl')";
       $con->query($sql2);
      if($sql2==true){
          echo"success";
       }
    }
}
?>