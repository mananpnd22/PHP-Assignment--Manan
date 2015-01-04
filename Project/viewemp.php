<?php

include ('admcon.php');



$query = mysqli_query($connection,"SELECT * FROM emp_tbl");

     
	 
?>

<html>
	<head>
		<title> View User </title>
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
				<i><b><span style="font-size:30 " > All User</span> </b></i>
				<br>
				<br>
               
	
 <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Sheet" border="10">
		  	 <thead>
              <tr>
				<th width="90" scope="col">Id</th>
                <th width="150" scope="col">First Name</th>
                <th width="102" scope="col">Last Name</th>
                <th width="109" scope="col">Email</th>
                <th width="129" scope="col">Phone</th>
                <th width="171" scope="col">Address</th>
                <th width="123" scope="col">Birthdate</th>
              </tr>
            </thead>
            <tbody>
              
			  <?php
			  $chkcnt = 1;
			  while($empres = mysqli_fetch_array($query))
			  {
			  	
			   ?>
			  <tr>
				<td><?php echo @$empres['emp_id'];?></td>
                <td><?php echo @$empres['fname'];?></td>
                <td><?php echo @$empres['lname'];?></td>
                <td><?php echo @$empres['email'];?></td>
                <td><?php echo @$empres['phone'];?></td>
                <td><?php echo @$empres['address'];?></td>
                <td><?php echo date('d.m.Y', strtotime(@$empres['bdate']));?></td>
                
                
                
                
             <?php $chkcnt++; } ?> 
              
              
             </tr>
            </tbody>
          </table>
        </form>
 <br>
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