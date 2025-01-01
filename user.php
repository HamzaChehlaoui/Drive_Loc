<?php
include('conn.php');
include('Care.php');

$db = new Database();
$connection = $db->getConnection();

$car = new Car($connection);

$cars = $car->getCars();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
   
</head>
<style>
        /* Fade-in animation */
        .fade-in {
            animation: fadeIn 1s ease-in-out forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Slide-in effect */
        .slide-in {
            animation: slideIn 1s ease-out forwards;
        }

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateX(-100%);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Hover animation (scale and shadow) */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05); /* Slightly enlarge the card */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); /* Add shadow on hover */
        }
        .pagination {
    text-align: center;
    margin-top: 20px;
    }

    .pagination a,
    .pagination .current {
        margin: 0 5px;
        padding: 8px 12px;
        background-color: #ddd;
        text-decoration: none;
        color: black;
        border-radius: 5px;
    }

    .pagination .current {
        background-color: #555;
        color: white;
    }

    .pagination .prev, .pagination .next {
        background-color: #333;
        color: white;
        padding: 8px 12px;
        border-radius: 5px;
    }

    .pagination a:hover {
        background-color: #333;
        color: white;
    }
</style>
<script>
   function toggleInfo(card) {
       let infoSection = card.querySelector('.info-section');
       infoSection.classList.toggle('hidden'); // Toggles visibility
   }
</script>
<body class="bg-black text-[#fff]">

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
                        <li><a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">Home</a></li>
                        <li><a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">About</a></li>
                        <li><a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">Services</a></li>
                        <li><a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Image at the Beginning of the Page -->
    <section class="relative">
        <img src="img_sit/4k-wallpaper-sports-cars-on-track-v0-tuocu8x929sa1.jpg" class="h-[600px] w-[100%]">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center text-center p-4">
            <div>
                <h2 class="text-4xl font-semibold mb-4 text-white">Find Your Perfect Car</h2>
                <p class="text-xl mb-8 text-white">Explore our wide selection of rental cars and hit the road today.</p>
                <div class="relative">
      
    <div class="flex items-center justify-center">
       
                <h2 class="   w-[10rem] h-10 text-[1.5rem]  transform rotate-45 origin-center animate-bounce">Down scroll</h2>
      </div>
            </div>
        </div>
    </section>
    <!-- Car Rental Options -->
    <section class="container mx-auto py-16 px-4">
    <h2 class="text-3xl font-semibold text-center mb-12">Our Cars</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Sedan Card -->
<?php

    $db = (new Database())->getConnection();

    $carsPerPage = 3;  

    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    $offset = ($page - 1) * $carsPerPage;

    $totalCarsQuery = $db->query("SELECT COUNT(*) AS total FROM vehicule");
    $totalCars = $totalCarsQuery->fetch(PDO::FETCH_ASSOC)['total'];

    $totalPages = ceil($totalCars / $carsPerPage);

    $query = $db->prepare("SELECT * FROM vehicule LIMIT :offset, :carsPerPage");
    $query->bindParam(':offset', $offset, PDO::PARAM_INT);
    $query->bindParam(':carsPerPage', $carsPerPage, PDO::PARAM_INT);
    $query->execute();
    $cars = $query;

    if ($cars->rowCount() > 0) {
        while ($row = $cars->fetch(PDO::FETCH_ASSOC)) {
            echo '
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer" onclick="toggleInfo(this)">
                    <!-- Image and Model Name Section (Always Visible) -->
                    <img src="' . $row['img'] . '" alt="Car image" class="w-full h-60 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">' . $row['modele'] . '</h3>
                        <!-- Info Section to Toggle Visibility -->
                        <div class="info-section hidden">
                            <p class="text-gray-400 mb-4">Prix : ' . $row['prix'] . '</p>
                            <p class="text-gray-400 mb-4">Disponible : ' . $row['disponible'] . '</p>
                        </div>
                        <div class="mt-4 flex justify-center">
                            <svg class="bg-[#fff] opacity-60" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 19.5C10 20.3284 9.32843 21 8.5 21C7.67157 21 7 20.3284 7 19.5C7 18.6716 7.67157 18 8.5 18C9.32843 18 10 18.6716 10 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                                <path d="M18 19.5C18 20.3284 17.3284 21 16.5 21C15.6716 21 15 20.3284 15 19.5C15 18.6716 15.6716 18 16.5 18C17.3284 18 18 18.6716 18 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                                <path d="M21 15H11C8.17157 15 6.75736 15 5.87868 14.1213C5 13.2426 5 11.8284 5 9V5C5 3.89543 4.10457 3 3 3" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                                <path d="M9 7.5C9 6.09554 9 5.39331 9.33706 4.88886C9.48298 4.67048 9.67048 4.48298 9.88886 4.33706C10.3933 4 11.0955 4 12.5 4H16.5C17.9045 4 18.6067 4 19.1111 4.33706C19.3295 4.48298 19.517 4.67048 19.6629 4.88886C20 5.39331 20 6.09554 20 7.5C20 8.90446 20 9.60669 19.6629 10.1111C19.517 10.3295 19.3295 10.517 19.1111 10.6629C18.6067 11 17.9045 11 16.5 11H12.5C11.0955 11 10.3933 11 9.88886 10.6629C9.67048 10.517 9.48298 10.3295 9.33706 10.1111C9 9.60669 9 8.90446 9 7.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                            </svg>
                        </div>
                    </div>
                </div>';
        }
    } else {
        echo '<p class="text-white">No cars found.</p>';
    }

    echo '<div class="pagination">';
    if ($page > 1) {
        echo '<a href="?page=' . ($page - 1) . '" class="prev">&laquo; Previous</a>';
    }

    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $page) {
            echo '<span class="current">' . $i . '</span>';
        } else {
            echo '<a href="?page=' . $i . '" class="page-link">' . $i . '</a>';
        }
    }

    if ($page < $totalPages) {
        echo '<a href="?page=' . ($page + 1) . '" class="next">Next &raquo;</a>';
    }
    echo '</div>';
?>



    </div>
</section>








    <section>
    <!-- Comment Section Container -->
    <div class="max-w-4xl mx-auto p-6 bg-gray-900 rounded-lg shadow-lg mt-10">
        <h2 class="text-2xl font-semibold mb-6 text-white">Comments</h2>

        <!-- Existing Comments -->
        <div class="space-y-6">
            <!-- Comment 1 -->
            <div class="p-4 border rounded-lg bg-gray-800 shadow-sm flex items-start">
                <!-- Avatar Image -->
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Doe" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <p class="font-semibold text-white">John Doe</p>
                    <p class="text-gray-400 mt-2">I recently rented a car from this service, and it was amazing! The vehicle was in great condition and the staff was very helpful. I’ll definitely use them again for my next trip!</p>
                    <div class="mt-2">
                        <!-- Star Rating -->
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-gray-500">&#9733;</span> <!-- 4 out of 5 stars -->
                    </div>
                    <div class="mt-4 text-sm text-gray-500">Posted on December 31, 2024</div>
                </div>
            </div>

            <!-- Comment 2 -->
            <div class="p-4 border rounded-lg bg-gray-800 shadow-sm flex items-start">
                <!-- Avatar Image -->
                <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Jane Smith" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <p class="font-semibold text-white">Jane Smith</p>
                    <p class="text-gray-400 mt-2">Great car rental experience! The booking process was smooth and easy. I appreciated how quickly the car was ready for pickup. Highly recommend this service for anyone looking for a reliable rental!</p>
                    <div class="mt-2">
                        <!-- Star Rating -->
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span> <!-- 5 out of 5 stars -->
                    </div>
                    <div class="mt-4 text-sm text-gray-500">Posted on December 30, 2024</div>
                </div>
            </div>

            <!-- Comment 3 -->
            <div class="p-4 border rounded-lg bg-gray-800 shadow-sm flex items-start">
                <!-- Avatar Image -->
                <img src="https://randomuser.me/api/portraits/men/19.jpg" alt="Mark Johnson" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <p class="font-semibold text-white">Mark Johnson</p>
                    <p class="text-gray-400 mt-2">I rented a luxury car for a weekend getaway, and it was perfect! The car was spotless and comfortable, and I didn’t have any issues at all. I’ll definitely be back next time I need a premium car rental.</p>
                    <div class="mt-2">
                        <!-- Star Rating -->
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span> <!-- 5 out of 5 stars -->
                    </div>
                    <div class="mt-4 text-sm text-gray-500">Posted on December 29, 2024</div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- Container for the review section -->
  <div class="max-w-4xl mx-auto my-12 p-6 bg-gray-800 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold text-center text-indigo-400 mb-6">Add Your Review</h2>

    <!-- Review Form -->
    <form action="#" method="POST">
      
      <!-- Car Selection Section (Optional) -->
      <div class="mb-6">
        <label for="car" class="block text-lg font-medium text-gray-300">Car Model</label>
        <select id="car" name="car" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-600 bg-gray-900 text-white focus:ring-indigo-500 focus:border-indigo-500" required>
          <option value="car1">Car Model 1</option>
          <option value="car2">Car Model 2</option>
          <option value="car3">Car Model 3</option>
        </select>
      </div>

      <!-- Rating Section -->
      <div class="mb-6">
        <label for="rating" class="block text-lg font-medium text-gray-300">Rating (1 to 5 stars)</label>
        <div class="flex items-center">
          <!-- Star Rating -->
          <input type="hidden" id="rating" name="rating" value="0" required>

          <span class="star cursor-pointer text-3xl">★</span>
          <span class="star cursor-pointer text-3xl">★</span>
          <span class="star cursor-pointer text-3xl">★</span>
          <span class="star cursor-pointer text-3xl">★</span>
          <span class="star cursor-pointer text-3xl">★</span>
        </div>
      </div>

      <!-- Review Section -->
      <div class="mb-6">
        <label for="review" class="block text-lg font-medium text-gray-300">Your Review</label>
        <textarea id="review" name="review" rows="4" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-600 bg-gray-900 text-white focus:ring-indigo-500 focus:border-indigo-500" placeholder="Write your review here" required></textarea>
      </div>

      <!-- Submit Button -->
      <div class="flex justify-center">
        <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
          Submit Review
        </button>
      </div>
    </form>
  </div>




    <!-- Footer Section -->
    <footer class="bg-gray-800 py-6 mt-16 text-center">
        <p>&copy; 2024 Car Rental. All rights reserved.</p>
    </footer>
<script src="js/script.js"></script>
</body>
</html>
