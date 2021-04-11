<!DOCTYPE html>
  
<!-- <html xmlns="https://www.w3.org/1999/xhtml"> -->
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <!-- External css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title> User_Home </title>
    
    <style>
       body {
            font-family: Arial, Helvetica, sans-serif;
           margin: 0;
           padding: 0;
        }
        
        .dropdown{
            margin: 0 auto;
        }
        
    nav{
        height: 60px;
        background-color: black;
        box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        position: fixed;
        width: 100%;
    }
        nav ul{
            padding: 0;
            margin: 0;
            float: right;
            margin-right: 30px; 
        }
        
        nav ul li{
            background-color: black;
            position: relative;
            list-style: none;
            display: inline-block;
        }
        nav ul li a{
            display: block;
            padding: 0 15px;
            color: white;
            text-decoration: none;
            line-height: 60px;
            font-size: 20px;
        }
        nav ul li a:hover{
            background: #243342;
            text-decoration: none;
        }
        nav ul ul{
            position: absolute;
            top: 60px;
            display: none;
        }
        nav ul li:hover > ul{
            display: block;
        }
        nav ul ul li{
            width: 150px;
            float: none;
            display: list-item;
            position: relative;
        }
    
    
    #main {
      transition: margin-left .5s;
/*      padding: 16px;*/
      background: whitesmoke;
        
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
            color: white;
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
    #profile{
          float: right;
    }
        
    #userlogo{
        height: 30px;
        width: 30px;
        float: right;
        background-color: whitesmoke;
        margin-top: 10px;
    }
    #searchbox{
        height: 30px;
        margin-left: 900px;
        border-radius: 8px;
        margin-top: 8px;
        border: 1px solid white;
        background-color: #e6e9ed;
    }
    
    #notification{
         margin-left: 300px;   
    }
        
        .search{
            align-items: center;    
        } 

        
</style>
    

</head>
<body style="font-family:'Trirong';">
    
    <div class="dropdown" id="header">
        <nav>
            <img class="logo" src="image/Final%20logo.png" style="height: 45px;">
            <ul>
                <li><a href="#">Cart <i class="fas fa-shopping-cart"></i></a></li>
                <li><a href="#">User <i class="fas fa-caret-down"></i></a>
                    <ul>
                        <li><a href="#"><i class="fas fa-user">&nbsp;Profile </i></a></li>
                        <li><a href="#"><i class="fas fa-bell">&nbsp;Notification</i></a></li>
                        <li><a href="#"><i class="fas fa-power-off">&nbsp;Logout</i></a></li>
                    </ul>
                    
                </li>
                <li><a href="#">More <i class="fas fa-caret-down"></i></a>
                    <ul>
                        <li><a href="#"><i class="fas fa-id-badge">&nbsp;Contact</i></a></li>
                        <li><a href="#"><i class="fas fa-address-card">&nbsp;About</i></a></li>
                        <li><a href="#"><i class="fas fa-bug"></i>&nbsp;Report</a></li>
                    </ul>
                    
                </li>
            </ul>
        </nav>
    </div>
    
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
    
    <br>

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
                <a href="PR1.php"><img src="image/Mall2.jpg" alt="Project Image" width="70%"></a>
                <h2>VR - Surat</h2>
                <p>Dumas Rd, Magdalla, Surat, Gujarat 395007</p>
            </center>
        </div>
        <div class="column">
            <center>
                <a href="PR1.php"><img src="image/Mall3.jpg" alt="Project Image" width="70%"></a>
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
    <?php
            include 'includes/footer.php';
        ?>

    
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
    

    
</body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>