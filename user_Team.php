<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <title> Contact Us </title>
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
    </head>
    <body>
        <?php 
            include "includes/user_header.php";
        ?>
        
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
            include "includes/user_footer.php";
        ?>
    </body>
</html>