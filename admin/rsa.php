


<?php
session_start();
include 'conn.php';
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
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
               <?php
              $un = "UNAPPROVED";
include 'conn.php';
$sql= "SELECT * FROM employee WHERE status ='$un'";

$rink = mysqli_query($connect,$sql);
if ($rink){

  $n = mysqli_num_rows($rink);
echo "<span class=\"badge bg-theme\">$n</span>";
  while ($roww = mysqli_fetch_array($rink,MYSQLI_ASSOC)){
    ?>
 </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">Approval Request</p>
              </li>
              <li> 
                <?php
                $rsa = $roww['rsa'];
                echo "<a href=\"approve.php?rsa=$rsa\">";
                  echo "<div class=\"task-info\">";
                   
                    
echo "<div class=\"desc\">$rsa Approve  Now</div> </div>
                  
                </a>";
  }
}
              
             ?>
                    
                    
              </li>
              
              
              
              
            </ul>
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
          <li><a class="logout" href="login.php">Logout</a></li>
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
         
<?php
include 'side.php';


?>
          <h5 class="centered"><?php  echo $username;?></h5>
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="rsa.php">
              <i class="fa fa-desktop"></i>
              <span>Search RSA</span>
              </a>
           
          </li>
           <li class="sub-menu">
            <a href="credit.php">
              <i class="fa fa-desktop"></i>
              <span>Credit RSA</span>
              </a>
           
          </li>
          <li class="sub-menu">
            <a href="pensioner.php">
              <i class="fa fa-tasks"></i>
              <span>View Pensioners</span>
              </a>
                      </li>
          
           <li class="sub-menu">
            <a href="witrequest.php">
              <i class="fa fa-tasks"></i>
              <span>Withdrawal Requests</span>
              </a>
                      </li>
          <li class="sub-menu">
            <a href="witrequest.php">
              <i class="fa fa-tasks"></i>
              <span>All Payments</span>
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
              <h3>SEARCH RSA NUMBER</h3>
            </div>
          <form method="POST" action="rsa.php">
            <input class=" form-control" id="cname" name="rsa" minlength="2" placeholder="RSA Number" type="text" required /><br><center>

<button class="btn btn-theme" type="submit" name="search" >Search</button><button class="btn btn-theme04"  type="button">Cancel</button></center>
<br>
                  

  <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
<?php

if (isset($_POST["search"])){
$rsa = $_POST["rsa"];

$sql = "SELECT * FROM employee WHERE rsa = '$rsa'";

$link = mysqli_query($connect,$sql);

if ($link){

while($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){

$title = $row["utitle"];
$fname = $row["fname"];
$sname = $row["sname"];
$oname = $row["oname"];
$pofwork = $row["pofwork"];
$wallet = $row["walletfund"];
$status = $row["status"];
$address= $row["address"];
$passport = $row["passport"];







                echo "<h4>  $wallet</h4>";
                ?>

                  <h6>TOTAL EARNING</h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <?php
                echo "<h3>$title $sname $fname   $oname</h3>";
                echo "<h6>$pofwork</h6>";
                echo "<p>$address</p>";
                ?>
                <br>
               
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <?php

                  echo"<p><img src=\"../$passport\" class=\"img-circle\"></p>";

if ($status=="UNAPPROVED"){

echo "<a href=\"approve.php?rsa=$rsa\">Approve The Employee With Just A Click</a>" ;


}
else{

 
}


}




}


}

?>



                    
                    
                  </p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>

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
            <div id="calendar" class="mb" >
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px; ">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
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
