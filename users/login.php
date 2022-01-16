<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8">
    <style>
.button2 {
    color:black;
    transition: transform .2s;
    text-decoration: none;
    padding:-1px;
    border-radius:1px;
    border-style:solid;
}
.button2:hover {
    transform: scale(1.5);

    
}
</style>
  </head>
<body style="background-color:#4FBDBA;text-align:center">

<h2>Login</h2>
<form action="./script/authentication.php" method="POST" enctype="multipart/form-data">
    <input name="author" type="hidden" value="1">
  <label for="Title">Username:</label><br>
  <input name="username" type="username" id="username"><br><br>
  <label for="text">Password:</label><br>
  <input name="pwd" type="password" id="password"><br><br>
  <input type="submit" value="Login" name="login_user"> 

</form> 
<br><a class="button2" href="register.php">Register</a>
</body>
</html>
