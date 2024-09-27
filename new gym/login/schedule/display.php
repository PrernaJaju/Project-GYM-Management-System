<?php
echo "<div style=\"text-align:center\">";
echo "<div style=\"background-image:url('img3.png');height:100%;width:100%\">";
// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'prerna';

// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM membershipvalidity ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>PLAN</th>
				<th>PACKAGE</th>
                        <th>STATUS</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['member_name'];?></td>
				<td><?php echo $rows['day_of_week'];?></td>
				<td><?php echo $rows['month_from'];?></td>
				<td><?php echo $rows['month_to'];?></td>
                        <td><?php echo $rows['time_from'];?></td>
                        <td><?php echo $rows['time_to'];?></td>
			</tr>
			<?php
				}    
			?>
		</table>
	</section>
</body>

</html>