
<!DOCTYPE html>
<html>
    <head>
        <title>Login | Mall's Owner</title>
    </head>
    <body>
        <h1>... Login ... </h1>
        <h3>Don't have an account?<a href="signup.php">Signup</a></h3>

        <?php 
            session_start(); 
            
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
            }            
            else{
                echo  "You are Logged Out.";
            }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <label for="username">User Name :</label><br>
            <input type="text" name="uname" value="<?php if(isset($_COOKIE['usernamecookie'])){ echo $_COOKIE['usernamecookie'];}?>" required><br><br>

            <lable for="email">E-mail id :</lable><br>
            <input type="email" name="email" value="<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie'];}?>" required> <br><br>

            <label for="password">Password :</label><br>
            <input type="password" name="password" value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie'];}?>" required><br>
            <span id="password-error" style="color: red;"></span><br><br>

            <input type="checkbox" name="rememberme"> Remember Me<br><br>

            <input type="submit" name="submit" value="Login">&nbsp;&nbsp;&nbsp;
            <input type="reset" value="Reset">
        </form>
        <a href="forgate.php"><h4>Forgate Password?</h4></a>
    </body>
</html>
<?php include "login-data.php";?>