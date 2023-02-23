<?php include('header.php'); ?>
<div class="container">
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dash";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT billing_email,billing_name,order_id,tracking_id FROM payments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "name: " . $row["username"]. " - password: " . $row["password"]. "<br>";
   
    if($row["billing_email"]== $_SESSION['user']){
        echo "orderId: " . $row["order_id"].  "<br>";
        ?>

      <a href="index.php"><input type="submit" class="btn btn-primary" value="Pay Fee" /></a>
        <?php
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>
   </div>
   <!-- <a href="index.php"><input type="submit" class="btn btn-primary" value="Pay Fee" /></a> -->
   
<?php include('footer.php'); ?>