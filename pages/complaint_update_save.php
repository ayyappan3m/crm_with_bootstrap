<?php
include 'config.php';
 include 'header.php';
 ?>
  <div class="contentTitle"><h1>Complaint update</h1></div>
        <div class="contentText">
 <p>&nbsp;</p>
          <p><?php
		  $id=$_GET['id'];
          $ins=mysql_query("UPDATE `compalint` SET `purchaseid`='$_POST[purchaseid]',`complaint`='$_POST[complaint]',`status`='$_POST[status]' WHERE purchaseid=$_POST[purchaseid]");
			if($ins){
				echo "Your data Updated.";
				  echo "<script>";
 echo  "window.location.assign('complaintdetails_view.php')";
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