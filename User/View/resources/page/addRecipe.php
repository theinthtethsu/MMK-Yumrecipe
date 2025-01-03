<?php
$user_path = "/yumrecipe/User/View/resources/page/";
$blog_path = "/yumrecipe/User/View/resources/page/Blog/";
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Recipe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <script src="https://unpkg.com/phosphor-icons"></script>
  </head>
  
  <body class="dark:bg-gray-900 dark:text-white">
  <?php include_once '../../common/header-after-login.php'; ?>
    <section
      class="h-screen sm:h-[75vh] relative bg-cover bg-center text-white"
      style="
        background-image: linear-gradient(
            rgba(19, 19, 19, 0.6),
            rgba(30, 30, 30, 0.6)
          ),
          url('../img/hero.jpg');
      "
    >
      <nav class="mx-auto max-w-7xl flex justify-around pt-6 font-semibold">
        <a
          href="<?php echo $user_path; ?>homepage.php" class="hover:text-red-600 <?php echo basename($_SERVER['PHP_SELF']) == 'homepage.php' ? 'text-red-500' : '' ?>"
          class="text-white no-underline hover:text-red-500 hover:font-bold transition duration-300"
        >
          Home
        </a>
        <a
          href="<?php echo $user_path; ?>Recipe/receipe.php" class="hover:text-red-600 <?php echo basename($_SERVER['PHP_SELF']) == 'receipe.php' ? 'text-red-500' : '' ?>"
          class="text-white no-underline hover:text-red-500 hover:font-bold transition duration-300"
        >
          Recipes
        </a>
        <a
          href="<?php echo $user_path; ?>add_recipe.php" class="hover:text-red-600 <?php echo basename($_SERVER['PHP_SELF']) == 'add_recipe.php' ? 'text-red-500' : '' ?>"
          class="text-white no-underline hover:text-red-500 hover:font-bold transition duration-300"
        >
          Add Recipes
        </a>
        <a
          href="<?php echo $blog_path; ?>blog.php" class="hover:text-red-600 <?php echo basename($_SERVER['PHP_SELF']) == 'blog.php' ? 'text-red-500' : '' ?>"
          class="text-white no-underline hover:text-red-500 hover:font-bold transition duration-300"
        >
          Blogs
        </a>
        <a
          href="<?php echo $user_path; ?>about_us.php" class="hover:text-red-600 <?php echo basename($_SERVER['PHP_SELF']) == 'about_us.php' ? 'text-red-500' : '' ?>"
          class="text-white no-underline hover:text-red-500 hover:font-bold transition duration-300"
        >
          About Us
        </a>
      </nav>

      <div
        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-screen-xl"
      >
        <div class="w-3/4 sm:w-1/2">
          <h1 class="text-2xl sm:text-4xl font-bold mb-8 leading-tight">
            Create Your Own Delish Recipes!
          </h1>
          <p class="text-base sm:text-lg line-height-1.6">
            Unleash your inner chef and craft your own unique recipes. Share
            your mouthwatering creations, ingredients, and steps with the world,
            and inspire others to cook with passion!
          </p>
        </div>
      </div>
    </section>

    <section class="container mx-auto py-8 px-4">
      <h2 class="text-center text-4xl font-bold mb-8">Add a Recipe</h2>
      <form class="max-w-lg mx-auto space-y-8 dark:text-gray-600">
        <!-- Recipe Title -->
        <div>
          <label
            for="title"
            class="block text-sm font-semibold mb-1 text-gray-600 dark:text-white" 
            >Recipe Title</label
          >
          <input
            id="title"
            type="text"
            required
            class="w-full border rounded p-2 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
          />
        </div>

        <!-- Description -->
        <div>
          <label
            for="description"
            class="block text-sm font-semibold mb-1 text-gray-600 dark:text-white"
            >Description</label
          >
          <textarea
            id="description"
            rows="4"
            class="w-full border rounded p-2 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
          ></textarea>
        </div>

        <!-- Category -->
        <div>
          <label
            for="category"
            class="block text-sm font-semibold mb-1 text-gray-600 dark:text-white"
            >Category</label
          >
          <select
            id="category"
            class="dark:bg-gray-900 dark:text-white w-full border rounded p-2 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
          >
            <option>Breakfast</option>
            <option>Lunch</option>
            <option>Dinner</option>
          </select>
        </div>

        <!-- Number of Servings -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label
              for="servings"
              class="block text-sm font-semibold mb-1 text-gray-600 dark:text-white"
              >Number of Servings</label
            >
            <input
              id="servings"
              type="number"
              class="w-full border rounded p-2 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
            />
          </div>
        </div>
        <!-- Cooking Time -->
        <div>
          <label
            for="time"
            class="block text-sm font-semibold mb-2 text-gray-600 dark:text-white"
            >Cooking Time</label>
          <div class="flex flex-col md:flex-row items-center space-x-0 md:space-x-4 space-y-4 md:space-y-0">
            <!-- Hours Picker -->
            <div>
              <label
                for="hours"
                class="block text-xs font-medium text-gray-500 mb-1 dark:text-white"
                >Hours</label
              >
              <select
                id="hours"
                class="rounded-md block w-full px-4 py-2 text-gray-700 bg-white border outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
              >
                <option value="" disabled selected>--</option>
                <!-- Hour options (0-23) -->
                <script>
                  for (let h = 0; h < 24; h++) {
                    document.write(
                      `<option value="${h}">${h
                        .toString()
                        .padStart(2, "0")}</option>`
                    );
                  }
                </script>
              </select>
            </div>

            <!-- Minutes Picker -->
            <div>
              <label
                for="minutes"
                class="block text-xs font-medium text-gray-500 mb-1 dark:text-white"
                >Minutes</label
              >
              <select
                id="minutes"
                class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
              >
                <option value="" disabled selected>--</option>
                <!-- Minute options (0-59) -->
                <script>
                  for (let m = 0; m < 60; m++) {
                    document.write(
                      `<option value="${m}">${m
                        .toString()
                        .padStart(2, "0")}</option>`
                    );
                  }
                </script>
              </select>
            </div>
          </div>
        </div>

        <!-- Ingredients -->
        <div>
          <label class="block text-sm font-semibold mb-1 text-gray-600 dark:text-white">Ingredients</label>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <input id="ingredient-name" type="text" placeholder="Olive oil" class="border rounded p-2 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500" />
            <input id="ingredient-quantity" type="number" placeholder="2" class="border rounded p-2 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500" />
            <input id="ingredient-unit" type="text" placeholder="tablespoons" class="border rounded p-2 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500" />
          </div>
          <button type="button" class="text-red-500 border border-red-500 px-4 py-3 rounded hover:bg-red-500 hover:text-white transition" onclick="addIngredient()">
            Add Ingredients
          </button>
          <div id="ingredient-list" class="mt-4 bg-gray-100 p-4 rounded">
            <h3 class="text-lg font-semibold mb-2">Added</h3>
            <!-- Ingredients will be added here -->
          </div>
        </div>

        <script>
          function addIngredient() {
            const name = document.getElementById('ingredient-name').value.trim();
            const quantity = document.getElementById('ingredient-quantity').value.trim();
            const unit = document.getElementById('ingredient-unit').value.trim();

            if (name && quantity && unit) {
              const ingredientList = document.getElementById('ingredient-list');
              const ingredientItem = document.createElement('div');
              ingredientItem.className = 'flex justify-between items-center bg-white p-2 mb-2 rounded shadow';
              ingredientItem.innerHTML = `
                <span>${name} ${quantity}${unit}</span>
                <button onclick="removeIngredient(this)" class="text-red-500">✖</button>
              `;
              ingredientList.appendChild(ingredientItem);

              // Clear input fields
              document.getElementById('ingredient-name').value = '';
              document.getElementById('ingredient-quantity').value = '';
              document.getElementById('ingredient-unit').value = '';
            } else {
              alert('Please fill in all fields.');
            }
          }

          function removeIngredient(button) {
            const ingredientItem = button.parentElement;
            ingredientItem.remove();
          }
        </script>

        <!-- Instructions -->
        <div>
          <label class="block text-sm font-semibold mb-1 text-gray-600 dark:text-white">Instructions</label>
          <div class="flex flex-col md:flex-row gap-4 mb-4">
            <input
              id="instruction-text"
              type="text"
              required
              placeholder="Click Add Instructions line by line"
              class="w-full border border-red-500 rounded p-2 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
            />
          </div>
          <button
            type="button"
            class="text-red-500 border border-red-500 px-4 py-3 rounded hover:bg-red-500 hover:text-white transition"
            onclick="addInstruction()"
          >
            Add Instructions
          </button>
          <div id="instruction-list" class="mt-4 bg-gray-100 p-4 rounded">
            <h3 class="text-lg font-semibold mb-2">Added Instructions</h3>
            <!-- Instructions will be added here -->
          </div>
        </div>

        <script>
          function addInstruction() {
            const instructionText = document.getElementById('instruction-text').value.trim();

            if (instructionText) {
              const instructionList = document.getElementById('instruction-list');
              const instructionItem = document.createElement('div');
              instructionItem.className = 'flex justify-between items-center bg-white p-2 mb-2 rounded shadow';
              instructionItem.innerHTML = `
                <span>${instructionText}</span>
                <button onclick="removeInstruction(this)" class="text-red-500">✖</button>
              `;
              instructionList.appendChild(instructionItem);

              // Clear input field
              document.getElementById('instruction-text').value = '';
            } else {
              alert('Please enter an instruction.');
            }
          }

          function removeInstruction(button) {
            const instructionItem = button.parentElement;
            instructionItem.remove();
          }
        </script>

        <!-- Nutritional Facts -->
        <div>
          <label class="block text-sm font-semibold mb-1 text-gray-600 dark:text-white"
            >Nutritional Facts</label
          >
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
              <label class="text-xs text-gray-600 block mb-1 dark:text-white">Calories</label>
              <input
                type="text"
                placeholder="e.g., 250 "
                class="w-full border rounded p-1 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500 "
              />
            </div>
            <div>
              <label class="text-xs text-gray-600 block mb-1 dark:text-white">Fat(g)</label>
              <input
                type="text"
                placeholder="e.g., 10"
                class="w-full border rounded p-1 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
              />
            </div>
            <div>
              <label class="text-xs text-gray-600 block mb-1 dark:text-white"
                >Cholestrol(mg)</label
              >
              <input
                type="text"
                placeholder="e.g., 15"
                class="w-full border  rounded p-1 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
              />
            </div>
            <div>
              <label class="text-xs text-gray-600 block mb-1 dark:text-white">Sodium(mg)</label>
              <input
                type="text"
                placeholder="e.g., 30"
                class="w-full border  rounded p-1 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
              />
            </div>
            <div>
              <label class="text-xs text-gray-600 block mb-1">Sugars(g)</label>
              <input
                type="text"
                placeholder="e.g., 5"
                class="w-full border  rounded p-1 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
              />
            </div>
            <div>
              <label class="text-xs text-gray-600 block mb-1">Protein(g)</label>
              <input
                type="text"
                placeholder="e.g., 8"
                class="w-full border  rounded p-1 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
              />
            </div>
          </div>
        </div>

        <!-- Tags -->
        <div>
          <label for="tag-search" class="block text-sm font-semibold mb-1 text-gray-600 dark:text-white">Choose Tags</label>
          <input
            type="text"
            id="tag-search"
            placeholder="Search Tags"
            class="border rounded p-2 mb-4 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
            oninput="filterTags()"
          />
          <div class="flex gap-2 flex-wrap" id="tag-container">
            <span class="tag inline-block bg-gray-200 text-gray-700 text-sm px-5 py-2 rounded-full cursor-pointer flex items-center">
              Japanese
              <button onclick="removeTag(this)" class="ml-2 text-red-500">✖</button>
            </span>
            <span class="tag inline-block bg-gray-200 text-gray-700 text-sm px-5 py-2 rounded-full cursor-pointer flex items-center">
              Heart-Healthy
              <button onclick="removeTag(this)" class="ml-2 text-red-500">✖</button>
            </span>
            <span class="tag inline-block bg-gray-200 text-gray-700 text-sm px-5 py-2 rounded-full cursor-pointer flex items-center">
              Under 15 minutes
              <button onclick="removeTag(this)" class="ml-2 text-red-500">✖</button>
            </span>
            <!-- Add more tags as needed -->
          </div>
        </div>

        <script>
          function toggleTag(tagElement) {
            // Toggle the red-500 background color and text color
            tagElement.classList.toggle("bg-red-500"); // red-500 color
            tagElement.classList.toggle("text-white"); // White text for contrast
            tagElement.classList.toggle("bg-gray-200"); // Return to original background
            tagElement.classList.toggle("text-gray-700"); // Return to original text color
          }

          function removeTag(button) {
            const tagElement = button.parentElement;
            tagElement.remove();
          }
        </script>

        <!-- Upload Photo -->
        <div class="col-span-full">
          <label
            for="file-upload"
            class="block text-sm font-medium text-gray-900 dark:text-white"
            >Cover photo</label
          >
          <div
            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10"
            id="upload-container"
          >
            <!-- Image Preview Container -->
            <div class="text-center" id="preview-container">
              <svg
                class="mx-auto size-12 text-gray-300"
                viewBox="0 0 24 24"
                fill="currentColor"
                aria-hidden="true"
                data-slot="icon"
              >
                <path
                  fill-rule="evenodd"
                  d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                  clip-rule="evenodd"
                />
              </svg>
              <div class="mt-4 flex text-sm text-gray-600">
                <label
                  for="file-upload"
                  class="relative cursor-pointer rounded-md font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500"
                >
                  <span class="text-red-500">Upload a picture </span>
                  <input
                    id="file-upload"
                    name="file-upload"
                    type="file"
                    class="sr-only"
                    accept="image/*"
                    onchange="displayImagePreview(event)"
                  />
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs text-gray-600">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
        </div>

        <script>
          // Function to display the uploaded image preview
          function displayImagePreview(event) {
            const file = event.target.files[0]; // Get the uploaded file
            const previewContainer =
              document.getElementById("preview-container"); // The container to display preview

            if (file && file.type.startsWith("image/")) {
              const reader = new FileReader();

              reader.onload = function (e) {
                // Display the uploaded image
                previewContainer.innerHTML = `
                <img src="${e.target.result}" alt="Cover Photo" class="h-48 w-auto rounded-lg object-cover shadow-md" />
                <button onclick="resetPreview()" class="mt-4 px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">Remove</button>
              `;
              };

              reader.readAsDataURL(file); // Read file as Data URL
            } else {
              alert("Please upload a valid image file (PNG, JPG, or GIF).");
            }
          }

          // Function to reset the preview back to default
          function resetPreview() {
            const previewContainer =
              document.getElementById("preview-container");

            previewContainer.innerHTML = `
            <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
            </svg>
            <div class="mt-4 flex text-sm text-gray-600">
              <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                <span>Upload a file</span>
                <input id="file-upload" name="file-upload" type="file" class="sr-only" accept="image/*" onchange="displayImagePreview(event)" />
              </label>
              <p class="pl-1">or drag and drop</p>
            </div>
            <p class="text-xs text-gray-600">PNG, JPG, GIF up to 10MB</p>
          `;
          }
        </script>

        <!-- Submit Button Section -->
          <div class="flex items-center justify-center gap-4">
  <!-- Submit Button -->
  <button
    type="submit"
    class="bg-red-500 text-white px-4 py-3 rounded hover:bg-red-600 transition font-bold"
  >
    Submit Recipe
  </button>

  <!-- Privacy Select Dropdown -->
  <div class="relative">
    <button
      type="button"
      class="inline-flex justify-between items-center w-full rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm ` focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:bg-gray-900 dark:text-white"
      id="privacy-menu-button"
      aria-expanded="true"
      aria-haspopup="true"
    >
      <span id="selected-privacy">Public</span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5 ml-2"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path
          fill-rule="evenodd"
          d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.21 8.27a.75.75 0 01.02-1.06z"
          clip-rule="evenodd"
        />
      </svg>
    </button>

    <!-- Dropdown menu -->
    <div
      class="absolute right-0 mt-2 w-full origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none dark:bg-gray-900"
      role="menu"
      aria-orientation="vertical"
      aria-labelledby="privacy-menu-button"
      id="privacy-menu"
      style="display: none;"
    >
      <div class="py-1" role="none">
        <button
          class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-800 dark:hover:text-gray-200"
          role="menuitem"
          onclick="selectPrivacy('Public')"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4 mr-2"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              fill-rule="evenodd"
              d="M12 1.75c5.663 0 10.25 4.588 10.25 10.25S17.663 22.25 12 22.25 1.75 17.663 1.75 12 6.337 1.75 12 1.75ZM12 3a9 9 0 100 18 9 9 0 000-18Z"
            />
          </svg>
          Public
        </button>
        <button
          class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-800 dark:hover:text-gray-200"
          role="menuitem"
          onclick="selectPrivacy('Private')"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4 mr-2"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              fill-rule="evenodd"
              d="M12 2.5A4.5 4.5 0 007.5 7H9a3 3 0 116 0h1.5A4.5 4.5 0 0012 2.5ZM9.062 11a1.875 1.875 0 00-1.875 1.875v5.625c0 1.036.84 1.875 1.875 1.875h5.625A1.875 1.875 0 0016.562 18.5v-5.625A1.875 1.875 0 0014.688 11H9.062Zm2.313 2.5a.937.937 0 00-.937.937v3.126a.937.937 0 101.875 0v-3.125a.937.937 0 00-.938-.938Z"
            />
          </svg>
          Private
        </button>
      </div>
    </div>
  </div>

<script>
  const privacyMenu = document.getElementById("privacy-menu");
  const privacyButton = document.getElementById("privacy-menu-button");
  const selectedPrivacy = document.getElementById("selected-privacy");

  privacyButton.addEventListener("click", () => {
    privacyMenu.style.display = privacyMenu.style.display === "none" || privacyMenu.style.display === "" ? "block" : "none";
  });

  function selectPrivacy(option) {
    selectedPrivacy.textContent = option;
    privacyMenu.style.display = "none";
  }

  // Close the menu if clicked outside
  document.addEventListener("click", (event) => {
    if (!privacyMenu.contains(event.target) && !privacyButton.contains(event.target)) {
      privacyMenu.style.display = "none";
    }
  });
</script>

        </div>
      </form>
    </section>
<!--form validation-->

    <!-- <script>
      document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent form from submitting by default
        
        const title = document.getElementById('title').value.trim();
        const instructions = document.getElementById('instructions').value.trim();
        
        if (!title) {
          alert('Please fill in the recipe title');
          document.getElementById('title').focus();
          return;
        }
        
        if (!instructions) {
          alert('Please add at least one instruction');
          document.getElementById('instructions').focus();
          return;
        }
        
        // If validation passes, you can submit the form
        alert('Recipe submitted successfully!'); // Replace with your submission logic
        // this.submit(); // Uncomment this line when ready to actually submit
      });

      // Optional: Add visual feedback for required fields
      document.querySelectorAll('input[required]').forEach(input => {
        input.addEventListener('invalid', function(e) {
          e.preventDefault();
          this.classList.add('border-red-500');
        });

        input.addEventListener('input', function() {
          this.classList.remove('border-red-500');
        });
      });
    </script> -->
    <?php include_once '../../common/footer.php'; ?>
  </body>
</html>
