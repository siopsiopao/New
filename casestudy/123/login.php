
<!DOCTYPE html>
<html>
<head>

<?php 

include('server.php')

 ?>
 
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/mainfinal.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  <title>Login Page</title>
</head>
<body>
<a href="adminlogin.php"><p style="font-size:1px;color:ffcba5;">admin</p></a>
  <div class="header">
  	<center><a href="login.php"><img src="images/welcome.png" width=250px height=20%></a></center>
  </div>
  <br />
  <div id="main">

<article id="work" class="panel">
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
	
  	<div class="btn">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="btn">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="btn+-">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
	  <label> Not yet a member?  <a href="register.php"> Sign up</a></label>
</article>

</div>
  	<p>
  	
  	</p>
  </form>
</body>
</html>