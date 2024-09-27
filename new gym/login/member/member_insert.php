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
$query = "INSERT INTO member VALUES ('$_POST[member_id]','$_POST[member_name]',
'$_POST[email]','$_POST[contact]')";
$result = mysqli_query($conn,$query); 
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
if($result)
	echo "Records added successfully.";
else
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo "Not Inserted : ";
echo '<a href="http://localhost/new%20gym/login/member/try.php">Click here to view members</a>';
?>