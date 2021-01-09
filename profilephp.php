<?php

$server = "localhost";
$username = "root";
$password = "";
$database="interact";

$con = mysqli_connect($server, $username, $password, $database);
if (!isset($_SESSION['userid'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: signin.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['userid']);
    header("location: signin.php");
}

if($con){
    echo "Connection Successful";}

mysqli_select_db($con, 'interact');
if(isset($_POST['submit']))
{

$userid = $_POST['userid'];
$userlname = $_POST['userlname'];
$userdob = $_POST['userdob'];
$usergender = $_POST['usergender'];
$useryear = $_POST['useryear'];
$userbranch = $_POST['userbranch'];
$userlinkd = $_POST['userlinkd'];
$usergithub = $_POST['usergithub'];
$usermobile = $_POST['usermobile'];
$userinsta = $_POST['userinsta'];
$userinfo = $_POST['userinfo'];
// echo "You have entered " . $username . " " . $useremail . " " . $userpass . " " . $usercnfpass;
$query =  mysqli_query($con,"UPDATE profile set userlname='$userlname', userdob='$userdob', usergender = '$usergender', useryear='$useryear', userbranch='$userbranch', userlinkd= '$userlinkd', usergithub='$usergithub', usermobile='$usermobile', userinsta='$userinsta', userinfo='$userinfo' where userid = '".$_SESSION['userid']."'");

if($query)
{

    echo"<script>alert('Your Profile updated Successfully');</script>";
}





}
?>