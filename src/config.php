<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    $sql = "CREATE DATABASE demo";
    if ($conn->query($sql) === TRUE) {
      echo "Database created successfully";
    } else {
      echo "Error creating database: " . $conn->error;
    }
}


  $conn->close();
?>