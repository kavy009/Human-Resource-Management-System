<?php include("header.php"); include("../config/db.php");
if(isset($_POST['save'])){
 $net=$_POST['salary']-$_POST['deduction'];
 mysqli_query($conn,"INSERT INTO payroll VALUES(NULL,'$_POST[id]','$_POST[salary]','$_POST[deduction]','$net')");
}
?>
<div class="container">
<form method="post">
<input name="id" placeholder="Emp ID">
<input name="salary" placeholder="Salary">
<input name="deduction" placeholder="Deduction">
<button name="save">Save</button>
</form>
</div>
