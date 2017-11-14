<?php
session_start();
$email=$_SESSION['email'];
$sem=$_SESSION['sem'];
$bra=$_SESSION['bra'];
include("conn.php");
$dir_id=$_GET['vote'];
$vote_id=$_GET['id'];

$qry="select * from votetable where us_email='$email' and book_id=$vote_id";
$run=mysqli_query($conn,$qry);
if(mysqli_num_rows($run)>0){
  echo "Already voted";
  header('Location:notes.php?sem='.$sem.'&bra='.$bra);
}
else {
if($dir_id==1){
  echo "1";
  $que="update books set ups=ups+1 where id='$vote_id'";
  $run=mysqli_query($conn,$que);
  $que="insert into votetable(us_email,book_id) values ('$email',$vote_id)";
  $run=mysqli_query($conn,$que);
}
else
if($dir_id==0){
  echo "0";
  $que="update books set downs=downs+1 where id='$vote_id'";
  $run=mysqli_query($conn,$que);
  $que="insert into votetable(us_email,book_id) values ('$email',$vote_id)";
  $run=mysqli_query($conn,$que);
}
if($run)
{
    header('Location:notes.php?sem='.$sem.'&bra='.$bra);
}
}
header('Location:notes.php?sem='.$sem.'&bra='.$bra);

?>
