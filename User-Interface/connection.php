<?php

$host = "localhost";
$db_name = "bookstore (1)";
$user = "root";
$pass = "";

// Create a new PDO instance for connection
try {
    $db = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully using PDO";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
