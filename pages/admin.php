<?php
 include 'header.php';
?>
<form id="form1" name="form1" action="admin.php" method="post">
<center><table width="200" border="0">
  <tbody>
    <tr>
      <td>Username</td>
      <td><div class="input-group custom-search-form">
		  <input class="form-control" name="username" type="text"></div></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><div class="input-group custom-search-form">
		  <input class="form-control" type="password" name="password"></div></td>
    </tr>
    <tr>
       <td colspan="2"><input type="submit" value="submit" style="align-content: center"></td>
    </tr>
  </tbody>
</table>
	</center>
</form>

  <?php
error_reporting(0);
    if (isset($_POST['username']))
        {     
    include("config.php");
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['login_user']=$username; 
    $query = mysql_query("SELECT username FROM users WHERE username='$username' and password='$password'");
     if (mysql_num_rows($query) != 0)
    {
     echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";   
      }
      else
      {
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
    }
    ?>



<?php
 include 'footer.php';
?>



