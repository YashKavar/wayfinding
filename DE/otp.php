<?php
     if(isset($_POST['submit'])){

        $otp_page = $_POST['otp-page'];
        session_start();
        include "connection.php";

        $sql = "SELECT email_id,otp FROM user WHERE otp = '$otp_page'";

        $result = mysqli_query($conn,$sql) or die("query is failed.");

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "OTP is matched.";
               $_SESSION['emails'] =  $row['email_id'];
                header("Location: http://localhost/DE/forgate-password.php");
            }
        }  
        else{
            echo "OTP is not matched.";
            header("Location: http://localhost/DE/otp.php");
        } 
     }
?>

    


<!DOCTYPE html>
<html>
    <head>
        <title>Enter OTP</title>
    </head>
    <body>
            <?php 
                session_start(); 
                echo $_SESSION['message'];
           ?><br><br>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <lable for="OTP">OTP :</lable><br>
            <input type="tel" maxlength='6' name="otp-page"><br><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>