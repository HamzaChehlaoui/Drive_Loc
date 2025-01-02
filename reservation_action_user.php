<?php
require_once('conn.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pickup_date = $_POST['pickup_date'];
    $return_date = $_POST['return_date'];
    $pickup_location = $_POST['pickup_location'];
    $return_location = $_POST['return_location'];
    $notes = $_POST['notes'];
    $statut='statut';
    $iduser=  ($_SESSION['user_id']) ;

    $database = new Database();
    
    $conn = $database->getConnection();

    if ($conn) {
        try {
            $stmt = $conn->prepare("INSERT INTO reservation ( dateDebut, dateFin, Pickup_location, Return_location, Additional_notes, statut, userId) 
                                    VALUES (:pickup_date, :return_date, :pickup_location, :return_location, :notes ,:statut, :iduser)");

    
            $stmt->bindParam(':pickup_date', $pickup_date);
            $stmt->bindParam(':return_date', $return_date);
            $stmt->bindParam(':pickup_location', $pickup_location);
            $stmt->bindParam(':return_location', $return_location);
            $stmt->bindParam(':notes', $notes);
            $stmt->bindParam(':statut', $statut);
            $stmt->bindParam(':iduser', $iduser);

            $stmt->execute();

            echo "Reservation successful! Thank you for choosing our service.";
            header('Location:showcare.php');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Database connection failed!";
    }

    $conn = null;
} else {
    header("Location: reservation_page.php");
    exit;
}
?>
