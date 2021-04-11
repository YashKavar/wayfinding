<!DOCTYPE html>
  
<!-- <html xmlns="https://www.w3.org/1999/xhtml"> -->
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- External css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        *{
            box-sizing: border-box;
        }
        .column{
            float: left;
            width: 25%;
            padding: 5px;
        }
        .row:after{
            content: "";
            display: table;
            clear: both;
        }
        @media only screen and (max-width:620px){
            .column{
                width: 100%;
            }
            
        }
    </style>

    <title> Team </title>

</head>
<body>

        <?php 
            include "includes/header.php";
        ?>
    <!-- start header div -->
    <br><br><br>
    <center>
        <h2>Team</h2>
        <h5>Our team is try to rich you at your product in efficient time.</h5>
    </center>
    <br><br>
    <div class="row">
        <div class="column">
            <center>
                <img src="image/Deep1.jpeg" alt="Team Member Image" width="70%">
                <h2>Deep Gohil</h2>
                <h4>UI Devloper</h4>
                <p>DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
            </center>
        </div>
        <div class="column">
            <center>
                <img src="image/YashKavar.jpg" alt="Team Member Image" width="70%">
                <h2>Yash Kavar</h2>
                <h4>UI Devloper</h4>
                <p>DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
            </center>
        </div>
        <div class="column">
            <center>
                <img src="image/YashKavadiya%20(1).jpg" alt="Team Member Image" width="70%">
                <h2>Yash Kevadiya</h2>
                <h4>UI Devloper</h4>
                <p>DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
            </center>
        </div>
        <div class="column">
            <center>
                <img src="image/loc6.jpg" alt="Team Member Image" width="70%">
                <h2>Axita Patel</h2>
                <h4>UI Devloper</h4>
                <p>DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
            </center>
        </div>
    </div>

    
    

    <?php
            include 'includes/footer.php';
        ?>
</body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>