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
$query = "INSERT INTO trainer VALUES ('$_POST[trainer_name]','$_POST[email]',
'$_POST[contact]','$_POST[rate]')";
$result = mysqli_query($conn,$query); 
if($result)
	echo "Records added successfully.";
else
	echo "Not Inserted";
echo '<a href="http://localhost/new%20gym/login/trainer/display.php">Click here to view trainer</a>';
?>