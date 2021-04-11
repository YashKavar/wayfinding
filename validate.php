<?php
    include 'connection.php';
    
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
     

    $sql = "SELECT user_id, user_name,password FROM signup WHERE email_id = '$email' AND status = 'active'";

    $result = mysqli_query($conn,$sql) or die("query failed.");

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){

            $db_pass = $row['password'];
            

            if(password_verify($password,$db_pass)){
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_name'] = $row['user_name']; 

                if(isset($_POST['rememberme'])){
                    setcookie('usernamecookie',$username,time()+86400);
                    setcookie('emailcookie',$email,time()+86400);
                    setcookie('passwordcookie',$password,time()+86400);

                    header("Location: http://localhost/DE/wayfinding-master/user_home.php");
                }
                else{
                    header("Location: http://localhost/DE/wayfinding-master/user_home.php");
                }
                
                
            }
            else{
                echo "password is incorrect.";
            }
        }
    }
    else{
        header("Location: http://localhost/DE/wayfinding-master/login.php");
    }
?>