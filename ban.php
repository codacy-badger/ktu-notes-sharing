<?php

include("conn.php");
$delete_id=$_GET['ban'];
$select_query="select user_email from users WHERE id='$delete_id'";
$run=mysqli_query($conn,$select_query);
$row = mysqli_fetch_assoc($run);
        $email=$row["user_email"];
$delete_query="delete from users WHERE id='$delete_id'";
$run=mysqli_query($conn,$delete_query);


$ban_query="insert into banned(email) value ('$email')";
$run=mysqli_query($conn,$ban_query);
if($run)
{
    echo "<script>window.open('view_users.php?banned=user has been banned','_self')</script>";
}

?>
