<?php include("header.php"); include("../config/db.php");

if(isset($_GET['approve'])){
 mysqli_query($conn,"UPDATE leave_requests SET status='Approved' WHERE id=$_GET[approve]");
}
if(isset($_GET['reject'])){
 mysqli_query($conn,"UPDATE leave_requests SET status='Rejected' WHERE id=$_GET[reject]");
}
?>
<div class="container">
<h2>Leave Requests</h2>
<?php
$r=mysqli_query($conn,"SELECT * FROM leave_requests");
while($l=mysqli_fetch_assoc($r)){
 echo "$l[emp_id] - $l[status]
 <a href='?approve=$l[id]'>Approve</a>
 <a href='?reject=$l[id]'>Reject</a><br>";
}
?>
</div>
