<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
        <h1>Your Profile</h1>
        <?php
            session_start();
            $user_id = $_SESSION['user_id'];
            include 'connection.php';

            $sql = "SELECT * FROM user WHERE user_id = '$user_id'";

            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="profile-photo"><br>
            <img src="upload/profile-photo/<?php echo $row['profile_photo']?>" alt="photo is not found." style="width: 200px; height:200px; border-radius:100px; border:1px solid black;"> <br>
            <span id="image-error" style="color: red;"></span>
            <input type="hidden" name="old-image" value="<?php echo $row['profile_photo']?>"><br><br><br>

            <lable for="firstname">First Name :</lable><br>
            <input type="text" name="fname" value="<?php echo $row['first_name']?>" required> <br><br>

            <lable for="lastname">Last Name :</lable><br>
            <input type="text" name="lname" value="<?php echo $row['last_name']?>" required> <br><br>

            <lable for="username">User Name :</lable><br>
            <input type="text" name="uname" value="<?php echo $row['user_name']?>" required> <br><br>

            <lable for="password">Password :</lable><br>
            <input type="password" name="password" value="<?php echo $row['password']?>" required> <br><br>

            <lable for="phone">Mobile Number :</lable><br>
            <input type="tel" name="mobile" maxlength="10" value="<?php echo $row['mobile_no']?>" required> <br><br>

            <lable for="email">E-mail id :</lable><br>
            <input type="email" name="email" value="<?php echo $row['email_id']?>" required> <br><br>

            <lable for="address">Address :</lable><br>
            <input type="address" name="address" value="<?php echo $row['address']?>" required> <br><br>

            <lable for="pincode">Pincode :</lable><br>
            <input type="tel" name="pincode" maxlength="6" value="<?php echo $row['pincode']?>" required> <br><br>

            <input type="submit" name="submit" value="Update">
            
        </form>
        <?php  } } ?>
    </body>
</html>
   
<?php include "profile-update.php";?>