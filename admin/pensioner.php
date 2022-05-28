
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
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            
         <h3> All Approved Pensioner</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>S/NO</th>
                      <th>RSA Number</th>
                      <th>Fullname</th>
                    <th>Place Of work</th>
                      <th>Wallet Balance</th>
                      <th>Registered Since</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $statuss = "APPROVE";
include 'conn.php';
$sql = "SELECT * FROM employee WHERE status = '$statuss'";
$link = mysqli_query($connect,$sql);
if ($link){


$s = mysqli_num_rows($link); 

for ($ann = 1; $ann <=$s;$ann++){

while ($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){

     

$fn = $row['utitle'].' '.$row['sname'].' '.$row['fname'].' '.$row['oname'];

$pof = $row['pofwork'];
                 $rsa = $row['rsa'];  
                 

                 $wallet = $row['walletfund'];
                 $regd = $row['regdate'];
                    


                    echo "<tr>";

                      echo "<td>";




                     
              

                      echo $ann;
                    
$ann++;
                      echo "</td>";
                      
                      echo "<td>$rsa</td>
                      <td>$fn</td>
                      <td>$pof</td>
                      <td>$wallet</td>
                      <td>$regd</td>
                      
                    </tr>";
             }     }
}
                    ?>
                   
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>



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
            <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
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
