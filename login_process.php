<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if (password_verify($password, $row["password"])) {
      $_SESSION["username"] = $row["username"];
      header("Location: dashboard.php");
    } else {
      echo "Incorrect password";
    }
  }
} else {
  echo "User not found";
}

$conn->close();
?>