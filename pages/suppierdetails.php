<?php
include 'header.php';
?>

<div class="content">
<form action="supplierdetails_save.php" method="post" name="supplierdetails_save">
<table border="1" bgcolor="black">
  <tr>
    <td ><center><b>Supplier Details</b></center></td>
    <td><a href="supplierdetails_view.php" style="text-decoration: none;color:black;"><b>View all</b></a></td>
  </tr>
  <tr>
    <td>Supplier id</td>
    <td><input name="supplierid" type="text" /></td>
  </tr>
  <tr>
    <td>Supplier name</td>
    <td><input name="suppliername" type="text" /></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><textarea name="address" cols="" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input name="email" type="text" /></td>
  </tr>
  <tr>
    <td>phone no</td>
    <td><input name="phoneno" type="text" /></td>
  </tr>
  <tr>
    <td colspan="2"><center><input name="save" type="submit" value="save" /></center></td>
  </tr>
</table>
</form>
  </div>


<?php
include 'footer.php';
?>