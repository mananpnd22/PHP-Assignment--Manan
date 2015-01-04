<?php

include ('admcon.php');




$edittable=$_POST['chkbox'];
$N = count($edittable);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($connection,"DELETE FROM emp_tbl WHERE emp_id = '$edittable[$i]'");
}
	header("location:users.php");
	//$a = $_POST['chkbox'];
	//$sql = mysqli_query($connection,"DELETE FROM emp_tbl WHERE emp_id = '$a'");

	
 
?>
