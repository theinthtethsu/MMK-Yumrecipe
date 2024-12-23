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
                button.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5 5 5-5" />
                    </svg>`; // Down arrow
            } else {
                button.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>`; // Up arrow
            }
        }

        function handleCheckboxChange(checkbox, ingredientId) {
    const ingredient = document.getElementById(ingredientId);
    ingredient.style.textDecoration = checkbox.checked ? 'line-through' : 'none';
}


        function deleteIngredient(categoryId, ingredientId) {
            const ingredient = document.getElementById(ingredientId);
            const category = document.getElementById(categoryId);
            ingredient.remove();

            if (!category.querySelectorAll('li').length) {
                category.parentElement.remove();
            }
        }
    </script>
</head>
<body>
<header class="px-20 py-1 bg-white shadow-md">
    <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center">
            <img src="../resources/img/logo.png" alt="Logo" class="h-20 w-20">
        </div>
        <div class="flex-1 max-w-2xl mx-40">
            <div class="flex items-center bg-gray-100 rounded-full">
                <button class="flex items-center justify-center px-4 py-2 text-white bg-red-500 rounded-full w-1/2">
                    All Categories
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <input type="text" placeholder="Search"
                    class="w-full px-4 py-2 bg-gray-100 focus:outline-none text-sm opacity-50 border-gray-100">
                <button>
                    <svg class="mr-4 w-7 h-7 text-gray-500 bg-white rounded-full p-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex items-center space-x-4">
            <button class="p-2">
                <img src="../resources/img/notification.svg" alt="" class="w-7 h-7">
            </button>
            <div class="flex items-center">
                <span class="text-gray-700 dark:text-gray-300 mr-2">My Profile</span>
                <button class="w-6 h-6 rounded-full bg-gray-200 dark:bg-gray-600 flex items-center justify-center">
                    <img src="../resources/img/profile.svg" alt="" class="w-6 h-6">
                </button>
            </div>
        </div>
    </div>
</header>

<div>
    <nav class="bg-gray-100 shadow-md p-4 flex justify-center items-center">
        <div class="space-x-8 text-gray-700">
            <a href="#" class="hover:text-red-500">Home</a>
            <a href="#" class="hover:text-red-500">Recipes</a>
            <a href="#" class="hover:text-red-500">Add Recipes</a>
            <a href="#" class="hover:text-red-500">Blogs</a>
            <a href="#" class="hover:text-red-500">About Us</a>
        </div>
    </nav>
</div>

<div class="flex">
    <aside class="w-1/5 bg-white border-r text-center">
        <ul class="mt-10 space-y-4 pl-5">
            <li class="hover:text-red-500 cursor-pointer">Profile</li>
            <li class="hover:text-red-500 cursor-pointer">My Favorites</li>
            <li class="hover:text-red-500 cursor-pointer">Notification</li>
            <li class="hover:text-red-500 cursor-pointer">Meal Planner</li>
            <li class="text-white font-bold italic bg-red-500 p-2">Grocery List</li>
            <li class="hover:text-red-500 cursor-pointer">Setting</li>
        </ul>
    </aside>

<div class="flex-1 flex flex-col bg-gray-50 p-10">
        <!--Empty List-->
    <div class="hidden text-center text-gray-500">
                <div class="text-6xl mb-4">🛒</div>
                <p>Start your shopping list by adding items above</p>
            </div>

        <div class=" p-6">
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Add an item..." class="border rounded-lg w-40 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                <button class="bg-red-500 text-white px-4 py-2 rounded-lg">Add</button>
            </div>

            <div class="mt-8 max-w-xs">
                <!-- Dairy Category -->
                <!-- Dairy Category -->
<div class="mb-6">
    <div class="flex justify-between items-center mb-2">
        <h3 class="font-bold text-lg">Dairy</h3>
        <button id="toggle-dairy" onclick="toggleIngredients('dairy-items', 'toggle-dairy')" class="text-gray-500 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>
    <ul id="dairy-items" class="space-y-2">
        <li id="dairy-milk" class="flex items-center space-x-4">
            <input type="checkbox" id="milk" class="form-checkbox" onchange="handleCheckboxChange(this, 'label-milk')">
            <label id="label-milk" for="milk">Milk</label>
            <button onclick="deleteIngredient('dairy-items', 'dairy-milk')" class="text-red-500 hover:text-red-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </li>
        <li id="dairy-butter" class="flex items-center space-x-4">
            <input type="checkbox" id="butter" class="form-checkbox" onchange="handleCheckboxChange(this, 'label-butter')">
            <label id="label-butter" for="butter">Butter</label>
            <button onclick="deleteIngredient('dairy-items', 'dairy-butter')" class="text-red-500 hover:text-red-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </li>
    </ul>
</div>


                <!-- Meat Category -->
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="font-bold text-lg">Meat</h3>
                        <button id="toggle-meat" onclick="toggleIngredients('meat-items', 'toggle-meat')" class="text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                    <ul id="meat-items" class="space-y-2">
                        <li id="meat-beef" class="flex items-center space-x-4">
                            <input type="checkbox" name="meat" id="beef" class="form-checkbox" onchange="handleCheckboxChange(this, 'label-beef')">
                            <label id="label-beef" for="beef">Beef</label>
                            <button onclick="deleteIngredient('meat-items', 'meat-beef')" class="text-red-500 hover:text-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
