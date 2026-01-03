<?php include("header.php"); include("../config/db.php");
if(isset($_POST['a'])){
 mysqli_query($conn,"INSERT INTO leave_requests VALUES(NULL,'$_SESSION[emp_id]','$_POST[f]','$_POST[t]','$_POST[type]','Pending','')");
}
?>
<div class="container">
<form method="post" onsubmit="return validateLeave()">
<input type="date" id="from" name="f">
<input type="date" id="to" name="t">
<select name="type"><option>Paid</option><option>Sick</option></select>
<button name="a">Apply</button>
</form>
</div>
