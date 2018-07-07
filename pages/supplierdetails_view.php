<?php
include 'header.php';
?>

  <h1 style="text-align: center;color: black">Supplier Details</h1>
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
    <td>Supplier Id</td>
    <td>Supplier Name</td>
    <td>Address</td>
    <td>Email</td>
    <td>Phone No</td>
    <td>Update</td>
    <td>Delete</td>
  </tr>

<?php
$sql = "SELECT * from supplier";
$result = mysqli_query($conn, $sql);
$sno=0;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
    while($row = mysqli_fetch_assoc($result)) {
		$sno=$sno+1;
    echo "<tr>";
	echo "<td>". $sno . "</td>";
	echo "<td>". $row["supplierid"] . "</td>";
	echo "<td>". $row["suppliername"] . "</td>";
	echo "<td>". $row["address"] . "</td>";
	echo "<td>". $row["email"] . "</td>";
	echo "<td>". $row["phoneno"] . "</td>";
    echo "<td>"."<a href='supplier_update.php?id=$row[supplierid]'/>Update</a>"."</td>";		
	echo "<td>"."<a href='supplierdetails_delete.php?id=$row[supplierid]'/>Delete</a>"."</td>";
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