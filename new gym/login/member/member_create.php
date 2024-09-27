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
$sql = "CREATE TABLE member (
member_id INT(6) PRIMARY KEY,member_name VARCHAR(30),
email VARCHAR(30),contact INT(10))";

if (mysqli_query($conn,$sql) === TRUE) 
{
  echo "Table member created successfully";
} else 
{
echo "Error creating table: ";}

?>