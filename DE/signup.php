
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up | Mall's Owner</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/signup.css">
    </head>
    <body>
        <?php include "header.php";?>
        <div class="container-fluid signup">
            <!-- <div class="row row-cols-1"> -->
                <div class="row login-name">
                    <h3>Already have an account?<a href="login.php">Login</a></h3><br>
                </div>
                <div class="row signup-name">
                    <h1> SignUp </h1>
                </div>
                <div class="row signup-form">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

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

                        <input type="submit" name="submit" value="SignUp" class="button"> &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="Reset" class="button">
                    </form>
                </div>
            <!-- </div> -->
        </div>
    </body>
</html>
<?php include "signup-data.php"?>