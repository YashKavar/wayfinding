<!DOCTYPE html>
  
<!-- <html xmlns="https://www.w3.org/1999/xhtml"> -->
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">

    
    <!-- External css -->
    <link rel="stylesheet" href="css/style.css">

    <title> Sign Up </title>
    <style>
        #username{
            width: 100%;
            float: inherit;
        }
        #email{
            width: 100%;
            float: inherit;
        }
        #password{
            width: 100%;
            float: inherit;
        }
        #firstname{
            width: 100%;
            float: inherit;
        }
        #lastname{
            width: 100%;
            float: inherit;
        }
        #repassword{
            width: 100%;
            float: inherit;
        }
        #mobile{
            width: 100%;
            float: inherit;
        }
        #photo{
            width: 100%;
            float: inherit;
        }
        #address{
            width: 100%;
            float: inherit;
        }
        #pincode{
            width: 100%;
            float: inherit;
        }
        #submit{
            width: 50%;
            margin-top: 10px;
            float: inherit;
        }
        @media only screen and (max-width:620px){
            #username{
                width: 100%;
            }
            
        }
        input,button{
            border-radius: 6px;
            border-color: aliceblue;
        }
        
    </style>

</head>
<body style="font-family:'Trirong';">

        <?php 
            include "includes/header.php";
        ?>
    <!-- start header div -->
    <center><br>
    <div id="header">
        <h3>Sign Up</h3>
    </div>
    <div class="login">
        <form action="submit.php" method="post" enctype="multipart/form-data">
            <lable for="firstname"><strong>First Name :</strong></lable><br>
            <input type="text" name="fname" required> <br><br>

            <lable for="lastname"><strong>Last Name :</strong></lable><br>
            <input type="text" name="lname" required> <br><br>

            <lable for="username"><strong>User Name :</strong></lable><br>
            <input type="text" name="uname" required> <br><br>
            
            <lable for="email"><strong>E-mail id :</strong></lable><br>
            <input type="email" name="email" required> <br><br>

            <lable for="password"><strong>Password :</strong></lable><br>
            <input type="password" name="password" required> <br><br>

            <lable for="password"><strong>Re-enter Password :</strong></lable><br>
            <input type="password" name="repassword" required> <br><br>

            <lable for="phone"><strong>Mobile Number :</strong></lable><br>
            <input type="tel" name="mobile" maxlength="10" required> <br><br>

            <lable for="image"><strong>Profile Photo :</strong></lable><br>
            <input type="file" name="photo" value="p1.png" required><br><br>

            <lable for="address"><strong>Address :</strong></lable><br>
            <input type="address" name="address" required> <br><br>

            <lable for="pincode"><strong>Pincode :</strong></lable><br>
            <input type="tel" name="pincode" maxlength="6" required> <br><br>

            <input type="submit" value="Submit">&nbsp;&nbsp;&nbsp;
            <input type="reset" value="Reset">
            <br><br><br>
        </form> 
    </div>
    </center>
    <br><br>

    <?php
            include 'includes/footer.php';
        ?>
</body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>