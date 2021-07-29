<html>
<?php include("connection.php"); error_reporting(0); ?>
<head>
    <title>Insert your Record</title></head>
<link href="insertion.css" rel='stylesheet' type="text/css"> 
<body>
<div class="formbox">
<form action="" method="post" autocomplete="off"><center>    
Employee Name:<br><input type="text" name="nm" placeholder="Enter Employee Name" required><br><br>
UserName:<br><input type="text" name="unm" placeholder="Enter Username Name" required><br><br>
Date of Birth(DD/MM/YYYY):<br><input type="text" name="dob" placeholder="Enter Date of Birth" required><br><br>
Date of Joining(DD/MM/YYYY):<br><input type="text" name="doj" placeholder="Enter Date of Joining" required><br><br>
Department:<br><input type="text" name="dept" placeholder="Enter Department" required><br><br>
Base Payment:<br><input type="number" name="base" placeholder="Enter Base Payment" required><br><br>
<input type="submit" value="Submit" name="btn">
    </center></form>
	</div>
</body>
<?php
     if(isset($_POST["btn"]))
      {
         $nm=strtoupper($_POST["nm"]);
		 $unm=strtoupper($_POST["unm"]);
		 $dept=strtoupper($_POST["dept"]);
		 $bs=$_POST["base"];
		 $da=($bs*136/100);
		 $ta=7600;
		 $hra=($bs*50/100);
		 $pf=($bs*10/100);
		 $x=($bs+$da+$ta+$hra)-$pf;
		 $it=((12*$x)*(5/100))/12;
		 $salary=$x-$it;
		 $sql="INSERT INTO payroll(NAME,USERNAME,DOB,DOJ,DEPT,BASE,DA,HRA,TA,PF,IT,SALARY) VALUES ('$nm','$unm','$_POST[dob]','$_POST[doj]','$dept','$bs','$da','$hra','$ta','$pf','$it','$salary')";
		 $data=mysqli_query($conn,$sql);
		 if($data)
		  echo "<script> alert('Record Inserted Successfully');
		       window.open('displaying.php');
			    </script>";
		 else
		  echo "<script> alert('Error in Recording');
			    </script>";
		  mysqli_close($conn);
	  }
?>
</html>
