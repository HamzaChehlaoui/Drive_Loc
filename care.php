<?php
class Car {
    private $conn;
    
    public function __construct($db) {
        $this->conn = $db;
    }

    public function getCars() {
        $query = "SELECT * FROM vehicule"; 
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>
