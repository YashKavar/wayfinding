<?php
    if(isset($_POST['submit'])){
                $Username=$_POST['username'];
                $Email=$_POST['email'];
                $Message=$_POST['message'];
                $insertquery = "INSERT INTO `reportbug` (`Name`, `Email`, `Message`) VALUES ('$Username', '$Email', '$Message')";
        
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
                                 var no = confirm('Due to some problem your bug are not reported. Do you want to go to Contact Us page?');
                                 if(no == true){
                                    window.location.href = 'Report.php';
                                    }
                                else{
                                    window.location.href = 'index.php';
                                    }

                            </script>";
                    }
                    else
                    {
                        echo "<script onload='contactus.php'>
                                var yes = confirm('Your bug is reported successfully. Do you want to go to Home page ?');
                                 if(yes == true){
                                    window.location.href = 'index.php';
                                    }
                                else{
                                    window.location.href = 'Report.php';
                                    }

                              </script>";
                    }
                    mysqli_close($con);
                }
    }
?>