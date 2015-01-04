<?php

$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

    if ( empty($uname) ) 
	{
        $error_message = 'User Name is a required field.'; 
    }
 if( empty($pwd))
{
	$error_msg = 'Password is a must.';
	
}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php


echo "Today is: " .date("Y-m-d");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Details</title>
</head>

<body>

<form>


<p><strong>User Name</strong>: <?php echo $uname; ?></p>
<p>
  <p> <?php echo $error_message; ?> </p>
  <strong>Password</strong>: <?php echo $pwd; ?></p>
  <p> <?php echo $error_msg; ?> </p>
</form>


</body>
</html>