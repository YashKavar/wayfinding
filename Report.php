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

    <title> Report Bug </title>
    <style>
        #username,#email,#message{
            width: 100%;
            float: inherit;
        }
        #submit{
            width: 25%;
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
            margin: 6px;
        }
        textarea{
            border-radius: 6px;
            border-color: darkgray;
            margin: 6px;
            border: solid darkgray;
        }
        
    </style>

</head>
<body style="font-family:'Trirong';">

        <?php 
            include "includes/header.php";
        ?>
    <!-- start header div -->
    <center>
    <div id="header"><br>
        <h3>Report Bug</h3>
    </div>
    <div class="contact">
        <form action="Reportsubmite.php"method="post">
            <table> 
                <tr>
                    <td>    
                        <input type="text" id="username" name="username" placeholder="Username" size="50" required>
                    </td>
                    <td>    
                        <input type="email" id="email" name="email" placeholder="Email.." size="50" required>
                    </td>
                    
                </tr>
                <tr>        
                    <td colspan="2">    
                        <textarea name="message" id="message" rows="4" cols="110" placeholder="Type Bug here ...."></textarea>
                    </td>
                </tr>
                <tr>    
                    <td colspan="2" align="center">
                        <button type="submit" name="submit"> Report Bug </button>
                    </td>
                </tr>
                
            </table>
<!--            <div> <a href="forgotpassword.php"> forgot password??? </a></div>-->
        </form> 
    </div>
    </center>
    <br><br><br><br><br>

    <?php
            include 'includes/footer.php';
        ?>
</body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>