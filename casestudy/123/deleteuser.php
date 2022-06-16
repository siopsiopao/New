<?php  

include("server.php");  
$delete_id=$_GET['dele'];  
$delete_query="delete from login WHERE id='$delete_id'";//delete query  
$run=mysqli_query($db,$delete_query);  
if($run)  
{  
//js function to open in the same window   
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>  