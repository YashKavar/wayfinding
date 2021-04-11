
<!DOCTYPE html>
<html>
    <head>
        <title>Add Product</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
           
             
           
            <lable for="category-Name">Category Name :</lable><br>
            <select name="category-name" required>
                <option disabled>Select Category</option>
                <?php
                    include "connection.php";
                    session_start();
                    $user_id = $_SESSION['user_id'];
                    
                    $sql = "select category_id,category_name from category where user_id = '$user_id'";

                    $result = mysqli_query($conn,$sql) or die("Query unsuccessful.");
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                        }
                    }
                ?>
            </select> <br><br>

            <lable for="product-Name">Product Name :</lable><br>
            <input type="text" name="product-name" required> <br><br>

            <lable for="quantity">Quantity :</lable><br>
            <input type="number" name="quantity" required> <br><br>

            <lable for="price">Price :</lable></br>
            <input type="tel" name="price" required><br><br>

            <lable for="photo">Product photo :</lable><br>
            <input type="file" name="product-image" required><br>
            <span id="image-error" style="color: red;"></span><br>
        
            <lable for="longitude">Product's Longitude :</lable><br>
            <input type="text" name="longitude" required> <br><br>

            <lable for="latitude">Product's Latitude :</lable><br>
            <input type="text" name="latitude" required> <br><br>

            <lable for="discriptoin">Discription :</lable><br>
            <textarea rows="10" cols="20" name="discription"></textarea><br><br>


            <input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
            <input type="reset" value="Reset">
        </form>
    </body>
</html>
<?php include "add-product-data.php";?>