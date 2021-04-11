<!DOCTYPE html>
  
<!-- <html xmlns="https://www.w3.org/1999/xhtml"> -->
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    
    <!-- External css -->
    <link rel="stylesheet" href="css/style.css">

    <title> Login </title>
    <style>
        #email{
            width: 100%;
            float: inherit;
        }
        #password{
            width: 100%;
            float: inherit;
        }
        #submit{
            width: 50%;
            margin-top: 10px;
            float: inherit;
        }
        @media only screen and (max-width:620px){
            #email{
                width: 100%;
            }
            
        }
        input,button{
            border-radius: 6px;
            border-color: aliceblue;
            margin: 6px;
        }
        
    </style>

</head>
<body style="font-family:'Trirong';">
        
    <?php 
            session_start();
            if($_SESSION['msg']){
                echo $_SESSION['msg'];
            }            
            else{
                echo $_SESSION['msg'] = "You are Logged Out.";
            }
    ?>

        <?php 
            include "includes/header.php";
        ?>
    <!-- start header div -->
    <center>
    <div id="header">
        <h3>login</h3>
    </div>
    <div class="login">
        <form action="validate.php" method="post">
            <label for="username"><strong>User Name :</strong></label><br>
            <input type="text" name="uname" value="<?php if(isset($_COOKIE['usernamecookie'])){ echo $_COOKIE['usernamecookie'];}?>" required><br><br>

            <lable for="email"><strong>E-mail id :</strong></lable><br>
            <input type="email" name="email" value="<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie'];}?>" required> <br><br>

            <label for="password"><strong>Password :</strong></label><br>
            <input type="password" name="password" value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie'];}?>" required><br><br>

            <input type="checkbox" name="rememberme"> Remember Me<br><br>

            <input type="submit" name="submit" value="Login">&nbsp;&nbsp;&nbsp;
            <input type="reset" value="Reset">     
            </table>
            <div> <a href="forgate.php"> forgot password??? </a></div>
        </form> 
    </div>
    </center>
    <br><br><br><br>

    <?php
            include 'includes/footer.php';
        ?>
</body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>
