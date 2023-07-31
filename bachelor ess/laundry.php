<!Doctype html>
<html>
<head>
      <title> Add your info</title>
	  <link rel = "stylesheet" href ="css/style.css" />
	  

	  


</head>
<body>
<?php
require_once("DBconnect.php");
?>	

      <h1> Bachelor's Essential --> household solution --> laundry service  </h1>
	  <a href = "http://localhost/myProject/home.php"> Home </a>
	 
	 
	  <a href = "http://localhost/myProject/gtg.php"style = "margin-left: 20px;"> Electricians </a>
	  
	  <a href = "http://localhost/myProject/plum.php"style = "margin-left: 20px;"> Plumbers </a>
	  
	  <a href = "http://localhost/myProject/water.php"style = "margin-left: 20px;"> Water supply </a>
	  
	  <hr/>
	   <h2 style = "text-align: center;" > Please fill up the form</h2>
	   
	   
	  
	
	  
	       <form action = "launit.php" class = "form_design" method = "post">
		   <table align = "center" >
		   <tr>
		   <td>User ID </td> <td><input type = "text" name = "sid" p font color = "blue" </td></tr>
		   
		   
		   <tr>
		   <td> Name </td><td> <input type = "text" name = "sname"> </td></tr>
		   
		   <tr>
		   <td> Address </td><td> <input type = "text" name = "saddress"> </td></tr>

		   
		   
		   <tr>
		   <td> Phone </td><td> <input type = "text" name = "sphone"> </td></tr>
		   <br/>
		   
		   <tr>
		   <td>  Description </td><td> <input type = "text" name = "sdescription" placeholder = "(quantity, type. ex :1 shirt, 2 pants) "size= "100px"> </td></tr>
		   
		   
		   
		   
		   <tr><td>
		   <input type = "submit" value = "Confirm">
		  
			
			
			
			

	  
	  </body>
	  </html>