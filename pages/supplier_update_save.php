<?php
include 'config.php';
 include 'header.php';
 ?>
  <div class="contentTitle"><h1>Insert Page</h1></div>
        <div class="contentText">
 <p>&nbsp;</p>
          <p><?php
		  $id=$_GET['id'];
          $ins=mysql_query("UPDATE `supplier` SET `supplierid`='$_POST[supplierid]',`suppliername`='$_POST[suppliername]',`address`='$_POST[address]',`phoneno`='$_POST[phoneno]',`email`='$_POST[email]' WHERE supplierid=$id");
			if($ins){
				echo "Your data Updated.";
				  echo "<script>";
 echo  "window.location.assign('supplierdetails_view.php')";
 echo "</script>";
			}
			else{
				echo "Error occured. try again.";
			}
		  ?></p>
          
           </div>

          <?php
 include 'footer.php';
 ?>