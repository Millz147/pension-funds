<?php
session_start();
$passport = $_SESSION["passport"];
$rsa = $_SESSION["rsa"];
$title = $_SESSION["title"] ;
$fname = $_SESSION["fname"];
$sname = $_SESSION["sname"];
$oname = $_SESSION["oname"] ;
$wallet = $_SESSION["wallet"];
$status = $_SESSION["status"];
$wallet = $_SESSION["walletfund"];
$regyear = $_SESSION["regyear"];

if (!$_SESSION['passport']){

header("Location:../index.php");

}

?>









<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Pension</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="/index.php" class="logo"><b>Pension</b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
      
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
         
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="#"><img src="<?php  echo "../".$passport;?>" class="img-circle" width="80"></a></p>
          <h4 class="centered"><?php       echo $title.' '.$sname.' '.$fname.' '.$oname;     ?></h4>
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="withdraw.php">
              <i class="fa fa-desktop"></i>
              <span>Withdraw Fund</span>
              </a>
           
          </li>

          
          
          
         
          
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>EMPLOYEE/PENSIONER WITHDRAWAL PAGE</h3>
            </div>
          

          <?php

          if (isset($_POST['fund'])){



          $acna = $_POST['accountna'];
$acnu = $_POST['accountnu'];
$acty = $_POST['bank'];
$amo = $_POST['amount'];
$yes = "YES";
$thisyear = date("Y");

$cal = $thisyear - $regyear;






if ($amo < $wallet ){
  if ($cal = 10 or $cal > 10){
include 'conn.php';
$up = "UPDATE employee SET baccnu = '$acnu', baccna = '$acna', btype = '$acty', withamount = '$amo', withreg = '$yes' WHERE rsa= '$rsa'";
$li = mysqli_query($connect,$up);

if ($li){

?>
<script type="text/javascript">
  alert('YOUR WITHDRAWAL IS SENT TO THE PFA, YOU WILL BE CREDITED INTO YOUR BANK AFTER THE APPROVAL');
window.location = "index.php";

</script>


<?php

}


}
else{
?>
<script type="text/javascript">
  alert('YOU ARE NOT ELIGIBLE YET TO WITHDRAW!!!');
window.location = "index.php";

</script>


<?php

}
}
else{
?>
<script type="text/javascript">
  alert('YOUR WALLET IS NOT UP TO THE REQUESTED AMOUNT!!!');
window.location = "index.php";

</script>


<?php



}

}


          ?>
<form method="POST"  action="withdraw.php">

<center><input type="text" placeholder="Account Number" class=" form-control" name="accountnu" style="width: 300"/>
<br>
<input type="text" placeholder="Account Name" class=" form-control" name="accountna" style="width: 300"/>
<br>
Bank Name<br>
<select class=" form-control" name ="bank">

<option>Access Bank</option>
<option>First Bank</option>
<option>GT Bank</option>
</select><br>
<input type="text" placeholder="Amount to Withdraw" class=" form-control" name="amount" style="width: 300"/>
<br>


                     <button class="btn btn-theme" name="fund" type="submit"><i class="fa fa-check" ></i>WITHDRAW</button><br><br>
    You can only withdraw if you're 10 years Older here</center>
 



</form>







          
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            
            <!--NEW EARNING STATS -->
            
            <!--new earning end-->
            <!-- RECENT ACTIVITIES SECTION -->
            
            <!-- First Activity -->
           
            <!-- Second Activity -->
            
            <!-- Third Activity -->
            
            <!-- Fourth Activity -->
            
            <!-- USERS ONLINE SECTION -->
            
            <!-- First Member -->
            
            <!-- Second Member -->
            
            <!-- Third Member -->
            
            <!-- Fourth Member -->
           
            <!-- CALENDAR-->
            
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Pension</strong>. All Rights Reserved
        </p>
       
        <a href="index.php" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
 
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
