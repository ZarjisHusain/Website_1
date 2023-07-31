<!Doctype html>
<html>
<head>
      <title> Add your flat for rent</title>
	  
	  <link rel = "stylesheet" href ="css/style.css" />
	  
	
	  
	  

	  


</head>
<body>
<?php
require_once("DBconnect.php");
?>	

      <h1 align = "middle"> Bachelor's Essential   </h1>
	  <a href = "http://localhost/myProject/home.php"> Home </a>
	 
	 
	  <a href = "http://localhost/myProject/show_flat.php"style = "margin-left: 20px;"> Show Available Flats </a>
	  
	  <a href = "http://localhost/myProject/vacancy3.php"style = "margin-left: 20px;"> !!! Vacancy in 3 months !!! </a>
	  

	  
	  <hr/>
	   <h2 style = "text-align: center;" > Set up your time and destination</h2>
	  
	
	  
	       <form action = "addtruck.php" class = "form_design" method = "post">
		   <table align = "center" >
		   <tr>
		   <td>Name </td> <td><input type = "text" name = "sname" > </td></tr>
		   
		   
		   <tr>
		   <td> Mail </td><td> <input type = "text" name = "smail"> </td></tr>
		   
		   <tr>
		   <td> Phone </td><td> <input type = "text" name = "sphone"> </td></tr>

		   
		   
		   <tr>
		   <td> Pick up point </td><td> <input type = "text" name = "spick"> </td></tr>
		   <br/>
		   
		   <tr>
		   <td>  Destination </td><td> <input type = "text" name = "sdestination"> </td></tr>
		   
		   <tr>
		   <td> date </td><td> <input type = "text" placeholder = "30/12/2020" name = "sdate"> </td></tr>
		   
		   <tr>
		   <td> Time </td><td> <input type = "text" placeholder = "10:00 AM/PM" name = "stime"> </td></tr>
		   
		   <tr>
		   <td> No. of labors </td><td> <input type = "text"  name = "slabor"> </td></tr>
		   
		   
		   
		   
		   <tr><td>
		   <input type = "submit" value = "Confirm">
		   
		   <hr/>
		   
		   <a href = "http://localhost/myProject/home.php"style = "leftmiddle: 20px;"> GO back </a>
		   
		   
		    
		  
			
			
			
			

	  
	  </body>
	  
	  
	  </html>