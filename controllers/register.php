<?php require("../config/connection.php"); 
$uname = $_REQUEST["username"];
$email = $_REQUEST["email"];
$pwd = $_REQUEST["pwd"];
$sql = "INSERT INTO users (username,pwd,email) VALUES ('$uname','$pwd','$email')";
if ($conn->query($sql) === TRUE) {
    header("location:../views/index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
