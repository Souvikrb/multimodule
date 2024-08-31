<?php
error_reporting(0);
error_reporting(E_ERROR | E_PARSE);
session_start();
$servername = "localhost";
$db = "u140023845_g3network";
// Live credentials
/*======================
$username = "u140023845_g3network";
$password = "g3NETWORK@Rs";
*/
// Local credentials
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
if ($conn) {
  // echo "Connected";
}else{
  echo "No DB connection";
}
date_default_timezone_set("Asia/Calcutta");
$reg_time = date('Y-m-d H:i:s');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
