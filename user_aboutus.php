<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <title> About Us </title>
        <style>
            
            *{
                margin: 0;
                padding: 0;
    /*            font-family: "Open Sans",sans-serif;*/
                box-sizing: border-box;
            }
            body{
                min-height: 100vh;    
    /*            display: flex;*/
                align-items: center;
                justify-content: center;
                background-color: #f1f1f1;
                font-family:'Trirong';
            }
            .about-section{
                background: url(image/Mall2.jpg) no-repeat left;
                background-size: 65%;
                background-color: #fdfdfd;
                overflow: hidden;
                padding: 0px 0;    
            }
            .inner-container{
                width: 55%;
                float: right;
                background-color: #fdfdfd;
                padding: 63px;
            }
            .inner-container h1{
                margin-bottom: 30px;
                font-size: 30px;
                font-weight: 900;
            }
            .text{
                font-size: 13px;
                color: #545454;
                line-height: 30px;
                text-align: justify;
                margin-bottom: 30px;
            }
            @media screen and (max-width:1200px){
                .inner-container{
                    padding: 80px;
                }
            }
            @media screen and (max-width:1000px){
                .about-section{
                    background-size: 100%;
                    padding: 100px 40px;
                }
                .inner-container{
                    width: 100%;
                }
            }
             @media screen and (max-width:600px){
                .about-section{
                    padding: 0;
                }
                .inner-container{
                    padding: 60px;
                }
            }
    </style>

    </head>
    <body>
        <?php 
            include "includes/user_header.php";
        ?>
        
        <center>
            <h1 id="abouthead">About Us</h1></center>
            <div class="about-section">
                <div class="inner-container">
                    <p class="text">
                    <h3><strong>About efficent shopping in short time</strong></h3>
                        <ul>
                            <li> Since almost every people in the present world is prefer offline shopping from retails and malls because of online products issues or some other issues, We wants to provide exact ocation of product in customer's device so that they can easily find that product and that's exactly what our mission is about.</li>
                            <li> ESST(Efficient shopping in short time) is a leading, trusted, widely-acknowledged dedicated product locator platform, attracting over 1 million monthly visitors including normal customers, regular shopping customers and retails business owners. </li>
                            <li>ESST features latest way of shopping and in-depth coverage of current as well as future trends in malls amd retails and how they are shaping the shopping world. </li>
                        </ul> <br>
                        <h3><strong>Our Journey</strong></h3>
                        <ul>
                            <li>In 2020,  we started ESST as dedicated Efficient shopping in minimum time platform to locate people on perticular product which they want to buy in short time. </li>
                            <li>In following years, the website will turned into one of the most significant information security channels and working as a bridge between a large number of communities including leading security researchers, geeks, techies, business grads, CISOs, along with thousands of security professionals. </li>
                            <li>We are continuously working in the direction to better the platform and would love to hear your valuable thoughts and feedback to make it more resourceful. </li>
                            <li>ESST also organizes face-to-face meetups, conferences, and events that attract world's best IT professionals and hackers. </li>
                            <li>ESST is one such gathering of ignited minds in the field of Internet security, which is organized every year in Delhi–the heart of India. </li> 
                            <li>ESST is a unique event, where the best of minds in the hacking, IT industry, and the cyber community meet face-to-face to join their efforts to cooperate in addressing the most topical problems of the internet security space. </li>
                        </ul>
                    </p>
                </div>
            </div>
        <?php 
            include "includes/user_footer.php";
        ?>
    </body>
</html>