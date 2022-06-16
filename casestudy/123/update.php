<?php  

include("server.php");  
$update_id=$_GET['upd'];  
$update_query="update from login set user='$update_id'";//delete query  
$run=mysqli_query($db,$update_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>  