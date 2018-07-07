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
$productid=$_POST['productid'];
$productname=$_POST['productname'];
$supplierid=$_POST['supplierid'];
$amount=$_POST['amount'];
$mdate=$_POST['mdate'];
$sql = "INSERT INTO `product`(`productid`, `productname`, `supplierid`, `amount`, `mdate`) VALUES ('$productid','$productname','$supplierid','$amount','mdate')";
 //to code
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header('Location:productdetails_view.php');
?> 