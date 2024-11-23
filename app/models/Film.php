<?php
require_once 'config/database.php';

class Film {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM films");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($title, $genre, $year) {
        $stmt = $this->db->prepare("INSERT INTO films (title, genre, year) VALUES (?, ?, ?)");
        return $stmt->execute([$title, $genre, $year]);
    }

    public function update($id, $title, $genre, $year) {
        global $pdo;
        $sql = "UPDATE films SET title = ?, genre = ?, year = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $genre, $year, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM films WHERE id = ?");
        return $stmt->execute([$id]);
    }

}
?>
