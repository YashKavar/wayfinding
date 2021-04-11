<!DOCTYPE html>
<html>
    <head>
        <title>Update-Mall</title>
    </head>
    <body>
    <?php
        include "connection.php";
        $mall_id = $_GET['m_id'];
        $sql = "SELECT * FROM mall_details WHERE mall_id = '$mall_id'";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
            
            <input type="hidden" name = "mall" value="<?php echo $mall_id ?>">
            <lable for="mall-name">Mall Name :</lable><br>
            <input type="text" name="mall-name" value="<?php echo $row['mall_name']?>" required><br><br>

            <lable for="mall-owner">Mall Owner :</lable><br>
            <input type="text" name="owner-name" value="<?php echo $row['owner_name']?>" required> <br><br>

            <lable for="mall-photo">Mall Photo :</lable><br>
            <input type="file" name="mall-photo" value="<?php echo $row['mall_photo']?>"><br>
            <img src="upload/mall-photo/<?php echo $row['mall_photo']?>" alt="image not available." style="width: 150px; height:150px;"><br>
            <span id="image-error" style="color: red;"></span>
            <input type="hidden" name="old-image" value="<?php echo $row['mall_photo']?>"><br><br>

            <lable for="opening-time">Opening Time :</label><br>
            <input type="time" name="opening-date" value="<?php echo $row['open_time']?>"><br><br>

            <lable for="closeing-time">closeing Time :</label><br>
            <input type="time" name="closeing-date" value="<?php echo $row['close_time']?>"><br><br>

            <lable for="longitude">mall's Longitude :</lable><br>
            <input type="text" name="longitude" value="<?php echo $row['mall_longitude']?>" required> <br><br>

            <lable for="latitude">mall's Latitude :</lable><br>
            <input type="text" name="latitude" value="<?php echo $row['mall_latitude']?>" required> <br><br>

            <lable for="address">Address</lable><br>
            <textarea rows="10" cols="20" name="address"><?php echo $row['mall_address']?></textarea><br><br>

            <lable for="mobile-number">Mobile Number :</lable><br>
            <input type="tel" maxlength="10" name = "mobile-number" value="<?php echo $row['contect_no']?>" required><br><br>

            <lable for="discription">Discription</lable><br>
            <textarea rows="10" cols="20" name="discription"><?php echo $row['discription']?></textarea><br><br>

            <lable for="type">Type</lable><br>
            <?php

                $sql1 = "SELECT * FROM type";
                $result1 = mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result1) > 0){
            ?>
            <select name="type" required>
                <option disabled>Select Type</option>
                <?php 
                    while($row1 = mysqli_fetch_assoc($result1)){
                    if(mysqli_num_rows($result) > 0){
                        if($row1['type_id'] == $row['type_id']){
                            $select = 'selected';
                        }
                        else{
                            $select = "";
                        }
                    }
                ?>
                <option <?php echo $select ?> value="<?php echo $row1['type_id']?>"><?php echo $row1['type_name']?></option>
                <?php } ?>
            </select> <br><br>
            <?php } ?>

            <input type="submit" name="submit" value="Update">
        </form>

        <?php }} ?>
    </body>
</html>
<?php include "update-mall-data.php"; ?>