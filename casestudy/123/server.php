<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$password = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dllregis');

if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }


  $user_check_query = "SELECT * FROM login WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // verification
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // registration
  if (count($errors) == 0) {
  	$password = md5($password_1);//encryption

  	$query = "INSERT INTO login (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}


if (isset($_POST['login_user'])) {
  $user_name = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($user_name)) {
  	array_push($errors, "Username is required");
  }
  
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM login WHERE username='$user_name' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $user_name;
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password is being used");
  	}
  }
}
  // REGISTER USER FROM THE CONCERN

  if (isset($_POST['sends'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['name']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $message = mysqli_real_escape_string($db, $_POST['message']);
  $view_users_query="select * from login";  
  $run=mysqli_query($db,$view_users_query); 


  
  	$query = "INSERT INTO contact (messagr, namr, subjecr , email, id) 
  			  VALUES('$message', '$username', '$subject', '$email','(SELECT id FROM login WHERE username = $username)";
  	mysqli_query($db, $query);
  	header('location: index.php#contact');}

  ?>
