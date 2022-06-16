
<!DOCTYPE html>
<html>
<head>
<?php include('adminserver.php') ?>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/mainfinal.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  <title>Login Admin</title>
</head>
<body>
<a href="login.php"><p style="font-size:1px;color:ffcba5;">users view</p></a>
  <div class="header">
  	<h2><center>Admin Users Only</center></h2>
  </div>
  <br />
  <div id="main">

<article id="work" class="panel">
	 
  <form method="post" action="adminlogin.php">
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
</article>

</div>
  	<p>
  		Not yet a member? <a href="adminregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>