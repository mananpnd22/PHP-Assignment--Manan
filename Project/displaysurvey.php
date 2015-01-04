<?php

include('conn.php');

$query = mysqli_query($connection, "SELECT * FROM survey");



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<h1 align="center" style="font-size:24px">View All Surveys</h1>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display All Survey</title>
</head>

<body>
<form>
<table cols="6" border="10">

<tr>
<th>Name</th>
<th>Phone</th>
<th>Marital Status</th>
<th>Credit Card Type</th>
<th>Credit Card Expiry Month</th>
<th>Credit Card Expiry Year</th>
<th>Comments</th>
</tr>
 <tbody>
              
			  <?php
			  $chkcnt = 1;
			  while($empres = mysqli_fetch_array($query))
			  {
			  	
			   ?>
			  <tr>
				<td><?php echo @$empres['name'];?></td>
                <td><?php echo @$empres['phone'];?></td>
                <td><?php echo @$empres['status'];?></td>
                <td><?php echo @$empres['cctype'];?></td>
                <td><?php echo @$empres['ccexpirymonth'];?></td>
                <td><?php echo @$empres['ccexpiryyear'];?></td>
                <td><?php echo @$empres['comments'];?></td>
                
                
                
                
             <?php $chkcnt++; } ?> 
              
              
             </tr>
            </tbody>

</table> 

</form>
<br />
<br />
<br />
<span> <a href="survey.php"><input type="submit" name="back" value="Back" /></a>
</body>
</html>