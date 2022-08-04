<?php 
    include("config.php");
    use FTP\Connection;
    session_start();

    function user_reg($username,$email,$gender,$pass1,$cpass){
        $con = Connection();
        
        $check_user = "SELECT * FROM user_tbl WHERE username = '$username' && email = '$email'";
        $check_user_result = mysqli_query($con,$check_user);
        $user_check_count = mysqli_num_rows($check_user_result);

        if($user_check_count > 0){
            return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>User Already Exists..!</div>&nbsp</center>";
        }
        else{
            if($pass1 != $cpass){
                return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Passwords are Doesn't Match....!/div>&nbsp</center>";
            }
            else{
                $insert_data = "INSERT INTO user_tbl(username,email,pass_user,gender)VALUES('$username','$email','$pass1','$gender')";
                $insert_data_result = mysqli_query($con, $insert_data);
                header("location:../views/login.php");
            }
        } 
    }

    


?>
