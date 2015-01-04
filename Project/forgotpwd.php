<?php

include('conn.php');

if(isset($_POST['submit2']));
{
	
	$name = @$_POST['name'];
	$sel_emp = "Select name from emp_login where name = '$name'";
	$row = mysqli_query($connection,$sel_emp);
	
	if(mysqli_num_rows($row) == 0) 
	{
		
		//session error here if employee was not there
		$_SESSION['strerr']= 'Employee Does not  exist plese try again..';
		
	}
	else
	{
					// mail function here 
			 
		 				$submit = @$_POST['submit'];
						$name = @$_POST['name'];
						$randpassword = mt_rand();
	
	
					 $sql = "UPDATE emp_login set password= '$randpassword' where name = '$name'";
											$res = mysqli_query($connection,$sql);
											if($res >0)
											{
												?>
                                                <script type="text/javascript">
												alert ("Your Password Changed Successfully");
												</script>
                                                <?php
												
                                               // header('location:login.php');
											}
											else
											{
												?>
                                                <script type="text/javascript">
												alert ("Error Occoured During Password Change");
												</script>
                                                <?php
												header("location:forgotpwd.php");
											}
	
}
	
	


}
?>

<html>
<head>
<title>Forgot Password</title>
</head>

<body>
<?php 
				if(isset($_POST['submit']) && $_SESSION['strerr'] != '' )
				{ 
		  			echo $_SESSION['strerr'];
					 $_SESSION['strerr'] = '';
					 }
					 ?>
                     <h2> Forgot Your Password??? </h2>
                     <h3> Reset Here...</h3>
<form action="#" method="post" name="forgotpass" id="forgotpass">
  <p>Name:
    <label for="name"></label>
  <input type="text" name="name" id="name">
  </p>
  <p>&nbsp;</p>
  <p><input type="submit" name="submit2" id="submit2" value="Reset Password"></p>
   
  <label><span><a href="login.php"><input name="btnback" type="button"  id="btnback"  value="Back" /></a>
</form>


</html>