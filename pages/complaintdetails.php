<?php
include 'header.php';
?>

<div class="content">
<form action="complaintdetails_save.php" method="post" name="complaintdetails_save">
<table border="1" bgcolor="black">
  <tr>
      <td ><center><b>Compalint Details</b></center></td>
    <td><a href="complaintdetails_view.php" style="text-decoration: none;color:black;"><b>View all</b></a></td>
  </tr>
  <tr>
    <td>Purchase id</td>
    <td><input name="purchaseid" type="text" /></td>
  </tr>
  <tr>
    <td>Complaint</td>
    <td><textarea name="complaint" type="text" rows="5"/></textarea></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><input name="status" type="text"/></td>
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