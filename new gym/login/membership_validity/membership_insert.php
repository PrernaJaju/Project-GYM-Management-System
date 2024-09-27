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
$query = "INSERT INTO membershipvalidity VALUES ('$_POST[member_id]','$_POST[member_name]',
'$_POST[plan]','$_POST[package]','$_POST[status]')";
$result = mysqli_query($conn,$query); 
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

if($result)
	echo "Records added successfully.";
else
	echo "Not Inserted";

echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo '<a href="http://localhost/new%20gym/login/membership_validity/display.php">Click here to view membership</a>';

?>
