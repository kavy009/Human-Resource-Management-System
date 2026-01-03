<?php include("header.php"); include("../config/db.php"); ?>
<div class="container">
<h2>Employees</h2>
<?php
$res=mysqli_query($conn,"SELECT * FROM employees");
while($r=mysqli_fetch_assoc($res))
 echo $r['emp_id']." ".$r['name']."<br>";
?>
</div>
