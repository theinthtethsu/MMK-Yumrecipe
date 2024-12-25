
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Management</title>
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
</head>

<body class="font-sans bg-light-text">
    <div class="flex min-h-screen">
        <!-- Side Menu -->
        <?php require_once '../../../common/sideMenu.php'; ?>
        <!-- Content -->
        <div class="flex-1 container p-4 bg-secondary overflow-y-auto" style="max-height: calc(100vh - 0px);">
            <h1 class="text-2xl font-bold mb-4">Recipe Management</h1>
            <!-- Tabs -->
            <ul class="flex space-x-4 mb-6 justify-end">
                <li class="cursor-pointer px-2 py-2 pb-5 bg-light-text rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Approved Recipes</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Upload</li>
            </ul>
           <!-- Content -->
           <div id="content"></div>
        </div>
    </div>

    <script>
        // function to toggle the background color of the selected tab
        function toggleBackground(selected) {
            const items = document.querySelectorAll('ul li');
            items.forEach(item => {
                item.classList.remove('bg-light-text');
            });
            selected.classList.toggle('bg-light-text');
            const contentDiv = document.getElementById('content');

            // switch case to load the content of the selected tab
            switch (selected.innerText) {
                case 'Approved Recipes':
                //  contentDiv.innerHTML = document.querySelector('#content').innerHTML;
                 contentDiv.innerHTML =`
                <div class="bg-light-text p-6 rounded-lg shadow-md -mt-8">
                    <!-- Filters -->
                    <div class="flex space-x-4 mb-4">
                        <select class="p-2 rounded border-gray-300">
                            <option>By All</option>
                            <option>Admin</option>
                            <option>User</option>
                        </select>
                        <select class="p-2 rounded border-gray-300">
                            <option>All Type</option>
                            <option>Vegetarian</option>
                            <option>Non-Vegetarian</option>
                        </select>
                        <select class="p-2 rounded border-gray-300">
                            <option>All Category</option>
                            <option>Italian</option>
                            <option>Chinese</option>
                        </select>
                        <input type="text" placeholder="Recipe, category, ingredients" class="p-2 flex-grow rounded border-gray-300">
                        <button class="bg-accent hover:bg-blue-600 text-white px-4 py-2 rounded">Search</button>
                    </div>

                    <!-- Recipe Table -->
                    <table class="w-full table-auto border-collapse border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">No</th>
                                <th class="border border-gray-300 px-4 py-2">Image</th>
                                <th class="border border-gray-300 px-4 py-2">Title</th>
                                <th class="border border-gray-300 px-4 py-2">Posted By</th>
                                <th class="border border-gray-300 px-4 py-2">Time</th>
                                <th class="border border-gray-300 px-4 py-2">Type</th>
                                <th class="border border-gray-300 px-4 py-2">Category</th>
                                <th class="border border-gray-300 px-4 py-2">Tags</th>
                                <th class="border border-gray-300 px-4 py-2">Rating</th>
                                <th class="border border-gray-300 px-4 py-2">Ingredients</th>
                            </tr>
                        </thead>
                        <!-- table body -->
                        <tbody>
                            <?php for ($i = 1; $i <= 9; $i++): ?>
                            <tr class="odd:bg-white even:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2 text-center"><?= $i ?></td>
                                <td class="border border-gray-300 px-4 py-2 text-center">
                                    <img src="../../images/aglioolio.jpg" alt="Recipe Image" class="h-12 w-12 object-cover rounded">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">Aglio e Olio</td>
                                <td class="border border-gray-300 px-4 py-2">Admin<?= $i ?></td>
                                <td class="border border-gray-300 px-4 py-2">35 mins</td>
                                <td class="border border-gray-300 px-4 py-2">Suggested</td>
                                <td class="border border-gray-300 px-4 py-2">Italian</td>
                                <!-- For Tags Column -->
                                <td class="border border-gray-300 px-4 py-2">
                                <div class="flex flex-wrap gap-2" id="tags-container-<?= $i ?>">
                                     <span class="flex items-center bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm border border-gray-300">
                                        Italian
                                      <button class="ml-1 text-red-500" onclick="removeTag(this)">&times;</button>
                                      </span>
                                      <span class="flex items-center bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm border border-gray-300">
                                          Budget Friendly
                                          <button class="ml-1 text-red-500" onclick="removeTag(this)">&times;</button>
                                      </span>
                                      <span class="flex items-center bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm border border-gray-300">
                                          Quick & Easy
                                          <button class="ml-1 text-red-500" onclick="removeTag(this)">&times;</button>
                                      </span>
                                      <button class="bg-gray-200 text-gray-600 px-3 py-1 rounded text-sm" onclick="addTag(<?= $i ?>)">Add More Tags</button>
                                  </div>
                                </td>
                                <!-- For Rating Column -->
                                <td class="border border-gray-300 px-4 py-2">5/5</td>
                                <!-- For Ingredients Column -->
                                <td class="border border-gray-300 px-4 py-2">
                                <div class="space-y-2">
                                  <!-- Ingredient Item -->
                                <div class="flex items-center justify-between">
                                  <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm border border-gray-300">
                                      Spaghetti 200 g
                                  </span>
                                  <div class="relative">
                                 <!-- For edit and delete button -->
                                      <button class="text-gray-500 hover:text-gray-700 focus:outline-none" onclick="toggleMenu(this)">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
                                          </svg>
                                      </button>
                                      <div class="hidden absolute right-0 mt-1 w-28 bg-white shadow-md rounded border border-gray-300 z-10">
                                          <button class="block w-full text-left px-4 py-2 text-sm hover:bg-gray-100" onclick="editIngredient(this)">Edit</button>
                                          <button class="block w-full text-left px-4 py-2 text-sm hover:bg-gray-100 text-red-500" onclick="deleteIngredientItem(this)">Delete</button>
                                      </div>
                                  </div>
                              </div>
                              <button class="bg-gray-200 text-gray-600 px-3 py-1 rounded text-sm" 
                              onclick="addIngredientTag(this)">
                                  Add More Tags
                              </button>
                             </div>
                             </td>
                            </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                    <!-- Pagination -->
                        <div class="flex justify-center mt-4 space-x-2">
                            <button class="px-3 py-1 bg-gray-200 rounded">&lt;</button>
                            <button class="px-3 py-1 bg-blue-500 text-white rounded">1</button>
                            <button class="px-3 py-1 bg-gray-200 rounded">2</button>
                            <button class="px-3 py-1 bg-gray-200 rounded">3</button>
                            <button class="px-3 py-1 bg-gray-200 rounded">&gt;</button>
                        </div>
                    </div>
                </div>`;
                break;
                case 'Upload':
                    contentDiv.innerHTML = `
                        <div class="bg-light-text p-6 rounded-lg shadow-md w-full -mt-8">
                            <h2 class="text-xl font-bold mb-4">Upload Recipes</h2>
                            <form>
                                <!-- Recipe Details -->
                                <label class="block mb-2 font-semibold">Recipe Title</label>
                                <input type="text" placeholder="Enter recipe title" class="w-full p-2 mb-4 border border-gray-300 rounded" />

                                <label class="block mb-2 font-semibold">Description</label>
                                <textarea placeholder="Enter recipe description" class="w-full p-2 mb-4 border border-gray-300 rounded"></textarea>

                                <label class="block mb-2 font-semibold">Category</label>
                                <select class="w-full p-2 mb-4 border border-gray-300 rounded">
                                    <option>Select category</option>
                                    <option>Vegetarian</option>
                                    <option>Non-Vegetarian</option>
                                </select>

                                <label class="block mb-2 font-semibold">Number of Servings</label>
                                <input type="number" placeholder="e.g., 4" class="w-full p-2 mb-4 border border-gray-300 rounded" />

                                <label class="block mb-2 font-semibold">Cooking Time (mins)</label>
                                <input type="number" placeholder="e.g., 30" class="w-full p-2 mb-4 border border-gray-300 rounded" />

                            <!-- Ingredients Section -->
                                    <div class="flex flex-col space-y-4">
                                    <!-- Ingredients Label -->
                                    <label class="block font-semibold text-gray-700">Ingredients</label>
                                    <!-- Flex Container for Inputs and List -->
                                    <div class="flex space-x-6 items-start">
                                    <!-- Input Fields and Add Button -->
                                    <div class="flex flex-col space-y-4">
                                    <!-- Ingredient Name Input -->
                                        <input
                                            type="text" id="ingredient-name" placeholder="e.g., Sugar"
                                            class="p-2 border border-gray-300 rounded shadow-sm focus:ring-2 focus:ring-purple-500 required"
                                        />
                                        <!-- Quantity and Units -->
                                        <div class="flex space-x-4">
                                            <input type="text" id="ingredient-quantity" placeholder="e.g., 1" class="w-20 p-2 border border-gray-300 rounded shadow-sm focus:ring-2 focus:ring-purple-500 required" />
                                            <input type="text" id="ingredient-unit" placeholder="e.g., tbls" class="w-40 p-2 border border-gray-300 rounded shadow-sm focus:ring-2 focus:ring-purple-500 required" />
                                        </div>
                                        <!-- Add Button -->
                                        <button type="button" onclick="addIngredient()" class="bg-purple-500 text-white px-4 py-2 rounded shadow hover:bg-purple-600 focus:ring-2 focus:ring-purple-400">Add</button>
                                        </div>
                                        <!-- Added Ingredients List -->
                                        <div id="ingredients-list" class="w-1/2 border border-gray-300 rounded p-4 bg-gray-50 shadow" >
                                        <h3 class="font-semibold text-gray-700 mb-4">Added Ingredients</h3>
                                        <ul id="ingredient-items" class="space-y-3">
                                            <!-- Dynamically added items will appear here -->
                                        </ul>
                                        </div>
                                    </div>
                                    </div>
                                <!-- Instructions Section -->
                                <div class="flex flex-col space-y-4">
                                        <label class="block font-semibold text-gray-700">Instructions</label>
                                        <div class="flex space-x-6 items-start">
                                        <!-- Input Field and Add Button -->
                                        <div class="flex flex-col space-y-4">
                                            <textarea id="instruction-text" placeholder="e.g., Mix all the ingredients thoroughly." class="p-2 border border-gray-300 rounded shadow-sm focus:ring-2 focus:ring-green-500 required"></textarea>
                                            <button type="button" onclick="addInstruction()" class="bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600 focus:ring-2 focus:ring-green-400">Add</button>
                                        </div>
                                        <!-- Added Instructions List -->
                                        <div id="instructions-list" class="w-1/2 border border-gray-300 rounded p-4 bg-gray-50 shadow">
                                        <h3 class="font-semibold text-gray-700 mb-4">Added Instructions</h3>
                                        <ul id="instruction-items" class="space-y-3">
                                            <!-- Dynamically added items will appear here -->
                                        </ul>
                                        </div>
                                        </div>
                                    </div>
                                <!-- Nutrition Facts Section -->
                                <label class="block mb-2 font-semibold">Nutrition Facts</label>
                                <div class="grid grid-cols-2 gap-4 mb-4">
                                    <div class="flex items-center">
                                        <label for="calories" class="w-1/3">Calories (kcal)</label>
                                        <input type="text" id="calories" placeholder="Calories (kcal)" class="p-2 border border-gray-300 rounded w-2/3" />
                                    </div>
                                    <div class="flex items-center">
                                        <label for="fats" class="w-1/3">Fats (g)</label>
                                        <input type="text" id="fats" placeholder="Fats (g)" class="p-2 border border-gray-300 rounded w-2/3" />
                                    </div>
                                    <div class="flex items-center">
                                        <label for="cholesterol" class="w-1/3">Cholesterol (mg)</label>
                                        <input type="text" id="cholesterol" placeholder="Cholesterol (mg)" class="p-2 border border-gray-300 rounded w-2/3" />
                                    </div>
                                    <div class="flex items-center">
                                        <label for="sodium" class="w-1/3">Sodium (mg)</label>
                                        <input type="text" id="sodium" placeholder="Sodium (mg)" class="p-2 border border-gray-300 rounded w-2/3" />
                                    </div>
                                    <div class="flex items-center">
                                        <label for="sugar" class="w-1/3">Sugar (g)</label>
                                        <input type="text" id="sugar" placeholder="Sugar (g)" class="p-2 border border-gray-300 rounded w-2/3" />
                                    </div>
                                    <div class="flex items-center">
                                        <label for="protein" class="w-1/3">Protein (g)</label>
                                        <input type="text" id="protein" placeholder="Protein (g)" class="p-2 border border-gray-300 rounded w-2/3" />
                                    </div>
                                    <div class="flex items-center">
                                        <label for="carbohydrates" class="w-1/3">Carbohydrates (g)</label>
                                        <input type="text" id="carbohydrates" placeholder="Carbohydrates (g)" class="p-2 border border-gray-300 rounded w-2/3" />
                                    </div>
                                </div>
                                <!-- Upload Photo Section -->
                                <label class="block mb-2 font-semibold">Upload Photo</label>
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 mb-4 text-center">
                                    <input type="file" accept="image/*" onchange="previewImage(event)" class="w-full p-2 mb-2 border border-gray-300 rounded" />
                                    <div id="image-preview" class="mt-4">
                                        <!-- Image preview will appear here -->
                                    </div>
                                </div>
                                <!-- Upload and Cancel Buttons -->
                                <div class="flex justify-end space-x-4">
                                    <button type="submit" class="bg-accent hover:bg-blue-600 text-white px-4 py-2 rounded">Upload</button>
                                    <button type="button" class="bg-accent hover:bg-blue-600 text-gray-800 px-4 py-2 rounded">Cancel</button>
                                </div>
                            </form>
                            </div>`;
                   break;
                   default:
                   console.log('Unknown option clicked');
              }
        }
        // Automatically select "Approved Recipes" on page load
        document.addEventListener('DOMContentLoaded', () => {
            const defaultTab = document.querySelector('ul li:first-child');
            toggleBackground(defaultTab);
        });
        // Function to remove a tag
       function removeTag(button) {
        button.parentElement.remove();
       }
        // Function to add a new tag
        function addTag(rowId) {
            const newTag = prompt("Enter a new tag:");
            if (newTag) {
                const tagsContainer = document.getElementById(`tags-container-${rowId}`);
                const tagElement = document.createElement("span");
                tagElement.className = "flex items-center bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm border border-gray-300";
                tagElement.innerHTML = `${newTag} <button class="ml-1 text-red-500" onclick="removeTag(this)">&times;</button>`;
                tagsContainer.insertBefore(tagElement, tagsContainer.lastElementChild);
            }
        }
        // Toggle the action menu visibility
        function toggleMenu(button) {
            const menu = button.nextElementSibling;
            document.querySelectorAll('.relative div:not(.hidden)').forEach(openMenu => {
                if (openMenu !== menu) openMenu.classList.add('hidden');
            });
            menu.classList.toggle('hidden');
        }

        // Edit ingredient handler
        function editIngredient(button) {
            const ingredientText = button.closest('.relative').previousElementSibling.innerText;
            const newIngredient = prompt("Edit Ingredient:", ingredientText);
            if (newIngredient) {
                button.closest('.relative').previousElementSibling.innerText = newIngredient;
            }
        }

        // Delete individual ingredient item
        function deleteIngredientItem(button) {
            const item = button.closest('.flex');
            item.remove();
        }
        // Add more tags functionality
        function addIngredientTag(button) {
            const tagName = prompt("Enter a new ingredient tag:");
            if (tagName) {
                const newTag = document.createElement('div');
                newTag.className = 'flex items-center justify-between mt-2';
                newTag.innerHTML = `
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm border border-gray-300">
                        ${tagName}
                    </span>
                    <div class="relative">
                        <button class="text-gray-500 hover:text-gray-700 focus:outline-none" onclick="toggleMenu(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
                            </svg>
                        </button>
                        <div class="hidden absolute right-0 mt-1 w-28 bg-white shadow-md rounded border border-gray-300 z-10">
                            <button class="block w-full text-left px-4 py-2 text-sm hover:bg-gray-100" onclick="editIngredient(this)">Edit</button>
                            <button class="block w-full text-left px-4 py-2 text-sm hover:bg-gray-100 text-red-500" onclick="deleteIngredientItem(this)">Delete</button>
                        </div>
                    </div>
                `;
                button.parentNode.insertBefore(newTag, button);
            }
        }
        // Close menus if clicked outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.relative')) {
                document.querySelectorAll('.relative div').forEach(menu => menu.classList.add('hidden'));
            }
        });
        function previewImage(event) {
            const previewContainer = document.getElementById('image-preview');
            previewContainer.innerHTML = ""; // Clear previous image
            const file = event.target.files[0];
            if (file) {
                const img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                img.alt = "Recipe Image Preview";
                img.className = "w-48 h-48 object-cover rounded border border-gray-300";
                previewContainer.appendChild(img);
            }
        }
         // Adding Ingredients
        function addIngredient() {
        const name = document.getElementById("ingredient-name").value.trim();
        const quantity = document.getElementById("ingredient-quantity").value.trim();
        const unit = document.getElementById("ingredient-unit").value.trim();

        if (name && quantity && unit) {
            const listItem = document.createElement("li");
            listItem.className =
            "flex justify-between items-center p-2 bg-white shadow rounded border border-gray-200";

            listItem.innerHTML = `
            <span>${name} ${quantity}${unit}</span>
            <button class="text-red-500 hover:text-red-700" onclick="removeItem(this)">X</button>
            `;

            document.getElementById("ingredient-items").appendChild(listItem);

            // Clear input fields
            document.getElementById("ingredient-name").value = "";
            document.getElementById("ingredient-quantity").value = "";
            document.getElementById("ingredient-unit").value = "";
        }
        }

        // Adding Instructions
        function addInstruction() {
        const instruction = document.getElementById("instruction-text").value.trim();

        if (instruction) {
            const listItem = document.createElement("li");
            listItem.className =
            "flex justify-between items-center p-2 bg-white shadow rounded border border-gray-200";

            listItem.innerHTML = `
            <span>${instruction}</span>
            <button class="text-red-500 hover:text-red-700" onclick="removeItem(this)">X</button>
            `;

            document.getElementById("instruction-items").appendChild(listItem);

            // Clear textarea
            document.getElementById("instruction-text").value = "";
        }
        }

        // Remove List Item
        function removeItem(button) {
        const listItem = button.parentElement;
        listItem.remove();
        }
    </script>
</body>
</html>