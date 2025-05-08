<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_ukm";

$conn = mysqli_connect($host, $user, $pass, $dbname) or die('Database Tidak Terhubung');

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}