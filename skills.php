<?php

include("connection.php");

$server = "localhost";
$username = "root";
$password = "";
$database="interact";

$con = mysqli_connect($server, $username, $password, $database);

 mysqli_select_db($con, 'skills');

 $userid = $_POST['userid'];
 $skill = $_POST['skill'];

// $userid = 20; 
$skill = $_POST['skill'];
$s= implode($skill);
echo $s;

if($skill)
{
 foreach($skill as $s)
 {
  mysqli_query($con, "INSERT INTO skills (userid, skill) VALUES ( ".$userid." , ' ".mysqli_real_escape_string($con , $s)." ' ) " );
 
// $query = "INSERT INTO signup ( userid, skill) VALUES ('$userid','mysqli_real_escape_string( $s)' )";
// mysqli_query($con, $query);
}
}

?>