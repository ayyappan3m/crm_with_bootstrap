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
  $select=mysql_query("SELECT * FROM compalint where purchaseid=$id");
 
   while($row=mysql_fetch_array($select))
   {  
   ?>
    <form action="complaint_update_save.php?id=<?php echo $row['purchaseid'] ?>" method="post">
    
          <table width="200" border="1" style="color:black">
  <tr>
    <td><b>Purchase Id</b></td>
    <td>
    <input name="purchaseid" type="text" value="<?php echo $row['purchaseid'] ?>" /> </td>
  </tr>
  <tr>
    <td><b>Complaint</b></td>
    <td> <input name="complaint" type="text"  value="<?php echo $row['complaint'] ?>" /></td>
  </tr>
    <td><b>Status</b></td>
    <td> <input name="status" type="text"  value="<?php echo $row['status'] ?>" /></td>
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