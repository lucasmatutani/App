<?php
$servername = "mysql.focustrade.com.br";
$database = "focustrade02";
$username = "focustrade02";
$password = "m4q2w9u3";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
