<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    
    <title>Product</title>
    
    <style>
       * {
          box-sizing: border-box;
        }

        #row .column {
          float: left;
          width: 33.33%;
          padding: 5px;
        }

        /* Clearfix (clear floats) */
        #row::after {
          content: "";
          clear: both;
          display: table;
            
        }
        #button {
          background-color: #4CAF50;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 14px;
          margin: 4px 2px;
          cursor: pointer;
/*            margin-left: 50px;*/
        }
    </style>

</head>
    <body style="font-family:'Trirong';">
        <?php 
            include "includes/user_header.php";
        ?>
         <h2>Images Side by Side</h2>
        <p>How to create side-by-side images with the CSS float property:</p>

        <div id="row">
          <div class="column">
            <img src="image/mallproduct.jpg" alt="Snow" style="width:70%"><br>
             <a href="#" id="button"><i class="fas fa-directions"></i>DIRECTION</a>
            <a href="#" id="button"><i class="fas fa-shopping-cart"></i>ADD TO CART</a>
          </div>
          <div class="column">
              <p>sudfhsdjcdsbcbdsjcbjsdj fjbsdbfj shbcfbhjcfbsbcfsbhfbhsbfcbjhbfcjsb</p>
              <p>bsufhfiuevruieuieucukewbfhehfhehcfbeehbfhebhfb</p>
          </div>
        </div>
        
    </body>
    <?php 
            include "includes/user_footer.php";
     ?>

</html>