<?php
   include_once 'config.php';
 ?>
   
 <?php
       $name= $_POST["yn"];
	   $feeb= $_POST["fb"];
	   
	  
	   
	  $sql = "insert into feedback(f_id,Name,Feedback)values('','$name','$feeb')";
		  
		if( mysqli_query($conn,$sql)){
			echo"<script>alert ('Thanks For Your Feedback')</script>";
		}
		else{
			echo"<script>alert ('Feedback not inserted')</script>";
		}
		mysqli_close($conn);
		  
?>