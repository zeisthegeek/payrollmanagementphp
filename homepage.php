<?php 
session_start();
	if (isset($_SESSION['adm']))
	{
	echo "";		
	}
	else
	{
		header('login.php');
	}
?>
<?php 
include('connection.php');
error_reporting(0);
?>
<html>
<link href="CSS/homepage.css" rel='stylesheet' type="text/css"> 
<body>
<center><h1>PAYROLL MANAGEMENT SYSTEM</h1>
<br><br><br><br>
<form action="displaying.php" method="POST">
<input type="submit" value="View Record">
</form><br> 
<form action="insertion.php" method="POST">
<input type="submit" value="Insert Record">
</form><br>
<form action="updatesearch.php" method="POST">
<input type="submit" value="Update Record">
</form><br>
<form action="deletesearch.php" method="POST">
<input type="submit" value="Delete Record">
</form><br>
<form action="index.php" method="POST">
<input type="submit" value="Log Out">
</form>
</html>
