<?php include "send-otp.php"?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forgate password</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <label for="username">User Name :</label><br>
            <input type="text" name="uname" required><br><br>

            <lable for="email">E-mail id :</lable><br>
            <input type="email" name="email" required> <br><br>
            
            <input type="submit" name="submit" value="Recive OTP">&nbsp;&nbsp;&nbsp;
            <input type="reset" value="Reset">
        </form>
    </body>
</html>