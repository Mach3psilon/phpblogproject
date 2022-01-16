<?php
$targetDir = "../images/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$fileName = basename($_FILES["fileToUpload"]["name"]);
$control = 1;
$imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
$background_color = 'white';

if(basename($_FILES["fileToUpload"]["name"]) == false){
  echo "Please, upload an image";
  header("Refresh: 2; url=../post.php");
}
else{
  // Check image file actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      $control = 1;
    } else {
      echo "File is not an image.";
      $control = 0;
    }
}

// Check already exists
if (file_exists($targetFile)) {
  echo "Sorry, file already exists.";
  $control = 0;
}

// Allow certain formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $control = 0;
}

// Check if $control to 0
if ($control == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, upload 
} else {
  $title = $_POST["Title"];
  $content = $_POST["Content"];
  $author = $_POST["username"];
  if($title !== "" || $content !== ""){
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
      $con = mysqli_connect("localhost","erayokutay","phpproje","blogproject");
      $con->set_charset("utf8");
      
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }
      
      $sql = "INSERT INTO post (title, content, author, image)
      VALUES('$title', '$content', '$author', '$fileName')";
      
      if (mysqli_query($con, $sql)) {
          echo "New post created successfully";
          header("Refresh: 2; url=../../index.php");
          
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      
      mysqli_close($con);
        }
        else {
          echo "Sorry, there was an error uploading your post.";
        }
  }    
  else{
    echo "Please, type a title or content";
    header("Refresh: 2; url=../post.php");
  }
 
}
}


?>