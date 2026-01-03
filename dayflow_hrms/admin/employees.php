<?php include("header.php"); include("../config/db.php"); ?>
<div class="container">
<h2>Employees</h2>
<?php
$r=mysqli_query($conn,"SELECT * FROM employees");
while($e=mysqli_fetch_assoc($r)){
 echo $e['emp_id']." - ".$e['name']."<br>";
}
?>
</div>
