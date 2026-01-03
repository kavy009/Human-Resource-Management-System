<?php
include(__DIR__ . "/../config/session_check.php");
$required_role = "admin";
include(__DIR__ . "/../auth/auth_check.php");
?>

<link rel="stylesheet" href="../assets/css/style.css">
<script src="../assets/js/main.js"></script>

<div class="nav">
    <a href="dashboard.php">Dashboard</a>
    <a href="employees.php">Employees</a>
    <a href="attendance.php">Attendance</a>
    <a href="leave_approval.php">Leaves</a>
    <a href="payroll.php">Payroll</a>
    <a href="../auth/logout.php" onclick="return confirmLogout()">Logout</a>
</div>
