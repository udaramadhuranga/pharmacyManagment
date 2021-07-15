<html>

<head>

 <link rel = "stylesheet" text="text/css" href="css/style.css">
 <link rel="stylesheet" text="text/css" href="css/userp.css">
 <link rel="stylesheet" text="text/css" href="css/usagec.css">
 <link rel = "stylesheet" text="text/css" href="css/admin.css">
 <script src = "js/usagej.js"></script>

<title> Usage page </title>

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
				<li><a href="index.html"> Home</a></li>
				<li><a href="#"> Contact Us</a></li>
				
				<li><a href="#"> About Us</a></li>
				<li><a href="index.php"> CART</a></li>
					
			</ul>


</div>
<div class="wrap">
				<div class="search">
				<form action = "search.php" method = "post">
				<input type="text" class="searchTerm" placeholder="What are you looking for?" name = "search">
				<button type="submit" value = "" class="searchButton">
				search
				
				</button>
				</form>
			   </div>
			   </div>
			   
			   <br/>
<!--			   
			   <div class = "details">
	<img src = "images/pro.png" class ="profile" width = "80px" height = "80px"  >
	<img src = "images/storage.png" class ="storage" width = "100px" height = "80px"  cellspacing = "100">		   
	<img src = "images/add.png" class ="add" width = "80px" height = "80px"  >	
	<img src = "images/sup.jpg" class ="add" width = "80px" height = "80px"  >	<br/>
	
	
	
	<button type="profile" class="btn"> <a href = "SupUserAcc.html"> Profile Info </a> </button>
	<button type="storage" class="storagebtn"> <a href = "usage.html"> Usage of Storage</a></button>
	<button type="storage" class="addbtn"> <a href = "add.html"> Add Medicine </a> </button>
	<button type="Suppliers" class="supbtn"> Suppliers</button>
	
</div>	!-->


			<br />
	   

			<br />
			
			<h1> Suplliers </h1>
			<br />
	

	<?php
	require 'config.php';
	echo"<br/>";
	
	
	    $sql = "select * from user_1  where regNo like 'sup%'";
		$result = $con -> query($sql);
		
		 if($result->num_rows>0)
	{
		echo "</table>";
			echo "<table id = product border='1' cellspacing = '0' cellpadding = '10'> <tr> <th> register number </th>
			<th> first Name </th><th> last Name </th><th> category </th><th> email</th><th> phone</th><th> NIC</th><th> address</th>
			</tr>";
			while($row = $result ->fetch_assoc())
			{
				Echo "<tr> <td>" .$row['regNo']."</td> <td> " .$row['fname']."</td><td>" .$row['lname']."</td> <td>  " .$row['category']."</td> <td>  " .$row['email']."</td> <td>  " .$row['phone']."</td><td>  " .$row['NIC']."</td><td>  " .$row['address']."</td></tr>";
				echo "<br/>";
		}
		echo "</table>";
		
		
		
	}		
				
		?>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<div id = "p4">
			<footer>
			<hr class = "hor">
				<p id = "para1">
				united pharmacy
				<br>
				copyright@.........
				</p>
				<div id="p3">
				<img src ="images/fb2.png" class="social">
				<img src ="images/tw2.png"class="social">
				<img src ="images/sk.png" class="social">
				</div>
				<hr class = "hor">
			</footer>
			</div>

	</body>		

</html>