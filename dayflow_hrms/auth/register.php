<?php
include("../config/db.php");
if(isset($_POST['register'])){
 $pass = password_hash($_POST['password'],PASSWORD_DEFAULT);
 mysqli_query($conn,"INSERT INTO users VALUES(NULL,'$_POST[id]','$_POST[email]','$pass','$_POST[role]')");
}
?>
<link rel="stylesheet" href="../assets/css/style.css">
<form method="post" class="container">
<h2>Register</h2>
<input name="id" placeholder="Employee ID">
<input name="email" placeholder="Email">
<input type="password" name="password" placeholder="Password">
<select name="role">
<option>employee</option>
<option>admin</option>
</select>
<button name="register">Register</button>
</form>
