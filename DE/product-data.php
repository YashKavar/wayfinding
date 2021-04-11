<!DOCTYPE html>
<html>
    <head>
        <title>Product | Mall Admin</title>
    </head>
    <body>
        
        <?php include "header-profile.php";?>

        <center>
        <div>
            <a href="add-product.php"><input type="button" value="Add"></a><br>
            
            <?php 
                if(isset($_SESSION['product'])){
                    if($_SESSION['product'] == "Product is successfully added." || $_SESSION['product'] == "Product is successfully updated." || $_SESSION['product'] = "Product is successfully Deleted."){
                        echo  "<p style='color:green;'>$_SESSION[product]</p>";
                    }
                    else{
                        echo  "<p style='color:red;'>$_SESSION[product]</p>";
                    }
                    
                }
               $user_id = $_SESSION['user_id'];

                $sql = "SELECT product.product_id,product.product_name,product.quantity,product.product_price,product.product_image,product.product_longitude,product.product_latitude,product.discription,category.category_name
                 FROM product JOIN category WHERE product.category_name = category.category_id AND product.user_id = '$user_id'";
               
               $result = mysqli_query($conn,$sql);

               if(mysqli_num_rows($result) > 0){
            ?>
            <table border="1px" cellspacing="0px" cellpadding="10px" name="product-mall">
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Product Price</th>
                    <th>Product Photo</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Discription</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php
                     $product_id = 1;
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $product_id?></td>
                    <td><?php echo $row['category_name']?></td>
                    <td><?php echo $row['product_name']?></td>
                    <td><?php echo $row['quantity']?></td>
                    <td><?php echo $row['product_price']?></td>
                    <td><img src="upload/product-photo/<?php echo $row['product_image']?>" alt="image is not available." style="width: 150px; height:150px;"></td>
                    <td><?php echo $row['product_longitude']?></td>
                    <td><?php echo $row['product_latitude']?></td>
                    <td><?php echo $row['discription']?></td>
                    <td><a href="update-product.php?p_id=<?php echo $row['product_id']?>"><input type="button"  value="Update"></a></td>
                    <td><a href="delete-product.php?p_id=<?php echo $row['product_id']?>"><input type="button"  name = "delete" value="Delete"></a></td>
                </tr>
                <?php
                    $product_id = $product_id + 1;
                    }
                ?>
            </table>
            <?php } ?><br><br>
            <input type="button" value="Prev">
            <input type="button" value="1">
            <input type="button" value="2">
            <input type="button" value="Next">
        </div>
        </center>
    </body>
</html>

<!-- //<?php 

        // include "delete-product.php";
// ?> -->