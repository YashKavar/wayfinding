
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up | Mall's Owner</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">

            <h3>... Mall Details ...</h3><br>

            <lable for="mall-name">Mall Name :</lable><br>
            <input type="text" name="mallname" required> <br><br>

            <lable for="mall-owner">Mall Owner Name :</lable><br>
            <input type="text" name="mallowner" required> <br><br>

            <lable for="mall-photo">Mall Photo :</lable><br>
            <input type="file" name="mall-photo"> <br>
            <span id="image-error" style="color: red;"></span><br><br>

            <lable for="mall-opening-time">Mall Opening time :</lable><br>
            <input type="time" name="openingtime" required> <br><br>

            <lable for="mall-closeing-time">Mall Closeing time :</lable><br>
            <input type="time" name="closeingtime" required> <br><br>

            <lable for="longitude">Mall's Longitude :</lable><br>
            <input type="text" name="longitude" required> <br><br>

            <lable for="latitude">Mall's Latitude :</lable><br>
            <input type="text" name="latitude" required> <br><br>

            <lable for="mall-address">Mall Address :</lable><br>
            <input type="text" name="malladdress" required> <br><br>

            <lable for="contect-no">Contect No :</lable><br>
            <input type="tel" maxlength="10" name="contectno" required> <br><br>

            <lable for="discription">Discription :</lable><br>
            <input type="text" name="discription" required> <br><br>

            <lable for="type">Type :</lable><br>
            <?php
                include "connection.php";

                $sql1 = "SELECT * FROM type";
                $result1 = mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result1) > 0){
            ?>
            <select name="type" required>
                <option selected disabled>Select Type</option>
                <?php 
                    while($row1 = mysqli_fetch_assoc($result1)){
                ?>
                <option value="<?php echo $row1['type_id']?>"><?php echo $row1['type_name']?></option>
                <?php } ?>
            </select> <br><br>
            <?php } ?>
            <input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
            <input type="reset" value="Reset">
        </form>
    </body>
</html>
<?php include "mall-data.php"; ?>

