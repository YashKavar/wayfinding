<!DOCTYPE html>
<html>
    <head>
        <title>Update-product</title>
    </head>
    <body>
     <?php 
        include "connection.php";
        session_start();
        $user_id = $_SESSION['user_id'];
        $product = $_GET['p_id'];

        $sql = "SELECT product.product_id,product.category_name as category,product.product_name,product.quantity,product.product_price,product.product_image,product.product_longitude,product.product_latitude,product.discription,category.category_id,category.category_name
                FROM product JOIN category WHERE product.category_name = category.category_id AND product.product_id = '$product'";
        
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
     ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
        <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>
            <input type="hidden" name="product-id" value="<?php echo $row['product_id']?>">
            <input type="hidden" name="category-id" value="<?php echo $row['category_id'] ?>">
            
            <lable for="category-Name">Category Name :</lable><br>
            <?php
                $sql1 = "SELECT * FROM category WHERE user_id = '$user_id'";
                
                $result1 = mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result1) > 0){
            ?>
            <select name="category-name" required>
                <?php 
                    while($row1 = mysqli_fetch_assoc($result1)){ 
                        if($row['category'] == $row1['category_id']){
                            $select = "selected";
                        }
                        else{
                            $select = "";
                        }
                ?>
                    <option <?php echo $select ?> value="<?php echo $row1['category_id'] ?>"><?php echo $row1['category_name'] ?></option>
                <?php }?>
                </select> <br><br>
            <?php  } ?>


            <lable for="product-Name">Product Name :</lable><br>
            <input type="text" name="product-name" value="<?php echo $row['product_name'] ?>" required> <br><br>

            <lable for="quantity">Quantity :</lable><br>
            <input type="number" name="quantity" value="<?php echo $row['quantity'] ?>" required> <br><br>

            <lable for="price">Price :</lable></br>
            <input type="tel" name="price" value="<?php echo $row['product_price'] ?>" required><br><br>

            <lable for="photo">Product photo :</lable><br>
            <input type="file" name="product-image" ><br>
            <img src="upload/product-photo/<?php echo $row['product_image'] ?>" alt="image not available." style="width: 150px; height:150px;"><br><br>
            <span id="image-error" style="color: red;"></span>
            <input type="hidden" name="old-image" value="<?php echo $row['product_image'] ?>"><br>

            <lable for="longitude">Product's Longitude :</lable><br>
            <input type="text" name="longitude" value="<?php echo $row['product_longitude'] ?>" required> <br><br>

            <lable for="latitude">Product's Latitude :</lable><br>
            <input type="text" name="latitude" value="<?php echo $row['product_latitude'] ?>" required> <br><br>

            <lable for="discriptoin">Discription :</lable><br>
            <textarea rows="10" cols="20" name="discription"><?php echo $row['discription'] ?></textarea><br><br>

            <input type="submit" name="submit" value="Update"> 
            <?php }?>
        </form>
        <?php } ?>
    </body>
</html>
<?php include "update-product-data.php"?>