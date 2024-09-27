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
$sql = "CREATE TABLE membershipvalidity (
member_id INT(6) PRIMARY KEY,member_name VARCHAR(30),
plan VARCHAR(30),package VARCHAR(10),status VARCHAR(10))";

if (mysqli_query($conn,$sql) === TRUE) 
{
  echo "Table  created successfully";
} else 
{
echo "Error creating table: ";}

?>