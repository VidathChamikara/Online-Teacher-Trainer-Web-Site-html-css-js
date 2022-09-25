<?php
   include_once 'config.php';
 ?>
   
 <?php
       $name= $_POST["fullname"];
	   $address= $_POST["addr"];
	   $country= $_POST["addr2"];
	   $gender= $_POST["gender"];
	   $dob= $_POST["dob"];
       $email= $_POST["eadd"];
	   $contact= $_POST["mob"];
	   $password= $_POST["paw"];

	   
	  $sql = "insert into registration(Id,name,address,country,gender,DOB,email,contact,password)values('','$name','$address','$country','$gender','$dob','$email','$contact','$password')";
		  
		if( mysqli_query($conn,$sql)){
			echo"<script>alert ('Record inserted')</script>";
		}
		else{
			echo"<script>alert ('Record not inserted')</script>";
		}
		mysqli_close($conn);
		  
?>