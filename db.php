<?php    //THE SAME ALWAYS, we need to write this code block to connect the php with the database
$host = "localhost";
$user = "root"; // default MySQL user
$pass = ""; //leave empty if no password
$dbname = "php_crud"; //name from the db

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}



?>