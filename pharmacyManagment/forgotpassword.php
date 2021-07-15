<?php
 include 'config.php'; 
 
 $q="select * from user";
 $result=$con->query($q);
 if ($result->num_rows>0)
 {
	 while($row=$result->fetch_assoc())
	 {
		 $question=$row['security_question'];
		 $answer=$row['answer'];
	 }
 }

 $message = "Answer the security question";
echo "<script type='text/javascript'>alert('$message')('$question');
var answer = prompt('$question');
if(answer == '$answer')
{
	alert('User verified.Change your password.');
		location.href = 'userprofile.php';
} else 
{
        alert('Access denied.');
		location.href = 'login.php';
}
</script>";
?>


	
	






<html>

<head>

  <link rel = "stylesheet" text="text/css" href="css/style.css">

 
 <link rel = "stylesheet" text = "text/css" href = "css/login.css">


<title>LOG IN</title>

</head>

<header class = "head">

<img src = "images/logo1.png" class = "logo" width = "150px" height = "150px">


<h4> Be Healthy Be Active <img src = "images/user3.png" class = "logo2" width = "40px" height = "40px"  >

	<button  type="login" class="logButton">Login </button>
	<div class = "open">
	Selling & Buying - (+94) 71 1304050<br>
	(Monday - Friday : 9.30 am to 5.00 pm & Saturday 9.30 am to 1.00 pm)
	</div>
</h4>

<h2> UNITED PHARMACY </h2>

</header>

<body>

<div class = "back">
			<ul type = "square" id="navi">
				<li><a href="home.html"> Home</a></li>
				<li><a href="ContactUs.html"> Contact Us</a></li>
				<li><a href="reg.php"> Registraion</a></li>
				<li><a href="aboutus.html"> About Us</a></li>
				<li><a href="read.php"> Manage Medicine</a></li>
				<li><a href="profile.html"> Profile Info</a></li>	
			</ul>


</div>
<div class="wrap">
				<div class="search">
				<input type="text" class="searchTerm" placeholder="What are you looking for?">
				<button type="submit" class="searchButton">
				search
				</button>
			   </div>
			   </div>
			   
			<br>	   
<br>

		  
		  <div class = "forgotpassword"><br/><br/><br/>
		  <form id = "forgotpassword" name = "forgotpassword" method = "POST" action = "">
		  <h1>Forgot Password</h1><br/>
		  
           <input type = "email" id = "email" name = "email" placeholder="Enter your e-mail" required pattern = "[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._]+\.[a-z]{2,3}"><br/><br/>
		   
					    <input type = "submit"  name = "loginbtn" id = "loginbtn" value = "LOG IN"><br/><br/>
			   
			<a href="#" id = "fp">Forgot Password ?</a>
		  </form>
		  </div>
		  
		  
		  
</body>


</html>
