<link rel="stylesheet" href="../../css/style.css">

<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_login.php"); ?>

<div class="login">
    <div class="login-box">
        <div class="login-content">
            <div class="title">
                <i class="fas fa-user-alt"></i>&nbsp;Login
                <hr>
            </div>
            <?php 
                include("../function/function.php");
                if(isset($_POST['login'])){
                    $result = login_user($_POST['username'],md5($_POST['password']));
                    echo $result;
                }
            ?>
            <div class="body">
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="login-data">
                        <label for="username">Username : </label><br>
                        <input type="text" name="username" id="username" class="login-input" placeholder="Username" required>
                    </div>
                    <div class="login-data">
                        <label for="password">Password : </label><br>
                        <input type="password" name="password" id="password" class="login-input" placeholder="Password" required>        
                    </div>
                    <div class="login-data">
                        <input type="submit" value="Login" name="login" class="login-submit">
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
