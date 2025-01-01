<?php
class Vehicle {
    private $conn;
    private $table_name = "vehicule"; 

    public $model;
    public $category_id; 
    public $price;
    public $disponible;

   
    public function __construct($db) {
        $this->conn = $db;
    }

    
    public function addMultipleVehicles($vehicles) {
        
        $query = "INSERT INTO " . $this->table_name . " (modele, categorieId, prix, disponible)
                  VALUES (:model, :category_id, :price, :disponible)";

       
        $stmt = $this->conn->prepare($query);

       
        $this->conn->beginTransaction();

        try {
           
            foreach ($vehicles as $vehicle) {
                $stmt->bindParam(':model', $vehicle['model']);
                $stmt->bindParam(':category_id', $vehicle['category_id']);
                $stmt->bindParam(':price', $vehicle['price']);
                $stmt->bindParam(':disponible', $vehicle['disponible']);

               
                $stmt->execute();
            }

            $this->conn->commit();

            return true;
        } catch (Exception $e) {
            $this->conn->rollBack();
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
?>
