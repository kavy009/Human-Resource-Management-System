<?php
include(__DIR__."/../config/session_check.php");
if($_SESSION['role'] !== 'employee'){
    header("Location: ../index.php");
    exit();
}
?>
<link rel="stylesheet" href="../assets/css/style.css">
<script src="../assets/js/main.js"></script>
<div class="nav">
<a href="dashboard.php">Dashboard</a>
<a href="profile.php">Profile</a>
<a href="attendance.php">Attendance</a>
<a href="apply_leave.php">Leave</a>
<a href="salary.php">Salary</a>
<a href="../auth/logout.php">Logout</a>
</div>
