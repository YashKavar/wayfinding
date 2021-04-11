<!DOCTYPE html>
<html>
    <head>
        <title>Mall-table | Mall Admin</title>
    </head>
    <body>
        <?php include "header-profile.php"; ?>

        <center>
        <div>
            <h2>... Category Details ...</h2><br>

            <a href="add-category.php" align="right"><input type="button" value="Add"></a>
            <?php 

                if(isset($_SESSION['category'])){
                    if($_SESSION['category'] == "Category Successfully inserted." || $_SESSION['category'] == "Category is successfully updated." || $_SESSION['category'] = "Category is successfully Deleted."){
                        echo  "<p style='color:green;'>$_SESSION[category]</p>";
                    }
                    else{
                        echo  "<p style='color:red;'>$_SESSION[category]</p>";
                    }

                }


                $user_id = $_SESSION['user_id'];

                include "connection.php";

                $sql = "SELECT * FROM category WHERE user_id = '$user_id'";

                $result = mysqli_query($conn,$sql);

                if(mysqli_num_rows($result) > 0){

            ?>
            <table border="1px" cellspacing="0px" cellpadding="10px" name="category">
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php 
                    $category_id = 1;
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $category_id ?></td>
                    <td><?php echo $row['category_name'] ?></td>
                    <td><a href="update-category.php?c_id=<?php echo $row['category_id'];?>"><input type="button" value="Update"></a></td>
                    <td><a href="delete-category.php?c_id=<?php echo $row['category_id'];?>"><input type="button" value="Delete"></a></td>
                </tr>
                <?php $category_id = $category_id + 1; }?>
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