<?php
// 127.0.0.1
$servername = "127.0.0.1";
$username = "root";
$password = "";
$namedb = "qareviewerdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$namedb);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>