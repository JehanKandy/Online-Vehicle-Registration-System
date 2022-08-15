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
                if($user_login_row['roll'] == 'admin'){
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

        $user_id_get = "SELECT * FROM user_tbl WHERE email = '$email'";
        $user_id_get_result = mysqli_query($con, $user_id_get);

        $user_id_row = mysqli_fetch_assoc($user_id_get_result);

        echo ($user_id_row['username']);
                
    }


    function profile_img(){
        $con = Connection();
        $email = strval($_SESSION['LoginSession']);

        $check_user_img = "SELECT * FROM user_tbl WHERE email = '$email' && user_status = '1'";
        $check_user_img_result = mysqli_query($con, $check_user_img);
        $check_user_img_row = mysqli_fetch_assoc($check_user_img_result);

        echo "
            <img src='../../upload/".$check_user_img_row['profile_img']."' alt='Profile Image' class='profile-img'>
        ";
    }
    function profile_img_user(){
        $con = Connection();
        $email = strval($_SESSION['LoginSession']);

        $check_user_img = "SELECT * FROM user_tbl WHERE email = '$email' && user_status = '1'";
        $check_user_img_result = mysqli_query($con, $check_user_img);
        $check_user_img_row = mysqli_fetch_assoc($check_user_img_result);

        echo "
            <img src='../../../upload/".$check_user_img_row['profile_img']."' alt='Profile Image' class='profile-img'>
        ";
    }

    function account_admin(){
        $con = Connection();
        $email = strval($_SESSION['LoginSession']);

        $admin_user = "SELECT * FROM user_tbl WHERE roll = 'admin' && user_status = '1' && email = '$email'";
        $admin_user_result = mysqli_query($con, $admin_user);
        $admin_user_row = mysqli_fetch_assoc($admin_user_result);

        echo "
            <div class='acc-update'>
                <table border = '0' class='acc-update-table'>
                    <tr>
                        <td>
                            Username   
                        </td>
                        <td>
                            :&nbsp;<input type='text' value='".$admin_user_row['username']."' class='update-input-view' disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email   
                        </td>
                        <td>
                            :&nbsp;<input type='email' value='".$admin_user_row['email']."' class='update-input-view' disabled>
                        </td>
                    </tr>
                    <tr>
                        <td style='vertical-align:top;'>
                            Profile Image   
                        </td>
                        <td>
                            &nbsp;<img src='../../../upload/".$admin_user_row['profile_img']."' class='profile-photo'> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            First Name     
                        </td>
                        <td>
                            :&nbsp;<input type='email' value='".$admin_user_row['fname']."' class='update-input-view' disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Last Name     
                        </td>
                        <td>
                            :&nbsp;<input type='email' value='".$admin_user_row['lname']."' class='update-input-view' disabled>
                        </td>
                    </tr>
                    <tr>
                        <td  style='vertical-align:top;'>
                            Full Name     
                        </td>
                        <td>
                             &nbsp; <textarea class='update-textarea' disabled>".$admin_user_row['full_name']."</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Gender     
                        </td>
                        <td>
                            :&nbsp;<input type='email' value='".$admin_user_row['gender']."' class='update-input-view' disabled>
                        </td>
                    </tr>
                    <tr>
                        <td style='vertical-align:top;'>
                            Address     
                        </td>
                        <td>
                            &nbsp; <textarea class='update-textarea' disabled>".$admin_user_row['address']."</textarea>
                        </td>
                    </tr>
                </table>
            </div>

        ";

    }
?>
