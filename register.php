<?php


if (isset($_POST['btn-submit'])){
$rsa = rand(0000000000,1100000010);
 $name = $_FILES['passport']['name'];
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["passport"]["name"]);
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $extensions_arr = array("jpg","jpeg","png","gif");

        if ($extensions_arr){

        	$p = $rsa."passport.".$imageFileType;
$passport = $target_dir.$rsa."passport.".$imageFileType;
 move_uploaded_file($_FILES['passport']['tmp_name'],'images/'.$p);

        }
else
{

echo "<script>Alert('Invalid Passport Choose');</script>";
  header("Location:register.php");

}


	 
$title = $_POST["title"];
$sname = $_POST["sname"];
$fname = $_POST["fname"];
$oname = $_POST["oname"];
$gender  = $_POST["gender"];
$dob = $_POST["dob"];
$marital = $_POST["marital"];
$nation = $_POST["nationality"];
$nin = $_POST["nin"];
$state = $_POST["origin"];
$hname = $_POST["hname"];
$telephone = $_POST["tel"];
$email = $_POST["email"];
$wtype = $_POST["wtype"];
$place = $_POST["wplace"];
$eid = $_POST["eid"];
$add = $_POST["Addr"];
$fad = $_POST["fad"];
$ced = $_POST["ced"];
$pin = $_POST["Pin"];

$regdate = date('d/m/y');
$wallet = 0;
$status = "UNAPPROVED";
$regyear = date("Y");


include 'conn.php';
$sql = "SELECT * FROM employee WHERE empid = '$eid' OR nin = '$nin';";
	  $raw_results = mysqli_query($connect,$sql);
            
            if($raw_results)
       {
			while($row = mysqli_fetch_array($raw_results,MYSQLI_ASSOC))
                
                {

echo "<script type='text/javascript'>alert('NIN/Employee ID Already Exist Here!!!')</script>";

exit();

}
$sql1 = "INSERT INTO employee (utitle,sname,fname,oname,gender,dob,marital,nationality,nin,housen,telephone,email,wtype,pofwork,empid,fapdate,capdate,secretpin,passport,rsa,walletfund,status,address,regdate,regyear) VALUES ('$title','$sname','$fname','$oname','$gender','$dob','$marital','$nation','$nin','$hname','$telephone','$email','$wtype','$place','$eid','$fad','$ced','$pin','$passport','$rsa','$wallet','$status','$add','$regdate','$regyear')"; 


//$sql1 = "INSERT INTO employee (utitle,passport) VALUES ('$title','$passport')";  
    $res = mysqli_query($connect,$sql1);

      if ($res == TRUE)
       {
       	
       	echo "<script>alert('Successfully Registered, Here is your RSA number (".$rsa.") Please Keep It Safe');</script>";

       }


}


}







?>










<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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

							<!-- Feature 1 --><center>
<img src="images/pension3.jpg"><br><br>
<strong style="font-size:30px ">REGISTRATION</strong> <br><br></center><br><br>



<form method="post" action="register.php"  enctype = "multipart/form-data">
	<h5>Personal-Data</h5>
<hr>
<p>
<select style="width: 80px; border-width: 1px; font-size:18; border-radius: 1px; box-shadow: 4px 4px black" name="title">
	<option>Mr.</option>
	<option>Mrs.</option>
	<option>Miss</option>
</select>



	
	<input type="text" name ="sname" style="width: 300px; border: none;
  border-radius: 0;
  border-bottom: 1px solid ; background-color: transparent; " placeholder="Surname" />
	<input type="text" name ="fname" style="width: 300px ; border: none;
  border-radius: 0;
  border-bottom: 1px solid ; background-color: transparent; " placeholder="Firstname"/>
	<input type="text" name ="oname" style="width: 300px ; border: none;
  border-radius: 0;
  border-bottom: 1px solid ; background-color: transparent; " placeholder="Othername"/></p>
 
<select style="width: 300px; border-width: 1px; font-size: 22px;" name="gender">
	<option>Male</option>
	<option>Female</option>
	
</select>

<select style="width: 300px;border-width: 1px; font-size: 22px; " name="marital">
	<option>Single</option>
	<option>Married</option>
	<option>Divorced</option>
	<option>Widow(er)</option>
	<option>Seperated</option>
	
</select>
Date Of Birth:
<input type="date" name ="dob" style="width: 300px;border-width: 1px"/><br><br>

	<input type="text" name ="nationality" style="width: 300px ; border: none;
  border-radius: 0;
  border-bottom: 1px solid ; background-color: transparent; " placeholder="Nationality"/>
	<input type="text" name ="nin" style="width: 300px ; border: none;
  border-radius: 0;
  border-bottom: 1px solid ; background-color: transparent; " placeholder="NIN"/>
	<input type="text" name ="origin" style="width: 300px ; border: none;
  border-radius: 0;
  border-bottom: 1px solid ; background-color: transparent; " placeholder="State Of Origin"/>

	<hr><br><br><br>
<h5>Residential Address</h5>
<hr>
<p>
<input type="text" name ="hname" style="width: 500px ; border: none;
  border-radius: 0;
  border-bottom: 1px solid ; background-color: transparent; " placeholder="House Number/Name"/>
	<input type="text" name ="tel" style="width: 300px ; border: none;
  border-radius: 0;
  border-bottom: 1px solid ; background-color: transparent; " placeholder="Telephone"/>
	<input type="email" name ="email" style="width: 300px ; border: none;
  border-radius: 0;
  border-bottom: 1px solid ; background-color: transparent; " placeholder="Email Address"/></p>

	<p>

<hr><br><br><br>
<h5>Employment Record</h5>
<hr>



<select style="width: 300px; border-width: 1px; font-size: 22px; font-family: Sans-Serif" name="wtype">
	<option>Federal & State Employer</option>
	<option>Private Sector Employee</option>
	<option>Micro Pension Plan Contributor</option>
	<option>Cross Border Employee</option>
	
</select>
<input type="text" name ="wplace" style="width: 400px ; border: none;
  border-radius: 0;
  border-bottom: 1px solid ; background-color: transparent; " placeholder="Place Of Work"/>
  <input type="text" name ="eid" style="width: 500px ; border: none;
  border-radius: 0;
  border-bottom: 1px solid ; background-color: transparent; " placeholder="Employee ID"/><br><br>
  <input type="text" name ="Addr" style="width: 1200px ; border: none;
  border-radius: 0;
  border-bottom: 1px solid ; background-color: transparent; " placeholder="Address"/></p><br><br>
  <br><br>
  First Appointment Date
	<input type="date" name ="fad" style="width: 400px ; border-width: 1px" />
  Current Employment Date
	<input type="date" name ="ced" style="width: 400px ; 
  border-width: 1px" />
	
<br><br><center>
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }


       </script>

<i>Passport</i><br>
<img src="" width="200" height="200" id="previewImg" ><br><input onchange="previewFile(this);" type="file" name="passport" value = "Select Image" /><br><br>


	
<hr><br><br>
	<input name="Pin" type="password" placeholder="Your Secret Pin" style="width: 300px"/><br>
	After This Registration, u will be Giving An Un-Approved RSA Account Number. Our PFA's Will Need To Verify on the Above Informations.<br>
<input type="submit" name ="btn-submit" value = "REGISTER"/><br><br>

<a href="index.php">Login Here If you have An Account</a></center>



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