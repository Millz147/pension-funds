<?php
$rsa = $_GET["rsa"];

include 'conn.php';

$sql = "SELECT * FROM employee WHERE rsa ='$rsa'";
$link = mysqli_query($connect,$sql);
if ($link){
$s = "APPROVE";
while ($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){

$save = "UPDATE employee SET status = '$s' WHERE rsa = '$rsa'";
$f = mysqli_query($connect,$save);
if ($f)
{
echo "<script>alert('Successfully Approved'); </script>";
?>

<script type="text/javascript">
	window.location ="index.php";



</script>

<?php
}




}


}













?>