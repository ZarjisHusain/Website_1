<?php
require_once("DBconnect.php");



if(isset($_POST['saddress']) && isset ($_POST['sphone']) && isset ($_POST['sprice']) && isset ($_POST['svacan'])  ){
	
	$u = $_POST['sid'];
	$p = $_POST['saddress'];
	$d = $_POST['sphone'];
	$c = $_POST['sprice'];
	$a = $_POST['svacan'];
	
	//echo "add";
	
	$dupl = mysqli_query($con , "select * from flatt where flat_id = '$u' ");
	
     if(mysqli_num_rows ($dupl)>0){
		 
           echo "Invalid ID , Please Add another one";
		   ?>
		   
		   <a href = "http://localhost/myProject/addflat.php"style = "margin-left: 20px;" > GO BACK </a>
		   <?php
	 }

         else{	 
	

	
	
	$query = "INSERT INTO flatt VALUES('$u','$p','$d','$c','$a')";
	
	
	$data = mysqli_query($con,$query);
	
	if($data){
		header("Location: show_flat.php");
		//echo "addedd";
		
}
	else{
		header("Location: addflat.php");
		//echo "nope";
	}

}
}
?>