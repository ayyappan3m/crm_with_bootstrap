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
  $select=mysql_query("SELECT * FROM supplier where supplierid=$id");
 
   while($row=mysql_fetch_array($select))
   {  
   ?>
    <form action="supplier_update_save.php?id=<?php echo $row['supplierid'] ?>" method="post">
    
          <table width="200" border="1">
  <tr>
    <td><b>Supplier Id</b></td>
    <td>
    <input name="supplierid" type="text" value="<?php echo $row['supplierid'] ?>" /> </td>
  </tr>
  <tr>
    <td><b>Supplier Name</b></td>
    <td> <input name="suppliername" type="text"  value="<?php echo $row['suppliername'] ?>" /></td>
  </tr>
  <tr>
    <td><b>Address</b></td>
    <td> <input name="address" type="text"  value="<?php echo $row['address'] ?>" /></td>
  </tr>
  <tr>
    <td><b>Phone No</b></td>
    <td><input name="phoneno" type="text" value="<?php echo $row['phoneno'] ?>"/></td>
  </tr>
  <tr>
    <td><b>Email Id</b></td>
    <td> <input name="email" type="text"  value="<?php echo $row['email'] ?>" /></td>
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