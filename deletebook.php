<?php

include("conn.php");
$delete_id=$_GET['del'];
$delete_email=$_GET['email'];

echo $delete_id;
if($delete_id='all'){

  $delete_query="delete from books WHERE email='$delete_email'";

}
else {

$delete_query="delete from books WHERE id='$delete_id'";
}
$run=mysqli_query($conn,$delete_query);
if($run)
{
//  header('Location:view_notes.php?id='.$delete_email);
    //echo "<script>window.open('view_notes.php?id=a@abhi.com)</script>";
    echo "Deleted";
}
$query="delete from tagrel WHERE bookid='$delete_id'";
$run=mysqli_query($conn,$query);
header('Location:view_notes.php?id='.$delete_email);
?>
