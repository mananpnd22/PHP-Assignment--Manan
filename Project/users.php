<?php

include ('admcon.php');

if(isset($_POST['Add']))
{
		

                 	$cid = $_POST['txt'];
				  	$fname = $_POST['txt1'];
					$lname = $_POST['txt2'];
				 	$email =$_POST['txt3'];
					$phone = $_POST['num4'];
					$adr= $_POST['txtarea1'];
					
					$birthdate = $_POST['txt5'];
					 



      $sql="Insert into  emp (client_id,First Name,Last Name, Email, Phone, Address, Birthdate)
	   values ('','$fname','lname','$email','$phone','$adr','$birthdate')";

      $res= mysqli_query($sql);
	  if($res>0)
	  {
		  echo "Hello";
	  }
	  else
	  {
		  echo "sad";
	  }

}
?>











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
				<i><b><span style="font-size:30 " > User</span> </b></i>
				<br>
				<br>
				<span> <a href="adduser.php"><input type="submit" name="add" id="add" value="Add User"></a>
               <span> <a href="viewemp.php"> <input type="submit" name="view" id="view" value="View Users"></a>
                <span> <a href="deleteuser.php"><input type="submit" name="del" id="del" value="Delete User"></a>



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