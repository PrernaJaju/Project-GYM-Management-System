<?php
echo "<div style=\"text-align:center\">";
echo "<div style=\"background-image:url('img3.png');height:100%;width:100%\">";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prerna";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " );
}
$login_id="shruti";
$password="shruti";
if(($login_id=="shruti")&&($password=="shruti")){
echo "<br>";
echo "<br>";
echo "<br>";

echo "<br><b><h1>Welcome To Fitness Studio</h1>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo '<a href="http://localhost/new%20gym/login/logininsert.html">Click Here To Login</a>';
echo "<br>";
echo "<br>";

echo "</div>";

?>