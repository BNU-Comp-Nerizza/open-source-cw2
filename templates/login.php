<?php echo $message; ?>

<form name="frmLogin" enctype='multipart/form-data' action="authenticate.php" method="post">
   Student ID:
   <input name="txtid" class='form-control' type="text" />
   <br/>
   Password:
   <input name="txtpwd" class='form-control' type="password" />
   <br/>
   <input type="submit"  class='btn btn-primary' value="Login" name="btnlogin" />
</form>