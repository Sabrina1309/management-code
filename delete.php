<?php
require "db.php";
require "crud.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    //prepare the DELETE SQL statement
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    //redirect back to the users.php after deleting
    header("Location: users.php");
    exit();


}

?>