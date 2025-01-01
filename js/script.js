document.addEventListener('DOMContentLoaded', function () {
  const stars = document.querySelectorAll('.star');
  const ratingInput = document.getElementById('rating');
  
  stars.forEach(function(star, index) {
   
    star.addEventListener('mouseover', function() {
      resetStarColors();
      highlightStars(index + 1);
    });

    star.addEventListener('mouseout', function() {
      resetStarColors();
      if (ratingInput.value) {
        highlightStars(ratingInput.value);
      }
    });

    star.addEventListener('click', function() {
      ratingInput.value = index + 1;
    });
  });

  function highlightStars(count) {
    for (let i = 0; i < count; i++) {
      stars[i].classList.add('text-yellow-500');
    }
  }

  function resetStarColors() {
    stars.forEach(function(star) {
      star.classList.remove('text-yellow-500');
    });
  }
});


    function addVehicleField() {
      var container = document.getElementById("vehicle-fields-container");

      var newField = document.createElement("div");
      newField.classList.add("grid", "grid-cols-1", "sm:grid-cols-2", "gap-6", "mb-6");

      newField.innerHTML = `
        <div>
          <label for="vehicle-model" class="block text-lg font-medium text-gray-300">Vehicle Model</label>
          <input type="text" name="vehicle-model[]" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-600 bg-gray-900 text-white focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter vehicle model" required>
        </div>
       <!-- Dynamic Category Dropdown -->
          <div>
            <label for="vehicle-category" class="block text-lg font-medium text-gray-300">Category</label>
            <select name="vehicle-category[]" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-600 bg-gray-900 text-white focus:ring-indigo-500 focus:border-indigo-500" required>
              <option value="" disabled selected>Select category</option>
              <?php foreach ($categories as $category): ?>
                  <option value="<?php echo $category['idCategorie']; ?>"><?php echo $category['nom']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        <div>
          <label for="vehicle-price" class="block text-lg font-medium text-gray-300">Price</label>
          <input type="number" name="vehicle-price[]" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-600 bg-gray-900 text-white focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter vehicle price" required>
        </div>
        <div>
          <label for="vehicle-availability" class="block text-lg font-medium text-gray-300">Availability</label>
          <select name="vehicle-disponible[]" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-600 bg-gray-900 text-white focus:ring-indigo-500 focus:border-indigo-500" required>
            <option value="available">Available</option>
            <option value="unavailable">Unavailable</option>
          </select>
        </div>
      `;

      container.appendChild(newField);
    }
  
