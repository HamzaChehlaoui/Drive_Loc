<?php

require('conn.php');
require('Vehicles.php');

$database = new Database();
$db = $database->getConnection();

$query = "SELECT * FROM categorie";
$stmt = $db->prepare($query);
$stmt->execute();


$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['submit'])) {
    $vehicle = new Vehicle($db);

    $vehicleModels = $_POST['vehicle-model'];
    $vehicleCategories = $_POST['vehicle-category'];  
    $vehiclePrices = $_POST['vehicle-price'];
    $vehicleAvailabilities = $_POST['vehicle-disponible'];

    $vehicles = [];
    foreach ($vehicleModels as $index => $model) {
        $vehicles[] = [
            'model' => $model,
            'category_id' => $vehicleCategories[$index],  
            'price' => $vehiclePrices[$index],
            'disponible' => $vehicleAvailabilities[$index]
        ];
    }

 
    if ($vehicle->addMultipleVehicles($vehicles)) {
        echo "Vehicles added successfully.";
    } else {
        echo "Failed to add vehicles.";
    }
}
?>