<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prerna";

echo "<div style=\"text-align:center\">";
echo "<div style=\"background-image:url('gymimg1.jpg')\">";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " );
}
$sql = "CREATE TABLE login (
login_id INT(20) PRIMARY KEY,password PRIMARY KEY(30))";

if (mysqli_query($conn,$sql) === TRUE) 
{
  echo "Table  created successfully";
} else 
{
echo "Error creating table: ";}

?>