<!-- filename : connection.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payrollmanagement";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
echo "";
}
else
{
die("unable to connect because " . mysqli_connect_error());
}
?>