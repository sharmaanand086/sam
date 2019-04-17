<?php session_start();
include('conn.php');
 $n = $_SESSION['CliName'];
 $id =$_SESSION['ClientId'];
 $srn =$_SESSION['CliSrNo'];
 ?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <title>Dashboard</title>
  <style>
    #loader {
      transition: all .3s ease-in-out;
      opacity: 1;
      visibility: visible;
      position: fixed;
      height: 100vh;
      width: 100%;
      background: #fff;
      z-index: 90000
    }

    #loader.fadeOut {
      opacity: 0;
      visibility: hidden;
    }

    .spinner {
      width: 40px;
      height: 40px;
      position: absolute;
      top: calc(50% - 20px);
      left: calc(50% - 20px);
      background-color: #333;
      border-radius: 100%;
      -webkit-animation: sk-scaleout 1s infinite ease-in-out;
      animation: sk-scaleout 1s infinite ease-in-out
    }

    @-webkit-keyframes sk-scaleout {
      0% {
        -webkit-transform: scale(0)
      }
      100% {
        -webkit-transform: scale(1);
        opacity: 0
      }
    }

    @keyframes sk-scaleout {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0)
      }
      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 0
      }
    }


.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 3px;
  background-color: #2196f340;
  padding: 3px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 0px 0;
  font-size: 14px;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>
  <link href="http://www.arfeenkhan.com/coachstat/form/super/js/style.css" rel="stylesheet">
</head>

<body class="app">
  
  <div id="loader">
    <div class="spinner"></div>
  </div>
  <script type="text/javascript">window.addEventListener('load', () => {
      const loader = document.getElementById('loader');
      setTimeout(() => {
        loader.classList.add('fadeOut');
      }, 300);
    });</script>
  <div>
    <div class="sidebar">
      <div class="sidebar-inner">
        <div class="sidebar-logo">
          <div class="peers ai-c fxw-nw">
            <div class="peer peer-greed">
              <a class="sidebar-link td-n" href="index.html" class="td-n">
                <div class="peers ai-c fxw-nw">
                  <div class="peer">
                    <div class="logo">
                      <img src="assets/static/images/logo.png" alt="">
                    </div>
                  </div>
                  <div class="peer peer-greed">
                    <h5 class="lh-1 mB-0 logo-text">Adminator</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="peer">
              <div class="mobile-toggle sidebar-toggle">
                <a href="#" class="td-n">
                  <i class="ti-arrow-circle-left"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <ul class="sidebar-menu scrollable pos-r">
          <li class="nav-item mT-30 active">
            <a class="sidebar-link" href="#allbills" default>
              <span class="icon-holder">
                <i class="c-blue-500 ti-receipt"></i>
              </span>
              <span class="title" id="allbills">Bills</span>
            </a>
          </li>
            <li class="nav-item">
            <a class="sidebar-link" href="#complaintclk">
              <span class="icon-holder">
                <i class="c-brown-500 ti-receipt"></i>
              </span>
              <span class="title" id="complaintclk">complaint</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="sidebar-link" href="#queryclck">
              <span class="icon-holder">
                <i class="c-brown-500 ti-receipt"></i>
              </span>
              <span class="title" id="queryclck">Query</span>
            </a>
          </li>
           
        </ul>
      </div>
    </div>
    <div class="page-container">
      <div class="header navbar">
        <div class="header-container">
          <ul class="nav-left">
            <li>
              <a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);">
                <i class="ti-menu"></i>
              </a>
            </li>
            <li class="search-box">
              <a class="search-toggle no-pdd-right" href="javascript:void(0);">
                <i class="search-icon ti-search pdd-right-10"></i>
                <i class="search-icon-close ti-close pdd-right-10"></i>
              </a>
            </li>
            <li class="search-input">
              <input class="form-control" type="text" placeholder="Search...">
            </li>
          </ul>
          <ul class="nav-right">          
            <li class="dropdown">
              <a href="#" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                <div class="peer mR-10">
                  <!-- <img class="w-2r bdrs-50p" src="../../../randomuser.me/api/portraits/men/10.jpg" alt=""> -->
                </div>
                <div class="peer">
                  <span class="fsz-sm c-grey-900"><?php  echo$n; ?></span>
                </div>
              </a>
              <ul class="dropdown-menu fsz-sm">          
               <li>
                  <a href="logout.php" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                    <i class="ti-power-off mR-10"></i>
                    <span>Logout</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <main class="main-content bgc-grey-100">
         
              <div class=" masonry-item col-12" id="quersubmit" style="display: none;top:1px!important;">
               <div class="bd bgc-white">
                <div class="layers">
                  <div class="layer w-100 p-20">
                    <h6 class="lh-1">Ask Query</h6>
                  </div>
                  <div class="layer w-100">
                    <div class="bgc-grey-200 p-20 gapY-15">
                      <div class="peers fxw-nw">
                        <div class="peer mR-20">
                          <img class="w-2r bdrs-50p" src="../../../randomuser.me/api/portraits/men/11.jpg" alt="">
                        </div>
                        <div class="peer peer-greed">
                          <div class="layers ai-fs gapY-5">
                            <div class="layer">
                              <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                 
                                <div class="peer-greed">
                                  <div id="data" >  </div>
                                </div>
                              </div>
                            </div>                             
                             
                          </div>
                        </div>
                      </div>                     
                    </div>
                    <div class="p-20 bdT bgc-white">
                      <div class="pos-r">                       
                       
                         <textarea rows = "1" cols = "50" id="textfield" class="form-control bdrs-10em m-0" placeholder="Say something...">            
                         </textarea>
                         <input type="hidden" name="CliName"  id="CliName" value="<?php echo $n; ?>">
                         <input type="hidden" name="CliSrNo" id="CliSrNo" value="<?php echo $srn; ?>">

                        <button type="button"  id="queryform" class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1">
                          <i class="fa fa-paper-plane-o"></i>
                        </button>
                         
                      </div>
                      <div class="error" id="ack"></div> 
                    </div>
                  </div>
                </div>
              </div>
             
              </div>
              <div class=" masonry-item col-12" id="complaint" style="display: none;top:1px!important;">
              
              <table>
                <h2>Complaint Details</h2>
                  <tr>
                    <th>No.</th>
                    <th>Date</th>
                    <th>Particular</th>
                    <th>Service Type</th>
                    <th>Date</th>
                    <th>Solved By</th>
                    <th>Remark</th>
                  </tr>
                 
                  <?php
                 $qrycompalint = "SELECT * FROM `samclicomplaint` WHERE CliSrNo='$srn'";
                  $complaintresult = mysqli_query($conn, $qrycompalint);
                 // var_dump($complaintresult);
                   while ($rowcomp=mysqli_fetch_assoc($complaintresult))
                     //var_dump($rowbill);
                        {
                  ?> 
                  <tr>
                    <td><?php echo $rowcomp['IDS']; ?> </td>
                    <td><?php echo $rowcomp['ComplaintDate']; ?> </td>
                    <td><?php echo $rowcomp['Complaint_Type']; ?> </td>
                    <td><?php echo $rowcomp['Service_Type']; ?></td>
                    <td><?php echo $rowcomp['Solved_Date']; ?> </td>
                    <td><?php echo $rowcomp['Solved_By']; ?> </td>
                    <td><?php echo $rowcomp['Solved_Remark']; ?> </td>                   
                    
                  </tr>
                   <?php } ?> 
                  
                </table>
            </div>
         <?php 
         $Query = "SELECT * FROM `sambillingdetail` WHERE CliId='$id'";
         
        $results = mysqli_query($conn, $Query);
        $row = mysqli_fetch_assoc($results); 
         //var_dump($row);
        $Query2 = "SELECT * FROM `climaster` WHERE ClientId='$id'";         
        $results2 = mysqli_query($conn, $Query2);
        $row2 = mysqli_fetch_assoc($results2); 
      //  $row['CliName'];
?>   
            <div  class="masonry-item col-12" id="billings">

                  <div class="grid-container">
                  <div class="item1">Name : <?php echo $row['CliName']; ?> </div>
                  <div class="item2">Contact :<?php echo $row2['Contact']; ?></div>
                  <div class="item3">Email :<?php echo $row2['Email']; ?></div>  
                  <div class="item4">Address :<?php echo $row2['OfficeFlatNo']; echo $row2['Add1']; echo $row2['Area'];echo $row2['PinCode'];echo $row2['LandMark'];echo $row2['Busstopname']; ?></div>
                  <div class="item5">Serivce Period : </div>
                  <div class="item6">Setup Detail :<?php echo $row2['SetupName']; ?></div>
                  <div class="item7">Software Type :<?php echo $row['Software_Type']; ?></div>
                  <div class="item8">Hard Disk No. :<?php echo $row2['Hdno']; ?></div>
                  <div class="item4">Install Date : </div>
                  <div class="item5">Data Path : </div>                  
                </div>
                <table>
                  <tr>
                    <th>Billing Details</th>
                    <th>Deliver Detail</th>
                    <th>Payment Details</th>
                  </tr>

                  <?php
                 $qry = "SELECT * FROM `sambillingdetail` WHERE CliId='$id'";
                  $billresults = mysqli_query($conn, $qry);
                 // var_dump($billresults);
                   while ($rowbill=mysqli_fetch_assoc($billresults))
                     //var_dump($rowbill);
                        {
                  ?>
                  <tr>
                    <td>
                      <label>No. / Date :<?php echo $rowbill['Bill_No']; ?></label><br>
                      <label>Due Date :<?php echo $rowbill['Due_Date']; ?></label><br>
                      <label>Period:<?php echo $rowbill['Period']; ?></label><br>
                      <label>Amount:<?php echo $rowbill['Bill_Amount']; ?></label>
                      

                    </td>
                    <td>
                        <label>Date:<?php echo $rowbill['Delivery_Date']; ?></label><br>
                      <label>Type:<?php echo $rowbill['Delivery_Type']; ?></label><br>
                      <label>By:<?php echo $rowbill['Delivery_Uploaded_By']; ?></label>
                    </td>
                    <td>
                     <label>No:<?php echo $rowbill['Receipt_No']; ?></label><br>
                      <label>Chq.No.:<?php echo $rowbill['Cheque_No']; ?></label><br>
                      <label>Bank:<?php echo $rowbill['Bank_Name']; ?></label><br>
                      <label>Amout: <?php echo $rowbill['Amount']; ?></label>
                    </td>
                  </tr>
                  <?php } ?> 
                </table>
            </div>
            
           
         
             
         
      </main>
      <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
        <span>Copyright © 2017 Designed by
          <a href="https://colorlib.com/" target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.</span>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
         
      </footer>
    </div>
  </div>
  <script type="text/javascript" src="http://www.arfeenkhan.com/coachstat/form/super/js/vendor.js"></script>
  <script type="text/javascript" src="http://www.arfeenkhan.com/coachstat/form/super/js/bundle.js"></script>
</body>
<script  >
   $("#complaintclk").click(function () {
   // alert('dsfa');
        $("#complaint").css("display","block")
        $("#billings").css("display","none")
        $('#quersubmit').css("display","none")
         
    });
   
    $("#allbills").click(function () {
   // alert('dsfa');
        $("#complaint").css("display","none")
        $("#billings").css("display","block")
          $('#quersubmit').css("display","none")
         
    });
    $("#queryclck").click(function () {
   // alert('dsfa');
        $("#complaint").css("display","none")
        $("#billings").css("display","none")
        $('#quersubmit').css("display","block")
         
    });
    
    $('#queryform').click(function(){     
      var name = document.getElementById('CliName').value;
      var srn = document.getElementById('CliSrNo').value;
      var query = document.getElementById('textfield').value;
      // alert(query);
       $.ajax({  
        url : "query.php",
        data : {name:name,srn:srn,query:query},
        type : "POST",           
        beforeSend: function(){
                    $("#ack").css('display', 'inline', 'important');
                    $("#ack").html("Please Wait...");
                },      
        success : function(data) 
        {
        console.log(data);
        //alert(data);
                    if(data=='1'){
                        $("#ack").css('display', 'inline', 'important');
                        $("#ack").html("<font color='green'>Thank you...</font>");
                        $('#quersubmit').css("display","block");
                        $("#textfield").val("");
                        setTimeout(function() { $("#ack").hide(); }, 1000); 
                         $.ajax({
                          type: 'GET',
                          url: 'ajaxcount.php',
                          cache:false,
                          success: function(data){
                              // console.log(data);
                               $('#data').html(data);
                             
                          }
                        })
                    }                    
        },
        error : function()
         {
          
        }
    });

    });

    $( window ).on( "load", function() {
    $.ajax({
      type: 'GET',
      url: 'ajaxcount.php',
      cache:false,
      success: function(data){
           //console.log(data);
           $('#data').html(data);
         
      }
    })
   
});
</script>
<!-- Mirrored from colorlib.com/polygon/adminator/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 May 2018 09:21:52 GMT -->

</html>