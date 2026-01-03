<?php include("header.php"); include("../config/db.php");
if(isset($_GET['a'])) mysqli_query($conn,"UPDATE leave_requests SET status='Approved' WHERE id=$_GET[a]");
?>
<div class="container">
<h2>Leave Requests</h2>
<?php
$r=mysqli_query($conn,"SELECT * FROM leave_requests");
while($l=mysqli_fetch_assoc($r)){
 echo "$l[emp_id] $l[status] <a href='?a=$l[id]'>Approve</a><br>";
}
?>
</div>
