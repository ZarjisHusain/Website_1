<?php
require_once("DBconnect.php");



if(isset($_POST['sid']) && isset ($_POST['sname']) && isset ($_POST['saddress']) && isset ($_POST['sphone']) && isset ($_POST['sdescription']) ){
	
	$u = $_POST['sid'];
	$p = $_POST['sname'];
	$d = $_POST['saddress'];
	$c = $_POST['sphone'];
	$a = $_POST['sdescription'];
	
	//echo "add";
	
	
	

	
	
	$query = "INSERT INTO laundry VALUES('$u','$p','$d','$c','$a')";
	
	
	$data = mysqli_query($con,$query);
	
	if($data){
		header("Location: launco.php");
		//echo "addedd";
		
}
	else{
		
		echo "Server down";
	}
}



?>