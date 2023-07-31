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

      <h1> Bachelor's Essential  </h1>
	  <a href = "http://localhost/myProject/home.php"> Home </a>
	 
	 
	  <a href = "http://localhost/myProject/show_flat.php"style = "margin-left: 20px;"> Show Available Flats </a>
	  
	  <a href = "http://localhost/myProject/vacancy3.php"style = "margin-left: 20px;"> !!! Vacancy in 3 months !!! </a>
	  
	  <a href = "http://localhost/myProject/search.php"style = "margin-left: 20px;"> search by price </a>
	  
	  <hr/>
	   <h2 style = "text-align: center;" > Add your flat info here for rent</h2>
	  
	
	  
	       <form action = "insertit.php" class = "form_design" method = "post">
		   <table align = "center" >
		   <tr>
		   <td>Flat ID </td> <td><input type = "text" name = "sid" p font color = "blue" </td></tr>
		   
		   
		   <tr>
		   <td> Address </td><td> <input type = "text" name = "saddress"> </td></tr>
		   
		   <tr>
		   <td> Phone </td><td> <input type = "text" name = "sphone"> </td></tr>

		   
		   
		   <tr>
		   <td> price </td><td> <input type = "text" name = "sprice"> </td></tr>
		   <br/>
		   
		   <tr>
		   <td>  Vacancy in </td><td> <input type = "text" name = "svacan"> </td></tr>
		   
		   
		   
		   
		   <tr><td>
		   <input type = "submit" value = "Add Flat">
		  
			
			
			
			

	  
	  </body>
	  </html>