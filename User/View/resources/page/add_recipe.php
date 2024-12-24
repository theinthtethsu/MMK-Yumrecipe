<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Recipe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
  <!-- <body
    class="font-['Roboto'] font-normal text-gray-700 leading-[1]"
  > -->
  <body class="font-roboto text-gray-700 leading-none font-normal">
    <section
      class="h-screen relative bg-cover text-white"
      style="
        background-image: linear-gradient(
            rgba(19, 19, 19, 0.6),
            rgba(30, 30, 30, 0.6)
          ),
          url('../img/hero.jpg');
      "
    >
      <nav class="mx-auto max-w-7xl flex justify-around pt-6 text-xl font-bold">
        <a
          href="#"
          class="text-white no-underline hover:text-red-500 hover:font-bold transition duration-300"
        >
          Home
        </a>
        <a
          href="#"
          class="text-white no-underline hover:text-red-500 hover:font-bold transition duration-300"
        >
          Recipe
        </a>
        <a
          href="#"
          class="text-white no-underline hover:text-red-500 hover:font-bold transition duration-300"
        >
          Add Recipe
        </a>
        <a
          href="#"
          class="text-white no-underline hover:text-red-500 hover:font-bold transition duration-300"
        >
          Blogs
        </a>
        <a
          href="#"
          class="text-white no-underline hover:text-red-500 hover:font-bold transition duration-300"
        >
          About Us
        </a>
      </nav>

      <div
        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-screen-xl"
      >
        <!-- <div class="w-[120rem] absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></div> -->

        <div class="w-1/2">
          <h1 class="text-5xl md:text-5.2rem font-bold mb-8 leading-tight">
            Create Your Own Delish Recipes!
          </h1>
          <p class="text-2xl line-height-1.6">
            Unleash your inner chef and craft your own unique recipes. Share
            your mouthwatering creations, ingredients, and steps with the world,
            and inspire others to cook with passion!
          </p>
        </div>
      </div>
    </section>

    <section class="container mx-auto py-16">
      <h2 class="text-center text-4xl font-bold mb-8">Add a Recipe</h2>
      <form class="max-w-lg mx-auto space-y-8">
        <!-- Recipe Title -->
        <div>
          <label
            for="title"
            class="block text-sm font-semibold mb-1 text-gray-600"
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
            class="block text-sm font-semibold mb-1 text-gray-600"
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
            class="block text-sm font-semibold mb-1 text-gray-600"
            >Category</label
          >
          <select
            id="category"
            class="w-full border rounded p-2 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
          >
            <option>Breakfast</option>
            <option>Lunch</option>
            <option>Dinner</option>
          </select>
        </div>

        <!-- Number of Servings -->
        <div class="grid grid-cols-2 gap-4">
          <div>
            <label
              for="servings"
              class="block text-sm font-semibold mb-1 text-gray-600"
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
        <div
          <label
            for="time"
            class="block text-sm font-semibold mb-2 text-gray-600"
            >Cooking Time</label
          >

          <div class="flex items-center space-x-4">
            <!-- Hours Picker -->
            <div>
              <label
                for="hours"
                class="block text-xs font-medium text-gray-500 mb-1"
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
                class="block text-xs font-medium text-gray-500 mb-1"
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
          <label class="block text-sm font-semibold mb-1 text-gray-600"
            >Ingredients</label
          >
          <div class="grid grid-cols-3 gap-4 mb-4">
            <input
              type="text"
              placeholder="Olive oil"
              class="border  rounded p-2 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
            />
            <input
              type="number"
              placeholder="2"
              class="border rounded p-2 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
            />
            <input
              type="text"
              placeholder="tablespoons"
              class="border  rounded p-2 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
            />
          </div>
          <button
            type="button"
            class="text-red-500 border border-red-500 px-4 py-3 rounded hover:bg-red-500 hover:text-white transition"
          >
            Add Ingredients
          </button>
        </div>

        <!-- Instructions -->
        <div>
          <label class="block text-sm font-semibold mb-1 text-gray-600"
            >Instructions</label
          >
          <div class="flex gap-4 mb-4">
            <input
              id="instructions"
              type="text"
              required
              placeholder="Click Add Instructions line by line"
              class="w-full border border-red-500 rounded p-2 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
            />
          </div>
          <div>
            <button
              type="button"
              class="text-red-500 border border-red-500 px-4 py-3 rounded hover:bg-red-500 hover:text-white transition"
            >
              Add Instructions
            </button>
          </div>
        </div>

        <!-- Nutritional Facts -->
        <div>
          <label class="block text-sm font-semibold mb-1 text-gray-600"
            >Nutritional Facts</label
          >
          <div class="grid grid-cols-3 gap-4">
            <div>
              <label class="text-xs text-gray-600 block mb-1">Calories</label>
              <input
                type="text"
                placeholder="e.g., 250 "
                class="w-full border rounded p-1 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500 "
              />
            </div>
            <div>
              <label class="text-xs text-gray-600 block mb-1">Fat(g)</label>
              <input
                type="text"
                placeholder="e.g., 10"
                class="w-full border rounded p-1 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
              />
            </div>
            <div>
              <label class="text-xs text-gray-600 block mb-1"
                >Cholestrol(mg)</label
              >
              <input
                type="text"
                placeholder="e.g., 15"
                class="w-full border  rounded p-1 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
              />
            </div>
            <div>
              <label class="text-xs text-gray-600 block mb-1">Sodium(mg)</label>
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
          <label
            for="tags"
            class="block text-sm font-semibold mb-1 text-gray-600"
          >
            Choose Tags
          </label>
          <div class="flex gap-2 flex-wrap">
            <span
              class="tag inline-block bg-gray-200 text-gray-700 text-sm px-5 py-2 rounded-full cursor-pointer"
              onclick="toggleTag(this)"
            >
              Japanese
            </span>
            <span
              class="tag inline-block bg-gray-200 text-gray-700 text-sm px-5 py-2 rounded-full cursor-pointer"
              onclick="toggleTag(this)"
            >
              Heart-Healthy
            </span>
            <span
              class="tag inline-block bg-gray-200 text-gray-700 text-sm px-5 py-2 rounded-full cursor-pointer"
              onclick="toggleTag(this)"
            >
              Under 15 minutes
            </span>
            <span
              class="tag inline-block bg-gray-200 text-gray-700 text-sm px-5 py-2 rounded-full cursor-pointer"
              onclick="toggleTag(this)"
            >
              Chicken
            </span>
            <span
              class="tag inline-block bg-gray-200 text-gray-700 text-sm px-5 py-2 rounded-full cursor-pointer"
              onclick="toggleTag(this)"
            >
              Grilling
            </span>
            <span
              class="tag inline-block bg-gray-200 text-gray-700 text-sm px-5 py-2 rounded-full cursor-pointer"
              onclick="toggleTag(this)"
            >
              Party
            </span>
            <span
              class="tag inline-block bg-gray-200 text-gray-700 text-sm px-5 py-2 rounded-full cursor-pointer"
              onclick="toggleTag(this)"
            >
              Family Dinner
            </span>
            <span
              class="tag inline-block bg-gray-200 text-gray-700 text-sm px-5 py-2 rounded-full cursor-pointer"
              onclick="toggleTag(this)"
            >
              Appetizer
            </span>
            <span
              class="tag inline-block bg-gray-200 text-gray-700 text-sm px-5 py-2 rounded-full cursor-pointer"
              onclick="toggleTag(this)"
            >
              Desert
            </span>
            <span
              class="tag inline-block bg-gray-200 text-gray-700 text-sm px-5 py-2 rounded-full cursor-pointer"
              onclick="toggleTag(this)"
            >
              Vegetarian
            </span>
            <span
              class="tag inline-block bg-gray-200 text-gray-700 text-sm px-5 py-2 rounded-full cursor-pointer"
              onclick="toggleTag(this)"
            >
              Summer
            </span>
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
        </script>

        <!-- Upload Photo -->
        <div class="col-span-full">
          <label
            for="file-upload"
            class="block text-sm font-medium text-gray-900"
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
                  class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500"
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
        <div class="text-center flex items-center justify-center gap-6">
          <!-- Privacy Toggle -->

          <!-- Submit Button -->
          <button
            type="submit"
            class="bg-red-500 text-white px-4 py-3 rounded hover:bg-red-600 transition font-bold"
          >
            Submit Recipe
          </button>
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
  </body>
</html>