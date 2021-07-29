<?php 
include("connection.php"); error_reporting(0);
?>
<link href="CSS/Displaying.css" rel='stylesheet' type="text/css"> 
<html>
<body>
<div class="ample">
<center><h1>EMPLOYEES PAYROLL DATA</h1></center></div>
<form action="homepage.php" method="post" class="a">
<input type="submit" value="Go Home">
</form>
<form action="insertion.php" method="post" class="b">
<input type="submit" value="Insert Record">
</form>
<?php
$sql="SELECT * FROM payroll";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  echo "<div class='sample'><table border='1'> ";
  echo "<tr><th><font size='1'>ID</th><th><font size='1'>NAME</TH><TH><font size='1'>USERNAME</TH><TH><font size='1'>DATE_OF_BIRTH</TH><TH><font size='1'>DATE_OF_JOIN</TH><TH><font size='1'>DEPARTMENT</TH>
        <TH><font size='1'>BASE PAYMENT</TH><TH><font size='1'>DEARNESS ALLOWANCE</TH><TH><font size='1'>HOUSE RENT ALLOWANCE</TH><TH><font size='1'>TRAVEL ALLOWANCE</TH>
		<TH><font size='1'>PROVIDENT FUND</TH><TH><font size='1'>INCOME TAX</TH><TH><font size='1'>MONTHLY PAY</TH></font></TR>";
  while($row=$result->fetch_assoc())
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
    echo"</tr>";
      
 }
echo"</table></div></body>";
}
else
 {
    echo "<script> alert('Incorrect UserName') </script>";
  }
$conn->close();
?>
