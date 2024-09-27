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
$query = "INSERT INTO plan VALUES ('$_POST[plan_duration]','$_POST[plan_amt]')";
$result = mysqli_query($conn,$query); 
if($result)
	echo "Records added successfully.";
else
	echo "Not Inserted";
echo "<br><br>";

echo '<a href="http://localhost/new%20gym/login/plan/display.php">Click here to view plans</a>';
?>