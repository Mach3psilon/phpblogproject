<?php 
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ./login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: ./login.php");
}

?>
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
<body style="background-color:#4FBDBA;">

<h2>Submit A Post</h2>
<form action="./script/post.php" method="POST" enctype="multipart/form-data">
  <input name="username" type="hidden" value="<?php echo $_SESSION['username'];?>">
  <label for="Title">Title:</label><br>
  <input name="Title" type="Title" id="Title"><br><br>
  <label for="text">Content:</label><br>
  <input name="Content" type="text" id="Content"><br><br>
  <label for="text">Select image to upload:</label><br>
   <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  <input type="submit" value="Submit" name="submit"> <br>
  <p> <a href="post.php?logout='1'" style="color: red;">logout</a> </p>

</form> 
</body>
</html>
