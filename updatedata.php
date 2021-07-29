<?php
include('connection.php');
error_reporting(0);
$id=$_POST['id'];
$unm=STRTOUPPER($_POST['unm']);
$nm=STRTOUPPER($_POST['nm']);
$dob=$_POST['dob'];
$doj=$_POST['doj'];
$dept=$_POST['dept'];
$bs=$_POST['base'];
$sql="UPDATE payroll SET NAME='$nm',USERNAME='$unm',DOB='$dob',DOJ='$doj',DEPT='$dept',BASE='$bs' WHERE ID='$id'";
$result=mysqli_query($conn,$sql);
if($result== true)
{
 echo "<script>
       a=confirm('record updated');
              if(a==1)
               {
                  window.open('displaying.php');
               }
	 </script>";
 
 }
 ?>

