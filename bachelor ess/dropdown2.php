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

      <h1> Bachelor's Essential --> Shop --> Vegetables  </h1>
	  <a href = "http://localhost/myProject/home.php"> Home </a>
	 
	 
	  <a href = "http://localhost/myProject/dropdown.php"style = "margin-left: 20px;"> Meat </a>
	  
	  <a href = "http://localhost/myProject/dropdown3.php"style = "margin-left: 20px;"> Spices </a>
	  
	
	  
	  <hr/>
	   <h2 style = "text-align: center;" > Order your Vegetables from here</h2>
	   
	   
	  
	
	  
	       <form action = "vegit.php" class = "form_design" method = "post">
		   <table align = "center" >
		   
		   <label> </td> <td><input type = "text" name = "sid" placeholder = "enter your user id" </label>
		   <tr>
		   <td>
		   
		   <label>ALU 20tk kg :</label> 
            <select name="schic">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			
			
            		   <tr>
		   <td>
		   
		   <label>Fulkopi 80tk kg :</label> 
            <select name="sdchic">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
					   <tr>
		   <td>
		   
		   <label>Kumra 50tk kg :</label> 
            <select name="sbf">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			<tr>
		   <td>
		   
		   <label>Jhinga 60tk kg :</label> 
            <select name="smut">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			<tr>
		   <td>
		   
		   <label>Shim 60tk kg :</label> 
            <select name="shrim">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			<tr>
		   <td>
		   
		   <label>Dherosh 30tk kg :</label> 
            <select name="fru">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			<tr>
		   <td>
		   
		   <label>Shak 18tk kg :</label> 
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