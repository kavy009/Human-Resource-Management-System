<?php include("header.php"); include("../config/db.php");
$r=mysqli_query($conn,"SELECT * FROM payroll WHERE emp_id='$_SESSION[emp_id]'");
$p=mysqli_fetch_assoc($r);
echo "<div class='container'>Net Salary: $p[net_salary]</div>";
