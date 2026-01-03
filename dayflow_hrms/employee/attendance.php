<?php include("header.php"); include("../config/db.php");
$d=date("Y-m-d");
if(isset($_POST['in'])){
 mysqli_query($conn,"INSERT INTO attendance VALUES(NULL,'$_SESSION[emp_id]','$d',CURTIME(),NULL,'Present')");
}
?>
<div class="container">
<form method="post">
<button name="in">Check In</button>
</form>
</div>
