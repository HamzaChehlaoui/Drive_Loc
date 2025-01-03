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
        }    /* Custom styles for black and white accents */
    .btn-primary {
      background-color: #000000; /* Black color */
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #555555; /* Darker grey for hover effect */
    }

  
    /* Custom black-and-white Section */
    .black-section {
      background-color: #333333; /* Dark background */
      color: white; /* White text */
      padding: 50px 0;
      text-align: center;
      perspective: 1500px; 
    }

    .black-section:hover {
      transform: rotateY(0deg) rotateX(0deg) scale(1.05); 
    }

    .country-card {
      perspective: 1000px; /* Create 3D perspective for the card */
    }

    .country-card .card {
      transform-style: preserve-3d;
      transition: transform 0.5s ease;
    }

    .country-card:hover .card {
      transform: rotateY(15deg) rotateX(10deg); 
    }

    .card {
      background-color: #FFFFFF; 
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      height: 100%;
      color: black; /* Black text for the card */
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
                        <li><a href="user.php" class="hover:bg-gray-700 px-4 py-2 rounded">Home</a></li>
                        <li><a href="showcare.php" class="hover:bg-gray-700 px-4 py-2 rounded">Explore Cars</a></li>
                        <li><a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">Services</a></li>
                        <li><a href="showReserv.php" class="hover:bg-gray-700 px-4 py-2 rounded">Reservation</a></li>
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
    <section class="container flex py-16 px-4 justify-center">
    <a href="showcare.php"><span class="text-3xl font-semibold text-center mb-12 hover:bg-gray-700 px-4 py-2 rounded">Explore Cars</span></a>
    
</section>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 mx-[5px]">

<!-- Country Card 1 with 3D effect -->

  <div class="country-card">
    <div class="card">
      <img src="https://38.media.tumblr.com/783af4bdcf4d3058e5091ddfe3535fb0/tumblr_nlr9mleWgp1rwtzqno1_540.gif" alt="Country Image" class="w-full h-48 object-cover rounded-t-lg">
      <div class="p-6">
      <a  href="showcare.php">
        
        <button type="button" class="text-white bg-black  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-black dark:focus:ring-blue-800">
        Explore Cars
<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
</svg>
</button></a>
       
      </div>
    </div>
  </div>
  <div class="country-card">
    <div class="card">
      <img src="https://steamuserimages-a.akamaihd.net/ugc/942823742473357672/28E0C4506B7F15D51213F7262DF0E1A98E19DF09/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" alt="Country Image" class="w-full h-48 object-cover rounded-t-lg">
      <div class="p-6">
      <a  href="showcare.php">
        
        <button type="button" class="text-white bg-black  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-black dark:focus:ring-blue-800">
        Explore Cars
<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
</svg>
</button></a>
       
      </div>
    </div>
  </div>
  <div class="country-card">
    <div class="card">
      <img src="https://wallpapers-clan.com/wp-content/uploads/2024/04/bmw-on-street-in-rain-gif-desktop-wallpaper-preview.gif" alt="Country Image" class="w-full h-48 object-cover rounded-t-lg">
      <div class="p-6">
      <a  href="showcare.php">
        
        <button type="button" class="text-white bg-black  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-black dark:focus:ring-blue-800">
        Explore Cars
<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
</svg>
</button></a>
       
      </div>
    </div>
  </div>
  <div class="country-card">
    <div class="card">
      <img src="https://i.pinimg.com/originals/fe/6b/6b/fe6b6b794fc330b9c23468b09867a4e9.gif" alt="Country Image" class="w-full h-48 object-cover rounded-t-lg">
      <div class="p-6">
      <a  href="showcare.php">
        
        <button type="button" class="text-white bg-black  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-black dark:focus:ring-blue-800">
        Explore Cars
<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
</svg>
</button></a>
       
      </div>
    </div>
  </div>
  <div class="country-card">
    <div class="card">
      <img src="https://masterpiecer-images.s3.yandex.net/5fb936448ef311eeb5752656ee3db587:upscaled" alt="Country Image" class="w-full h-48 object-cover rounded-t-lg">
      <div class="p-6">
    

        <a  href="showcare.php">
        
        <button type="button" class="text-white bg-black  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-black dark:focus:ring-blue-800">
        Explore Cars
<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
</svg>
</button></a>
      </div>
    </div>
  </div>
  <div class="country-card">
    <div class="card">
      <img src="https://imgcdn.stablediffusionweb.com/2024/11/27/0f96fdeb-e057-4728-8530-0ff852d1de78.jpg" alt="Country Image" class="w-full h-48 object-cover rounded-t-lg">
      <div class="p-6">
      <a  href="showcare.php">
        
        <button type="button" class="text-white bg-black  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-black dark:focus:ring-blue-800">
        Explore Cars
<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
</svg>
</button></a>
       
      </div>
    </div>
  </div>
  <div class="country-card">
    <div class="card">
      <img src="https://pbs.twimg.com/media/GLfEDfmbEAAg3ww.jpg:large" alt="Country Image" class="w-full h-48 object-cover rounded-t-lg">
      <div class="p-6">
      <a  href="showcare.php">
        
        <button type="button" class="text-white bg-black  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-black dark:focus:ring-blue-800">
        Explore Cars
<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
</svg>
</button></a>
       
      </div>
    </div>
  </div>
  <div class="country-card">
    <div class="card">
      <img src="https://masterpiecer-images.s3.yandex.net/c174cade9a2411ee89b9f6744ca365da:upscaled" alt="Country Image" class="w-full h-48 object-cover rounded-t-lg">
      <div class="p-6">
      <a  href="showcare.php">
        
        <button type="button" class="text-white bg-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-black dark:focus:ring-blue-800">
        Explore Cars
<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
</svg>
</button></a>
       
      </div>
    </div>
  </div>
</div>







    <section>
    <!-- Comment Section Container -->
    <div class="max-w-4xl mx-auto p-6 bg-black rounded-lg shadow-lg mt-10">
        <h2 class="text-2xl font-semibold mb-6 text-white">Comments</h2>

        <!-- Existing Comments -->
        <div class="space-y-6">
            <!-- Comment 1 -->
            <div class="p-4 border rounded-lg bg-black shadow-sm flex items-start">
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
            <div class="p-4 border rounded-lg bg-black shadow-sm flex items-start">
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
            <div class="p-4 border rounded-lg bg-black shadow-sm flex items-start">
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
  <div class="max-w-4xl mx-auto my-12 p-6 bg-black border rounded-lg rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold text-center ">Add Your Review</h2>

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
        <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-[#fff] text-black font-semibold rounded-md  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
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
