<?php
    session_start();
    if(isset($_SESSION['mall-data'])){
        echo $_SESSION['mall-data'];
    }
    else{
        echo $_SESSION['mall-data'] = '';
    } 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mall-table | Mall Admin</title>
    </head>
    <body>
    
        <?php include "header-profile.php"; ?>

        <div>
        <center>
        <h2>... Malls Details ...</h2><br>
        <a href="mall-details.php" align="right"><input type="button" value="Add"></a>
            <?php
                
                if(isset($_SESSION['mall'])){
                    if($_SESSION['mall'] == "Mall Data Successfully inserted." || $_SESSION['mall'] == "Mall Data is successfully updated." || $_SESSION['mall'] = "Mall Data is successfully Deleted."){
                        echo  "<p style='color:green;'>$_SESSION[mall]</p>";
                    }
                    else{
                        echo  "<p style='color:red;'>$_SESSION[mall]</p>";
                    }
                    
                }

                $user_id = $_SESSION['user_id'];

                $sql = "SELECT * FROM mall_details WHERE user_id = '$user_id'";

                $result = mysqli_query($conn,$sql);

                if(mysqli_num_rows($result) > 0){
            ?>
            <table border="1px" cellspacing="0px" cellpadding="10px">
                <tr>
                    <th>Mall Id</th>
                    <th>Mall Name</th>
                    <th>Mall Owner</th>
                    <th>Mall Photo</th>
                    <th>Mall Opening Time</th>
                    <th>Mall Closeing Time</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Address</th>
                    <th>Contect No</th>
                    <th>Discription</th>
                    <th>Type</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php 
                    $mall_id = 1;
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $mall_id ?></td>
                    <td><?php echo $row['mall_name']?></td>
                    <td><?php echo $row['owner_name']?></td>
                    <td>
                    <img src="upload/mall-photo/<?php echo $row['mall_photo']?>" alt="mall image is not found." style="width: 150px; height:150px;">
                    <?php if(isset($_SESSION['error'])){echo $_SESSION['error'];}?>
                    </td>
                    <td><?php echo $row['open_time']?></td>
                    <td><?php echo $row['close_time']?></td>
                    <td><?php echo $row['mall_longitude']?></td>
                    <td><?php echo $row['mall_latitude']?></td>
                    <td><?php echo $row['mall_address']?></td>
                    <td><?php echo $row['contect_no']?></td>
                    <td><?php echo $row['discription']?></td>
                    <td><?php echo $row['type_id']?></td>
                    <td><a href="update-mall.php?m_id=<?php echo $row['mall_id']?>"><input type="button" value="Update"></a></td>
                    <td><a href="delete-mall.php?m_id=<?php echo $row['mall_id']?>"><input type="button" value="Delete"></a></td>
                </tr>
                <?php $mall_id = $mall_id + 1;} ?>
            </table> 
            <?php 
                 }
            ?><br><br>
            <input type="button" value="Prev">
            <input type="button" value="1">
            <input type="button" value="2">
            <input type="button" value="Next">
        </div>
        </center>
    </body>
</html>