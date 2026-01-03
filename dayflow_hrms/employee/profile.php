<?php
include(__DIR__ . "/header.php");
include(__DIR__ . "/../config/db.php");

$emp_id = $_SESSION['emp_id'];

/* 1️⃣ Check if employee exists */
$result = mysqli_query($conn, "SELECT * FROM employees WHERE emp_id='$emp_id'");
$data = mysqli_fetch_assoc($result);

/* 2️⃣ If NOT exists, insert empty record */
if (!$data) {
    mysqli_query($conn, "INSERT INTO employees (emp_id, name, phone, address, salary)
                          VALUES ('$emp_id', '', '', '', 0)");
    
    $result = mysqli_query($conn, "SELECT * FROM employees WHERE emp_id='$emp_id'");
    $data = mysqli_fetch_assoc($result);
}

/* 3️⃣ Update profile */
if (isset($_POST['update'])) {
    $name    = $_POST['name'];
    $phone   = $_POST['phone'];
    $address = $_POST['address'];

    mysqli_query($conn, "UPDATE employees 
                         SET name='$name', phone='$phone', address='$address'
                         WHERE emp_id='$emp_id'");

    header("Location: profile.php");
    exit();
}
?>

<div class="container">
    <h2>My Profile</h2>

    <form method="post">
        <label>Name</label>
        <input type="text" name="name" value="<?= htmlspecialchars($data['name']) ?>" required>

        <label>Phone</label>
        <input type="text" name="phone" value="<?= htmlspecialchars($data['phone']) ?>">

        <label>Address</label>
        <textarea name="address"><?= htmlspecialchars($data['address']) ?></textarea>

        <button name="update">Update</button>
    </form>
</div>
