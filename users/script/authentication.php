<?php
  session_start();

$username = "";
$email    = "";
$errors = array(); 

// connect to the db
$db = mysqli_connect("localhost", "erayokutay", "phpproje", "blogproject");

// register
if (isset($_POST['reg_user'])) {
  // receive input values from form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $pwd = mysqli_real_escape_string($db, $_POST['pwd']);

  // ensure that the form is correctly filled
  // error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($pwd)) { array_push($errors, "Password is required"); }

  // check the database to make sure a user does not exist 
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // register if there are no errors
  if (count($errors) == 0) {
  	$password = md5($pwd);//encrypt the password

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    echo "New user created successfully";
    header("Refresh: 2; url=../post.php");
  }
  else{
    //list errors
    foreach($errors as $errArr){
      echo $errArr;
      header("Refresh: 2; url=../register.php");
    };
  }
}

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['pwd']);

  if (empty($username)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
      echo "Successfully logged in";
      header("Refresh: 2; url=../post.php");
  	}
    else {
  		array_push($errors, "Wrong username/password");
      echo "Wrong username/password";
      header("Refresh: 2; url=../login.php");
  	}
  }
  else{
    //list errors
    foreach($errors as $errArr){
      echo $errArr;
      header("Refresh: 2; url=../login.php");
    };
  }
}

mysqli_close($db);
?>