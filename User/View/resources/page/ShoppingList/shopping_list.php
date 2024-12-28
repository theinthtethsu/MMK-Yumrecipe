<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleIngredients(categoryId, buttonId) {
            const ingredients = document.getElementById(categoryId);
            const button = document.getElementById(buttonId);
            const isHidden = ingredients.classList.toggle('hidden');

            if (isHidden) {
                button.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5 5 5-5" />
                </svg>`;
            } else {
                button.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>`;
            }
        }

        function handleRadioChange(radio, ingredientId) {
            const ingredient = document.getElementById(ingredientId);
            ingredient.style.textDecoration = radio.checked ? 'line-through' : 'none';
        }

        function deleteIngredient(categoryId, ingredientId) {
            const ingredient = document.getElementById(ingredientId);
            const category = document.getElementById(categoryId);
            const emptyMessage = document.querySelector('.empty-list-message');

            // Remove the ingredient
            ingredient.remove();

            // Check if the category has no ingredients left
            if (!category.querySelectorAll('li').length) {
                category.parentElement.remove();
            }

            // Check if all categories are removed
            const allCategories = document.querySelectorAll('.grocery-category');
            if (allCategories.length === 0) {
                emptyMessage.classList.remove('hidden');
            }
        }
    </script>
</head>
<body>
    <?php include_once '../../../common/user-profile-common.php'; ?>
    <div class="flex-1 flex flex-col bg-gray-50 dark:bg-gray-900 dark:text-white">
              <!-- Navigation Bar -->
    <?php require_once '../../../common/nav.php'; ?>
    <div class="w-full px-4 py-8">
        <!-- Grocery List Container -->
        <div class="bg-white dark:bg-gray-800 p-6 max-w-md mx-auto">
            <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4 mb-6">
                <input type="text" placeholder="Add an item..." class="border rounded-lg w-full md:w-40 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500 dark:text-black-700">
                <button class="bg-red-500 text-white px-4 py-2 rounded-lg w-full md:w-auto">Add</button>
            </div>

            <!-- Dairy Category -->
            <div class="mb-6 grocery-category">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="font-bold text-lg dark:text-black-900">Dairy</h3>
                    <button id="toggle-dairy" onclick="toggleIngredients('dairy-items', 'toggle-dairy')" class="text-white-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                <ul id="dairy-items" class="space-y-2">
                    <li id="dairy-milk" class="flex items-center space-x-4">
                        <input type="checkbox" name="dairy" id="milk" class="form-checkbox" onchange="handleRadioChange(this, 'label-milk')">
                        <label id="label-milk" for="milk" class="dark:text-black-900">Milk</label>
                        <button onclick="deleteIngredient('dairy-items', 'dairy-milk')" class="text-red-500 hover:text-red-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </li>
                    <li id="dairy-butter" class="flex items-center space-x-4">
                        <input type="checkbox" name="dairy" id="butter" class="form-checkbox" onchange="handleRadioChange(this, 'label-butter')">
                        <label id="label-butter" for="butter" class="dark:text-black-900">Butter</label>
                        <button onclick="deleteIngredient('dairy-items', 'dairy-butter')" class="text-red-500 hover:text-red-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>

            <!-- Meat Category -->
            <div class="grocery-category">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="font-bold text-lg dark:text-black-900">Meat</h3>
                    <button id="toggle-meat" onclick="toggleIngredients('meat-items', 'toggle-meat')" class="text-white-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                <ul id="meat-items" class="space-y-2">
                    <li id="meat-beef" class="flex items-center space-x-4">
                        <input type="checkbox" name="meat" id="beef" class="form-checkbox" onchange="handleRadioChange(this, 'label-beef')">
                        <label id="label-beef" for="beef" class="dark:text-black-900">Beef</label>
                        <button onclick="deleteIngredient('meat-items', 'meat-beef')" class="text-red-500 hover:text-red-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Empty List Message -->
        <div class="hidden empty-list-message text-center text-gray-500 mt-8">
            <div class="text-6xl mb-4">🛒</div>
            <p>Start your shopping list by adding items above</p>
        </div>
    </div>
    </div>
    
</body>
</html>
