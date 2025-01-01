<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Display Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white font-sans leading-tight tracking-tight">

  <!-- Container for the booking list -->
  <div class="max-w-6xl mx-auto my-12 p-6 bg-gray-800 rounded-lg shadow-lg">

    <h2 class="text-3xl font-bold text-center text-indigo-400 mb-6">Booking Details</h2>

    <!-- Table to display bookings -->
    <div class="overflow-x-auto bg-gray-900 rounded-lg">
      <table class="min-w-full table-auto">
        <thead>
          <tr class="bg-gray-700 text-white">
            <th class="px-6 py-3 text-left text-sm font-medium">Full Name</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Email Address</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Reservation Date</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Reservation Time</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Additional Notes</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example booking 1 -->
          <tr class="border-b border-gray-600">
            <td class="px-6 py-4 text-sm font-medium text-gray-300">John Doe</td>
            <td class="px-6 py-4 text-sm text-gray-400">john.doe@example.com</td>
            <td class="px-6 py-4 text-sm text-gray-400">2025-01-05</td>
            <td class="px-6 py-4 text-sm text-gray-400">2:00 PM</td>
            <td class="px-6 py-4 text-sm text-gray-400">No special requests</td>
          </tr>

          <!-- Example booking 2 -->
          <tr class="border-b border-gray-600">
            <td class="px-6 py-4 text-sm font-medium text-gray-300">Jane Smith</td>
            <td class="px-6 py-4 text-sm text-gray-400">jane.smith@example.com</td>
            <td class="px-6 py-4 text-sm text-gray-400">2025-01-06</td>
            <td class="px-6 py-4 text-sm text-gray-400">4:00 PM</td>
            <td class="px-6 py-4 text-sm text-gray-400">Vegetarian meal</td>
          </tr>

          <!-- Example booking 3 -->
          <tr class="border-b border-gray-600">
            <td class="px-6 py-4 text-sm font-medium text-gray-300">Emily Clark</td>
            <td class="px-6 py-4 text-sm text-gray-400">emily.clark@example.com</td>
            <td class="px-6 py-4 text-sm text-gray-400">2025-01-07</td>
            <td class="px-6 py-4 text-sm text-gray-400">6:00 PM</td>
            <td class="px-6 py-4 text-sm text-gray-400">Allergic to peanuts</td>
          </tr>

          <!-- Additional rows can be added here dynamically -->
        </tbody>
      </table>
    </div>

  </div>

</body>
</html>
