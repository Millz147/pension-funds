<?php
session_start();



if (isset($_POST['btnsub'])){

$username = $_POST["username"];
$password = $_POST["password"];

include 'conn.php';

$sql = "SELECT * FROM admin WHERE username ='$username' AND password = '$password'";
$link = mysqli_query($connect,$sql);
if ($link){

  while ($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){

$_SESSION["fullname"] = $row["Fullname"];
$_SESSION["username"] = $row["Username"];
$_SESSION["pic"] = $row["Passport"];

header("location:index.php");
exit();


}




}

?>

<script type="text/javascript">
  

  alert('Incorrect Username/Password!!!');
</script>


<?php




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
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="login.php"  method = "POST">
        <h2 class="form-login-heading" style="background: red ">sign in now</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password">
          <label class="checkbox">
            
          <button class="btn btn-theme btn-block" type="submit" name="btnsub"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
          <center>Only A PFA Is Applicable to Login Here<BR>

<a href="../index.php"> BACK TO HOMEPAGE</a>

          </center>
          
        </div>
        <!-- Modal -->
 
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/MEYEFR.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
