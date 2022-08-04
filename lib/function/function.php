<?php 
    include("config.php");
    use FTP\Connection;
    session_start();

    function user_reg($username,$email,$gender,$pass1,$cpass){
        $con = Connection();
        
        $check_user = "SELECT * FROM user_tbl WHERE username = '$username' && email = '$email'";
        $check_user_result = mysqli_query($con,$check_user);
        $user_check_count = mysqli_num_rows($check_user_result);

        if()

        

    }
    


?>
