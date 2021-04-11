<?php include "forgate-data.php"?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forgate Password</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <lable for="new-password">Enter Password :</lable> <br>
            <input type="password" name="password" required> <br><br> 

            <lable for="re-password">Re Enter Password :</lable> <br>
            <input type="password" name="re-password" required> <br><br> 

            <input type="submit" name= "submit" value="Update">&nbsp;&nbsp;&nbsp;
            <input type="reset" value="Reset">
        </form>
    </body>
</html>
