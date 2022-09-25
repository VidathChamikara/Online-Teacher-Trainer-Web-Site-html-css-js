<?php
   include_once 'config.php';
 ?>
 


<?php
if(isset($_POST["btnn1"]))
	{
		
        $firstName =$_POST["un"];
       

       $password=$_POST["pwd"];


      $sql= "select* from register where name='$firstName'and password='$password'";

     if( mysqli_query($conn,$sql)){
			echo"<script>alert ('Login Succsessful')</script>";
			
		}
		else{
			echo"<script>alert ('Login Error,please check again')</script>";
		}
	}
		mysqli_close($conn);
	
   
 ?>   
