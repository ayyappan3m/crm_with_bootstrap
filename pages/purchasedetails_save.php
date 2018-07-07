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
$purchaseid=$_POST['purchaseid'];
$productname=$_POST['productname'];
$customerid=$_POST['customerid'];
$purchasedate=$_POST['purchasedate'];
$quantity=$_POST['quantity'];
$sql = "INSERT INTO `purchase`(`purchaseid`, `productname`, `customerid`, `purchasedate`, `quantity`) VALUES ('$purchaseid','$productname','$customerid','$purchasedate','$quantity')";
 //to code
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header('Location:purchasedetails_view.php');
mysqli_close($conn);
?> 