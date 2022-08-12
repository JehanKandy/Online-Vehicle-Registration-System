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
                $insert_data = "INSERT INTO user_tbl(username,email,pass_user,gender,roll,user_status,join_date)VALUES('$username','$email','$pass1','$gender','user','1',NOW())";
                $insert_data_result = mysqli_query($con, $insert_data);
                header("location:../views/login.php");
            }
        } 
    }
    function login_user($login_username,$login_pass){
        $con = Connection();
        
        $check_user_login = "SELECT * FROM user_tbl WHERE username='$login_username' && pass_user='$login_pass'";
        $check_user_login_result = mysqli_query($con, $check_user_login);
        $user_login_count = mysqli_num_rows($check_user_login_result);
        $user_login_row = mysqli_fetch_assoc($check_user_login_result); 

        if($user_login_count > 0){
            if($login_pass != $user_login_row['pass_user']){
                return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Password is Does't Match...!</div>&nbsp</center>";
            }
            else{
                if($user_login_row['roll'] == 'user'){
                    setcookie('login',$user_login_row['email'],time()+60*60,'/');
                    $_SESSION['LoginSession'] = $user_login_row['email'];
                    header("location:../routes/admin.php");                  
                }
            }
        }else{
            return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>User Doesn't Exists..!</div>&nbsp</center>";
        }    
    }

    function user_id(){
        $con = Connection();

        $email = strval($_SESSION['LoginSession']);

        $user_id_get = "SELECT * FROM email = '$email'";
        $user_id_get_result = mysqli_query($con, $user_id_get);

        $user_id_row = mysqli_fetch_assoc($user_id_get_result);

        echo ($user_id_row['username']);
                
    }


?>
