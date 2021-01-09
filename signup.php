<?php


include("connection.php");


$userid = $_POST['userid'];
$useremail = $_POST['useremail'];
$userpass = $_POST['userpass'];
// $usercnfpass = $_POST['usercnfpass'];



$query = "INSERT INTO profile ( userid, useremail, userpass) VALUES ('$userid','$useremail','$userpass')";

// if($userpass==$usercnfpass)
// {
mysqli_query($con, $query);
// }
// else{
//     echo "Incorrect Password";
// }

if(isset($_POST['submitted']))
{
    header("Location: interact.html");
}

?>