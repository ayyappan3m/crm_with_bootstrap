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
  $select=mysql_query("SELECT * FROM purchase where purchaseid=$id");
 
   while($row=mysql_fetch_array($select))
   {  
   ?>
    <form action="purchasedetails_update_save.php?id=<?php echo $row['purchaseid'] ?>" method="post">
    
          <table width="200" border="1" style="color:black">
  <tr>
    <td><b>Purchase Id</b></td>
    <td>
    <input name="purchaseid" type="text" value="<?php echo $row['purchaseid'] ?>" /> </td>
  </tr>
  <tr>
    <td><b>Product Name</b></td>
    <td> <input name="productname" type="text"  value="<?php echo $row['productname'] ?>" /></td>
  </tr>
  <tr>
    <td><b>Customer Id</b></td>
    <td> <input name="customerid" type="text"  value="<?php echo $row['customerid'] ?>" /></td>
  </tr>
  <tr>
    <td><b>Purchase Date</b></td>
    <td><input name="purchasedate" type="text" value="<?php echo $row['purchasedate'] ?>"/></td>
  </tr>
  <tr>
    <td><b>Quantity</b></td>
    <td> <input name="quantity" type="text"  value="<?php echo $row['quantity'] ?>" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"> <input name="submit" type="submit" value="Save" style="text-align: center" /></td>
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