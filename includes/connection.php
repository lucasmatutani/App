<?php
$servername = "mysql11-farm1.kinghost.net";
$database = "focustradeead";
$username = "focustradeead";
$password = "RvdllN22Dg8O";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$conn->set_charset("utf8mb4");
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
