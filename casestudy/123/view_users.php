<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css" /> <!--css file link in bootstrap folder-->  
    <title>View Users</title>  
</head>  
<style> 
th, td {
  text-align: left;
  padding: 16px;
} 
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;
        border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
          
     }  
     .center {
  margin-left: auto;
  margin-right: auto;
}
</style>  
  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">All the Admins</h1>  
  
<div class="table-responsive">
    <table class="center" style="table-layout: fixed;">  
        <thead>  
  
        <tr>  
            <th>User</th>  
            <th>Password</th>   
            <th>Delete User</th>  
        </tr>  
        </thead>  
  
        <?php  
        include("adminserver.php");  
        $view_users_query="select * from admins";//select query for viewing users.  
        $run=mysqli_query($db,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
 
            $user_name=$row[0];   
            $user_pass=$row[1];  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->   
            <td><?php echo $user_name;  ?></td>   
            <td><?php echo $user_pass;  ?></td>  
            <td><a href="delete.php?del=<?php echo $user_name ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr> 
     
  
        <?php } ?>  
  
    </table> 
    </div>  
    </div> 
    <div class="table-scrol">  
    <h1 align="center">All the Users</h1>  
  
<div class="table-responsive"> 
    <table class="center" style="table-layout: fixed;">  
        <thead>  
  
        <tr>  
            <th>User Id</th>  
            <th>User Name</th>
            <th>User Email</th>
            <th>Update User</th>   
            <th>Delete User</th>  
        </tr>  
        </thead>  
  
        <?php    
        $view_users_query="select * from login";  
        $run=mysqli_query($db,$view_users_query); 
        $i=0;
        while($row=mysqli_fetch_array($run))
        {  
 
            $i++;
            $user_name=$row[0];
            $user_email=$row[1];   
            $user_pass=$row[2];  
  
        ?>  
  
        <tr>    
            <td><?php echo $i ?></td>
            <td><?php echo $user_email;  ?></td>   
            <td><?php echo $user_pass;  ?></td>
            <td><a href="update-process.php?ids=<?php echo $user_name ?>"><button class="btn btn-danger">Edit</button></a></td>  
            <td><a href="deleteuser.php?dele=<?php echo $user_name ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr> 
     
  
        <?php } ?>  
  
    </table> 
    <a href="logout.php"><input type="button" name="logout" value="logout"></a>    
    
</body>  
  
</html>  