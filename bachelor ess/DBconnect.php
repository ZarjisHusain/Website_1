<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "flat";

 $con = mysqli_connect($servername,$username,$password , $database_name);
 
 if($con){
	?>
     <script>
	 alert("connection Succesful")
           </script>
    <?php		   
}
else{
      ?>
     <script>
	 alert(" NO connection ")
           </script>
    <?php
}
?>	