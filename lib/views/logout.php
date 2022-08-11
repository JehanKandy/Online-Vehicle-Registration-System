<?php 
    include_once("../function/function.php");
    setcookie('login',NULL,time()-60*60,'/');
    session_unset();
    session_destroy();
    header('location:../views/login.php');
?>