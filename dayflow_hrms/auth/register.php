<?php
include("../config/db.php");

if(isset($_POST['register'])){
    if(strlen($_POST['password']) < 6){
        die("Password must be at least 6 characters");
    }

    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    mysqli_query($conn,"INSERT INTO users (employee_id,email,password,role)
        VALUES('$_POST[id]','$_POST[email]','$pass','$_POST[role]')");

    header("Location: verify.php");
}
?>
<link rel="stylesheet" href="../assets/css/style.css">
<div class="container login-box">
<h2>Register</h2>
<form method="post">
<input name="id" required placeholder="Employee ID">
<input name="email" required placeholder="Email">
<input type="password" name="password" required placeholder="Password">
<select name="role">
<option value="employee">Employee</option>
<option value="admin">HR/Admin</option>
</select>
<button name="register">Register</button>
</form>
</div>
