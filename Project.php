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
            width: 45%;
            padding: 5px;
            margin: 12px;
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

    <title> Project </title>

</head>
<body>

        <?php 
            include "includes/header.php";
        ?>
    <!-- start header div -->
    <br>
    <center>
        <h2>Project</h2>
    </center>
    <br><br>
    <div class="row">
        <div class="column">
            <center>
                <a href="PR1.php"><img src="image/Website.PNG" alt="Project Image" width="70%"></a>
                <h2>ESST</h2>
                <p>This is our first project for efficient shopping in short time.</p>
            </center>
        </div>
        <div class="column">
            <center>
                <a href="PR1.php"><img src="image/Website.PNG" alt="Project Image" width="70%"></a>
                <h2>ESST</h2>
                <p>This is our second project for efficient shopping in short time.</p>
            </center>
        </div>
        <div class="column">
            <center>
                <a href="PR1.php"><img src="image/Website.PNG" alt="Project Image" width="70%"></a>
                <h2>ESST</h2>
                <p>This is our third project for efficient shopping in short time.</p>
            </center>
        </div>
        <div class="column">
            <center>
                <a href="PR1.php"><img src="image/Website.PNG" alt="Project Image" width="70%"></a>
                <h2>ESST</h2>
                <p>This is our fourth project for efficient shopping in short time.</p>
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