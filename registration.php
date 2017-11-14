<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css\bootstrap.min.css">
    <title>Registration</title>

<style>
    .login-panel {
        margin-top: 150px;
}
</style>
</head>
<body>

<div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >

                        </fieldset>
                    </form>
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php

include("conn.php");
if(isset($_POST['register']))
{
    $user_name=$_POST['name'];
    $user_pass=$_POST['pass'];
    $user_email=$_POST['email'];


    if($user_name=='')
    {

        echo"<script>alert('Please enter the name')</script>";
exit();
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }
    $check_email_query="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($conn,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";
    if(mysqli_query($conn,$insert_user))
    {
        echo"<script>window.open('welcome.php','_self')</script>";
    }

}

?>
