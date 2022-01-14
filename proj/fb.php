<?php
   include_once 'config.php';
 ?>
 <DOCTYPE html>
<html>
 <head>
  <title>Online Teacher Trainer</title>
  <script src="registration.js"></script>
  <link rel="stylesheet" href="log-reg/style.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
  body {
 background-color:5cdb94
}


 button{
    font-size:20px;
    color:white;
    background-color:orange;	
	font-family:courier,arial,helvetica;
 }
 footer{
    background-color:05396b;
	height:275px;
 }
 
  </style>
	
 </head>
   <header>
        <img src="images/logo.png" align="left" width="125" height="125">
		 		<a href="../otherPages/UserAccountPage.html"><img src="images/user.png" align="right" width="125" height="125"></a><br><br><br><br><br><br><br>
  
   <ul class="menu">
	 <li class="menu"><a href="../Homepage.html">Home</a></li>
	 <li class="menu"><a href="registration.html">Registration</a></li>
	 <li class="menu"><a href="#">Login</a></li>
	 <li class="menu"><a href="../otherPages/ContactUs.html">ContactUs</a></li>
	     <div class="search-form" >
			  <input type="text" placeholder="Type to Search">
			  <button>Search</button>
		 </div>
   
   </ul></br>
        
  </header>
<center>
<br><br><br>



</div>
</center>

<p class="p1">
<?php 
    $sql="select * from feedback";
	$result = $conn->query($sql);
	
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			echo "<tr><td>".$row["Name"]."</td>:<br><td>".$row["Feedback"]."</td></tr><br><br>";
			
		}
		
	}
    else {
		 echo "No Feedbacks Yet";
	}
	echo "</table>";
	$conn->close();
	
	?>
</p>
  <br><br><br><br><br><br><br>


<footer>
    <p class="p1"><a href="../otherPages/TermsOfService.html">Terms</a></P>
	<p class="p1"><a href="../otherPages/Privacyandpolicy.html">Privacy And Policy</a></p>
	<p class="p1"><a href="../otherPages/AboutUs.html">About Us</a></p>
	<div class="social">
	    <ul>
		  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
		  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

		</ul>
	   
	</div>
</footer>
   
  
</html>