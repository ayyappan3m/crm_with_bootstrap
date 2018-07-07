<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crm";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//to code
$productid=$_GET['id'];


$sql = "delete from `product` where productid='$productid'";
 //to code
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header('Location:productdetails_view.php');
mysqli_close($conn);
?> 