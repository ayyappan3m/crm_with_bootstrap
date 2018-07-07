<?php
include 'header.php';
?>

<div class="content">
<form action="productdetails_save.php" method="post" name="productdetails_save">
<table border="1" bgcolor="black">
  <tr>
    <td><center><b>Product Details</b></center></td>
    <td><a href="productdetails_view.php" style="text-decoration: none;color:black;"><b>View all</b></a></td>
  </tr>
  <tr>
    <td>Product id</td>
    <td><input name="productid" type="text" /></td>
  </tr>
  <tr>
    <td>Product name</td>
    <td><input name="productname" type="text" /></td>
  </tr>
  <tr>
    <td>Supplier id</td>
    <td><input name="supplierid" type="text"/></td>
  </tr>
  <tr>
    <td>Amount</td>
    <td><input name="amount" type="text" /></td>
  </tr>
  <tr>
    <td>MDate</td>
    <td><input name="mdate" type="text" /></td>
  </tr>
  <tr>
    <td colspan="2"><center><input name="save" type="submit" value="save" /></center></td>
  </tr>
</table>
</form>
  </div>

<?php
//include 'menu.php';
?>
<?php
include 'footer.php';
?>