
<?php
session_start();

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
      <section class="wrapper site-min-height"><center>
        <h3>
<?php
$rsa = $_GET['rsa'];
$fname = $_GET['fna'];
echo $fname.'   ('.$rsa.')';
?>



        </h3>
        <div class="row mt">
          <div class="col-lg-12">
            <p>
              

<form METHOD="POST" action="fund.php">
<input hidden="" type="text" placeholder="Amount" name="rsa" value = "<?php echo $rsa;?>" style="width: 300"  />
<input type="text" placeholder="Amount" class=" form-control" name="amount" style="width: 300"/>
<br>

                     <button class="btn btn-theme" name="fund" type="submit"><i class="fa fa-check" ></i> CREDIT</button><br><br>
    The Amount Will Be Credited Into The Giving RSA Number</center>


</form>






            </p>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
            &copy; Copyrights <strong>Pension</strong>. All Rights Reserved
        <a href="blank.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
