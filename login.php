<?php
session_start();
if (isset($_POST['btnsub'])){
include 'conn.php';

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM employee WHERE rsa = '$username' AND secretpin = '$password' ";
$link = mysqli_query($connect,$sql);

if ($link){

while($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){

$_SESSION["rsa"] = $row["rsa"];
$_SESSION["title"] = $row["utitle"];
$_SESSION["fname"] = $row["fname"];
$_SESSION["sname"] = $row["sname"];
$_SESSION["oname"] = $row["oname"];
$_SESSION["wallet"] = $row["walletfund"];
$_SESSION["status"] = $row["status"];
$_SESSION["pofwork"] = $row["pofwork"];
$_SESSION["passport"] = $row["passport"];
$_SESSION["walletfund"] = $row["walletfund"];

$_SESSION["regyear"] = $row["regyear"];

header("location:employee/index.php");
exit();
}


}

?>

<script type="text/javascript">
	

	alert('Invalid RSA Number/Secret Pin');
</script>



<?php





}



?>










<!DOCTYPE HTML>
<html>
	<head>
		<title>Pension</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div class="container">

						<!-- Header -->
							<header id="header">
								<div class="inner">

									<!-- Logo -->
										<h1><a href="index.php" id="logo">Pension</a></h1>

									<!-- Nav -->
										<nav id="nav">
											<ul>
												<li class="current_page_item"><a href="index.php">Home</a></li>
												<li>
													<a href="#">Pensioner</a>
													<ul>
														<li><a href="register.php">Sign Up</a></li>
														<li><a href="login.php">Login</a></li>
														
															
													</ul>
												</li>
												<li><a href="admin/login.php">PFA</a></li>
												<li><a href="About Us">About Us</a></li>
												<li><a href="">Contact Us</a></li>
											</ul>
										</nav>

								</div>
							</header>

						<!-- Banner -->
							<div id="banner">
								<h2><strong>PENSION FUNDS MANAGEMENT SYSTEM</strong> 
							</div>

					</div>
				</div>

			<!-- Main Wrapper -->
				<div id="main-wrapper">
					<div class="wrapper style1">
						<div class="inner">

							<!-- Feature 1 -->
<center>
<strong style="font-size:30px ">SIGN IN HERE</strong> <br><br>
<form method="post" action="login.php">
	
	<input type="text" placeholder ="RSA Number" name ="username" style="width: 300px; border: none;
  border-radius: 0;
  border-bottom: 1px solid ; background-color: transparent;"/>

	<input type="password" placeholder ="Secret Pin"name ="password" style="width: 300px; border: none;
  border-radius: 0;
  border-bottom: 1px solid ; background-color: transparent;"/><br></center><br>
<center><input type="submit" name ="btnsub" value = "LOGIN"/><br><br>

<a href="register.php">Register Here, If you don't have an account</a></center>



</form>

						
						</div>
					</div>
				
					
				</div>

			<!-- Footer Wrapper -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						
							
							
							
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Pension. All rights reserved</li><li>Design: <a href="http://html5up.net">MILLZ</a></li>
									</ul>
								
							
						</div>
					</footer>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
