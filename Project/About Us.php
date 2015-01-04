<html>
	<head>
		<title> About Us </title>
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
    float: left; }
aside {
    width: 600px;
    float: right; }
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
    border-bottom: 2px solid black; }
#nav_bar li {
    display: inline;
    padding: 0 1.5em;  
    }
#nav_bar a {
    font-family:"Times New Roman";
	font-size:large;
    font-weight: bold;
    color: blue;  }
#nav_bar a.current { color: text-decoration: none; }
	#nav_bar ul {
    list-style: none;
    padding: 1em 0;       
    background-color: blue; }
#nav_bar li { display: inline; }
#nav_bar a {
    padding: 1em;     
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-right: 2px solid white; }
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
				
				
				
				
				<aside><br>
				<br>
				<br>
								<br>
			
				<br>
					<p><i><b><span style="font-size:30" style="font-family:Comic Sans MS">About Us</span></b></i></p>
					<br>
					<br>
					<p><b><span style="font-size:25">JMP InfoSystems Pvt. Ltd.</span></b></p>
					<br/>
					<p> JMP Infosystems is a Software Developer Firm that is in business of Making software for a client based on the client's Problem.
						 JMP Infosystems develops advanced, custom solutions for firms of all sizes in financial services, learning, hospitality, consumer and other industries. We combine domain knowledge with offshore cost advantages and resource flexibility to develop industry-defining applications. Our software development services help clients optimize their time-to-market and minimize software development risks in mission-critical systems.

JMP Infosystems is the leading software development company in Canada. With an unrivaled talent pool of highly skilled software engineers in Canada, JMP Infosystems has the technical skills, accountability and industry knowledge to deliver custom applications on time and on budget – each and every time. </p>
				
				</aside>
				<footer>
					
					<p>
						<i>&copy; All Rights Reserved JMP Infosystems Pvt. Ltd.<sup>&reg;</sup> </i>
					</p>
					<p align="right" style="color: RED"> Designed by JMP Software Solutions.</p>
</footer>
				
				
				
				
		</body>
</html>