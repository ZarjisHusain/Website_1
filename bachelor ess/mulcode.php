<?php
session_start();
$con = mysqli_connect("localhost","root","","flat");

if(isset($_POST['save_multiple_checkbox']))
{
    $brands = $_POST['brands'];
    // echo $brands;

    foreach($brands as $item)
    {
        // echo $item . "<br>";
        $query = "INSERT INTO work (name) VALUES ('$item')";
        $query_run = mysqli_query($con, $query);
		 
    }
	

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: twoop.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: multisel.php");
    }
}
?>