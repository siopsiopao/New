<html>
<head>

<?php
include("adminserver.php");
$update_id=$_GET['ids'];
if(count($_POST) > 0) {
mysqli_query($db,"UPDATE login set username='" . $_POST['userid2'] . "', email='" . $_POST['email'] . "' WHERE id='" . $update_id . "'");
$message = "Record Modified Successfully";
}

$result = mysqli_query($db,"SELECT * FROM login WHERE id='" . $update_id . "'");
$row= mysqli_fetch_array($result);
if(isset($message)) { echo $message; } ?>
<title>Update Employee Data</title>
</head>

<body>
<form name="frmUser" method="post" action="">
<div>
</div>
<div style="padding-bottom:5px;">
<a href="view_users.php">Employee List</a>
</div><?php    
        $view_users_query="select * from login";//select query for viewing users.  
        $run=mysqli_query($db,$view_users_query);//here run the sql query.  

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
 
            
            $user_name=$row[0];
            $user_email=$row[1];   
            $user_pass=$row[2]; }
         
        ?>  
<table style="border: 1px solid;">
<tr style="border: 1px solid;"><td>

</tr></td>
<tr style="border: 1px solid;"><td>
<input type="hidden" name="userid"  value="<?php $user_name;  ?>">
</tr></td>
<tr style="border: 1px solid;"><td style="border: 1px solid;">
Username: <td><input type="text" name="userid2"  value="<?php $user_email;  ?>"></td>
</tr></td>
<tr style="border: 1px solid;"><td style="border: 1px solid;">
Email: <td><input type="text" name="email" class="txtField" value="<?php  $user_pass;  ?>"></td>
</tr></td>
</table>


    <input type="submit" name="submit" value="Submit" class="buttom">
</form>

    

</body>
</html>