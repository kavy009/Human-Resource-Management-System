<?php
if ($_SESSION['role'] !== $required_role) {
    header("Location: ../index.php");
    exit();
}
