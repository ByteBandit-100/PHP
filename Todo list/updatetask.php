<?php
$conn = mysqli_connect("127.0.0.1","root","","college");
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$title = $_POST['title'];
$desc = $_POST['description'];

$sql = "UPDATE tasks SET title='$title', description='$desc' WHERE `sr.`=$id";
if(mysqli_query($conn, $sql)){
  header("Location: index.php");
  exit;
}else{
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
