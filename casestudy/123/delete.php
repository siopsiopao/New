<?php  

include("adminserver.php");  
$delete_id=$_GET['del'];  
$delete_query="delete from admins WHERE user='$delete_id'";//delete query  
$run=mysqli_query($db,$delete_query);  
if($run)  
{  
//js function to open in the same window   
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>  