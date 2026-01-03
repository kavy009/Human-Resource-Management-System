<?php
session_start();
include("../config/db.php");

if(isset($_POST['login'])){
    $res = mysqli_query($conn,"SELECT * FROM users WHERE email='$_POST[email]'");
    $u = mysqli_fetch_assoc($res);
    if($u && password_verify($_POST['password'],$u['password'])){
        $_SESSION['emp_id']=$u['employee_id'];
        $_SESSION['role']=$u['role'];
        header("Location: ../index.php");
    } else echo "Invalid Login";
}
?>
<link rel="stylesheet" href="../assets/css/style.css">
<form method="post" class="container">
<h2>Login</h2>
<input name="email" placeholder="Email">
<input type="password" name="password" placeholder="Password">
<button name="login">Login</button>
</form>
