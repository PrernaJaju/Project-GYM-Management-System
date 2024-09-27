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
$query = "INSERT INTO schedule VALUES ('$_POST[member_name]','$_POST[day_of_week]',
'$_POST[month_from]','$_POST[month_to]','$_POST[time_from]','$_POST[time_to]')";
$result = mysqli_query($conn,$query); 
if($result)
	echo "Records added successfully.";
else
	echo "Not Inserted";

?>