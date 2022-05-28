<?php
if (isset($_POST['fund'])){


$rsa = $_POST['rsa'];
$am = $_POST['amount'];
$st = "APPROVE";


include 'conn.php';
$sql = "SELECT * FROM employee WHERE rsa = '$rsa' AND status = '$st'";
$link = mysqli_query($connect,$sql);
if ($link){
	
while ($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){
$old = $row['walletfund'];
$new = $old + $am;

$up = "UPDATE employee SET walletfund = '$new' WHERE rsa = '$rsa'";
$linkk = mysqli_query($connect,$up);
if ($linkk){

$dateee = date('d/m/y');

$ss = "INSERT INTO fundrecords (datee,amount,rsa) VALUES ('$dateee','$am','$rsa')";
$sss = mysqli_query($connect,$ss);

if ($sss){




	echo "<script>alert('SUCCESSFULLY CREDITED!!!');
window.location = \"index.php\";



	</script>";
}
}

}

}

	echo "<script>alert('THE RSA IS NOT APPROVED YET!!!');</script>";
?>
<script type="text/javascript">
	window.location = "index.php";



</script>

	





<?php

}





?>