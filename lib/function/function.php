<?php 

use FTP\Connection;
session_start();
include_once("config.php");

function add_user($usernmane, $email, $password, $cpassword){
    $con = Connection();
  
    $check_sql = "SELECT * FROM user_tbl WHERE username = '$usernmane' && email = '$email'";
    $check_reuslt = mysqli_query($con, $check_sql);
    $check_nor = mysqli_num_rows($check_reuslt);

    if($check_nor > 0){
        return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>User Already Exists..!</div>&nbsp</center>"; 
    }else{
        if($password != $cpassword){
            return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Password Does not Match</div>&nbsp</center>"; 
        }
        else{
            $add_user = "INSERT INTO user_tbl(username,email,pass1,roll,user_status,join_date)VALUES('$usernmane','$email','$password','user','0',NOW())";
            $add_user_result = mysqli_query($con, $add_user);
            header('location:../views/login.php');
        }        
    }  
}

function login_user($login_username,$login_password){
    $con = Connection();

    $check_user = "SELECT * FROM user_tbl WHERE username = '$login_username' && pass1 = '$login_password'";
    $check_user_result = mysqli_query($con, $check_user);
    $check_user_nor = mysqli_num_rows($check_user_result);
    $check_user_row = mysqli_fetch_assoc($check_user_result);

    if($check_user_nor > 0){
        if($login_password != $check_user_row['pass1']){
            return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Password Does not Match</div>&nbsp</center>";
        }else{
            if($check_user_row['user_status'] == 1){
                if($check_user_row['roll'] == 'user'){
                    setcookie('login',$check_user_row['email'],time()+60*60,'/');
                    $_SESSION['loginSession'] = $check_user_row['email'];
                    header("location:../routes/user.php");
                }
                elseif($check_user_row['roll'] == 'admin'){
                    setcookie('login',$check_user_row['email'],time()+60*60,'/');
                    $_SESSION['loginSession'] = $check_user_row['email'];
                    header('location:../routes/admin.php');
                }
            }else{
                return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>User Deactivate...!</div>&nbsp</center>";
            }
        }
    }else{
        return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Recodes not found...!</div>&nbsp</center>";
    }
}

function user_id(){
    $con = Connection();
    $email = strval($_SESSION['loginSession']);

    $check_user_id = "SELECT * FROM user_tbl WHERE email = '$email'";
    $check_user_id_result = mysqli_query($con,$check_user_id);
    $check_user_id_row = mysqli_fetch_assoc($check_user_id_result);

    echo($check_user_id_row['username']);

}

function count_users(){
    $con = Connection();

    $count_user = "SELECT * FROM user_tbl WHERE user_status = '1' && roll = 'user'";
    $count_user_result = mysqli_query($con, $count_user);
    $count_user_nor = mysqli_num_rows($count_user_result);
    echo $count_user_nor;
}

function active_users(){
    $con = Connection();

    $active_user = "SELECT * FROM user_tbl WHERE user_status = '1' && roll = 'user'";
    $active_user_result = mysqli_query($con, $active_user);
    $active_user_nor = mysqli_num_rows($active_user_result);
    echo $active_user_nor;
}

function deactive_users(){
    $con = Connection();

    $deactive_user = "SELECT * FROM user_tbl WHERE user_status = '0'  && roll = 'user'";
    $deactive_user_result = mysqli_query($con, $deactive_user);
    $deactive_user_nor = mysqli_num_rows($deactive_user_result);
    echo $deactive_user_nor;
}

function all_users(){
    $con = Connection();

    $all_user = "SELECT * FROM user_tbl WHERE roll = 'user' && user_status = '1'";
    $all_user_result = mysqli_query($con, $all_user);

    while($row = mysqli_fetch_assoc($all_user_result)){
        $user_info =  "
                        <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['username']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['roll']."</td>
                            <td>".$row['join_date']."</td>";
                            
                            if($row['user_status'] == 1){
                                $user_info .="<td><h1 class='badge badge-success'>User Activate</h1></td>";
                            }
                            elseif($row['user_status'] == 0){
                                $user_info .="<td><h1 class='badge badge-danger'>User Deactivate</h1></td>";
                            }

                            $user_info .="<td><a href='more_user_infor.php?id=".$row['username']."'><button class='btn btn-primary'>More Infor</button></a></td>
                        </tr>";

              echo $user_info;
    }

}

function count_admins(){
    $con = Connection();

    $count_admin = "SELECT * FROM user_tbl WHERE roll = 'admin' && user_status = '1'";
    $count_admin_result = mysqli_query($con, $count_admin);
    $count_admin_nor = mysqli_num_rows($count_admin_result);
    echo $count_admin_nor;
}

function count_dactive_admins(){
    $con = Connection();

    $deactive_admin = "SELECT * FROM user_tbl WHERE roll = 'admin' && user_status = '0'";
    $deactive_admin_result = mysqli_query($con, $deactive_admin);
    $count_deactive_admin = mysqli_num_rows($deactive_admin_result);

    echo $count_deactive_admin;
}



function count_staff(){
    $con = Connection();

    $count_staff = "SELECT * FROM user_tbl WHERE roll = 'staff'";
    $count_staff_result = mysqli_query($con, $count_staff);
    $count_staff_nor = mysqli_num_rows($count_staff_result);
    echo $count_staff_nor;
}

function count_emp(){
    $con = Connection();

    $count_emp = "SELECT * FROM user_tbl WHERE roll = 'staff'";
    $count_emp_result = mysqli_query($con, $count_emp);
    $count_emp_nor = mysqli_num_rows($count_emp_result);
    echo $count_emp_nor;
}


function all_bills(){
    $con = Connection();

    $all_bills = "SELECT * FROM bill_tbl";
    $all_bills_result = mysqli_query($con, $all_bills);
    $all_bills_nor = mysqli_num_rows($all_bills_result);
    echo $all_bills_nor;
}

function water_bills(){
    $con = Connection();

    $water_bills = "SELECT * FROM bill_tbl WHERE bill_type ='water'";
    $water_bills_result = mysqli_query($con, $water_bills);
    $water_bills_nor = mysqli_num_rows($water_bills_result);
    echo $water_bills_nor;
}

function elec_bills(){
    $con = Connection();

    $elec_bills = "SELECT * FROM bill_tbl WHERE bill_type ='elec'";
    $elec_bills_result = mysqli_query($con, $elec_bills);
    $elec_bills_nor = mysqli_num_rows($elec_bills_result);
    echo $elec_bills_nor;
}

function tele_bills(){
    $con = Connection();

    $tele_bills = "SELECT * FROM bill_tbl WHERE bill_type ='tele'";
    $tele_bills_result = mysqli_query($con, $tele_bills);
    $tele_bills_nor = mysqli_num_rows($tele_bills_result);
    echo $tele_bills_nor;
}


?>