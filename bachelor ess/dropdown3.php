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

      <h1> Bachelor's Essential --> Shop --> Spices  </h1>
	  <a href = "http://localhost/myProject/home.php"> Home </a>
	 
	 
	  <a href = "http://localhost/myProject/dropdown.php"style = "margin-left: 20px;"> Meat </a>
	  
	  <a href = "http://localhost/myProject/dropdown2.php"style = "margin-left: 20px;"> Vegetables </a>
	  
	 
	  
	  <hr/>
	   <h2 style = "text-align: center;" > Order your Spices from here</h2>
	   
	   
	  
	
	  
	       <form action = "eggit.php" class = "form_design" method = "post">
		   <table align = "center" >
		   
		   <label> </td> <td><input type = "text" name = "sid" placeholder = "enter your user id" </label>
		   <tr>
		   <td>
		   
		   <label> Egg 1dozen 150tk :</label> 
            <select name="schic">
            <option value="0">0 dozen</option>
            <option value="1">1 dozen</option>
            <option value="1.5">0.5 dozen</option>
            <option value="2">2 dozen</option>
			
            </select> </td></tr>
			
			
			
            		   <tr>
		   <td>
		   
		   <label>Onion 80tk kg :</label> 
            <select name="sdchic">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
					   <tr>
		   <td>
		   
		   <label>Gerlic 50tk kg :</label> 
            <select name="sbf">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			<tr>
		   <td>
		   
		   <label>Darchini 60tk kg :</label> 
            <select name="smut">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			<tr>
		   <td>
		   
		   <label>Oil 60tk kg :</label> 
            <select name="shrim">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			<tr>
		   <td>
		   
		   <label>Salt 70tk kg :</label> 
            <select name="fru">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			<tr>
		   <td>
		   
		   <label>Sugar 180tk kg :</label> 
            <select name="fkoi">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			
			
			
			
			
			
			<tr><td>
		   <input type = "submit" value = "Confirm">
		  
			
			
			
			

	  
	  </body>
	  </html>