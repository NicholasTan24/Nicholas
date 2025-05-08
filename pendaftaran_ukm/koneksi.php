<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_ukm";

$connect = mysqli_connect($host,$user,$pass,$dbname) or die('Database Tidak Terhubung');
// Check connection
if ($connect -> connect_errno) {
    echo "Failed to connect to MySQL: " . $connect -> connect_error;
    exit();
  }