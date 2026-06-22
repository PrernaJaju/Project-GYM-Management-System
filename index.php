<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Gym Management System</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="sidebar">
<h2 style="color:white;text-align:center;">GYM ADMIN</h2>
<a href="members/list.php">Members</a>
<a href="trainers/list.php">Trainers</a>
<a href="plans/list.php">Plans</a>
<a href="schedules/list.php">Schedules</a>
<a href="memberships/list.php">Memberships</a>
<a href="reports/dashboard.php">Reports</a>
</div>

<div class="content">
<h1>Gym Management Dashboard</h1>

<div class="cards">
<div class="card">
<h2>Members</h2>
<p>Manage gym members.</p>
</div>

<div class="card">
<h2>Trainers</h2>
<p>Manage trainers and schedules.</p>
</div>

<div class="card">
<h2>Plans</h2>
<p>Create membership plans.</p>
</div>

<div class="card">
<h2>Reports</h2>
<p>View statistics and revenue.</p>
</div>
</div>

</div>
</body>
</html>
