<?php
require_once("DBconnect.php");

if(isset($_POST['smail']) && isset ($_POST['sphone']) && isset ($_POST['spick']) && isset ($_POST['sdestination']) && isset ($_POST['sdate'])&& isset ($_POST['stime']) && isset ($_POST['slabor']) ){
	
	$u = $_POST['sname'];
	$p = $_POST['smail'];
	$d = $_POST['sphone'];
	$c = $_POST['spick'];
	$a = $_POST['sdestination'];
	$b = $_POST['sdate'];
	$t = $_POST['stime'];
	$g = $_POST['slabor'];
	
	
	//echo "add";
	
		$dupl = mysqli_query($con , "select * from truck where name = '$u' ");
	
     if(mysqli_num_rows ($dupl)>0){
		 
           echo "Invalid ID , Please Add another one";
		   ?>
		   
		   <a href = "http://localhost/myProject/addflat.php"style = "margin-left: 20px;" > GO BACK </a>
		   <?php
	 }

         else{	
	
 
	$query = "INSERT INTO truck VALUES('$u','$p','$d','$c','$a','$b','$t','$g')";
	
	
	$data = mysqli_query($con,$query);
	
	if($data){
		header("Location: trucks.php");
		//echo "addedd";
		
}
	else{
		header("Location: booktruck2.php");
		//echo "nope";
	}
}

}



?>