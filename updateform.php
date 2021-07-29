<?php
include('connection.php');
$unm=$_REQUEST['unm'];
$sql="SELECT * FROM PAYROLL WHERE USERNAME='$unm'";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);
?>
<html>
<link href="CSS/updateform.css" rel='stylesheet' type="text/css">
<body>
<center>
<div class="formbox"> 
<form action="updatedata.php" method="post" autocomplete="off"><center>
Employee ID:<br><input type="text" name="id" value="<?php echo $data['ID']; ?>" readonly><br><br>
Employee Name:<br><input type="text" name="nm" value="<?php echo $data['NAME']; ?>"><br><br>
UserName:<br><input type="text" name="unm" value="<?php echo $data['USERNAME']; ?>"><br><br>
Date of Birth(DD/MM/YYYY):<br><input type="text" name="dob"  value="<?php echo $data['DOB']; ?>"><br><br>
Date of Joining(DD/MM/YYYY):<br><input type="text" name="doj"  value="<?php echo $data['DOJ']; ?>"><br><br>
Department:<br><input type="text" name="dept"  value="<?php echo $data['DEPT']; ?>"><br><br>
Base Payment:<br><input type="number" name="base"  value="<?php echo $data['BASE']; ?>"><br><br>
<input type="submit" value="Submit" name="btn"></center>
</form>
</div>
</center>
</body>
</html>
