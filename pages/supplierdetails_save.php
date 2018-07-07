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
$supplierid=$_POST['supplierid'];
$suppliername=$_POST['suppliername'];
$address=$_POST['address'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$sql = "INSERT INTO `supplier`(`supplierid`, `suppliername`, `address`, `phoneno`, `email`) VALUES ('$supplierid','$suppliername','$address','$email','$phoneno')";
 //to code
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header('Location:supplierdetails_view.php');
?> 