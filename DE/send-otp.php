<?php
    if(isset($_POST['submit'])){

        include "connection.php";

        $user_name = mysqli_real_escape_string($conn,$_POST['uname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);

        $sql = "SELECT status FROM user 
                WHERE user_name = '$user_name' AND email_id = '$email'";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)){
            while($row = mysqli_fetch_assoc($result)){
                if($row['status'] == 'active'){

                    session_start();
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $sql1 = "UPDATE user SET otp = '$otp'
                             WHERE user_name = '$user_name' AND email_id = '$email'";

                    $result1 = mysqli_query($conn,$sql1);


                    $subject = "For Forgate Password in ESST website account";
                    $body = "Hello! $user_name Your  OTP is to forgate your password.
                                OTP : $otp";
                    $sender_email = "From: yashkevadiya9@gmail.com";

                    if(mail($email,$subject,$body,$sender_email)){
                        $_SESSION['message'] = "OTP successfully send on $email";
                        header('Location: http://localhost/DE/otp.php');
                    }
                    else{
                        echo "E-mail sending failed...";
                    }
                }
                else{
                    session_start();
                    $_SESSION['msg'] = " $user_name Your account is not active. Please, active your account.";
                    header('Location: http://localhost/DE/login.php');
                }
            }

        }
        else{
            echo "E-mail id or user name Wrong.";
        }
    }
?>  