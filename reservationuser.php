<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservation Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Set today's date as the minimum selectable date
    document.addEventListener("DOMContentLoaded", function () {
      var today = new Date();
      var dd = String(today.getDate()).padStart(2, '0');
      var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
      var yyyy = today.getFullYear();

      today = yyyy + '-' + mm + '-' + dd;

      // Set the min attribute for the date input
      document.getElementById("date").setAttribute("min", today);
    });
  </script>
</head>
<body class="bg-black text-white font-sans leading-tight tracking-tight">

  <!-- Container for the reservation form -->
  <div class="max-w-4xl mx-auto my-12 p-6 bg-gray-800 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold text-center text-indigo-400 mb-6">Reserve Your Spot</h2>

    <!-- Reservation Form -->
    <form action="#" method="POST">
      <!-- Customer Info Section -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
        <div>
          <label for="name" class="block text-lg font-medium text-gray-300">Full Name</label>
          <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-600 bg-gray-900 text-white focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your full name" required>
        </div>
        <div>
          <label for="email" class="block text-lg font-medium text-gray-300">Email Address</label>
          <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-600 bg-gray-900 text-white focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your email" required>
        </div>
      </div>

      <!-- Date and Time Section -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
        <div>
          <label for="date" class="block text-lg font-medium text-gray-300">Reservation Date</label>
          <input type="date" id="date" name="date" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-600 bg-gray-900 text-white focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>
        <div>
          <label for="time" class="block text-lg font-medium text-gray-300">Reservation Time</label>
          <select id="time" name="time" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-600 bg-gray-900 text-white focus:ring-indigo-500 focus:border-indigo-500" required>
            <option value="12:00">12:00 PM</option>
            <option value="14:00">2:00 PM</option>
            <option value="16:00">4:00 PM</option>
            <option value="18:00">6:00 PM</option>
            <option value="20:00">8:00 PM</option>
          </select>
        </div>
      </div>

      <!-- Additional Notes Section -->
      <div class="mb-6">
        <label for="notes" class="block text-lg font-medium text-gray-300">Additional Notes</label>
        <textarea id="notes" name="notes" rows="4" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-600 bg-gray-900 text-white focus:ring-indigo-500 focus:border-indigo-500" placeholder="Add any special requests or preferences"></textarea>
      </div>

      <!-- Submit Button -->
      <div class="flex justify-center">
        <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
          Reserve Now
        </button>
      </div>
    </form>
  </div>

</body>
</html>
