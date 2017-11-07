<html>
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
<?php
include("conn.php");
//$query = "select field1, fieldn from table [where clause][group by clause][order by clause][limit clause]";
function mysqli_field_name($result, $field_offset)
{
    $properties = mysqli_fetch_field_direct($result, $field_offset);
    return is_object($properties) ? $properties->name : null;
}
$query = "select * from books";
$result = mysqli_query($conn,$query);
if (($result)||(mysql_errno == 0))
{
  echo "<table class='table table-responsive' width='100%'><tr>";
  if (mysqli_num_rows($result)>0)
  {
          //loop thru the field names to print the correct headers
          $i = 0;
          while ($i < mysqli_num_fields($result))
          {
       echo "<th>". mysqli_field_name($result, $i) . "</th>";
       $i++;
    }
    echo "</tr>";

    //display the data
    while ($rows = mysqli_fetch_array($result,MYSQL_ASSOC))
    {
      echo "<tr>";
      foreach ($rows as $data)
      {
        echo "<td align='center'><a href='". $data . "'>asd</a></td>";
      }
    }
  }else{
    echo "<tr><td colspan='" . ($i+1) . "'>No Results found!</td></tr>";
  }
  echo "</table>";
}else{
  echo "Error in running query :". mysqli_error();
}
?>



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
</body>

</html>
