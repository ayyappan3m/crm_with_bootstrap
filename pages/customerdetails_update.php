<?php
  include 'config.php';
 include 'header.php';
 ?>
  <div class="contentTitle"><h1>Update Login Details</h1></div>
        <div class="contentText">
 <p>&nbsp;</p>
          <p>
         
          <?php
		   $id=$_GET['id'];
  $select=mysql_query("SELECT * FROM product where productid=$id");
 
   while($row=mysql_fetch_array($select))
   {  
   ?>
    <form action="productdetails_update_save.php?id=<?php echo $row['productid'] ?>" method="post">
    
          <table width="200" border="1">
  <tr>
    <td><b>Product Id</b></td>
    <td>
    <input name="productid" type="text" value="<?php echo $row['productid'] ?>" /> </td>
  </tr>
  <tr>
    <td><b>Product Name</b></td>
    <td> <input name="productname" type="text"  value="<?php echo $row['productname'] ?>" /></td>
  </tr>
  <tr>
    <td><b>Supplier Id</b></td>
    <td> <input name="supplierid" type="text"  value="<?php echo $row['supplierid'] ?>" /></td>
  </tr>
  <tr>
    <td><b>Amount</b></td>
    <td><input name="amount" type="text" value="<?php echo $row['amount'] ?>"/></td>
  </tr>
  <tr>
    <td><b>Mdate</b></td>
    <td> <input name="mdate" type="text"  value="<?php echo $row['mdate'] ?>" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"> <input name="submit" type="submit" value="Save" /></td>
  </tr>
</table>
<?php
   }
?>
</form>
          </p>
          
           </div>

          <?php
 include 'footer.php';
 ?>