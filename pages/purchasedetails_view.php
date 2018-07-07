<?php
include 'header.php';
?>

  <h1 style="text-align: center;color: black">purchase Details</h1>
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
    <td>Purchase Id</td>
    <td>Product Name</td>
    <td>Customer Id</td>
    <td>Purchase Date</td>
    <td>Quantity</td>
    <td>Update</td>
    <td>Delete</td>
  </tr>

<?php
$sql = "SELECT * from purchase";
$result = mysqli_query($conn, $sql);
$sno=0;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
    while($row = mysqli_fetch_assoc($result)) {
		$sno=$sno+1;
    echo "<tr>";
	echo "<td>". $sno . "</td>";
	echo "<td>". $row["purchaseid"] . "</td>";
	echo "<td>". $row["productname"] . "</td>";
	echo "<td>". $row["customerid"] . "</td>";
	echo "<td>". $row["purchasedate"] . "</td>";
	echo "<td>". $row["quantity"] . "</td>";
	echo "<td>". "<a href='purchasedetails_update.php?id=$row[purchaseid]'/>delete</a>" . "</td>"; 	
	echo "<td>". "<a href='purchasedetails_delete.php?id=$row[purchaseid]'/>delete</a>" . "</td>"; 
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