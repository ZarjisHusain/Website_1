<?php
require_once("DBconnect.php");



if(isset($_POST['sid']) && isset ($_POST['schic']) && isset ($_POST['sdchic']) && isset ($_POST['sbf']) && isset ($_POST['smut']) && isset ($_POST['shrim']) && isset ($_POST['fru']) && isset ($_POST['fkoi']) ){
	
    $e = $_POST['sid'];
	$u = $_POST['schic'];
	$p = $_POST['sdchic'];
	$d = $_POST['sbf'];
	$c = $_POST['smut'];
	$a = $_POST['shrim'];
	$b = $_POST['fru'];
	$q = $_POST['fkoi'];
	
	//echo "add";
	
	
	

	
	
	$query = "INSERT INTO egg VALUES('$e','$u','$p','$d','$c','$a','$b','$q' )";
	
	
	$data = mysqli_query($con,$query);
	
	if($data){
		header("Location: rcptbzr.php");
		//echo "addedd";
		
}
	else{
		
		echo "Server down";
	}
}



?>