
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Management</title>
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
    <!-- material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <?php
    $recipes = [
        [
            "id" => 1,
            "image" => "../../images/aglioolio.jpg",
            "name" => "Aglio e Olio",
            "author" => "Admin1",
            "time" => "35 mins",
            "status" => "Suggested",
            "cuisine" => "Italian",
            "tags" => ["Italian", "Budget Friendly", "Quick & Easy"],
            "rating" => "5/5",
            "ingredients" => ["Garlic", "Olive Oil", "Pasta", "Red Pepper Flakes", "Parsley"]
        ],
        [
            "id" => 2,
            "image" => "../../images/rice.png",
            "name" => "Rice",
            "author" => "Admin2",
            "time" => "45 mins",
            "status" => "Popular",
            "cuisine" => "Italian",
            "tags" => ["Italian", "Classic", "Vegetarian"],
            "rating" => "4.5/5",
            "ingredients" => ["Rice", "Water", "Salt"]
        ],
        [
            "id" => 3,
            "image" => "../../images/rice.png",
            "name" => "Pasta",
            "author" => "Admin3",
            "time" => "30 mins",
            "status" => "Approved",
            "cuisine" => "Chinese",
            "tags" => ["Italian", "Classic", "Vegetarian"],
            "rating" => "4.7/5",
            "ingredients" => ["Pasta", "Tomato Sauce"]
        ],
        [
            "id" => 4,
            "image" => "../../images/rice.png",
            "name" => "Chicken rice",
            "author" => "Admin4",
            "time" => "30 mins",
            "status" => "Approved",
            "cuisine" => "Chinese",
            "tags" => ["Chinese", "Classic", "Vegetarian"],
            "rating" => "4.7/5",
            "ingredients" => ["Chicken", "Rice", "Tomato Sauce"]
        ],
    ];
    ?>
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
                                  <th class="border border-gray-300 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <!-- table body -->
                         <?php foreach ($recipes as $index => $recipe): ?>
                                <tr class="odd:bg-white even:bg-gray-50 id="row-<?= $recipe['id'] ?>">
                                    <td class="border border-gray-300 px-4 py-2 text-center"><?= $index + 1 ?></td>
                                    <td class="border border-gray-300 px-4 py-2 text-center">
                                        <img src="<?= $recipe['image'] ?>" alt="Recipe Image" class="h-12 w-12 object-cover rounded">
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2"><?= $recipe['name'] ?></td>
                                    <td class="border border-gray-300 px-4 py-2"><?= $recipe['author'] ?></td>
                                    <td class="border border-gray-300 px-4 py-2"><?= $recipe['time'] ?></td>
                                    <td class="border border-gray-300 px-4 py-2"><?= $recipe['status'] ?></td>
                                    <td class="border border-gray-300 px-4 py-2"><?= $recipe['cuisine'] ?></td>
                                    <td class="border border-gray-300 px-4 py-2">
                                       <div class="flex flex-wrap gap-2" id="tag-container-<?= $recipe['id'] ?>">
                                              <?php foreach ($recipe['tags'] as $tag): ?>
                                                  <span class="flex items-center bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm border border-gray-300">
                                                      <?= $tag ?>
                                                      <button class="ml-1 text-red-500" onclick="removeItem(this)">&times;</button>
                                                  </span>
                                              <?php endforeach; ?>
                                          </div>
                                          <button class="bg-secondary text-white mt-2 px-3 py-1 rounded" onclick="openModal('tag', <?= $recipe['id'] ?>)">Add More Tags</button>
                                      </td>
                                            <div id="tag-modal" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-50 hidden">
                                            <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
                                                <h3 class="text-xl mb-4">Enter a new tag</h3>
                                                <input type="text" id="new-tag-input" class="w-full p-2 border border-gray-300 rounded mb-4" placeholder="New tag">
                                                <div class="flex justify-end">
                                                    <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded" onclick="closeModal('tag')">Cancel</button>
                                                    <button class="bg-accent text-white px-4 py-2 rounded ml-2" onclick="saveItem('tag')">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2"><?= $recipe['rating'] ?></td>
                                    <td class="border border-gray-300 px-4 py-2">
                                       <div class="flex flex-wrap gap-2" id="ingredient-container-<?= $recipe['id'] ?>">
                                              <?php foreach ($recipe['ingredients'] as $ingredient): ?>
                                                <span class="flex items-center bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm border border-gray-300">
                                                    <?= $ingredient ?>
                                                    <button class="ml-1 text-red-500" onclick="removeItem(this)">&times;</button>
                                                </span>
                                            <?php endforeach; ?>
                                          </div>
                                          <button class="bg-secondary text-white mt-2 px-3 py-1 rounded" onclick="openModal('ingredient', <?= $recipe['id'] ?>)">Add More Ingredients</button>
                                      </td>
                                      <div id="ingredient-modal" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-50 hidden">
                                        <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
                                            <h3 class="text-xl mb-4">Enter a new ingredient</h3>
                                            <input type="text" id="new-ingredient-input" class="w-full p-2 border border-gray-300 rounded mb-4" placeholder="New ingredient">
                                            <div class="flex justify-end">
                                                <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded" onclick="closeModal('ingredient')">Cancel</button>
                                                <button class="bg-accent text-white px-4 py-2 rounded ml-2" onclick="saveItem('ingredient')">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2 relative">
                                    <!-- Dotted menu button -->
                                    <button class="text-gray-500 hover:text-gray-700 focus:outline-none" onclick="toggleMenu(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div class="hidden absolute right-0 pl-10 mt-2 w-28 bg-white shadow-md rounded border border-gray-300 z-10">
                                       <i class='material-icons text-red-500 cursor-pointer' id='delete-recipe-<?= $recipe['id'] ?>' onclick='deleteRecipe(<?= $recipe['id'] ?>)'>delete</i>
                                    </div>
                                </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="flex items-center mt-4">
                        <span class="text-gray-700 mr-2">Showing 1 to <?= count($recipes) ?> of <?= count($recipes) ?> entries</span>
                        <div class="flex space-x-5 ml-60">
                            <a href="#" class="text-gray-700 hover:text-accent mt-2">
                                <img src="../../../resources/icons/ArrowLeft.svg" alt="Previous" class="w-4 h-4">
                            </a>
                            <?php for ($i = 1; $i <= 4; $i++): ?>
                                <a href="#" class="flex items-center justify-center w-8 h-8 <?= $i === 1 ? 'bg-accent text-white rounded-full' : 'text-gray-700 hover:bg-gray-300 rounded-full' ?>">
                                    <?= $i ?>
                                </a>
                            <?php endfor; ?>
                            <a href="#" class="text-gray-700 hover:text-accent mt-2">
                                <img src="../../../resources/icons/ArrowRight.svg" alt="Next" class="w-4 h-4">
                            </a>
                        </div>
                    </div>
                    <!-- Delete Modal -->
                    <div id="delete-modal" class="fixed inset-0 hidden items-center justify-center bg-black bg-opacity-50">
                        <div class="bg-white p-6 rounded-md">
                            <h1 class="text-2xl font-bold text-red-500 mb-4 text-center">Delete Recipe</h1>
                            <p class="mb-4">Are you sure you want to delete this recipe?</p>
                            <div class="flex justify-center space-x-4">
                                <button class="bg-accent text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:ring focus:ring-blue-200">Confirm</button>
                                <button class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600 focus:ring focus:ring-gray-200">Cancel</button>
                            </div>
                        </div>
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
                                    <div class="flex flex-col space-y-4 mb-2">
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
                                        <div class="flex space-x-4 mb-2">
                                            <input type="text" id="ingredient-quantity" placeholder="e.g., 1" class="w-20 p-2 border border-gray-300 rounded shadow-sm focus:ring-2 focus:ring-purple-500 required" />
                                            <input type="text" id="ingredient-unit" placeholder="e.g., tbls" class="w-40 p-2 border border-gray-300 rounded shadow-sm focus:ring-2 focus:ring-purple-500 required" />
                                        </div>
                                        <!-- Add Button -->
                                        <button type="button" onclick="addIngredient()" class=" w-40 bg-accent hover:bg-accent2 text-white px-4 py-2 rounded shadow hover:bg-purple-600 focus:ring-2 focus:ring-purple-400">Add</button>
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
                                <div class="flex flex-col space-y-4 mb-2">
                                        <label class="block font-semibold text-gray-700">Instructions</label>
                                        <div class="flex space-x-6 items-start">
                                        <!-- Input Field and Add Button -->
                                        <div class="flex flex-col space-y-4 mb-2">
                                            <textarea id="instruction-text" placeholder="e.g., Mix all the ingredients thoroughly." class="p-2 border border-gray-300 rounded shadow-sm focus:ring-2 focus:ring-blue-500 required"></textarea>
                                            <!-- Add Button -->
                                            <button type="button" onclick="addInstruction()" class=" w-40 bg-accent hover:bg-accent2 text-white px-4 py-2 rounded shadow hover:bg-blue-500 focus:ring-2 focus:ring-blue-400 mb-2">Add</button>
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
                                    <button type="submit" class="bg-accent hover:bg-accent2 text-white px-4 py-2 rounded">Upload</button>
                                    <button type="button" onclick="window.location.href='recipemanagement.php'" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded">Cancel</button>
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
        /*  
        function for tags and ingredients
        */
      let currentRecipeId = null;// Track the recipe ID for current action

            // Open a modal for tags or ingredients
            function openModal(type, recipeId) {
                currentRecipeId = recipeId; // Store the current recipe ID
                document.getElementById(`${type}-modal`).classList.remove("hidden");
            }
            // Close the modal
            function closeModal(type) {
                document.getElementById(`${type}-modal`).classList.add("hidden");
            }
            // Save a new tag or ingredient
            function saveItem(type) {
                const input = document.getElementById(`new-${type}-input`).value.trim();
                if (input) {
                    const container = document.getElementById(`${type}-container-${currentRecipeId}`);
                    const element = document.createElement("span");
                    element.className = "flex items-center bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm border border-gray-300";
                    element.innerHTML = `${input} <button class="ml-1 text-red-500" onclick="removeItem(this)">&times;</button>`;
                    container.appendChild(element);
                    document.getElementById(`new-${type}-input`).value = ""; // Clear input
                }
                closeModal(type); // Close modal
            }
            // Remove a tag or ingredient
            function removeItem(button) {
                button.parentElement.remove();
            }
            /*
            function for delete recipe
            */
                const recipes = <?php echo json_encode($recipes); ?>;
                function deleteRecipe(id) {
                    const recipe = recipes.find(r => r.id === id); // Find the recipe by ID
                    if (recipe) {
                        // Update the modal content dynamically
                        const modal = document.getElementById('delete-modal');
                        modal.classList.remove('hidden');
                        modal.classList.add('flex');

                        // Attach event handlers for confirmation
                        modal.querySelector('.bg-accent').onclick = function () {
                            confirmDelete(id);
                        };
                        modal.querySelector('.bg-gray-500').onclick = cancelDelete;
                    } else {
                        console.error('Recipe not found');
                    }
                }
                function confirmDelete(id) {
                    const recipeIndex = recipes.findIndex(r => r.id === id);
                    if (recipeIndex !== -1) {
                        recipes.splice(recipeIndex, 1); // Remove recipe from the array
                        document.getElementById(`row-${id}`).remove(); // Remove the table row
                        console.log('Recipe deleted:', id);
                    }
                    cancelDelete(); // Close the modal
                }
                function cancelDelete() {
                    const modal = document.getElementById('delete-modal');
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            // Toggle the action menu visibility
            function toggleMenu(button) {
                const menu = button.nextElementSibling;
                document.querySelectorAll('.relative div:not(.hidden)').forEach(openMenu => {
                    if (openMenu !== menu) openMenu.classList.add('hidden');
                });
                menu.classList.toggle('hidden');
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