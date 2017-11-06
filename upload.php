<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notesktu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$conn=mysqli_connect($servername,$username,$password,$dbname) or die('could not connect to database....');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sem="0";
$branch="0";
$add="";
$temp="";
$subjn="";
$subj=array('Calculus');
$tag = array();
$sem = $_POST['semester'];
$subjn = $_POST['subject'];
$tags = $_POST['tags'];
$branch = $_POST['branch']; // Storing Selected Value In Variable
$add = "notes/_public/".$sem."/".$branch."/".$subj[$subjn-1]."/"; // Displaying Selected Value
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
var_dump($tag);
echo $sem;
echo $branch;
$query="SELECT title FROM tags"; //Adding nicknames from leaderboard to check for pre-usage
$data=mysqli_query($conn,$query);
$dbtags=array();
while($row=mysqli_fetch_array($data))
{
    array_push($dbtags,$row['title']);
}
var_dump($dbtags);
echo sizeof($tag);

for($i=0;$i<sizeof($tag);$i++){
    if(!in_array($tag[$i],$dbtags)){
      $sql= "insert into tags (title) values('$tag[$i]')";
      if ($conn->query($sql) === TRUE) {
          echo "TAG ADDED successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }

}


if($branch=="CSE")
  $br="Computer Science";




if($sem!="0" && $branch!="0"){
$target_dir = $add;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size

// Allow certain file formats
if($imageFileType != "pdf" ) {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $fl=basename( $_FILES["fileToUpload"]["name"]);
        $subt=$subj[$subjn-1];
                echo $subt;
                $path=$add."/".$fl;
        $sql= "insert into books (name,sem,subject,branch,path) values('$fl','$sem[1]','$subt','$br','$path')";
        if ($conn->query($sql) === TRUE) {
            echo "BOOK ADDED successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }





    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}}


?>
