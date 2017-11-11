<?php

include("conn.php");
$delete_id=$_GET['del'];
$delete_query="delete  from users WHERE id='$delete_id'";
$run=mysqli_query($conn,$delete_query);
if($run)
{
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";
}

?>
