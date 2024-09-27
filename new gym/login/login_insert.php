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

echo "<br><b><h1>Welcome To Fitness Studio</h1>";
}
echo "<br>";
echo "<br>";
echo "<b>To insert members: ";
echo '<a href="http://localhost/new%20gym/login/member/memberinsert.html">Click here to insert members</a>';
echo "<br>";
echo "<br>";
echo "<b>To view members: ";
echo '<a href="http://localhost/new%20gym/login/member/try.php">Click here to view members</a>';
echo "<br>";
echo "<br>";
echo "<b>To insert membership: ";
echo '<a href="http://localhost/new%20gym/login/membership_validity/membershipinsert.html">Click here to insert members</a>';
echo "<br>";
echo "<br>";
echo "<b>To view membership: ";
echo '<a href="http://localhost/new%20gym/login/membership_validity/display.php">Click here to view membership</a>';
echo "<br>";
echo "<br>";
echo "<b>To insert trainer: ";
echo '<a href="http://localhost/new%20gym/login/trainer/trainerinsert.html">Click here to insert trainer</a>';
echo "<br>";
echo "<br>";
echo "<b>To view trainer: ";
echo '<a href="http://localhost/new%20gym/login/trainer/display.php">Click here to view trainer</a>';
echo "<br>";
echo "<br>";
echo "<b>To insert package: ";
echo '<a href="http://localhost/new%20gym/login/package/packageinsert.html">Click here to insert package</a>';
echo "<br>";
echo "<br>";
echo "<b>To view package: ";
echo '<a href="http://localhost/new%20gym/trainer/display.php">Click here to view package</a>';
echo "<br>";
echo "<br>";
echo "<b>To insert plan: ";
echo '<a href="http://localhost/new%20gym/login/plan/planinsert.html">Click here to insert plan</a>';
echo "<br>";
echo "<br>";
echo "<b>To view plan: ";
echo '<a href="http://localhost/new%20gym/login/plan/display.php">Click here to view plan</a>';
echo "<br>";
echo "<br>";
echo "<b>To insert schedule: ";
echo '<a href="http://localhost/new%20gym/login/schedule/scheduleinsert.html">Click here to insert schedule</a>';
echo "<br>";
echo "<br>";
echo "<b>To view schedule: ";
echo '<a href="http://localhost/new%20gym/trainer/display.php">Click here to view schedule</a>';
echo "<br>";
echo "</div>";

?>