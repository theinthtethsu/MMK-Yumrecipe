<?php
$images_path = "/yumrecipe/User/View/resources/img/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receipe Detail Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../../js/receipe-edit.js"></script>
</head>

<body class="bg-white dark:bg-gray-900 dark:text-white">
  <?php require_once '../../../common/header-after-login.php'; ?>
  <?php require_once '../../../common/nav.php'; ?>
  <div>
    <div class="bg-red-500 w-full h-auto pl-8 p-4 text-white text-2xl">Shredded Beef Tacos</div>
  </div>
  <div>
    <div class="flex justify-between items-center m-4">
      <div class="flex items-center gap-2">
        <!-- Existing content ... -->
      </div>
      <div class="flex space-x-4">

        <!-- Delete Icon -->
        <a href="delete_page.php" class="text-gray-500 hover:text-red-500">

          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="red"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6l-2 14H7L5 6"></path>
            <path d="M10 11v6"></path>
            <path d="M14 11v6"></path>
            <path d="M9 3h6l1 3H8l1-3z"></path>
          </svg>
        </a>

      </div>
    </div>
  </div>
  <div class="flex items-center justify-start m-4 ml-8 space-x-4">
    <div class="flex items-center gap-2 ">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
        class="w-4 h-4 text-gray-500">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M15 17h5l-1.405-1.405A2.003 2.003 0 0018 14c-1.5 0-3 1.5-4 1.5S9 14 7 14a2.003 2.003 0 00-1.595.595L2 17h5m8 0v3m0 0H7v-3M8 6a4 4 0 118 0 4 4 0 01-8 0z" />
      </svg>

      <p class="text-lg">Author</p>
    </div>
    <div class="flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
        class="w-4 h-4 text-gray-500">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M8 7V3m8 4V3M5 10h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V12a2 2 0 012-2z" />
      </svg>

      <p class="text-lg">Date</p>
    </div>
    <div class="flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
        class="w-4 h-6 pt-1 text-red-500">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M21 15c0 1.1-.9 2-2 2H5c-1.1 0-2-.9-2-2V7c0-1.1.9-2 2-2h14c1.1 0 2 .9 2 2v8z" />
      </svg>

      <p class="text-lg">Comments</p>
    </div>
    <div class="flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
        class="w-4 h-4 text-yellow-500">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 17.27l6.18 3.73-1.64-7.03L21 9.24l-7.19-.61L12 2 10.19 8.63 3 9.24l4.46 4.73-1.64 7.03L12 17.27z" />
      </svg>

      <p class="text-lg">Rating</p>
    </div>
  </div>
  <div class="flex items-center space-x-4">
    <img id="mainImage" class="w-1/2 h-96 m-8" src="<?php echo $images_path ?>recipe/shredded-beef-tacos-recipe.jpg"
      alt="Hot Spinach Artichoke Dip" class="w-full md:w-1/2 object-cover" />

    <!-- New Buttons -->
    <div class="flex flex-col ">
      <!-- Image Preview -->
      <input type="file" id="imageUpload" accept="image/*" class="hidden" onchange="previewImage(event)">
      <img id="imagePreview" class="w-1/2 h-96 m-8 hidden" alt="Image Preview" />

      <button onclick="document.getElementById('imageUpload').click();"
        class="bg-white text-black px-2 py-1 border-2 border-red-500 rounded-lg hover:bg-red-600 mt-80 ">Upload New
        Photo</button>
    </div>
  </div>
  <div class="flex items-center justify-start ml-8 space-x-8 dark:text-white">
    <p class="text-sm">Serving Size</p>
    <div class="px-2 rounded-lg ">
      <div class="h-10 w-0.5 bg-yellow-500"></div>
    </div>
    <p class="text-sm">Cooking Time</p>
    <div>

      <button
        class="flex items-center space-x-2 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 focus:outline-none">
        <svg class="w-4 h-4" fill="#ffffff" height="200px" width="200px" version="1.1" id="Layer_1"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"
          enable-background="new 0 0 64 64" xml:space="preserve">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <g id="Printer">
              <path
                d="M57.7881012,14.03125H52.5v-8.0625c0-2.2091999-1.7909012-4-4-4h-33c-2.2091999,0-4,1.7908001-4,4v8.0625H6.2119002 C2.7871001,14.03125,0,16.8183498,0,20.2431507V46.513649c0,3.4248009,2.7871001,6.2119026,6.2119002,6.2119026h2.3798995 c0.5527,0,1-0.4472008,1-1c0-0.5527-0.4473-1-1-1H6.2119002C3.8896,50.7255516,2,48.8359489,2,46.513649V20.2431507 c0-2.3223,1.8896-4.2119007,4.2119002-4.2119007h51.5762024C60.1102982,16.03125,62,17.9208508,62,20.2431507V46.513649 c0,2.3223-1.8897018,4.2119026-4.2118988,4.2119026H56c-0.5527992,0-1,0.4473-1,1c0,0.5527992,0.4472008,1,1,1h1.7881012 C61.2128983,52.7255516,64,49.9384499,64,46.513649V20.2431507C64,16.8183498,61.2128983,14.03125,57.7881012,14.03125z M13.5,5.96875c0-1.1027999,0.8971996-2,2-2h33c1.1027985,0,2,0.8972001,2,2v8h-37V5.96875z">
              </path>
              <path
                d="M44,45.0322495H20c-0.5517998,0-0.9990005,0.4472008-0.9990005,0.9990005S19.4482002,47.0302505,20,47.0302505h24 c0.5517006,0,0.9990005-0.4472008,0.9990005-0.9990005S44.5517006,45.0322495,44,45.0322495z">
              </path>
              <path
                d="M44,52.0322495H20c-0.5517998,0-0.9990005,0.4472008-0.9990005,0.9990005S19.4482002,54.0302505,20,54.0302505h24 c0.5517006,0,0.9990005-0.4472008,0.9990005-0.9990005S44.5517006,52.0322495,44,52.0322495z">
              </path>
              <circle cx="7.9590998" cy="21.8405495" r="2"></circle>
              <circle cx="14.2856998" cy="21.8405495" r="2"></circle>
              <circle cx="20.6121998" cy="21.8405495" r="2"></circle>
              <path
                d="M11,62.03125h42v-26H11V62.03125z M13.4036999,38.4349518h37.1925964v21.1925964H13.4036999V38.4349518z">
              </path>
            </g>
          </g>
        </svg>
        <span class="text-lg">Print</span>
      </button>
    </div>
  </div>

  <div class="m-8 dark:text-white grid grid-cols-4 gap-4">
    <p id="descriptionText" class="col-span-2 text-sm md:text-base">It's a vegetarian pasta loaded with a whole head of
      broccoli, corn,
      zucchinis,
      capsicum/peppers and onion, and smothered in a garlic herb tomato sauce. </p>

    <!-- New input box for additional description -->
    <input id="newDescription" type="text" class="hidden border-2 border-red-500 rounded-lg p-1 mt-2 col-span-2"
      placeholder="Add new description" />

    <button onclick="showDescriptionInput()"
      class="col-span-1 border-2 h-8 border-red-500 rounded-lg hover:bg-red-600 text-sm md:text-base">Add more
      description</button>
    <button onclick="addDescription()" class="border-2 w-10 h-8 rounded-lg border-red-500">+</button>
  </div>

  <div class="flex flex-col md:flex-row justify-between gap-4 mt-6 dark:text-white">
    <div class="md:w-1/2 p-4 grid grid-cols-6 gap-4 ml-4">
      <div class="col-span-2">
        <h2 class="text-lg md:text-2xl font-bold">Ingredients</h2>
        <ul id="ingredientsList" class="list-disc pl-10 py-4 text-sm md:text-base">
          <li class="py-1">1 cup spinach</li>
          <li class="py-1">1 cup artichokes</li>
          <li class="py-1">1 cup cream cheese</li>
          <li class="py-1">1 cup mozzarella cheese</li>
          <li class="py-1">1 cup mozzarella cheese</li>
          <li class="py-1">1 cup mozzarella cheese</li>
          <!-- Add more ingredients as needed -->
        </ul>
        <input id="newIngredient" type="text" class="hidden border-2 border-red-500 rounded-lg p-1 mt-2"
          placeholder="Add new ingredient" />
      </div>

      <button
        class="col-span-2 pl-4 border-2 h-6 md:h-8 border-red-500 rounded-lg hover:bg-red-600 text-sm md:text-base"
        onclick="showIngredientInput()">Add More Ingredients</button>
      <button class="border-2 w-8 md:w-10 h-6 md:h-8 rounded-lg border-red-500 text-xs md:text-sm"
        onclick="addIngredient()">+</button>
    </div>

    <div class="w-68 p-4 mr-28 bg-white rounded-md shadow-md border dark:bg-gray-700 border-red-400 ">
      <h2 class="text-lg font-bold text-red-500 mb-1">Nutrition Facts</h2>
      <p class="text-sm text-red-500 mb-4">Amount Per Serving</p>
      <div class="flex justify-between mb-2">
        <span>Calories</span>
        <span class="font-bold">459</span>
      </div>
      <div class="flex justify-between mb-2">
        <span>Fat(g)</span>
        <span class="font-bold">20.9g</span>
      </div>
      <div class="flex justify-between mb-2">
        <span>Cholesterol(mg)</span>
        <span class="font-bold">85 mg</span>
      </div>
      <div class="flex justify-between mb-2">
        <span>Sodium(mg)</span>
        <span class="font-bold">500mg</span>
      </div>
      <div class="flex justify-between mb-2">
        <span>Sugars(g)</span>
        <span class="font-bold">2.3g</span>
      </div>
      <div class="flex justify-between">
        <span>Protein(g)</span>
        <span class="font-bold">14g</span>
      </div>
      <div class="flex justify-between">
        <!-- New input box for adding items -->
        <input id="newItem" type="text" class="hidden border-2 border-red-500 rounded-lg p-1" placeholder="Add new item" />
        <button onclick="showItemInput()" class="border-2 h-8 border-red-500 rounded-lg hover:bg-red-600">Add Item</button>
        <button onclick="addItem()" class="border-2 w-10 h-8 rounded-lg border-red-500">+</button>

        <!-- New input box for adding calories -->
        <input id="newCalorie" type="text" class="hidden border-2 border-red-500 rounded-lg p-1" placeholder="Add new calorie" />
        <button onclick="showCalorieInput()" class="border-2 h-8 border-red-500 rounded-lg hover:bg-red-600">Add Calorie</button>
        <button onclick="addCalorie()" class="border-2 w-10 h-8 rounded-lg border-red-500">+</button>
      </div>

    </div>
  </div>
  <div class="md:w-1/2 p-4 dark:text-white grid grid-cols-6 gap-4">
    <div class="col-span-3 ml-4">
      <h2 class="text-lg md:text-2xl font-bold mt-4">Instructions</h2>
      <ol id="instructionsList" class="list-decimal pl-10 py-4 text-sm md:text-base">
        <li class="py-2">Preheat the oven to 350°F (175°C).</li>
        <li class="py-2">Mix all ingredients in a bowl.</li>
        <li class="py-2">Transfer to a baking dish and bake for 20 minutes.</li>
        <li class="py-2">Transfer to a baking dish and bake for 20 minutes.</li>
        <!-- Add more instructions as needed -->
      </ol>
      <input id="newInstruction" type="text" class="hidden border-2 border-red-500 rounded-lg p-1"
        placeholder="Add new instruction" />
    </div>

    <button class="col-span-2 pl-4 border-2 h-6 md:h-8 border-red-500 rounded-lg text-sm md:text-base">Add More
      Ingredients</button>
    <button
      class="border-2 w-8 md:w-10 h-6 md:h-8 rounded-lg border-red-500 text-xs md:text-sm hover:bg-red-700 hover:text-white"
      onclick="showInput()">+</button>
  </div>

  </div>

  </div>

  <div class="flex ml-8 flex-col md:flex-row justify-between gap-6 mt-6 dark:text-white">
    <!-- All Comments Section -->
    <div class="w-full md:w-3/4">
      <h2 class="text-lg font-bold mb-4">All Comments</h2>
      <!-- Comment -->
      <div class="mb-4">
        <p class="font-semibold">Author Name</p>
        <p class="text-red-500">It really Good!!!!</p>
        <div class="h-[2px] w-1/2 bg-red-500 mt-2"></div>
      </div>
      <div class="mb-4">
        <p class="font-semibold">Author Name</p>
        <p class="text-red-500">It really Good!!!!</p>
        <div class="h-[2px] w-1/2 bg-red-500 mt-2"></div>
      </div>
    </div>

  </div>
  <div class="flex justify-end">
    <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 m-4">
      Save
    </button>
  </div>
  <div class="bg-gray-900">
    <?php require_once '../../../common/footer.php'; ?>
  </div>

  <script>
    function previewImage(event) {
      const mainImage = document.getElementById('mainImage');
      const file = event.target.files[0];
      const reader = new FileReader();

      reader.onload = function (e) {
        // Update only the main image source
        mainImage.src = e.target.result;
      }

      if (file) {
        reader.readAsDataURL(file);
      }
    }

    function showDescriptionInput() {
      const input = document.getElementById('newDescription');
      input.classList.toggle('hidden'); // Toggle visibility of the input box
    }

    function addDescription() {
      const input = document.getElementById('newDescription');
      const descriptionText = document.getElementById('descriptionText');

      if (input.value.trim() !== "") {
        // Append the new description below the existing text
        descriptionText.innerHTML += "<br>" + input.value; // Add new description
        input.value = ""; // Clear the input box
        input.classList.add('hidden'); // Hide the input box again
      }
    }
  </script>

</body>

</html>