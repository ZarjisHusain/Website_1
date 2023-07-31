<!Doctype html>
<html>
<head>
      <title> showing flat</title>
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
	  <a href = "http://localhost/myProject/addflat.php"style = "margin-left: 20px;" > Add flats for renting </a>
	 
	  <a href = "http://localhost/myProject/search.php"style = "margin-left: 20px;"> Search by price </a>
	  
	  <a href = "http://localhost/myProject/vacancy3.php" style = "margin-left: 20px;"> Vacancy Within 3 months </a>
	  <hr/>
	  <h2 style = "text-align: center;" > Available Flats to Rent</h2>
	   
	  
	  <section id = "section1">
	     
		 
		 <div class = "row" style = "padding:20px;">
		 <div class = "col-md-3"> Flat ID </div>
	     <div class = "col-md-3"> Address </div> 
	     <div class = "col-md-3"> Phone </div>
		 <div class = "col-md-3"> Price </div>
		 <div class = "col-md-3"> Vacancy in (month) </div>
		 
						 
						 
	  
	  </div>
	  <?php
	  require_once("DBconnect.php");
	  
	  $sql = "select * from flatt";
	  $result = mysqli_query($con , $sql);
	  
	  if(mysqli_num_rows($result) != 0){
		  while ($rows = mysqli_fetch_array($result)) {
		  
			  ?>
			  <div class = "row" style = "padding:20px;">
		  <div class = "col-md-2"><?php echo $rows[0];?> </div>
		  <div class = "col-md-2"><?php echo $rows[1];?> </div>
		  <div class = "col-md-2"><?php echo $rows[2];?> </div>
		  <div class = "col-md-2"><?php echo $rows[3];?> </div>
		  <div class = "col-md-2"><?php echo $rows[4];?> </div>
		  
	     
			 </div>

            <?php
		  }

	  }
     ?>
 </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  </section>
	  
	  
	  
	  
	  </body>
	  </html>
