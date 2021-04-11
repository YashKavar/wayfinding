<?php
    if(isset($_POST['submit'])){
                $Username=$_POST['username'];
                $Email=$_POST['email'];
                $Message=$_POST['message'];
                $insertquery = "INSERT INTO `contact` (`Name`, `Email`, `Message`) VALUES ('$Username', '$Email', '$Message')";
        
//                echo "$insertquery<br/>";
                
                $con = mysqli_connect("localhost","root", "", "user");    
                if (!$con) 
                {
                    die("Cannot connect to Database : " . mysqli_connect_error());
                }
                else
                {
                    if(!mysqli_query($con, $insertquery))
                    {
                        echo "<script onload='contactus.php'>
                                 var no = confirm('Data not inserted due to some problem. Do you want to go to Contact Us page ?');
                                 if(no == true){
                                    window.location.href = 'user_contactus.php';
                                    }
                                else{
                                    window.location.href = 'user_home.php';
                                    }

                            </script>";
                    }
                    else
                    {
                        echo "<script onload='contactus.php'>
                                var yes = confirm('Thanks for contact us. Do you want to go to Home page ?');
                                 if(yes == true){
                                    window.location.href = 'user_home.php';
                                    }
                                else{
                                    window.location.href = 'user_contactus.php';
                                    }

                              </script>";
                    }
                    mysqli_close($con);
                }
    }
?>