<?php
include("connection.php");
error_reporting(0);
$id=$_REQUEST["id"];
$unm=$_REQUEST["unm"];
$sql="DELETE FROM payroll WHERE ID='$id' ";
$result=mysqli_query($conn,$sql);
if($result==true)
 {
  echo "<script> alert('Data Deleted Succesfully');
           window.open('Displaying.php');
           </script>";
  }
?>