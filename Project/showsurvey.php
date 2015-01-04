<?php

include('conn.php');

$name =@ $_POST['name'];
$phone =@ $_POST['phone'];
$status =@ $_POST['MaritalStatus'];
$cctype = @$_POST['cctype'];
$ccexpmonth = @$_POST['expdate'];
$ccexpyear = @$_POST['expyear'];
$cmnt = @$_POST['comment'];
					
					
					
if(isset($_POST['OK']))
{

	       

     $query = "INSERT INTO survey (name,phone,status,cctype,ccexpirymonth,ccexpiryyear,comments)
	 		VALUES ('$name','$phone','$status','$cctype','$ccexpmonth','$ccexpyear','$cmnt')";
	 $sql = mysqli_query ($connection, $query);
			
	  if($sql>0)
	  {
		echo "Success";
		//header("location:survey.php");
	  }
	  else
	  {
		 echo "Sad";
		 //header("location:showsurvey.php");
	  }
}



?>


<?php
function format_telephone($phone_number)
{
    $cleaned = preg_replace('/[^[:digit:]]/', '', $phone_number);
    preg_match('/(\d{3})(\d{3})(\d{4})/', $cleaned, $matches);
    return "({$matches[1]}) {$matches[2]}-{$matches[3]}";
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<h1 align="center" style="font-size:24px">Details You Filled!!</h1>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Survey Finished</title>
</head>

<body>

<form action="#" method="post" name="formconfirm">
	<input type='hidden' name='name' value='<?=$name?>' />
	<input type='hidden' name='phone' value='<?=$phone?>' />
	<input type='hidden' name='MaritalStatus' value='<?=$status?>' />
	<input type='hidden' name='cctype' value='<?=$cctype?>' />
	<input type='hidden' name='expdate' value='<?=$ccexpmonth?>' />
	<input type='hidden' name='expyear' value='<?=$ccexpyear?>' />
	<input type='hidden' name='comment' value='<?=$cmnt?>' />
  <p>Name: <?php echo $name; ?> </p>
  <p>Phone: <?php echo format_telephone($phone); ?></p>
  <p>Status: <?php echo $status; ?></p>
  <p>Credit Card Type: <?php echo $cctype; ?></p>
  <p>Credit Card Expiry Date: <?php echo $ccexpmonth; ?>/<?php  echo $ccexpyear; ?></p>
  <p>Comments: <?php echo $cmnt; ?></p>
  
  <input type="submit" name="OK" id="OK" value="OK" />
</form>

<br />
<br />

<span> <a href="survey.php"><input type="submit" name="back" value="Back" /></a>

<span> <a href="displaysurvey.php"><input type="submit" name="display" value="Display All Surveys"></a>
</body>
</html>