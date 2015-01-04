<?php 


include('conn.php');

if(isset($_POST['btn_submit']))
{

	
	 $uname = $_POST['uname'];
	 $pass = $_POST['pwd'];
	
	// select query to emp table 
	$query = mysqli_query($connection,"Select id from emp_login where username = '$uname' and password = '$pass'");
	//$row = mysql_query($query);
	
	if(mysqli_num_rows($query) == 0) 
	{
	
	?>
   <script type="text/javascript">
	
	alert("OOPs!!!Employee Doesn't Exist!!");
	
	</script>
    <?php
				//session error here if employee was not there
		$_SESSION['strmsg']= 'Employee Does not  exist plese try again..';
		
		
	}
	else
	{
		$result = mysql_fetch_array($query);
		// insert data into login table
		
		header("location:its.php");
	
	
	}
	
}


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript">

function ValidatePassword()
{
	var pwdchk = frmlogin.pwd.value;
   	if(pwdchk == '')
	{
			alert("Please enter Password!");
			document.frmlogin.pwd.focus();
			 return (false);
	}
}

function ValidateUsername()
{
	var emailchk = frmlogin.uname.value;
   	if(emailchk == '')
	{
			alert("Please enter email address!");
			document.frmlogin.uname.focus();
			 return (false);
	}
}

</script> 


<title>Login</title>
</head>

<body>
<?php 
				if(isset($_POST['login']) && $_SESSION['strmsg'] != '' )
				{ 
		  			echo $_SESSION['strmsg'];
					 $_SESSION['strmsg'] = '';
					 }
					 ?>
                     <div id="loginpage" align="center">
                     <h2>Login Here</h2>
<form action="#" method="post" name="frmlogin" id="frmlogin" onsubmit="return ValidatePassword()">

    <label> User Name : </label>
    
    <label for="uname"></label>
  <input type="text" name="uname" id="uname"  />
  </p>
  <p>Password :    
    <label for="pwd"></label>
    <input type="password" name="pwd" id="pwd"/>
  </p>
  <p>
    <input type="submit" name="btn_submit" id="btn_submit" value="Submit" onClick="return ValidateUsername()" />	
    </p>
  <p><a href="forgotpwd.php">Forgot Password??</a></p>
</form>
</div>
</body>
</html>
