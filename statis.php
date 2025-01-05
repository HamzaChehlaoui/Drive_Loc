<?php

require('conn.php');
require('statisclass.php');
require('gerereservation.php');

$database = new Database();
$conn = $database->getConnection();

$statistics = new Statistics($conn);

$totalReservations = $statistics->getTotalReservations();
$totalVehicules = $statistics->getTotalVehicules();
$totalAvis = $statistics->getTotalAvis();

$reservationManager = new ReservationManager($conn);

if (isset($_GET['accept'])) {
    $reservationId = $_GET['accept'];
    $reservationManager->acceptReservation($reservationId);
} elseif (isset($_GET['reject'])) {
    $reservationId = $_GET['reject'];
    $reservationManager->rejectReservation($reservationId);
}

$reservations = $reservationManager->getReservations();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="bg-gray-800 w-64 p-6">
            <h2 class="text-2xl font-semibold mb-8 text-center">Admin Dashboard</h2>
            <ul>
                <li><a href="#reservations" class="block py-2 px-4 hover:bg-gray-700">Reservations</a></li>
                <li><a href="#vehicules" class="block py-2 px-4 hover:bg-gray-700">Vehicles</a></li>
                <li><a href="#avis" class="block py-2 px-4 hover:bg-gray-700">Reviews</a></li>
                <li><a href="#statistiques" class="block py-2 px-4 hover:bg-gray-700">Statistics</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-auto">
            <!-- Statistics Section -->
            <section id="statistiques" class="mb-12">
                <h3 class="text-3xl font-semibold mb-6">Statistics</h3>
                <div class="grid grid-cols-3 gap-6">
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h4 class="text-xl font-semibold mb-4">Total Reservations</h4>
                        <p class="text-3xl font-bold"><?php echo $totalReservations; ?></p>
                    </div>
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h4 class="text-xl font-semibold mb-4">Total Vehicles</h4>
                        <p class="text-3xl font-bold"><?php echo $totalVehicules; ?></p>
                    </div>
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h4 class="text-xl font-semibold mb-4">Total Reviews</h4>
                        <p class="text-3xl font-bold"><?php echo $totalAvis; ?></p>
                    </div>
                </div>
            </section>

            <!-- Reservations Section -->
            <section id="reservations">
                <h3 class="text-3xl font-semibold mb-6">Reservations Management</h3>
                <div class="overflow-x-auto bg-gray-800 shadow-lg rounded-lg">
                    <table class="min-w-full table-auto">
                        <thead>
                            <tr class="bg-gray-700">
                                <th class="py-3 px-6 text-left">Reservation ID</th>
                                <th class="py-3 px-6 text-left">Email</th>
                                <th class="py-3 px-6 text-left">Vehicle</th>
                                <th class="py-3 px-6 text-left">Start Date</th>
                                <th class="py-3 px-6 text-left">End Date</th>
                                <th class="py-3 px-6 text-left">Status</th>
                                <th class="py-3 px-6 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($reservations as $reservation) { ?>
                                <tr class="border-b bg-gray-700">
                                    <td class="py-2 px-6"><?php echo $reservation['idReservation']; ?></td>
                                    <td class="py-2 px-6"><?php echo $reservation['user_email']; ?></td>
                                    <td class="py-2 px-6"><?php echo $reservation['vehicule_modele']; ?></td>
                                    <td class="py-2 px-6"><?php echo $reservation['dateDebut']; ?></td>
                                    <td class="py-2 px-6"><?php echo $reservation['dateFin']; ?></td>
                                    <td class="py-2 px-6"><?php echo $reservation['statut']; ?></td>
                                    <td class="py-2 px-6">
                                        <!-- Accept Button -->
                                        <a href="?accept=<?php echo $reservation['idReservation']; ?>" class="text-green-400 hover:text-green-500">Accept</a>
                                        |
                                        <!-- Reject Button -->
                                        <a href="?reject=<?php echo $reservation['idReservation']; ?>" class="text-red-400 hover:text-red-500">Reject</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

</body>

</html>
