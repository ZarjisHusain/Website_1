<!Doctype html>
<html>
<head>
      <title> Maid working twice per day</title>
	  <link rel = "stylesheet" href ="css/style.css" />
	  
	  <style>
	  .col-md-3{
                 display : inline-block;
				 background : yellow;
				 width : 16%
				 
	  }
	  </style>
	  
	  <style>
	  .col-md-2{
		  display : inline-block;
				 background : white;
				 width : 16%
				 
	  }
	  </style>
		  

</head>
<body>


      <h1> Bachelor's Essential </h1>
	  <a href = "http://localhost/myProject/home.php"> Home </a>
	  <a href = "http://localhost/myProject/addflat.php"style = "margin-left: 20px;" > Wanna Add flats for renting ?? !!click!! </a>
	 
	  
	  
	  <a href = "http://localhost/myProject/show_flat.php"style = "margin-left: 20px;">** Show Available Flats ** </a>
	  <hr/>
	  <h2 style = "text-align: center;" > List of maid with their price list and phone number</h2>
	  <h3 style = "text-align: center;" > !! Feel free to contact them !! </h3>
	   
	  
	  <section id = "section1">
	     
		 
		 <div class = "row" style = "padding:20px;">
		 <div class = "col-md-3"> Name </div>
	     <div class = "col-md-3"> Works per day(1/2) </div> 
	     <div class = "col-md-3"> Base salary </div>
		 <div class = "col-md-3"> phone </div>
		
		 
						 
						 
	  
	  </div>
	  <?php
	  require_once("DBconnect.php");
	  
	  $sql = "SELECT * FROM `bua` WHERE works_per_day = 1";
	  $result = mysqli_query($con , $sql);
	  
	  if(mysqli_num_rows($result) != 0){
		  while ($rows = mysqli_fetch_array($result)) {
		  
			  ?>
			  <div class = "row" style = "padding:20px;">
		  <div class = "col-md-2"><?php echo $rows[0];?> </div>
		  <div class = "col-md-2"><?php echo $rows[1];?> </div>
		  <div class = "col-md-2"><?php echo $rows[2];?> </div>
		  <div class = "col-md-2"><?php echo $rows[3];?> </div>
		  
		  
	     
			 </div>

            <?php
		  }

	  }
     ?>
 </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  </section>
	  
	  
	  
	  
	  </body>
	  </html>