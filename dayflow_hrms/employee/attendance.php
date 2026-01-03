<?php include("header.php"); include("../config/db.php");
$d=date("Y-m-d");
if(isset($_POST['in'])) mysqli_query($conn,"INSERT INTO attendance VALUES(NULL,'$_SESSION[emp_id]','$d',CURTIME(),NULL,'Present')");
if(isset($_POST['out'])) mysqli_query($conn,"UPDATE attendance SET check_out=CURTIME() WHERE emp_id='$_SESSION[emp_id]' AND date='$d'");
?>
<div class="container">
<form method="post">
<button name="in">Check In</button>
<button name="out">Check Out</button>
</form>
</div>
