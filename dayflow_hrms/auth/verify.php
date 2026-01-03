<?php
include("../config/db.php");
mysqli_query($conn,"UPDATE users SET verified=1");
echo "Email verified. <a href='login.php'>Login</a>";
