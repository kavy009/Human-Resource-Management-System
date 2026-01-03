<?php include("header.php"); include("../config/db.php"); ?>
<div class="container">
<h2>Attendance</h2>
<table>
<tr><th>ID</th><th>Date</th><th>In</th><th>Out</th></tr>
<?php
$r=mysqli_query($conn,"SELECT * FROM attendance");
while($a=mysqli_fetch_assoc($r)){
echo "<tr><td>$a[emp_id]</td><td>$a[date]</td><td>$a[check_in]</td><td>$a[check_out]</td></tr>";
}
?>
</table>
</div>
