<?php

require 'config.php';

?>


<html>

<head>

  <link rel = "stylesheet" text="text/css" href="css/style.css">
  <link rel = "stylesheet" text="text/css" href="css/add.css">
<link rel = "stylesheet" text="text/css" href="css/div.css">


<title>ADD ITEM PAGE </title>

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
				<li><a href="register.html"> Registraion</a></li>
				<li><a href="aboutus.html"> About Us</a></li>
				<li><a href="addItem.html"> Manage Medicine</a></li>
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
			   


		
		  
<div id = "section1">


	     <?php
			
			$recordId=$_GET['id'];
			
			$sql="SELECT * FROM image WHERE Item_number=$recordId";
			$result=$con -> query($sql);
			
			if($result ->num_rows>0)
			{
				while($row =$result->fetch_assoc())
				{
					$id=$row["Item_number"];
					
					$name=$row["Medicine_name"];
					$code=$row["Medicine_code"];
					$mdat=$row["Manufacture_date"];
					$edat=$row["Expire_date"];
					$upri=$row["Unit_price"];
					$stn=$row["stockNo"];
					$smant=$row["Stock_amount"];
					$cstk=$row["Current_stock"];
					$folder=$row["upload"];
					
				}
			}	
			?>
	<h3 align = "center">ADD NEW MEDICINES </h3>
	<form method="POST" action="submitUP.php" enctype="multipart/form-data">
			
			<label> Item number </label> <br>
			<input type ="text" name = "id"   value=<?php echo $id?>><br><br>
		
		
			<label> Medicine name </label> <br>
			<input type ="text" name = "mname" required value=<?php echo $name?>><br><br>
			
			<label> Medicine code </label> <br>
			<input type ="text" name = "mcode"	required value=<?php echo $code?> ><br><br>	
			
			<label> Manufacture date </label> <br>
			<input type = "date" name = "mdate" required value=<?php echo $mdat?> >	<br><br>
			
			<label> Expire date </label> <br>
			<input type = "date" name = "edate" required value=<?php echo $edat?>>	<br><br>
			
			<label> Unit price </label> <br>
			<input type ="text" name = "uprice" required pattern = ".*[0-9]" value=<?php echo $upri?>   ><br><br>
			
			<label> Stock Number</label> <br>
			<input type ="text" name = "stnum" required  value=<?php echo $stn?>   ><br><br>
			
			
			<label> Stock amount </label> <br>
			<input type ="text" name = "samount"  required  value=<?php echo $smant?>	  ><br><br>
			
			<label> current stock </label> <br>
			<input type ="text" name = "cstock"	required   value=<?php echo $cstk?>  ><br><br>
			
				
			<label> upload image </label> <br>
			<img src = "<?php echo $row['upload']?>" >
			 <input type="file" name="uploadfile" required value=<?php echo $folder?>  ><br><br>
			
			
			
			
			
			
		    <input type="submit" value="Update" name="btnsubmit">
			
			
	
		 
		 </form>
		 
</div>		  




<br>


	

</body>


<html>