<?php
session_start();
include("../config/db.php");

if (isset($_SESSION['role'])) {
    header("Location: ../index.php");
    exit();
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $res = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($res);

    if ($user && password_verify($pass, $user['password'])) {
        $_SESSION['emp_id'] = $user['employee_id'];
        $_SESSION['role']   = $user['role'];
        header("Location: ../index.php");
        exit();
    } else {
        $error = "Invalid email or password";
    }
}
?>

<link rel="stylesheet" href="../assets/css/style.css">

<div class="container">
<h2>Login</h2>
<?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
<form method="post">
    <input name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button name="login">Login</button>
</form>
</div>
