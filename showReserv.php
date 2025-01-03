<?php
include('conn.php');

$database = new Database();
$conn = $database->getConnection();

$query = "SELECT * FROM `reservation`";
$stmt = $conn->prepare($query);
$stmt->execute();
$reservation = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Display Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white font-sans leading-tight tracking-tight">
   <!-- Navbar -->
   <nav class="bg-black text-white py-4">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center">
                <!-- Logo or Brand Name -->
                <div class="text-2xl font-bold">
                    <a href="#">MyWebsite</a>
                </div>
                
                <!-- Navbar Links -->
                <div>
                    <ul class="flex space-x-6">
                        <li><a href="user.php" class="hover:bg-gray-700 px-4 py-2 rounded">Home</a></li>
                        <li><a href="showcare.php" class="hover:bg-gray-700 px-4 py-2 rounded">Explore Cars</a></li>
                        <li><a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">Services</a></li>
                        <li><a href="showReserv.php" class="hover:bg-gray-700 px-4 py-2 rounded">Reservation</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
  <!-- Container for the booking list -->
  <div class="max-w-6xl mx-auto my-12 p-6 bg-gray-800 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold text-center text-indigo-400 mb-6">Booking Details</h2>

    <!-- Table to display bookings -->
    <div class="overflow-x-auto bg-gray-900 rounded-lg">
      <table class="min-w-full table-auto">
        <thead>
          <tr class="bg-gray-700 text-white">
            <th class="px-6 py-3 text-left text-sm font-medium">Reservation Date</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Reservation Return Date</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Statut</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Pickup Location</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Return Location</th>
          </tr>
        </thead>
        <tbody>
        <?php if (count($reservation) > 0) { ?>
          <?php foreach ($reservation as $row) { ?>
            <tr class="border-b border-gray-600">
              <td class="px-6 py-4 text-sm text-gray-400"><?= $row['dateDebut']; ?></td>
              <td class="px-6 py-4 text-sm text-gray-400"><?= $row['dateFin']; ?></td>
              <td class="px-6 py-4 text-sm text-gray-400"><?= $row['statut']; ?></td>
              <td class="px-6 py-4 text-sm text-gray-400"><?= $row['Pickup_Location']; ?></td>
              <td class="px-6 py-4 text-sm text-gray-400"><?= $row['Return_Location']; ?></td>
            </tr>
          <?php } ?>
        <?php } else { ?>
          <tr><td colspan="3" class="text-center text-gray-400">No reservations found.</td></tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
    <!-- Footer Section -->
    <footer class="bg-gray-800 py-6 mt-16 text-center absolute bottom-0 w-full">
        <p>&copy; 2024 Car Rental. All rights reserved.</p>
    </footer>
</body>
</html>
