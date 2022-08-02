<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_reg.php"); ?>


<div class="login">
    <div class="login-box">
        <div class="login-content">
            <div class="title">
                <i class="fas fa-user-plus"></i>&nbsp;Register
                <hr>
            </div>
            <?php 
                include("../function/function.php");
                if(isset($_POST['register'])){
                    $result = user_reg($_POST['username'],$_POST['email'],$_POST['gender'], $_POST['password'], $_POST['cpassword']);
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
                        <label for="Email">Email : </label><br>
                        <input type="email" name="email" id="email" class="login-input" placeholder="Email" required>
                    </div>
                    <div class="login-data">
                        <label for="gender">Select Gender : </label>
                        <span><input type="radio" name="gender" id="gender" value="male">&nbsp;Male&nbsp;&nbsp;<input type="radio" name="gender" id="gender" value="female">&nbsp;Female</span>
                    </div>
                    <div class="login-data">
                        <label for="password">Password : </label><br>
                        <input type="password" name="password" id="password" class="login-input" placeholder="Password" required>        
                    </div>
                    <div class="login-data">
                        <label for="cpassword">Confirm Password : </label><br>
                        <input type="password" name="cpassword" id="cpassword" class="login-input" placeholder="Confirm Password" required>        
                    </div>
                    <div class="login-data">
                        <span><input type="submit" value="Register" name="register" class="reg-submit">
                        <input type="reset" value="Clear" class="reg-clear"></span>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
