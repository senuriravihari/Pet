<?php 
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name ="Pet";
$conn = "";

$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
if($conn){
  echo "Connected";
}
else{
  echo"Can't Connect";
}

?>
