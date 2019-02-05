<?php
function connect_db() {
 $servername = "localhost";
 $username = "a1800561";
 $password = "woBUwj33e";
 $dbname = "a1800561";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } else {
 }
 return $conn;
}
?>
