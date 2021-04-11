<?php
  include "connection.php";

  if(isset($_POST['submit'])){

    if(empty($_FILES['mall-photo']['name'])){
      $photo_name = $_POST['old-image'];
    }
    else{
      $errors = array();

      $photo_name = $_FILES['mall-photo']['name'];
      $photo_ext = strtolower(explode(".",$photo_name)[1]);
      $photo_size = $_FILES['mall-photo']['size'];
      $photo_tmp = $_FILES['mall-photo']['tmp_name'];
      $photo_type = $_FILES['mall-photo']['type'];
      $extension = array("jpeg","jpg","png");

      if(in_array($photo_ext,$extension) === false){
          $errors[] = "This type of file extension not allowed, Please choose jpeg,jpg or png";
      }
      if($photo_size > 2097152){
          $errors[] = "File size must be 2mb or Lower.";
      }
      if(empty($errors) == true){
          move_uploaded_file($photo_tmp,"upload/mall-photo/".$photo_name);
      }
      else{
?>  
        <script>
            document.getElementById('image-error').innerHTML='<?php
                for ($x = 0; $x < sizeof($errors); $x++)
                { 
                    echo $errors[$x];
                    echo "<br>";
                } ?>';
        </script> 
<?php
        die();
      }
  }
  
  $mall_id = $_POST['mall'];
  $mall_name = $_POST['mall-name'];
  $owner_name = $_POST['owner-name'];
  $opening_date = $_POST['opening-date'];
  $closeing_date = $_POST['closeing-date'];
  $longitude = $_POST['longitude'];
  $latitude = $_POST['latitude'];
  $address = $_POST['address'];
  $mobile_number = $_POST['mobile-number'];
  $discription = $_POST['discription'];
  $type = $_POST['type'];
  
  $sql1 = "UPDATE mall_details SET mall_name = '$mall_name', owner_name = '$owner_name', mall_photo = '$photo_name', open_time = '$opening_date', close_time = '$closeing_date', mall_longitude = '$longitude', mall_latitude = '$latitude', mall_address = '$address', contect_no = '$mobile_number', discription = '$discription', type_id = '$type'
          WHERE mall_id = '$mall_id'";

    $result1 = mysqli_query($conn,$sql1);

    if($result1){
        session_start();
        $_SESSION['mall'] = "Mall Data is successfully updated.";
        
    }
    else{
        $_SESSION['mall'] = "Mall Data is not updated.";
         
    }
    header("Location: http://localhost/DE/mall-data-table.php");
 }
?>