<?php

require('conn.php');
require('statisclass.php');

$database = new Database();
$conn = $database->getConnection();

$statistics = new Statistics($conn);

$totalReservations = $statistics->getTotalReservations();
$totalVehicules = $statistics->getTotalVehicules();
$totalAvis = $statistics->getTotalAvis();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="bg-gray-800 text-white w-64 p-4">
            <h2 class="text-xl font-semibold mb-6">Dashboard Admin</h2>
            <ul>
                <li><a href="#reservations" class="block py-2 px-4 hover:bg-gray-700">Réservations</a></li>
                <li><a href="#vehicules" class="block py-2 px-4 hover:bg-gray-700">Véhicules</a></li>
                <li><a href="#avis" class="block py-2 px-4 hover:bg-gray-700">Avis</a></li>
                <li><a href="#statistiques" class="block py-2 px-4 hover:bg-gray-700">Statistiques</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <section id="statistiques" class="mb-8">
                <h3 class="text-2xl font-semibold mb-4">Statistiques</h3>
                <div class="grid grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h4 class="text-xl font-semibold mb-4">Total Réservations</h4>
                        <p class="text-3xl font-bold"><?php echo $totalReservations; ?></p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h4 class="text-xl font-semibold mb-4">Total Véhicules</h4>
                        <p class="text-3xl font-bold"><?php echo $totalVehicules; ?></p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h4 class="text-xl font-semibold mb-4">Total Avis</h4>
                        <p class="text-3xl font-bold"><?php echo $totalAvis; ?></p>
                    </div>
                </div>
            </section>
        </main>
    </div>

   
</body>

</html>
