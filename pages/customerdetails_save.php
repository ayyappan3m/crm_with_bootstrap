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
$customerid=$_POST['customerid'];
$customername=$_POST['customername'];
$address=$_POST['address'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$sql = "INSERT INTO `customer`(`customerid`, `customername`, `address`, `phoneno`, `emailid`) VALUES ('$customerid','$customername','$address','$phoneno','$email')";
 //to code
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header('Location:customerdetails_view.php');
mysqli_close($conn);
?> 