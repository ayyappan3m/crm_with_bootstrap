<?php
include 'config.php';
 include 'header.php';
 ?>
  <div class="contentTitle"><h1>Insert Page</h1></div>
        <div class="contentText">
 <p>&nbsp;</p>
          <p><?php
		  $id=$_GET['id'];
          $ins=mysql_query("UPDATE `product` SET `productid`=$_POST[productid],`productname`='$_POST[productname]',`supplierid`='$_POST[supplierid]',`amount`='$_POST[amount]',`mdate`='$_POST[mdate]' WHERE productid=$id");
			if($ins){
				echo "Your data Updated.";
				  echo "<script>";
 echo  "window.location.assign('productdetails_view.php')";
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