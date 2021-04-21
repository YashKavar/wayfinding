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
    <title> User_Home </title>
    
    <style>
        
        
        body {font-family:Arial}

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
        
        
            .mySlides {display:none}

            #imageslider{
               width: 100%;    
            }

            #malllist{
              background: whitesmoke;
            }
            .column{
                    border: 1px solid black;
                    float: left;
                    width: 45%;
                    padding: 5px;
                    margin: 12px;
            }
            .column h2,p{
                    color: #999;
            }
            .row:after{
                    content: "";
                    display: table;
                    clear: both;
            }
        
            @media only screen and (max-width:1085px){
                .column{
                        width: 90%;
            }
      }   
    </style>
    

</head>
    <body style="font-family:'Trirong';">
        <?php 
            include "includes/user_header.php";
        ?>

        <div>
            <div id="imageslider">
                <div class="w3-content" style="max-width:1550px">
                      <img class="mySlides" src="image/Mall1.jpg" style="width:100%">
                      <img class="mySlides" src="image/Mall3.jpg" style="width:100%">
                      <img class="mySlides" src="image/Mall4.jpg" style="width:100%">
                </div>

                <div class="w3-center">
                  <div class="w3-section">
                    <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
                    <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
                  </div>
                  <button class="w3-button demo" onclick="currentDiv(1)">1</button> 
                  <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
                  <button class="w3-button demo" onclick="currentDiv(3)">3</button> 
                </div>
            </div>
            <div class="row" id="malllist">
                <div class="column">
                    <center>
                        <a href="PR1.php"><img src="image/Mall1.jpg" alt="Project Image" width="70%"></a>
                        <h2>Crystal Mall - Rajkot</h2>
                        <p>Crystal Mall, Kalavad Rd, Opp. Rani Tower, Rajkot, Gujarat 360001</p>
                    </center>
                </div>
                <div class="column">
                    <center>
                        <a href="PR1.php"><img src="image/Mall3.jpg" alt="Project Image" width="70%"></a>
                        <h2>VR - Surat</h2>
                        <p>Dumas Rd, Magdalla, Surat, Gujarat 395007</p>
                    </center>
                </div>
                <div class="column">
                    <center>
                        <a href="PR1.php"><img src="image/Mall4.jpg" alt="Project Image" width="70%"></a>
                        <h2>Alpha One - Ahmedabad</h2>
                        <p>Plot No-216, T.P Scheme-1, near Vastrapur Lake, Vastrapur, Ahmedabad, Gujarat 380054</p>
                    </center>
                </div>
                <div class="column">
                    <center>
                        <a href="PR1.php"><img src="image/Mall4.jpg" alt="Project Image" width="70%"></a>
                        <h2>Reliance - Jamnagar</h2>
                        <p>Gurudwara Rd, opposite Gujarat Ayurvedic University, Valkeshwari, Park Colony, Jamnagar, Gujarat 361005</p>
                    </center>
                </div>
            </div>
            
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
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
              showDivs(slideIndex += n);
            }

            function currentDiv(n) {
              showDivs(slideIndex = n);
            }

            function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("demo");
              if (n > x.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = x.length}
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-red", "");
              }
              x[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " w3-red";
            }
        </script>
        <?php 
            include "includes/user_footer.php";
        ?>
    </body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>
