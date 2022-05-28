<?php




include ('../db/conn.php');
$addr = $_GET["addr"];

$sql = "SELECT * FROM properties WHERE Address = '$addr'";

$link = mysqli_query($connect,$sql);

if ($link){

while($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){

$Fulladdress = $row["Address"];
$Price = $row["Price"];
$Nature = $row["Nofapartment"];
$photo = $row["p1"];
$country = $row["Country"];
$state = $row["State"];
$city = $row["City"];
$purpose = $row["Purpose"];



$sql2 = "SELECT * FROM slides WHERE Address = '$addr'";
    $raw_resultss = mysqli_query($connect,$sql2);
            
            if($raw_resultss)
       {
      while($rowss = mysqli_fetch_array($raw_resultss,MYSQLI_ASSOC))
                
                {


echo "<script>alert('Property is already in existence in the slides !!!');</script>";

exit();

}





$sql1 = "INSERT INTO slides (Nofapartment, Price, Address, Country, State, City, Photo, Purpose)VALUES('$Nature','$Price','$Fulladdress','$country','$state','$city','$photo','$purpose')";


$res = mysqli_query($connect,$sql1);

      if ($res == TRUE)
       {
        
        echo "<script>alert('Successfully Added Into Slides');</script>";

       }
}




}




}



?>

