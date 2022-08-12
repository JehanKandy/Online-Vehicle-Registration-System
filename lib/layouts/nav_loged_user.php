<?php 
  include_once("../../function/function.php");
    //check the loginSession is not empty to enter to this page
  if(empty($_SESSION['LoginSession'])){
      header('location:../../views/login.php');
  }
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">&nbsp;&nbsp;Vehicle Registration System</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    </ul>
    <span class="navbar-text">
        <span><?php user_id(); ?> &nbsp;&nbsp;&nbsp;&nbsp;</span>   
        <a href="../../views/logout.php"><button class="logout-btn-nav"> &nbsp;Logout</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    </span>
  </div>
</nav>
