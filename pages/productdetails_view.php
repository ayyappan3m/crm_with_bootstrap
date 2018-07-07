<?php
include 'header.php';
?>

  <h1 style="text-align: center;color: black">Product Details</h1>
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
?>
<table width="200" border="2" style="color: black">
  <tr>
    <td>slno</td>
    <td>Product Id</td>
    <td>Product Name</td>
    <td>Supplier id</td>
    <td>Amount</td>
    <td>MDate</td>
    <td>Update</td>
    <td>Delete</td> 
  </tr>

<?php
$sql = "SELECT * from product";
$result = mysqli_query($conn, $sql);
$sno=0;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
    while($row = mysqli_fetch_assoc($result)) {
		$sno=$sno+1;
    echo "<tr>";
	echo "<td>". $sno . "</td>";
	echo "<td>". $row["productid"] . "</td>";
	echo "<td>". $row["productname"] . "</td>";
	echo "<td>". $row["supplierid"] . "</td>";
	echo "<td>". $row["amount"] . "</td>";
	echo "<td>". $row["mdate"] . "</td>";
	echo "<td>". "<a href='productdetails_update.php?id=$row[productid]'/>Update</a>" . "</td>";	
	echo "<td>". "<a href='productdetails_delete.php?id=$row[productid]'/>Delete</a>" . "</td>";
	 echo "<tr>";
	}
} else {
    echo "0 results";
}
 
mysqli_close($conn);
?> 
</table>

  <?php
include 'footer.php';
?> 