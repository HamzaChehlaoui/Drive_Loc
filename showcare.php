<?php   

require('actionAddVehicles.php');
 require('Care.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-black text-[#fff]">
    <style>
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
                        <li><a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">
                        <select name=""  required class="bg-black">
                            <option value="" disabled selected>Category</option>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?php echo $category['idCategorie']; ?>"><?php echo $category['nom']; ?></option>
                            <?php endforeach; ?>
                          </select></li></a>

                        <li><a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

<?php

 $db = new Database();
 $connection = $db->getConnection();
 
 $car = new Car($connection);
 
 $cars = $car->getCars();


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
                      <a href="reservationuser.php">
                       <div class="mt-4 flex justify-center">
                          <svg class="bg-[#fff] opacity-60" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 19.5C10 20.3284 9.32843 21 8.5 21C7.67157 21 7 20.3284 7 19.5C7 18.6716 7.67157 18 8.5 18C9.32843 18 10 18.6716 10 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                              <path d="M18 19.5C18 20.3284 17.3284 21 16.5 21C15.6716 21 15 20.3284 15 19.5C15 18.6716 15.6716 18 16.5 18C17.3284 18 18 18.6716 18 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                              <path d="M21 15H11C8.17157 15 6.75736 15 5.87868 14.1213C5 13.2426 5 11.8284 5 9V5C5 3.89543 4.10457 3 3 3" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                              <path d="M9 7.5C9 6.09554 9 5.39331 9.33706 4.88886C9.48298 4.67048 9.67048 4.48298 9.88886 4.33706C10.3933 4 11.0955 4 12.5 4H16.5C17.9045 4 18.6067 4 19.1111 4.33706C19.3295 4.48298 19.517 4.67048 19.6629 4.88886C20 5.39331 20 6.09554 20 7.5C20 8.90446 20 9.60669 19.6629 10.1111C19.517 10.3295 19.3295 10.517 19.1111 10.6629C18.6067 11 17.9045 11 16.5 11H12.5C11.0955 11 10.3933 11 9.88886 10.6629C9.67048 10.517 9.48298 10.3295 9.33706 10.1111C9 9.60669 9 8.90446 9 7.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                              </svg> 
                              </div></a>
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
  <!-- Footer Section -->
  <footer class="bg-gray-800 py-6 mt-16 text-center">
        <p>&copy; 2024 Car Rental. All rights reserved.</p>
    </footer>
</body>
</html>

