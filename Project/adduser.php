<?php

include ('admcon.php');

if(isset($_POST['add']))
{
		

                 	$eid = @$_POST['eid'];
				  	$fname =@ $_POST['fname'];
					$lname = @$_POST['lname'];
				 	$email =@$_POST['email'];
					$phone =@ $_POST['phone'];
					$adr= @$_POST['address'];
					
					$birthdate =@ $_POST['bdate'];
					 

$query = mysqli_query($connection,"INSERT INTO emp_tbl (fname,lname,email,phone,address,bdate) 
				VALUES('$fname','$lname','$email','$phone','$adr','$birthdate')");

     
	 
	  if($query>0)
	  {
		  
		  header("location:users.php");
	  }
	  else
	  {
		  
		  header("location:adduser.php");
	  }

}


if(isset($_POST['update']))
{
		

                 	$aid = @$_POST['aid'];
				  	$fname =@ $_POST['fname'];
					$lname = @$_POST['lname'];
				 	$email =@$_POST['email'];
					$phone = @$_POST['phone'];
					$adr= @$_POST['address'];
					
					$birthdate = @$_POST['bdate'];
					 
$query = mysqli_query($connection,"INSERT INTO adm (fname,lname,email,phone,address,bdate) 
				VALUES('$fname','$lname','$email','$phone','$adr','$birthdate')");


      $sql="INSERT INTO  adm (fname,lname, email, phone, address, bdate)
	   VALUES ('$fname','lname','$email','$phone','$adr','$birthdate')";

     
	   if($query>0)
	  {
		  
		  header("location:users.php");
		 
	  }
	  else
	  {
		  
		  header("location:adduser.php");
		  
	  }

}

?>



<script type="text/javascript">

function go()
{
	alert("There you Go");
}
</script>







<html>
	<head>
		<title> Add User </title>
	<style>
	* { margin: 0; padding: 0; }
body {
    width: 962px;
    background-color: white;
    margin: 15px auto;
    border: 1px solid black;
    height:800px; }
h1 { padding: 10px; }

header { border-bottom: 2px solid #ef9c00; 


height:250}
section { 
    height: 450px;     
    width: 300px;
    float: left;
    border-right: 2px solid #ef9c00;
    float: left; 
    }
aside {
    width: 600px;
    float: right;
     }
footer {
    clear: both;
    border-top: 2px solid #ef9c00; }
	* { margin: 0;
    padding: 0; }
#nav_list ul { 
    list-style: none;               
    margin-left: 1.25em;
    margin-bottom: 1.5em; }
#nav_list li { 
    width: 200px;
    margin-bottom: .5em;            
    border: 2px solid blue; }     
   #nav_list li a:hover
   {
   	color:BROWN;
   }  
#nav_list li a {
    display: block;                 
    padding: .5em 0 .5em 1.5em;     
    text-decoration: none;          
    font-weight: bold;
    color: blue; }    
#nav_list a.current { 
    backgound-color: silver; }      
	#nav_bar ul {
    list-style: none;
    padding: 1em 0;    
    border-top: 2px solid black;
     }
#nav_bar li {
    display: inline;
    padding: 0 1.5em;  
     }
#nav_bar a {
	font-family:"Times New Roman";
	font-size:large;
    font-weight: bold;
    color: blue; }
#nav_bar a.current { color: text-decoration: none; }
	#nav_bar ul {
    list-style: none;
    padding: 1em 0;       
    background-color: blue; }
#nav_bar li { display: inline; }
#nav_bar a {
    padding: 1em ;     
    text-decoration: none;
    color: white;
    font-family:"Times New Roman"
    font-weight: bold;
    border-right: 2px solid yellow; }
#nav_bar a.current { color: white; }
	
	</style>
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
 $(document).ready(function(){
	 $("tr.admid td").hide();
	 $("tr.empid td").hide();
	 $(".btn3").hide();
	 $(".btn4").hide();
 });
 
$(document).ready(function(){
  $(".btn1").click(function(){
    $("tr.empid td").show(1000);
	$("tr.admid td").hide();
	$(".btn3").show(1000);
	$(".btn4").hide();
  });
  
  $(".btn2").click(function(){
	  $("tr.admid td").show(1000);
	  $("tr.empid td").hide();
	  $(".btn4").show(1000);
	  $(".btn3").hide();
  });
});


</script>
</head>


		<body>
				<header><img src="images.jpg" height="200"width="300" align="left">&nbsp;&nbsp; <font size="24"><b><i>Injury Tracking System</i></b></font>
                
                <p id="demo" align="right">
					<?php
					
					echo date('m-d-Y');
					?>

</p>
					
                </header>
				<div>
					
<nav id="nav_bar">
    <ul>
        <li><a href="its.php">Home</a></li>
        <li><a href="dashboard.php">Dashboard</a></li> 
        <li><a href="users.php" class="current">
            Users</a></li> 
        <li><a href="About Us.php">About Us</a></li>
        <li><a href="report.php">Report</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        
    </ul>
</nav>
				</div>
				<br />
			
				<section>
					
<nav id="nav_list">
    <ul>
        <li><a href="its.php">Home</a></li>
        <li><a href="dashboard.php">Dashboard</a></li> 
        <li><a href="users.php" class="current">
            Users</a></li> 
        <li><a href="About Us.php">About Us</a></li>
        <li><a href="report.php">Report</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
         <li><a href="login.php">Logout</a></li>
    </ul>
</nav>
					
				
				
				</section>
				
				
				
				
				<aside>
               
				<p>
				<i><b><span style="font-size:30 " > Add New User</span> </b></i>
				<br>
				<br>
               
	<button class="btn1" style="font-size:16px"> User</button>
    <button class="btn2" style="font-size:16px"> Admin</button>
<br>
<br>
<table>

<tr class="empid">
<td>Employee Id:</td>
<td><input type="text" name="eid"></td>
</tr>

<tr class="admid">
<td>Admin Id:</td>
<td><input type="text" name="aid"></td>
</tr>


<tr>
<td>First Name:</td>
<td><input type="text" name="fname"></td>
</tr>

<tr>
<td>Last Name:</td>
<td><input type="text" name="lname"></td>
</tr>

<tr>
<td>Email:</td>
<td><input type="email" name="email"></td>
</tr>

<tr>
<td>Phone:</td>
<td><input type="text" name="phone"></td>
</tr>

<tr>
<td>Address:</td>
<td><textarea rows="4" cols="18" name="address"></textarea></td>
</tr>


<tr>
<td>Date of Birth:</td>	
<td><input type="text" name="bdate" id="bdate"></td>
</tr>
<form action="#" method="post" id="adduser" name="adduser">
<tr>
<td align="right" class="btn3"><br><br><input type="submit" value="Add Employee" name="add" style="font-size:18px" ></td>	
<td align="right" class="btn4"><br><br><input type="submit" value="Add Admin" name="update" style="font-size:18px"></td>
</tr>
</form>
</table>
 <br>
 <br>
 <span> <a href="users.php"><input type="submit" name="back" id="back" value="Back" style="font-size:14px"></a>
                 </p>
                 <br/>
                 <br /> 
				
				</aside>
				<footer>
					<p>
						<i>&copy; All Rights Reserved JMP Infosystems Pvt. Ltd.<sup>&reg;</sup> </i>
					</p>
					<p align="right" style="color: RED"> Designed by Manan Pandya</p>

</footer>
				
				
				
				
		</body>
</html>