<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notesktu";
$connn=mysqli_connect($servername,$username,$password,$dbname);
for ($i=10; $i <20 ; $i++) {
  # code...
  $sql= "insert into tagrel values('10','$i')";
  $fck=mysqli_query($connn,$sql);
  var_dump($fck);
}

?>
