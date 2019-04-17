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
      visibility: hidden
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
    .masterupload{
      top: 0px!important;
    }
   .billupload
    {
      top:0px!important;
         
    }
    .compalintsupload{
      top:0px!important;
         
    }
  .Querys{
      top:0px!important;
       position: unset!important;  
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
            <a class="sidebar-link" href="#masterclk" default>
              <span class="icon-holder">
                <i class="c-blue-500 ti-receipt"></i>
              </span>
              <span class="title" id="masterclk">Master upload</span>
            </a>
          </li>
            <li class="nav-item">
            <a class="sidebar-link" href="#billclk">
              <span class="icon-holder">
                <i class="c-brown-500 ti-receipt"></i>
              </span>
              <span class="title" id="billclk">Bill upload</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="sidebar-link" href="#compalintsclk">
              <span class="icon-holder">
                <i class="c-brown-500 ti-receipt"></i>
              </span>
              <span class="title" id="compalintsclk">Complaint upload</span>             
            </a>
          </li>
          <li class="nav-item">
            <a class="sidebar-link" href="#Querysclk">
              <span class="icon-holder">
                <i class="c-brown-500 ti-receipt"></i>
              </span>
              <span class="title" id="Querysclk">Querys</span>
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
                  <img class="w-2r bdrs-50p" src="../../../randomuser.me/api/portraits/men/10.jpg" alt="">
                </div>
                <div class="peer">
                  <span class="fsz-sm c-grey-900"><?php  echo $n; ?></span>
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
        <div class="masonry-item col-12 masterupload"  id="masterupload" style="display: block;">
            <h2>Upload your master file</h2>
             <form action ="masterdb.php"  enctype="multipart/form-data" name ="form1" id ="form1" method ="POST">
              <label>Upload CSV File:*</label>
              <input type="file"  style="border:none;" maxlength = "1" name="file" id = "file"  required>
             
              <button   type = "submit" name = "insert" class="btn btn-primary">Sumbit</button></section>
            </form>
        </div>
             

            <div class="masonry-item col-12 billupload" id="billupload" style="display: none;">
              <h2>Upload your bill file</h2>
               <form action ="billingdb.php"  enctype="multipart/form-data" name ="form1" id ="form1" method ="POST">
              <label>Upload CSV File:*</label>
              <input type="file"  style="border:none;" maxlength = "1" name="file" id = "file"  required>
             
              <button   type = "submit" name = "insert" class="btn btn-primary">Sumbit</button></section>
            </form>
            </div>


            <div class="masonry-item col-12 compalintsupload" id="compalintsupload" style="display: none;">
              <h2>Upload your compalints file</h2>
               <form action ="complaintdb.php"  enctype="multipart/form-data" name ="form1" id ="form1" method ="POST">
              <label>Upload CSV File:*</label>
              <input type="file"  style="border:none;" maxlength = "1" name="file" id = "file"  required>
             
              <button   type = "submit" name = "insert" class="btn btn-primary">Sumbit</button></section>
            </form>
            </div>
             
             <div class="masonry-item col-12 Querys" id="Querys" style="display: none;">
              <h2>your Querys To resolve </h2>
               <div  class="peer-greed" id="data" >  </div>
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
   $("#masterclk").click(function () {
   // alert('dsfa');
        $("#masterupload").css("display","block")
        $("#billupload").css("display","none")
        $('#compalintsupload').css("display","none")
          $('#Querys').css("display","none")
         
    });
   
    $("#compalintsclk").click(function () {
   // alert('dsfa');
         $("#compalintsupload").css("display","block")
        $("#billupload").css("display","none")
        $('#masterupload').css("display","none")
          $('#Querys').css("display","none")
         
    });
    $("#billclk").click(function () {
   // alert('dsfa');
         $("#billupload").css("display","block")
        $("#masterupload").css("display","none")
        $('#compalintsupload').css("display","none")
          $('#Querys').css("display","none")
         
    });
     $("#Querysclk").click(function () {
   // alert('dsfa');
        $("#Querys").css("display","block")
        $("#billupload").css("display","none")
        $('#compalintsupload').css("display","none")
          $('#masterupload').css("display","none")
         
    });
 $( window ).on( "load", function() {
    $.ajax({
      type: 'GET',
      url: 'allquerydb.php',
      cache:false,
      success: function(data){
          // console.log(data);
           $('#data').html(data);
         
      }
    })
   
});

 
    </script>
 

</html>