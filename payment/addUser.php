<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dash";
$useremail = $_POST ['useremail'];
$userpass = $_POST ['userpass'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (username , password) VALUES ('$useremail','$userpass')";

if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
$_SESSION['created']="Registration Successful!!";
header('location:login.php');

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>