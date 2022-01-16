<?php
function getPosts(){
  

$conn = mysqli_connect("localhost", "erayokutay", "phpproje", "blogproject");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM post ORDER BY date DESC LIMIT 20";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
  echo  '<div class="column">
  <div class="card" style="background-color:#35858B;padding:10px;border-radius:2px;border-style:solid;border-color:#072227;">
    <img src="./users/images/'.$row["image"].'" alt="Avatar" style="width:100%">    
      <h4><b>'.$row["title"].'</b></h4>
      <h5>Author: '.$row["author"].'</h5>
      <p>'.substr($row['date'],0,10).'</p> 
      <p>'.$row["content"].'</p> 
  </div>
  </div>
  ';
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

}
?>