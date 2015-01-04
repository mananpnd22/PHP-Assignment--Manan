<html>
	<head>
		<title> Home-Injury Tracking System </title>
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.1.min.js"></script>
        <script type="text/javascript">
            var graph;
            var xPadding = 30;
            var yPadding = 30;
            
            var data = { values:[
                { X: "Jan", Y: 12 },
                { X: "Feb", Y: 28 },
                { X: "Mar", Y: 18 },
                { X: "Apr", Y: 34 },
                { X: "May", Y: 40 },
            ]};

            // Returns the max Y value in our data list
            function getMaxY() {
                var max = 0;
                
                for(var i = 0; i < data.values.length; i ++) {
                    if(data.values[i].Y > max) {
                        max = data.values[i].Y;
                    }
                }
                
                max += 10 - max % 10;
                return max;
            }
            
            // Return the x pixel for a graph point
            function getXPixel(val) {
                return ((graph.width() - xPadding) / data.values.length) * val + (xPadding * 1.5);
            }
            
            // Return the y pixel for a graph point
            function getYPixel(val) {
                return graph.height() - (((graph.height() - yPadding) / getMaxY()) * val) - yPadding;
            }

            $(document).ready(function() {
                graph = $('#graph');
                var c = graph[0].getContext('2d');            
                
                c.lineWidth = 2;
                c.strokeStyle = '#333';
                c.font = 'italic 8pt sans-serif';
                c.textAlign = "center";
                
                // Draw the axises
                c.beginPath();
                c.moveTo(xPadding, 0);
                c.lineTo(xPadding, graph.height() - yPadding);
                c.lineTo(graph.width(), graph.height() - yPadding);
                c.stroke();
                
                // Draw the X value texts
                for(var i = 0; i < data.values.length; i ++) {
                    c.fillText(data.values[i].X, getXPixel(i), graph.height() - yPadding + 20);
                }
                
                // Draw the Y value texts
                c.textAlign = "right"
                c.textBaseline = "middle";
                
                for(var i = 0; i < getMaxY(); i += 10) {
                    c.fillText(i, xPadding - 10, getYPixel(i));
                }
                
                c.strokeStyle = '#f00';
                
                // Draw the line graph
                c.beginPath();
                c.moveTo(getXPixel(0), getYPixel(data.values[0].Y));
                for(var i = 1; i < data.values.length; i ++) {
                    c.lineTo(getXPixel(i), getYPixel(data.values[i].Y));
                }
                c.stroke();
                
                // Draw the dots
                c.fillStyle = '#333';
                
                for(var i = 0; i < data.values.length; i ++) {  
                    c.beginPath();
                    c.arc(getXPixel(i), getYPixel(data.values[i].Y), 4, 0, Math.PI * 2, true);
                    c.fill();
                }
            });
        </script>
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
    border-bottom: 2px solid black; }
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
				<i><b><span style="font-size:30 " > Graph  </span> </b></i>
				 
                 <br/>
                 <br /> 
				<canvas id="graph" width="200" height="150">   
        </canvas> 
				</aside>
				<footer>
					<p>
						<i>&copy; All Rights Reserved JMP Infosystems Pvt. Ltd.<sup>&reg;</sup> </i>
					</p>
					<p align="right" style="color: RED"> Designed by JMP Software Solutions.</p>

</footer>
				
				
				
				
		</body>
</html>