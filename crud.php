<?php
class Crud {
    private $db;

    public function __construct($conn) {
        $this->db = $conn;
    }

    public function createUser($name, $email, $age) {
        $sql = "INSERT INTO users (name, email, age) VALUES (:name, :email, :age)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([":name" => $name, ":email" => $email, ":age" => $age]);
    }

    public function getUsers() {
        $sql = 'SELECT * FROM users';
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteUser($id) {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([":id" => $id]);
    }

}
?>