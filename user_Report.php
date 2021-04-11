<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <title> Contact Us </title>
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
    <body>
        <?php 
            include "includes/user_header.php";
        ?>
        
        <center>
            <div id="header"><br>
                <h3>Report Bug</h3>
            </div>
            <div class="contact">
                <form action="user_Reportsubmite.php"method="post">
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
                </form> 
            </div>
        </center>
        <?php 
            include "includes/user_footer.php";
        ?>
    </body>
</html>