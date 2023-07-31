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

      <h1> Bachelor's Essential --> Shop --> Meat  </h1>
	  <a href = "http://localhost/myProject/home.php"> Home </a>
	 
	 
	  <a href = "http://localhost/myProject/dropdown2.php"style = "margin-left: 20px;"> Vegetables </a>
	  
	  <a href = "http://localhost/myProject/dropdown3.php"style = "margin-left: 20px;"> Spices</a>
	  
	 
	  
	  <hr/>
	   <h2 style = "text-align: center;" > Order your meat from here</h2>
	   
	   
	  
	
	  
	       <form action = "meatit.php" class = "form_design" method = "post">
		   <table align = "center" >
		   
		   <label> </td> <td><input type = "text" name = "sid" placeholder = "enter your user id" </label>
		   <tr>
		   <td>
		   
		   <label>Chicken meat 160 tk kg :</label> 
            <select name="schic">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			
			
            		   <tr>
		   <td>
		   
		   <label>Chicken(deshi)meat 280tk kg :</label> 
            <select name="sdchic">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
					   <tr>
		   <td>
		   
		   <label>Beef 500tk kg :</label> 
            <select name="sbf">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			<tr>
		   <td>
		   
		   <label>Mutton 600tk kg :</label> 
            <select name="smut">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			<tr>
		   <td>
		   
		   <label>Shirmp 860tk kg :</label> 
            <select name="shrim">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			<tr>
		   <td>
		   
		   <label>FISH(RUI) 130tk kg :</label> 
            <select name="fru">
            <option value="0">0kg</option>
            <option value="1">1kg</option>
            <option value="1.5">1.5kg</option>
            <option value="2">2kg</option>
			
            </select> </td></tr>
			
			<tr>
		   <td>
		   
		   <label>Fish(koi) 180tk kg :</label> 
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