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
$complaint=$_POST['complaint'];
$status=$_POST['status'];

$sql = "INSERT INTO `compalint`(`purchaseid`, `complaint`, `status`) VALUES ('$purchaseid','$complaint','$status')";
 //to code
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header('Location:complaintdetails_view.php');
mysqli_close($conn);
?> 