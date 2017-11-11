<?php
error_reporting(0);
session_start();

include("conn.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";

    $run=mysqli_query($conn,$check_user);

    if(mysqli_num_rows($run))
    {


        $_SESSION['email']=$user_email;

    }
    else
    {
      echo "<script>alert('Email or password is incorrect!')</script>";
    }
}

if($_SESSION['email'])
{

    $btn_action="#confirm-submit";
    $flag=1;
}
else {
  $btn_action="#login-div";
  $flag=0;
}


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

    $check_email_query="select * from banned WHERE email='$user_email'";
    $run_query=mysqli_query($conn,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email has been banned from BETTERGRADES !')</script>";
exit();
    }
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";
    if(mysqli_query($conn,$insert_user))
    {
        echo"<script>window.alert('SIGN UP Successful')</script>";
    }



}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BETTER GRADES</title>
  <meta name="description" content="Get free Class Notes for KTU Engineering Students">
  <meta name="keywords" content="ktu class notes, ktu notes , notes , kerala technological university, engineering notes ">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="dist/bootstrap-tagsinput.css">
  <link rel="stylesheet" type="text/css" href="dist/bootstrap-tagsinput-typeahead.css">

</head>

<body>

  <div class="loader"></div>
  <div id="myDiv">

    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#"><span class="logo-dec">BETTER</span>NOTES</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#main-header">Home</a></li>
                  <li class=""><a href="#getnotes">Get Notes</a></li>
                  <li class=""><a href="#uploadnotes">Upload Notes</a></li>
                  <li class=""><a href="#contact">Contact Us</a></li>
                  <?php if($flag==0){
                  echo "<li class=''><a data-toggle='modal' data-target='#login-div'>Login</a></li>";
                  echo "<li class=''><a data-toggle='modal' data-target='#signup-div'>Sign Up</a></li>";
                }
                else {
                  echo "<li class=''><a href='logout.php' >Log Out</a></li>";
                }
                   ?>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-title">Get <span class="logo-dec">BETTER</span> GRADES</h1>
                <h2 class="bnr-sub-title">ENGG Notes</h2>
                <p class="bnr-para">Get the most up to date study documents you need for your engineering course</p>
                <div class="brn-btn">
                  <a href="#getnotes" class="btn btn-download">Get Notes</a>
                  <a href="#uploadnotes" class="btn btn-more">Upload Notes</a>
                </div>
                <div class="overlay-detail">
                  <a href="#getnotes"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <section id="getnotes" class="section-padding wow fadeInUp delay-05s">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h2 class="service-title pad-bt15">Get Notes</h2>
                <p class="sub-title pad-bt15">Select Semester</p>
                <hr class="bottom-line">
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 getnotes-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="img/port01.jpg" href="notes/S1/" class="img-responsive">
                  <figcaption>
                    <h2>Select Branch<br></h2>
                    <a class="semlink" href="notes.php?sem=1&bra=S1_S2_Common">CSE</a>
                    <a class="semlink" href="notes.php?sem=1&bra=S1_S2_Common">Mechanical</a>
                    <a class="semlink" href="notes.php?sem=1&bra=S1_S2_Common">EEE</a>
                    <a class="semlink" href="notes.php?sem=1&bra=S1_S2_Common">Civil</a>
                    <a class="semlink" href="notes.php?sem=1&bra=S1_S2_Common">EC</a>
                    <a class="semlink" href="notes.php?sem=1&bra=S1_S2_Common">IT</a>
                  </figcaption>

                </figure>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 getnotes-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="img/port02.jpg" class="img-responsive">
                  <figcaption>
                    <h2>Select Branch<br></h2>
                    <a class="semlink" href="notes.php?sem=1&bra=S1_S2_Common">CSE</a>
                    <a class="semlink" href="notes.php?sem=1&bra=S1_S2_Common">Mechanical</a>
                    <a class="semlink" href="notes.php?sem=1&bra=S1_S2_Common">EEE</a>
                    <a class="semlink" href="notes.php?sem=1&bra=S1_S2_Common">Civil</a>
                    <a class="semlink" href="notes.php?sem=1&bra=S1_S2_Common">EC</a>
                    <a class="semlink" href="notes.php?sem=1&bra=S1_S2_Common">IT</a>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 getnotes-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="img/port03.jpg" class="img-responsive">
                  <figcaption>
                    <h2>Select Branch<br></h2>
                    <a class="semlink" href="notes.php?sem=3&bra=CSE">CSE</a>
                    <a class="semlink" href="notes.php?sem=3&bra=MECH">Mechanical</a>
                    <a class="semlink" href="notes.php?sem=3&bra=EEE">EEE</a>
                    <a class="semlink" href="notes.php?sem=3&bra=Civil">Civil</a>
                    <a class="semlink" href="notes.php?sem=3&bra=EC">EC</a>
                    <a class="semlink" href="notes.php?sem=3&bra=IT">IT</a>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 getnotes-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="img/port04.jpg" class="img-responsive">
                  <figcaption>
                    <h2>Select Branch<br></h2>
                    <a class="semlink" href="notes.php?sem=4&bra=CSE">CSE</a>
                    <a class="semlink" href="notes.php?sem=4&bra=MECH">Mechanical</a>
                    <a class="semlink" href="notes.php?sem=4&bra=EEE">EEE</a>
                    <a class="semlink" href="notes.php?sem=4&bra=Civil">Civil</a>
                    <a class="semlink" href="notes.php?sem=4&bra=EC">EC</a>
                    <a class="semlink" href="notes.php?sem=4&bra=IT">IT</a>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 getnotes-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="img/port05.jpg" class="img-responsive">
                  <figcaption>
                    <h2>Select Branch<br></h2>
                    <a class="semlink" href="notes.php?sem=5&bra=CSE">CSE</a>
                    <a class="semlink" href="notes.php?sem=5&bra=MECH">Mechanical</a>
                    <a class="semlink" href="notes.php?sem=5&bra=EEE">EEE</a>
                    <a class="semlink" href="notes.php?sem=5&bra=Civil">Civil</a>
                    <a class="semlink" href="notes.php?sem=5&bra=EC">EC</a>
                    <a class="semlink" href="notes.php?sem=5&bra=IT">IT</a>
                  </figcaption>
                </figure>
              </div>

            </div>
          </div>
        </section>

    <section id="uploadnotes" class="section-padding wow fadeInUp delay-05s">
      <form action="upload.php" method="post" name="upload" enctype="multipart/form-data">

      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Upload Notes</h2>
            <p class="sub-title pad-bt15">Upload Your Notes Here</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="uploadnotes">
              <h3>Select<span>Sem</span></h3>
              <select class="form-control" id="semester1" name="semester">
                <option value="0">--select--</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                <option value="S4">S4</option>
                <option value="S5">S5</option>
              </select>
            </div>
          </div>

          <div class="col-md-5 col-sm-6 col-xs-12">
            <div class="uploadnotes">
              <h3>Select <span>S</span>tream &amp <span>S</span>ubject</h3>
              <select class="form-control" id ="branch1" name="branch">

              </select>
              <br>
              <select class="form-control" id="subject1" name="subject">

              </select>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="uploadnotes">
              <h3>Upload<span>Note</span></h3>
                  <input type="file" name="fileToUpload" id="fileToUpload">
                  <input type="button" id="submitButton" class="btn btn-download" data-toggle="modal" data-target="<?php echo $btn_action ?>" value="Upload Note" name="submit">
            </div>
          </div>

        </div>
      </div>

    </section>
        <section id="contact" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title pad-bt15">Keep in touch with us</h2>
            <p class="sub-title pad-bt15">Tell me what you feel about the website</p>
            <hr class="bottom-line white-bg">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="loction-info white">
              <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>MACE<br>Kothamangalam,Ernakulam</p>
              <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>abhinavtk97@gmail.com</p>
              <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+919400406889</p>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p>&copy; </p>
          <div class="credits">
            Designed by Abhi
          </div>
        </div>
      </div>
    </footer>

  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/myjs.js"></script>

  <script src="dist/bootstrap-tagsinput.js"></script>
  <script src="dist/bootstrap-tagsinput.min.js"></script>

  <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  Included Topics
              </div>

              <div class="modal-body">
                  <p>Please input the topics included seperated by comma</p>
                  <div class="bs">
                    <input type="text" name="tags" data-role="tagsinput" style="display: none;">
              </div>
            </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-more" data-dismiss="modal">Cancel</button>
                  <button type="submit"  class="btn btn-download">Submit</a>
              </div>
          </div>
        </div>
      </div>
    </form>
    <div class="modal fade" id="login-div" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <center>  <h2>  Login </h2></center>
                </div>
                <div class="modal-body">
              <center>    <h3>Enter your Login Credentials</h3></center>
              <br>
                  <form role="form" method="post" action="index.php">
                      <fieldset>
                          <div class="form-group"  >
                              <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                          </div>
                          <div class="form-group">
                              <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                          </div>



              </div>
                <div class="modal-footer">
<center>
                      <input class="btn btn-lg btn-download " type="submit" value="LOGIN" name="login" >
                      <input class="btn btn-lg btn-more " class="close" data-dismiss="modal" type="button" value="SIGN UP" data-toggle="modal" data-target="#signup-div" name="sign--up" >
                  <!-- Change this to a button or input when using this as a form -->
                <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
</center>
              </fieldset>
          </form>
                </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="signup-div" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <center><h2>  Sign Up</h2></center>
                    </div>

                    <div class="modal-body">
                      <center><h3>Enter your details here to sign up</h3></center>
                      <br>
                      <form role="form" method="post" action="index.php">
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

                  </div>
                    <div class="modal-footer">
                      <center>
                      <input class="btn btn-lg btn-download " type="submit" value="SIGN UP" name="register" >
                      </center>
                  </fieldset>
              </form>
              <br>
              <center><b>Already registered ?</b> <br></b><a class="btn" href="login.php">Login here</a></center>


                    </div>
                </div>
              </div>
            </div>
</body>
</html>
