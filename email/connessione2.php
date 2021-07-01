<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="marketplace2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  echo "Connection Failed";
}

?>