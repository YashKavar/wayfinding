<!DOCTYPE html>
<html>
    <head>
        <title>Update Category</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <lable for="category-name">Category Name :</lable><br>
            <?php 

                $category_id = $_GET['c_id'];
                include "connection.php";

                $sql = "SELECT * FROM category WHERE category_id = '$category_id'";

                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        
            ?>
              
                <input type="hidden" name="category" value="<?php echo $category_id?>">
                <input type="text" name = "category_name" value="<?php echo $row['category_name']?>"><br><br>
                <input type="submit" name="submit" value="Update">

            <?php
                }
             } 
             else{
                 echo "category not found.";
             }
            ?>
        </form>
    </body>
</html>
<?php include "update-category-data.php";?>