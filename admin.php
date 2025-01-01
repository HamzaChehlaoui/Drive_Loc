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
</style>

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
                        <li><a href="admin.php" class="hover:bg-gray-700 px-4 py-2 rounded">Home</a></li>
                        <li><a href="add_Vehicles.php" class="hover:bg-gray-700 px-4 py-2 rounded">Add Vehicles</a></li>
                        <li><a href="#" class="hover:bg-gray-700 px-4 py-2 rounded"> reservations</a></li>
                        <li><a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">Statistics</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
   
    <!-- Category Form -->
    <div class="max-w-4xl mx-auto my-12 p-6 bg-gray-800 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center text-indigo-400 mb-6">Add New Category</h2>

        <form action="addCategory.php" method="POST">
            <!-- Category Name -->
            <div class="mb-6">
                <label for="nom" class="block text-lg font-medium text-gray-300">Category Name</label>
                <input type="text" name="nom" id="nom" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-600 bg-gray-900 text-white focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter category name" required>
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label for="description" class="block text-lg font-medium text-gray-300">Category Description</label>
                <textarea name="description" id="description" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-600 bg-gray-900 text-white focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter category description" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" name="submit" class="w-full sm:w-auto px-6 py-3 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                    Add Category
                </button>
            </div>
        </form>
    </div>





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
                                        <!-- Edit and Delete buttons -->
                                        <div class="mt-4 flex justify-between">
                            <!-- Edit Button -->
                            <a href="editdish.php?id=<?=$plat['id']?>" class="bg-[#fff] opacity-60">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.7734 4.42255L8.01924 12.2706C7.79291 12.4996 7.67974 12.6142 7.60917 12.7552C7.53859 12.8961 7.51521 13.0544 7.46845 13.3709L7.30803 14.4566C7.12534 15.693 7.034 16.3112 7.40145 16.6645C7.7689 17.0178 8.39306 16.9118 9.64137 16.6999L10.7375 16.5139C11.0571 16.4596 11.2168 16.4325 11.3579 16.3593C11.499 16.2861 11.6121 16.1715 11.8385 15.9425L19.5927 8.09446C20.2553 7.42379 20.5866 7.08846 20.5814 6.67712C20.5761 6.26578 20.2363 5.93906 19.5566 5.28563L18.6209 4.38599C17.9412 3.73256 17.6014 3.40584 17.1844 3.4112C16.7674 3.41655 16.4361 3.75188 15.7734 4.42255Z" stroke="black"></path>
                                    <path d="M18.3329 9.22206L14.7773 5.6665" stroke="black"></path>
                                    <path d="M21 21H3" stroke="black" stroke-linecap="round"></path>
                                </svg>
                            </a>
                            <!-- Delete Button -->
                            <a href="deletedish.php?id=<?=$plat['id']?>" class="bg-[#fff] opacity-60">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 7L5.29949 14.7868C5.41251 17.7252 5.46902 19.1944 6.40719 20.0972C7.34537 21 8.81543 21 11.7555 21H12.2433C15.1842 21 16.6547 21 17.5928 20.0972C18.531 19.1944 18.5875 17.7252 18.7006 14.7868L19 7" stroke="black" stroke-linecap="round"></path>
                                    <path d="M10 13V16" stroke="black" stroke-linecap="round"></path>
                                    <path d="M14 13V16" stroke="black" stroke-linecap="round"></path>
                                    <path d="M20.4706 4.43329C18.6468 4.27371 17.735 4.19392 16.8229 4.13611C13.6109 3.93249 10.3891 3.93249 7.17707 4.13611C6.26506 4.19392 5.35318 4.27371 3.52942 4.43329" stroke="black" stroke-linecap="round"></path>
                                    <path d="M13.7647 3.95212C13.7647 3.95212 13.3993 2.98339 11.6471 2.9834C9.8949 2.9834 9.52942 3.95211 9.52942 3.95211" stroke="black" stroke-linecap="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>


            </div>
      

        <!-- SUV Card -->
        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="https://c4.wallpaperflare.com/wallpaper/670/888/977/ai-art-bmw-car-smoke-hd-wallpaper-preview.jpg" alt="SUV Car" class="w-full h-60 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">SUV</h3>
                <p class="text-gray-400 mb-4">For those who need more space and power on the road.</p>
                                        <!-- Edit and Delete buttons -->
                    <div class="mt-4 flex justify-between ">
                            <!-- Edit Button -->
                            <a href="editdish.php?id=<?=$plat['id']?>" class="bg-[#fff] opacity-60">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.7734 4.42255L8.01924 12.2706C7.79291 12.4996 7.67974 12.6142 7.60917 12.7552C7.53859 12.8961 7.51521 13.0544 7.46845 13.3709L7.30803 14.4566C7.12534 15.693 7.034 16.3112 7.40145 16.6645C7.7689 17.0178 8.39306 16.9118 9.64137 16.6999L10.7375 16.5139C11.0571 16.4596 11.2168 16.4325 11.3579 16.3593C11.499 16.2861 11.6121 16.1715 11.8385 15.9425L19.5927 8.09446C20.2553 7.42379 20.5866 7.08846 20.5814 6.67712C20.5761 6.26578 20.2363 5.93906 19.5566 5.28563L18.6209 4.38599C17.9412 3.73256 17.6014 3.40584 17.1844 3.4112C16.7674 3.41655 16.4361 3.75188 15.7734 4.42255Z" stroke="black"></path>
                                    <path d="M18.3329 9.22206L14.7773 5.6665" stroke="black"></path>
                                    <path d="M21 21H3" stroke="black" stroke-linecap="round"></path>
                                </svg>
                            </a>
                            <!-- Delete Button -->
                            <a href="deletedish.php?id=<?=$plat['id']?>" class="bg-[#fff] opacity-60">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 7L5.29949 14.7868C5.41251 17.7252 5.46902 19.1944 6.40719 20.0972C7.34537 21 8.81543 21 11.7555 21H12.2433C15.1842 21 16.6547 21 17.5928 20.0972C18.531 19.1944 18.5875 17.7252 18.7006 14.7868L19 7" stroke="black" stroke-linecap="round"></path>
                                    <path d="M10 13V16" stroke="black" stroke-linecap="round"></path>
                                    <path d="M14 13V16" stroke="black" stroke-linecap="round"></path>
                                    <path d="M20.4706 4.43329C18.6468 4.27371 17.735 4.19392 16.8229 4.13611C13.6109 3.93249 10.3891 3.93249 7.17707 4.13611C6.26506 4.19392 5.35318 4.27371 3.52942 4.43329" stroke="black" stroke-linecap="round"></path>
                                    <path d="M13.7647 3.95212C13.7647 3.95212 13.3993 2.98339 11.6471 2.9834C9.8949 2.9834 9.52942 3.95211 9.52942 3.95211" stroke="black" stroke-linecap="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
        </div>


        <!-- Sports Car Card -->
        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="https://mrwallpaper.com/images/high/4k-mercedes-car-2018-0f2otaa9l0gn0xjr.jpg" alt="Sports Car" class="w-full h-60 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Sports Car</h3>
                <p class="text-gray-400 mb-4">Speed, luxury, and excitement. For the thrill-seekers.</p>
                                      <!-- Edit and Delete buttons -->
                                      <div class="mt-4 flex justify-between">
                            <!-- Edit Button -->
                            <a href="editdish.php?id=<?=$plat['id']?>" class="bg-[#fff] opacity-60">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.7734 4.42255L8.01924 12.2706C7.79291 12.4996 7.67974 12.6142 7.60917 12.7552C7.53859 12.8961 7.51521 13.0544 7.46845 13.3709L7.30803 14.4566C7.12534 15.693 7.034 16.3112 7.40145 16.6645C7.7689 17.0178 8.39306 16.9118 9.64137 16.6999L10.7375 16.5139C11.0571 16.4596 11.2168 16.4325 11.3579 16.3593C11.499 16.2861 11.6121 16.1715 11.8385 15.9425L19.5927 8.09446C20.2553 7.42379 20.5866 7.08846 20.5814 6.67712C20.5761 6.26578 20.2363 5.93906 19.5566 5.28563L18.6209 4.38599C17.9412 3.73256 17.6014 3.40584 17.1844 3.4112C16.7674 3.41655 16.4361 3.75188 15.7734 4.42255Z" stroke="black"></path>
                                    <path d="M18.3329 9.22206L14.7773 5.6665" stroke="black"></path>
                                    <path d="M21 21H3" stroke="black" stroke-linecap="round"></path>
                                </svg>
                            </a>
                            <!-- Delete Button -->
                            <a href="deletedish.php?id=<?=$plat['id']?>" class="bg-[#fff] opacity-60">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 7L5.29949 14.7868C5.41251 17.7252 5.46902 19.1944 6.40719 20.0972C7.34537 21 8.81543 21 11.7555 21H12.2433C15.1842 21 16.6547 21 17.5928 20.0972C18.531 19.1944 18.5875 17.7252 18.7006 14.7868L19 7" stroke="black" stroke-linecap="round"></path>
                                    <path d="M10 13V16" stroke="black" stroke-linecap="round"></path>
                                    <path d="M14 13V16" stroke="black" stroke-linecap="round"></path>
                                    <path d="M20.4706 4.43329C18.6468 4.27371 17.735 4.19392 16.8229 4.13611C13.6109 3.93249 10.3891 3.93249 7.17707 4.13611C6.26506 4.19392 5.35318 4.27371 3.52942 4.43329" stroke="black" stroke-linecap="round"></path>
                                    <path d="M13.7647 3.95212C13.7647 3.95212 13.3993 2.98339 11.6471 2.9834C9.8949 2.9834 9.52942 3.95211 9.52942 3.95211" stroke="black" stroke-linecap="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>


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
<script src="js/script.js"></script>
</body>
</html>
