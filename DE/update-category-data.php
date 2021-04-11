<?php
    if(isset($_POST['submit'])){

        include "connection.php";

        $category_id = $_POST['category'];
        $category_name = $_POST['category_name'];
        $sql1 = "UPDATE category SET category_name = '$category_name' WHERE category_id = '$category_id'";
        
        $result1 = mysqli_query($conn,$sql1) or die("Query is failed.");

        if($result1){
            session_start();
            $_SESSION['category'] = "Category is successfully updated.";

        }
        else{
            $_SESSION['category'] = "Category is not updated.";

        }
        header("Location: http://localhost/DE/category-data-table.php");
    }
?>