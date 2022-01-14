<?php
   include_once 'config.php';
 ?>
   
 <?php
       $fname= $_POST["fname"] ;
	   $sname= $_POST["sname"];
	   $method= $_POST["pay"];
	  
	   
	  $sql = "insert into payment(trans_id,first_name,second_name,method)values('','$fname','$sname','$method')";
		  
		if( mysqli_query($conn,$sql)){
			echo"<script>alert ('Record inserted')</script>";
		}
		else{
			echo"<script>alert ('Record not inserted')</script>";
		}
		mysqli_close($conn);
		  
?>