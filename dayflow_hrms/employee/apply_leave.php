<?php include("header.php"); include("../config/db.php");
if(isset($_POST['apply'])){
 mysqli_query($conn,"INSERT INTO leave_requests VALUES(NULL,'$_SESSION[emp_id]','$_POST[f]','$_POST[t]','$_POST[type]','Pending','')");
}
?>
<div class="container">
<form method="post">
<input type="date" name="f">
<input type="date" name="t">
<select name="type"><option>Paid</option><option>Sick</option></select>
<button name="apply">Apply</button>
</form>
</div>
