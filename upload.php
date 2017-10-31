<?php

$sem="0";
$branch="0";
$add="";
$temp="";
$tag = array();
$sem = $_POST['semester'];
$tags = $_POST['tags'];
$branch = $_POST['branch']; // Storing Selected Value In Variable
$add = "notes/_public/".$sem."/".$branch."/"; // Displaying Selected Value
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
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}}


?>
