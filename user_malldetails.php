<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title> User_Home </title>
    
    <style>
        * {
          box-sizing: border-box;
        }

        body {
          font-family: Arial;
          font-size: 17px;
            background: #dcd5d5;
        }

        .container {
          position: relative;
          max-width: 70%;
          margin: 0 auto;
        }

        .container img {vertical-align: middle;}

        .container .content {
          position: absolute;
          bottom: 0;
          background: rgb(0, 0, 0); /* Fallback color */
          background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
          color: #f1f1f1;
          width: 100%;
          padding: 20px;
        }
        
        hr{
            border: 3px solid black;
        }
        #button button{
            margin: 22px;
            margin-top: 10px;
            border: 2px solid black;
            background-color: #dcd5d5;
/*            color: white;   */
        }
        #button button:hover{
            color: black;
            background-color: white;
            cursor: pointer;
        }
        
        #details p{
            margin-top: 10px;
            background-color: #dcd5d5;
            margin: auto;
            width: 72%;
            padding: 7px;
        }
        
        * {
          box-sizing: border-box;
        }

        body {
          margin: 0;
        }

        .navbar {
          overflow: hidden;
          background-color: #ebe1e1;
          font-family: Arial, Helvetica, sans-serif;
/*            padding-left: 50px;*/
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: black;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
        
        .productactive{
          background-color: #ada9a9;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;  
          border: none;
          outline: none;
          color: black;
          padding: 14px 16px;
          background-color: inherit;
          font: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: #ada9a9;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          width: 100%;
          left: 0;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content .header {
          background: red;
          padding: 16px;
          color: white;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }

        /* Create three equal columns that floats next to each other */
        .column {
          float: left;
          width: 33.33%;
          padding: 10px;
          background-color: #ccc;
          height: 250px;
        }

        .column a {
          float: none;
          color: black;
          padding: 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .column a:hover {
          background-color: #ddd;
        }

        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }

        /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .column {
            width: 100%;
            height: auto;
          }
        }
        div.gallery {
          border: 1px solid #ccc;
        }

        div.gallery:hover {
          border: 1px solid #777;
/*            width: 370px;*/
        }

        div.gallery img {
          width: 100%;
          height: auto;
        }

        div.desc {
          padding: 15px;
          text-align: center;
        }

        * {
          box-sizing: border-box;
        }

        .responsive {
          padding: 0 6px;
          float: left;
          width: 24.99999%;
            padding-top: 20px;
        }

        @media only screen and (max-width: 700px) {
          .responsive {
            width: 49.99999%;
            margin: 6px 0;
          }
        }

        @media only screen and (max-width: 500px) {
          .responsive {
            width: 100%;
          }
        }

        .clearfix:after {
          content: "";
          display: table;
          clear: both;
        }
        hr{
            border: 1px solid black;
        }
    </style>
    

</head>
    <body style="font-family:'Trirong';">
        <?php 
            include "includes/user_header.php";
        ?>
            <center>
                <h2>Mall Details</h2>
            </center>
            <br>
            <div class="container">
                <a href="#"><img src="image/Mall1.jpg" alt="Mall" style="width:100%; height:500px;"></a>
              <div class="content">
                <h1>Crystal Mall</h1>
                <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo</p>
              </div>
            </div>
            <div id="button">
                <center>
                <a href="#"><button style="border-radius: 27px; height:50px; width:50px;"><i class="fas fa-directions"></i></button></a>
                <a href="#"><button style="border-radius: 27px; height:50px; width:50px;"><i class="fas fa-bookmark"></i></button></a>
                <a href="#"><button style="border-radius: 27px; height:50px; width:50px;"><i class="fas fa-share-alt"></i></button></a>
                </center>
            </div>
            <div id="details">
                <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;Crystal Mall, Kalavad Rd, Opp. Rani Tower, Rajkot, Gujarat 360001</p>             
                <p><i class="far fa-clock"></i>&nbsp;&nbsp;&nbsp;Timing :- 8:00am-7:00pm</p>                
                <p><i class="fas fa-male"></i>&nbsp;&nbsp;&nbsp;Yash Kevadiya - <a href="tel:180-222-1111">180-222-1111</a></p> 
            </div>
        
        <hr>
            <div class="navbar" id="navbar">
              <a href="#home" class="btn productactive">Grocery</a>
              <a href="#news" class="btn">Beauty</a>
              <a href="#home" class="btn">Stationery</a>
              <a href="#home" class="btn">Electronics</a>
              <a href="#home" class="btn">Fashion</a>
              <a href="#home" class="btn">Man</a>
              <a href="#home" class="btn">Woman</a>
            
              <div class="dropdown">
                <button class="btn dropbtn">Electronics 
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">   
                  <div class="row">
                    <div class="column">
                      <a href="#">Phones</a>
                      <a href="#">Tablets</a>
                      <a href="#">Laptop</a>
                    </div>
                    <div class="column">
                      <a href="#">Whasing Machine</a>
                      <a href="#">Air Conditioner</a>
                      <a href="#">Refrigerator</a>
                    </div>
                    <div class="column">
                      <a href="#">T.V</a>
                      <a href="#">Desktop</a>
                      <a href="#">Audio</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="dropdown">
                <button class="btn dropbtn">Fashion 
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">   
                  <div class="row">
                    <div class="column">
                      <a href="#">Men's</a>
                      <a href="#">Women's</a>
                      <a href="#">Kids</a>
                    </div>
                    <div class="column">
                      <a href="#">Topwear</a>
                      <a href="#">Bottomwear</a>
                      <a href="#">Footwear</a>
                    </div>
                    <div class="column">
                      <a href="#">Winterwear</a>
                      <a href="#">Summerwear</a>
                      <a href="#">Monsoonwear</a>
                    </div>
                  </div>
                </div>
              </div> 
            </div>

            <div>
               <center>
                <h2>Product List</h2>
            </center>

            <div class="responsive">
              <div class="gallery">
                <a href="user_productdetails.php">
                  <img src="image/Mall1.jpg" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">
                    <h2>Crystal Mall - Rajkot</h2>
                </div>
              </div>
            </div>


            <div class="responsive">
              <div class="gallery">
                <a href="img_forest.jpg">
                  <img src="image/Mall1.jpg" alt="Forest" width="600" height="400">
                </a>
                <div class="desc">
                    <h2>VR - Surat</h2>
                </div>
              </div>
            </div>

            <div class="responsive">
              <div class="gallery">
                <a href="img_lights.jpg">
                  <img src="image/Mall3.jpg" alt="Northern Lights" width="600" height="400">
                </a>
                <div class="desc">
                    <h2>Alpha One - Ahmedabad</h2>
                </div>
              </div>
            </div>

            <div class="responsive">
              <div class="gallery">
                <a href="img_mountains.jpg">
                  <img src="image/Mall4.jpg" alt="Mountains" width="600" height="400">
                </a>
                <div class="desc">
                    <h2>Reliance - Jamnagar</h2>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
        <div class="responsive">
              <div class="gallery">
                <a href="img_5terre.jpg">
                  <img src="image/Mall1.jpg" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">
                    <h2>Crystal Mall - Rajkot</h2>
                </div>
              </div>
            </div>
            <div class="responsive">
              <div class="gallery">
                <a href="img_forest.jpg">
                  <img src="image/Mall1.jpg" alt="Forest" width="600" height="400">
                </a>
                <div class="desc">
                    <h2>VR - Surat</h2>
                </div>
              </div>
            </div>

            <div class="responsive">
              <div class="gallery">
                <a href="img_lights.jpg">
                  <img src="image/Mall3.jpg" alt="Northern Lights" width="600" height="400">
                </a>
                <div class="desc">
                    <h2>Alpha One - Ahmedabad</h2>
                </div>
              </div>
            </div>

            <div class="responsive">
              <div class="gallery">
                <a href="img_mountains.jpg">
                  <img src="image/Mall4.jpg" alt="Mountains" width="600" height="400">
                </a>
                <div class="desc">
                    <h2>Reliance - Jamnagar</h2>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            </div>
            <script>
            // Add active class to the current button (highlight it)
            var header = document.getElementById("navbar");
            var btns = header.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("productactive");
              current[0].className = current[0].className.replace(" productactive", "");
              this.className += " productactive";
              });
            }
            </script>
        <?php 
            include "includes/user_footer.php";
        ?>
    </body>

</html>