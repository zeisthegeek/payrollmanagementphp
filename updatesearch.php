<?php
error_reporting(0);
?>
<html>
<link href="CSS/updatesearch.css" rel='stylesheet' type="text/css">
<body LINK=RED ALINK=RED VLINK=RED>

<CENTER>
<form action="updatesearch.php" method="post">
<h1>SEARCH EMPLOYEE</h1><BR>
<div class="formbox">
<br>Enter Employee USERNAME:<input type="text" name="txt1"><br><BR>
<input type="submit" name="btn">
</form>
</CENTER>
</div>

 <?php 
		if(isset($_POST["btn"]))
		 {
		   include("connection.php");
		   $unm=$_POST['txt1'];
		   $sql="SELECT * FROM payroll WHERE USERNAME='$unm'";
	       $rsl=mysqli_query($conn,$sql); 
	
	if (mysqli_num_rows($rsl)>0)
	{
	echo "<table border='1'>
<tr><th><font size='1'>ID</th><th><font size='1'>NAME</TH><TH><font size='1'>USERNAME</TH><TH><font size='1'>DATE_OF_BIRTH</TH><TH><font size='1'>DATE_OF_JOIN</TH><TH><font size='1'>DEPARTMENT</TH>
        <TH><font size='1'>BASE PAYMENT</TH><TH><font size='1'>DEARNESS ALLOWANCE</TH><TH><font size='1'>HOUSE RENT ALLOWANCE</TH><TH><font size='1'>TRAVEL ALLOWANCE</TH>
		<TH><font size='1'>PROVIDENT FUND</TH><TH><font size='1'>INCOME TAX</TH><TH><font size='1'>MONTHLY PAY</TH></font><th><font size='1'>ACTION</th></font></TR>";
	while($row=mysqli_fetch_assoc($rsl))
  {
    echo "<tr>";
    echo "<td><font size='1'>".$row["ID"]."</font></td>";
    echo "<td><font size='1'>".$row["NAME"]."</font></td>";
    echo "<td><font size='1'>".$row["USERNAME"]."</font></td>";
	echo "<td><font size='1'>".$row["DOB"]."</font></td>";
    echo "<td><font size='1'>".$row["DOJ"]."</font></td>";
    echo "<td><font size='1'>".$row["DEPT"]."</font></td>";
    echo "<td><font size='1'>".$row["BASE"]."</font></td>";
	echo "<td><font size='1'>".$row["DA"]."</font></td>";
	echo "<td><font size='1'>".$row["HRA"]."</font></td>";
	echo "<td><font size='1'>".$row["TA"]."</font></td>";
	echo "<td><font size='1'>".$row["PF"]."</font></td>";
	echo "<td><font size='1'>".$row["IT"]."</font></td>";
	echo "<td><font size='1'>".$row["SALARY"]."</font></td>";
	echo "<td><a href='updateform.php?id=$row[ID]&unm=$row[USERNAME]'<font size='1'><B>EDIT</B></a></td>";
    echo"</tr>";
      
 }
echo"</table>";
}
else
 {
    echo "<script> alert('Incorrect UserName') </script>";
  }
}
$conn->close();
?>
	</TABLE>
	</BODY>
	</HTML>
	