<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
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
    </style>
<body class="bg-gray-100">

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

</body>
</html>

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
        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="https://free-3dtextureshd.com/wp-content/uploads/2024/08/39.jpg.webp" alt="Sedan Car" class="w-full h-60 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Sedan</h3>
                <p class="text-gray-400 mb-4">Comfortable, sleek, and stylish. Perfect for city rides.</p>
                <div class="mt-4 flex justify-center">
                    <svg class="bg-[#fff] opacity-60" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 19.5C10 20.3284 9.32843 21 8.5 21C7.67157 21 7 20.3284 7 19.5C7 18.6716 7.67157 18 8.5 18C9.32843 18 10 18.6716 10 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    <path d="M18 19.5C18 20.3284 17.3284 21 16.5 21C15.6716 21 15 20.3284 15 19.5C15 18.6716 15.6716 18 16.5 18C17.3284 18 18 18.6716 18 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    <path d="M21 15H11C8.17157 15 6.75736 15 5.87868 14.1213C5 13.2426 5 11.8284 5 9V5C5 3.89543 4.10457 3 3 3" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                    <path d="M9 7.5C9 6.09554 9 5.39331 9.33706 4.88886C9.48298 4.67048 9.67048 4.48298 9.88886 4.33706C10.3933 4 11.0955 4 12.5 4H16.5C17.9045 4 18.6067 4 19.1111 4.33706C19.3295 4.48298 19.517 4.67048 19.6629 4.88886C20 5.39331 20 6.09554 20 7.5C20 8.90446 20 9.60669 19.6629 10.1111C19.517 10.3295 19.3295 10.517 19.1111 10.6629C18.6067 11 17.9045 11 16.5 11H12.5C11.0955 11 10.3933 11 9.88886 10.6629C9.67048 10.517 9.48298 10.3295 9.33706 10.1111C9 9.60669 9 8.90446 9 7.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    </svg>
                    </div>
            </div>
        </div>

        <!-- SUV Card -->
        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="https://c4.wallpaperflare.com/wallpaper/670/888/977/ai-art-bmw-car-smoke-hd-wallpaper-preview.jpg" alt="SUV Car" class="w-full h-60 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">SUV</h3>
                <p class="text-gray-400 mb-4">For those who need more space and power on the road.</p>
                <div class="mt-4 flex justify-center">
                    <svg class="bg-[#fff] opacity-60" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 19.5C10 20.3284 9.32843 21 8.5 21C7.67157 21 7 20.3284 7 19.5C7 18.6716 7.67157 18 8.5 18C9.32843 18 10 18.6716 10 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    <path d="M18 19.5C18 20.3284 17.3284 21 16.5 21C15.6716 21 15 20.3284 15 19.5C15 18.6716 15.6716 18 16.5 18C17.3284 18 18 18.6716 18 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    <path d="M21 15H11C8.17157 15 6.75736 15 5.87868 14.1213C5 13.2426 5 11.8284 5 9V5C5 3.89543 4.10457 3 3 3" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                    <path d="M9 7.5C9 6.09554 9 5.39331 9.33706 4.88886C9.48298 4.67048 9.67048 4.48298 9.88886 4.33706C10.3933 4 11.0955 4 12.5 4H16.5C17.9045 4 18.6067 4 19.1111 4.33706C19.3295 4.48298 19.517 4.67048 19.6629 4.88886C20 5.39331 20 6.09554 20 7.5C20 8.90446 20 9.60669 19.6629 10.1111C19.517 10.3295 19.3295 10.517 19.1111 10.6629C18.6067 11 17.9045 11 16.5 11H12.5C11.0955 11 10.3933 11 9.88886 10.6629C9.67048 10.517 9.48298 10.3295 9.33706 10.1111C9 9.60669 9 8.90446 9 7.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    </svg>
                    </div>
            
            </div>
        </div>

        <!-- Sports Car Card -->
        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="https://mrwallpaper.com/images/high/4k-mercedes-car-2018-0f2otaa9l0gn0xjr.jpg" alt="Sports Car" class="w-full h-60 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Sports Car</h3>
                <p class="text-gray-400 mb-4">Speed, luxury, and excitement. For the thrill-seekers.</p>
               <div class="mt-4 flex justify-center">
                    <svg class="bg-[#fff] opacity-60" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 19.5C10 20.3284 9.32843 21 8.5 21C7.67157 21 7 20.3284 7 19.5C7 18.6716 7.67157 18 8.5 18C9.32843 18 10 18.6716 10 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    <path d="M18 19.5C18 20.3284 17.3284 21 16.5 21C15.6716 21 15 20.3284 15 19.5C15 18.6716 15.6716 18 16.5 18C17.3284 18 18 18.6716 18 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    <path d="M21 15H11C8.17157 15 6.75736 15 5.87868 14.1213C5 13.2426 5 11.8284 5 9V5C5 3.89543 4.10457 3 3 3" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                    <path d="M9 7.5C9 6.09554 9 5.39331 9.33706 4.88886C9.48298 4.67048 9.67048 4.48298 9.88886 4.33706C10.3933 4 11.0955 4 12.5 4H16.5C17.9045 4 18.6067 4 19.1111 4.33706C19.3295 4.48298 19.517 4.67048 19.6629 4.88886C20 5.39331 20 6.09554 20 7.5C20 8.90446 20 9.60669 19.6629 10.1111C19.517 10.3295 19.3295 10.517 19.1111 10.6629C18.6067 11 17.9045 11 16.5 11H12.5C11.0955 11 10.3933 11 9.88886 10.6629C9.67048 10.517 9.48298 10.3295 9.33706 10.1111C9 9.60669 9 8.90446 9 7.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    </svg>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="container mx-auto py-16 px-4">
    <h2 class="text-3xl font-semibold text-center mb-12 text-white">Reservation Details</h2>
    <div class="flex justify-center">
        <!-- Long Vertical Card -->
        <div class="bg-black text-white rounded-2xl shadow-xl w-96 h-auto p-8 transform transition duration-300 hover:scale-105 hover:shadow-2xl hover:opacity-90">
            <!-- Reservation Header -->
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-semibold text-yellow-400">Reservation #12345</h3>
                <span class="bg-green-500 text-white text-sm font-semibold rounded-full px-4 py-1">Confirmed</span>
            </div>
            <!-- Reservation Details -->
            <div class="space-y-6">
                <div class="flex justify-between">
                    <span class="text-gray-400 font-medium">Vehicle:</span>
                    <span class="text-white">Sedan</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-400 font-medium">Reservation Date:</span>
                    <span class="text-white">Jan 5, 2024</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-400 font-medium">Time:</span>
                    <span class="text-white">10:00 AM</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-400 font-medium">Customer Name:</span>
                    <span class="text-white">John Doe</span>
                </div>
                <!-- Additional Info (if needed) -->
                <div class="flex justify-between">
                    <span class="text-gray-400 font-medium">Pickup Location:</span>
                    <span class="text-white">Main Street, Downtown</span>
                </div>
            </div>
            <!-- Action Buttons -->
            <div class="mt-8 flex justify-between">
                <button class="bg-green-500 text-white rounded-lg py-2 px-6 hover:bg-green-600 transition duration-200">
                    <i class="fas fa-check-circle mr-2"></i> Confirm
                </button>
                <button class="bg-yellow-500 text-white rounded-lg py-2 px-6 hover:bg-yellow-600 transition duration-200">
                    <i class="fas fa-pencil-alt mr-2"></i> Modify
                </button>
            </div>
        </div>
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






    <!-- Footer Section -->
    <footer class="bg-gray-800 py-6 mt-16 text-center">
        <p>&copy; 2024 Car Rental. All rights reserved.</p>
    </footer>

</body>
</html>
