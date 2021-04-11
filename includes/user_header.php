<!DOCTYPE html>
  
<!-- <html xmlns="https://www.w3.org/1999/xhtml"> -->
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- External css -->
    <link rel="stylesheet" href="css/style.css">
    <title> User_Header </title>
    
        <style>


            body {margin:0;font-family:Arial}

            .topnav {
              overflow: hidden;
              background-color: #333;
            }

            .topnav a {
              float: left;
              display: block;
              color: #f2f2f2;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
              font-size: 17px;
            }

            .active {
              background: #333;
              color: white;
            }

            .topnav .icon {
              display: none;
            }

            .dropdown {
              float: left;
              overflow: hidden;
            }

            .dropdown .dropbtn {
              font-size: 17px;    
              border: none;
              outline: none;
              color: white;
              padding: 14px 16px;
              background-color: inherit;
              font-family: inherit;
              margin: 0;
            }

            .dropdown-content {
              display: none;
              position: absolute;
              background-color: #f9f9f9;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
            }

            .dropdown-content a {
              float: none;
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
              text-align: left;
            }

            .topnav a:hover, .dropdown:hover .dropbtn {
              background-color: #555;
              color: white;
            }

            .dropdown-content a:hover {
              background-color: #ddd;
              color: black;
            }

            .dropdown:hover .dropdown-content {
              display: block;
            }

            @media screen and (max-width: 600px) {
              .topnav a:not(:first-child), .dropdown .dropbtn {
                display: none;
              }
              .topnav a.icon {
                float: right;
                display: block;
              }
            }

            @media screen and (max-width: 600px) {
              .topnav.responsive {position: relative;}
              .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
              }
              .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
              }
              .topnav.responsive .dropdown {float: none;}
              .topnav.responsive .dropdown-content {position: relative;}
              .topnav.responsive .dropdown .dropbtn {
                display: block;
                width: 100%;
                text-align: left;
              }
            }

        </style>
    

    </head>
    <body style="font-family:'Trirong';">
        <div class="topnav" id="myTopnav">
          <a href="user_home.php"><img src="image/Final%20logo.png" style="height:20px;"></a>
          <a href="user_home.php" class="active"><i class="fas fa-house-user"></i>&nbsp;&nbsp;Home</a>
          <a href="#contact"><i class="fas fa-route"></i>&nbsp;&nbsp;Near Malls</a>
          <div class="dropdown">
              <button class="dropbtn"><i class="fas fa-user"></i>&nbsp;&nbsp;Profile 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;My Account</a>
              <a href="user_contactus.php"><i class="fas fa-id-badge"></i>&nbsp;&nbsp;Contact Us</a>
              <a href="#"><i class="fas fa-power-off"></i>&nbsp;&nbsp;Logout</a>
            </div>
          </div>
          <a href="#about"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Cart</a>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
        <script>
            function myFunction() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                x.className += " responsive";
              } else {
                x.className = "topnav";
              }
            }
        </script>
        
    </body>
</html>