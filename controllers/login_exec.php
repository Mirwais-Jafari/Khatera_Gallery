<?php require("../config/connection.php");
$pwd = $_REQUEST['pwd'];
$sql = "SELECT * FROM users WHERE pwd ='$pwd' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    header("location: ../views/index.php");

} else {
  echo "There is no any user with this name!";
}
$conn->close();

?>