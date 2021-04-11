
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up | Mall's Owner</title>
    </head>
    <body>
        <h1>... Signup ... </h1>
        <h3>Already have an account?<a href="login.php">Login</a></h3><br>
        <h3>... Mall's Owner Details ...</h3><br>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
            
            <lable for="firstname">First Name :</lable><br>
            <input type="text" name="fname" required> <br><br>

            <lable for="lastname">Last Name :</lable><br>
            <input type="text" name="lname" required> <br><br>

            <lable for="username">User Name :</lable><br>
            <input type="text" name="uname" required> <br>
            <span id="username-error" style="color: red;"></span><br><br>

            <lable for="password">Password :</lable><br>
            <input type="password" name="password" required> <br><br>

            <lable for="password">Confirm Password :</lable><br>
            <input type="password" name="repassword" required> <br> 
            <span id="password-error" style="color: red;"></span><br><br>

            <lable for="phone">Mobile Number :</lable><br>
            <input type="tel" name="mobile" maxlength="10" required> <br><br>

            <lable for="email">E-mail id :</lable><br>
            <input type="email" name="email" required> <br>
            <span id="email-error" style="color: red;"></span><br><br>

            <lable for="image">Profile Photo :</lable><br>
            <input type="file" name="photo" value="p1.png" required> <br>
            <span id="image-error" style="color: red;"></span><br><br>

            <lable for="address">Address :</lable><br>
            <input type="address" name="address" required> <br><br>

            <lable for="pincode">Pincode :</lable><br>
            <input type="tel" name="pincode" maxlength="6" required> <br><br>

            <input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
            <input type="reset" value="Reset">
            
        </form>
    </body>
</html>
<?php include "signup-data.php"?>