<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notesktu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$connn=mysqli_connect($servername,$username,$password,$dbname);
//$conn=mysqli_connect($servername,$username,$password,$dbname) or die('could not connect to database....');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$mssg="";
$mssg1="";
$mssg2="";

$sem="0";
$branch="0";
$add="";
$temp="";
$subjn="";
$subj=array('Calculus','Engineering Physics','Engineering Chemistry','Engineering Mechanics','Introduction to Computing and Problem Solving','Introduction to Civil Engineering','Introduction to Mechanical Engineering','Introduction to Electrical Engineering','Introduction to Electronics Engineering','Introduction to Chemical Engineering','Introduction to Sustainable Engineering','Basics of Mechanical Engineering','Basics of Electrical Engineering','Basics of Electronics Engineering','Basics of Civil Engineering','Physics Lab','Chemistry Lab','Civil Engineering Workshop','Mechanical Engineering Workshop','Electrical Engineering Workshop','Electronics Engineering Workshop','Computer Science Engineering Workshop','Discrete Computational Structures','Switching Theory and Logic Design','Data Structures','Electronics Devices and Circuits','Data Structures Lab','Electronic Circuits Lab','Mechanics of Solids','Mechanics of Fluids','Thermodynamics','Metallurgy and Materials Engineering','Circuits and Networks');
$tag = array();
$sem = $_POST['semester'];
$subjn = $_POST['subject'];
$tags = $_POST['tags'];
$branch = $_POST['branch']; // Storing Selected Value In Variable

$j=0;
for ($i=0; $i <strlen($tags) ; $i++) {
  # code...
  while($tags[$i]!=","&&$i<strlen($tags)){
  $temp=$temp.$tags[$i];
  $i++;
}
array_push($tag,$temp);
$temp="";

$j++;
}
//var_dump($tag);
//echo $subjn;
//echo $branch;
$query="SELECT title FROM tags"; //Adding nicknames from leaderboard to check for pre-usage
$data=mysqli_query($conn,$query);
$dbtags=array();
while($row=mysqli_fetch_array($data))
{
    array_push($dbtags,$row['title']);
}
//var_dump($dbtags);
//echo sizeof($tag);

for($i=0;$i<sizeof($tag);$i++){
    if(!in_array($tag[$i],$dbtags)){
      $sql= "insert into tags (title) values('$tag[$i]')";
      if ($conn->query($sql) === TRUE) {
          $mssg1= "TAG ADDED successfully";
      }
    }

}

if($sem=="S1"||$sem=="S2"){
  $br="S1_S2_Common";
  $add = "note/S1_S2_Common/"; // Displaying Selected Value
}
else {

  if($branch=="CSE")
  $br="Computer Science";
  else if($branch=="MECH")
  $br="Mechanical";
  else if($branch=="EEE")
  $br="Electrical";
  else if($branch=="EC")
  $br="Electronics";
  else if($branch=="CIVIL")
  $br="Civil";
$add = "note/".$sem."/".$branch."/".$subj[$subjn-1]."/";
//echo $add; // Displaying Selected Value
}




if($sem!="0" && $branch!="0"&&$subjn!="10000"){
$target_dir = $add;
$target_file = $target_dir. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    $mssg= "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size

// Allow certain file formats
if($imageFileType != "pdf" ) {
    $mssg= "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $mssg2= "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$extension = end($temp);
 $filename = basename($_FILES["fileToUpload"]["name"]);
$a=0;
$filename="Note";
 $filename = $filename. strrchr($filename, '.');

 $sql= "select count(*) from books";
 $dfck=mysqli_query($conn,$sql);
 $roqw = mysqli_fetch_array($dfck);
 $numt = $roqw['count(*)'];
 //echo $numt;
$filename=$filename.$numt;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$filename)) {
        $mssg1=  basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $mssg2="Thank you for your contribution";
        $fl=basename( $_FILES["fileToUpload"]["name"]);
        $fl = str_replace(' ', '', $fl);
        $subt=$subj[$subjn-1];
              //  echo $subt;
                $path=$add.$filename;

                //echo $fl;
        $sql= "insert into books (name,sem,subject,branch,path) values('$filename','$sem[1]','$subt','$br','$path')";
        if ($conn->query($sql) === TRUE) {
            //echo "BOOK ADDED successfully";
            $msssss="i";
        }

        $sql= "select id from books where name='$filename'";
        $data=mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($data);
        $bid = $row['id'];
        //var_dump($bid);
for ($i=0; $i <=sizeof($tag) ; $i++) {
  # code...
  $tt=$tag[$i];
  //echo "LINK ADDED successfully";
  $sql= "select * from tags where title='$tt'";
  $data=mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($data);
  $tid = $row['tag'];
  //echo $tid;
  //echo $bid;
  $sql= "insert into tagrel values('$tid','$bid')";
  $fck=mysqli_query($connn,$sql);
//var_dump($fck);


}




    } else {
        $mssg= "Sorry, there was an error uploading your file.";
    }
}}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KTU Notes Sharing</title>
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
    <!--HEADER-->
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
                <a class="navbar-brand" href="#"><span class="logo-dec">BETTER</span> GRADES</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="index.php">Home</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-title"><?php echo $mssg; ?></h1>
                <h2 class="bnr-sub-title"><?php echo $mssg1; ?></h2>
                <p class="bnr-para"><?php echo $mssg2; ?></p>
                <div class="brn-btn">
                  <a href="index.php" class="btn btn-download">Go Home</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->


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
    <!---->

  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/myjs.js"></script>
  <script src="dist/bootstrap-tagsinput-angular.js"></script>
  <script src="dist/bootstrap-tagsinput-angular.min.js"></script>
  <script src="dist/bootstrap-tagsinput.js"></script>
  <script src="dist/bootstrap-tagsinput.min.js"></script>
  <script src="contactform/contactform.js"></script>

    </form>
</body>
</html>
<?php

?>
