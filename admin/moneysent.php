<?php

$rsa = $_GET['rsa'];
$amo = $_GET['amo'];
$baccnu = $_GET['baccnu'];
$baccna = $_GET['baccna'];
$btype = $_GET['btype'];
$datee = $_GET['datee'];
$fn = $_GET['fn'];
include 'conn.php';

$sql = "SELECT * FROM employee WHERE rsa = '$rsa'";
$link = mysqli_query($connect,$sql);
if ($link){
while ($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){

$witreq = "NO";
$Walletfund = $row['walletfund'];
$a = 0;
$yes = "YES";
if ($amo == $Walletfund){

$up = "UPDATE employee SET walletfund= '$a', withreq ='$witreq', fullwithdraw='$yes' WHERE rsa = '$rsa'";
$d = mysqli_query($connect,$up);
if ($d){
?>
<script type="text/javascript">
	alert('THE EMPLOYEE MADE A FULL WITHDRAWAL, HE/SHE HAS NO RECORD AGAIN, THANKS');


window.location  = "index.php";

</script>


<?php

}}
$bal = $Walletfund - $amo;

$up = "UPDATE employee SET withreq ='$witreq', walletfund = '$bal' WHERE rsa = '$rsa'";
$d = mysqli_query($connect,$up);


$b = $Walletfund - $amo;
$up = "INSERT INTO withdraw (rsa,amount,baccnu,baccna,btype,datee,fname) VALUES ('$rsa','$amo','$baccnu','$baccna','$btype','$datee','$fn')";
$d = mysqli_query($connect,$up);
if ($d){
?>
<script type="text/javascript">
	alert('MONEY SUCCESSFULY SENT, THANKS');


window.location  = "index.php";

</script>


<?php
exit();
}


}




}









?>