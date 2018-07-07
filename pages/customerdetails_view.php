<?php
include 'header.php';
?>

  <h1 style="text-align: center;color: black">Customer Details</h1>
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
    <td>Customer Id</td>
    <td>Customer Name</td>
    <td>address</td>
    <td>Phone No</td>
    <td>Email</td>
    <td>Update</td>
    <td>Delete</td>
  </tr>

<?php
$sql = "SELECT * from customer";
$result = mysqli_query($conn, $sql);
$sno=0;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
    while($row = mysqli_fetch_assoc($result)) {
		$sno=$sno+1;
    echo "<tr>";
	echo "<td>". $sno . "</td>";
	echo "<td>". $row["customerid"] . "</td>";
	echo "<td>". $row["customername"] . "</td>";
	echo "<td>". $row["address"] . "</td>";
	echo "<td>". $row["phoneno"] . "</td>";
	echo "<td>". $row["emailid"] . "</td>";
	echo "<td>". "<a href='customerdetails_update.php?id=$row[customerid]'/>Update</a>" . "</td>"; 	
	echo "<td>". "<a href='customerdetails_delete.php?id=$row[customerid]'/>Delete</a>" . "</td>"; 
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