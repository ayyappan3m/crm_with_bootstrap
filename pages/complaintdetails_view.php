<?php
include 'header.php';
?>

  <h1 style="text-align: center;color: black">Complaint Details</h1>
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
    <td>Complaint</td>
    <td>Status</td>
    <td>Update</td>
   <td>Delete</td>
  </tr>

<?php
$sql = "SELECT * from compalint";
$result = mysqli_query($conn, $sql);
$sno=0;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
    while($row = mysqli_fetch_assoc($result)) {
		$sno=$sno+1;
    echo "<tr>";
	echo "<td>". $sno . "</td>";
	echo "<td>". $row["purchaseid"] . "</td>";
	echo "<td>". $row["complaint"] . "</td>";
	echo "<td>". $row["status"] . "</td>";
	echo "<td>". "<a href='complaint_update.php?id=$row[purchaseid]'/>Update</a>" . "</td>";	
	echo "<td>". "<a href='complaintdetails_delete.php?id=$row[purchaseid]'/>Delete</a>" . "</td>";
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