<?php
include 'config.php';
 include 'header.php';
 ?>
  <div class="contentTitle"><h1>Insert Page</h1></div>
        <div class="contentText">
 <p>&nbsp;</p>
          <p><?php
		  $id=$_GET['id'];
          $ins=mysql_query("UPDATE `purchase` SET `purchaseid`=$_POST[purchaseid],`productname`='$_POST[productname]',`customerid`='$_POST[customerid]',`purchasedate`='$_POST[purchasedate]',`quantity`='$_POST[quantity]' WHERE purchaseid=$id");
			if($ins){
				echo "Your data Updated.";
				  echo "<script>";
 echo  "window.location.assign('purchasedetails_view.php')";
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