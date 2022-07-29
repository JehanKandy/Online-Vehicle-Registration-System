<?php 
    function connection(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db_name = "e_bill_system";

        $con = mysqli_connect($server,$user,$pass,$db_name);

        $result = (!$con)?"Connection Lost":$con;
        return $result;
    }
?>