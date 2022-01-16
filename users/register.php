<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8">
    <style>
.button2 {
    color:#35858B;
    transition: transform .2s;
    text-decoration: none;
}
.button2:hover {
    transform: scale(1.5);

    
}
</style>
  </head>
<body style="background-color:#4FBDBA;text-align:center">

<h1>Register</h1>
<form action="./script/authentication.php" method="POST" enctype="multipart/form-data">
    <input name="author" type="hidden" value="1">
  <label for="Title">Email:</label><br>
  <input name="email" type="email" id="email"><br><br>
  <label for="text">Username:</label><br>
  <input name="username" type="text" id="username"><br><br>
  <label for="text">Password:</label><br>
  <input name="pwd" type="password" id="pwd"><br><br>
  <input type="submit" value="Register" name="reg_user"> 

</form> 
</body>
</html>
