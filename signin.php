<?php      
    session_start();  
    include('connection.php');
    $userid = $_POST['userid'];  
    $userpass = $_POST['userpass'];  
      
        //to prevent from mysqli injection  
        $userid = stripcslashes($userid);  
        $userpass = stripcslashes($userpass);  
        $userid = mysqli_real_escape_string($con, $userid);  
        $userpass = mysqli_real_escape_string($con, $userpass);  
      
        $sql = "select * from profile where userid = '$userid' and userpass = '$userpass'";  
        $result = mysqli_query($con, $sql);  

        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            // echo "Name".$_SESSION['userid']; 
            
            // echo "Signin Successful";

            $_SESSION['userid'] = $userid;
            header("location: profile.php");
        }  
        else{  
            echo "Signin failed. Invalid username or password.";  
        }     
?>  



