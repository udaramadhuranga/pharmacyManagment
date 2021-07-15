<?php

SESSION_START();

if(isset($_POST["logout"]))
{
	SESSION_DESTROY();
	
	header("location:login.php");
	
}	









?>