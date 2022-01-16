<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Eray's Blogsite</title>
<link rel="stylesheet" href="style.css">
<style>
.button2 {
    color:#35858B;
    transition: transform .2s;
    text-decoration: none;
   
}
.button1:hover {
    transform: scale(1.3);
    color:black;

    
}
</style>
</head>
<body style="background-color:#4FBDBA">

<h1 class="header">Eray's Blog Site</h1>

<a class="button2"  href="./users/post.php" ><h1 class="header button1">Submit a post</h1></a>
<div class="row">
<?php
require_once("./script/getPosts.php");
getPosts();
?>
</div>

</body>
</html> 
