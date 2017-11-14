<?php
if( $_GET["id"])
  $email=$_GET['id'];


 ?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css\bootstrap.min.css">
    <title>View Users</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }

</style>

<body>
<div class="container">
<div class="table-scrol">
    <h1 align="center">View Notes</h1>
    <h3 align="center">Viewing notes of <?php echo $email;?></h3>
    <p align="center"><a  class="btn btn-danger" href="<?php echo 'deletebook.php?del=all&email='.$email; ?>">Delete all from User</a></p>
    <h2 align="center"><a class="btn btn-default" href="view_users.php">Go to Admin Home</a><a class="btn btn-primary" href="logout.php">Logout</a></h1>
    <input type="text" onkeyup="myFunction()" id="search" class="form-control" placeholder="Search" autocomplete="off">
<br>
    <center><div  class="btn-group" data-toggle="buttons">
      <label class="btn">

  <p>Search by</p></label>
  <label class="btn btn-primary ">

  <input type="radio" name="ser" value="0" autocomplete="off" checked>Name</label>
  <label class="btn btn-primary">
  <input type="radio" name="ser" value="1" autocomplete="off">Semester</label>
  <label class="btn btn-primary active">
  <input type="radio" name="ser" value="2" checked="checked" autocomplete="off">Branch</label>
  <label class="btn btn-primary">
  <input type="radio" name="ser" value="3" autocomplete="off">Subject</label>
  </div></center>

<div class="table-responsive">

    <table id="allUsers" class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>Book Name</th>
            <th>Semester</th>
            <th>Branch</th>
            <th>Subject</th>
            <th>Delete</th>
        </tr>
        </thead>
        <?php
        include("conn.php");

        $view_users_query="select name,sem,branch,subject,id from books where email='$email'";
        $run=mysqli_query($conn,$view_users_query);

        while($row=mysqli_fetch_array($run))
        {
            $user_name=$row[0];
            $user_sem=$row[1];
            $user_branch=$row[2];
            $user_subject=$row[3];
            $user_id=$row[4];

        ?>

        <tr>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_sem;  ?></td>
            <td><?php echo $user_branch;  ?></td>
            <td><?php echo $user_subject;  ?></td>
            <td><a class="btn btn-danger" href="<?php echo 'deletebook.php?del='.$user_id.'&email='.$email; ?>">Delete</a></td>
        </tr>

        <?php } ?>
      </table>
    </div>
  </div>
</div>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, ser;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("allUsers");
  tr = table.getElementsByTagName("tr");
  var radios = document.getElementsByName('ser');

  for (var i = 0, length = radios.length; i < length; i++)
  {
   if (radios[i].checked)
   {
    // do whatever you want with the checked radio
    ser=(radios[i].value);

    // only one radio can be logically checked, don't check the rest
    break;
   }
  }
  console.log(ser);
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[parseInt(ser)];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>
