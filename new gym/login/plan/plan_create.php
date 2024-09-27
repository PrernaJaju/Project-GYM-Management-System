<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prerna";

echo "<div style=\"text-align:center\">";
echo "<div style=\"background-image:url('img3.png');height:100%;width:100%\">";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " );
}
$sql = "CREATE TABLE plan (
plan_duration VARCHAR(30) ,plan_amt INT(30))";

if (mysqli_query($conn,$sql) === TRUE) 
{
  echo "Table  created successfully";
} else 
{
echo "Error creating table: ";}

?>