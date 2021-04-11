<!DOCTYPE html>
<html>
    <head>
        <title>Add Category</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <lable for="category-name">Category Name :</lable><br>
            <input type="text" value="" name="category"><br><br>

            <input type="submit" name="submit" value="Add">&nbsp;&nbsp;&nbsp;
            <input type="reset" value="Reset">
        </form>
    </body>
</html>
<?php include "add-category-data.php";?>