<?php
$user_path = "/yumrecipe/User/View/resources/page/";
$images_path = "/yumrecipe/User/View/resources/img/";
?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header with Login Button</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        };
    </script>
     <script defer src="/yumrecipe/User/View/resources/js/dark-mode.js"></script>
</head>
<body class="bg-white dark:bg-gray-900 dark:text-white transition-all duration-300">
<header class="px-6 py-2 bg-white dark:bg-gray-800  shadow-md sticky top-0 z-50 transition-colors duration-300">
    <div class="container mx-auto flex items-center justify-between flex-wrap">
        <!-- Logo -->
        <div class="flex items-center flex-shrink-0">
            <img src="<?php echo $images_path ?>logo.png" alt="Logo" class="h-16 w-16 sm:h-20 sm:w-20">
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="block md:hidden">
            <button id="mobileMenuToggle" class="text-gray-700 dark:text-gray-300 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Full Navigation -->
        <div id="menu" class="hidden w-full md:flex md:flex-1 md:items-center md:justify-between md:w-auto relative">
            <!-- Search Section -->
            <div class="flex flex-1 max-w-xl mx-auto mt-4 md:mt-0">
                <div class="flex items-center bg-gray-100 dark:bg-gray-700 rounded-full w-full ">
                    <!-- Categories Dropdown -->
                    <button id="dropdownButton" class="flex items-center justify-center px-4 py-2 text-white bg-red-500 rounded-full w-1/2"  onclick="toggleDropdown()">
                        All Categories
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                                 <!-- Dropdown Content -->
                                 <div 
          id="dropdownMenu" 
          class="hidden absolute left-0 top-20 mt-2 w-full bg-white border border-gray-300 dark:border-gray-700 rounded-md shadow-lg dark:bg-gray-900 dark:text-white" >
          <ul class="grid grid-cols-5 gap-2 p-4">
            <li class="p-2 bg-gray-100 rounded-md hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">Item 1</li>
            <li class="p-2 bg-gray-100 rounded-md hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">Item 2</li>
            <li class="p-2 bg-gray-100 rounded-md hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">Item 3</li>
            <li class="p-2 bg-gray-100 rounded-md hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">Item 4</li>
            <li class="p-2 bg-gray-100 rounded-md hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">Item 5</li>
            <li class="p-2 bg-gray-100 rounded-md hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">Item 6</li>
            <li class="p-2 bg-gray-100 rounded-md hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">Item 7</li>
            <li class="p-2 bg-gray-100 rounded-md hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">Item 8</li>
            <li class="p-2 bg-gray-100 rounded-md hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">Item 9</li>
            <li class="p-2 bg-gray-100 rounded-md hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">Item 10</li>
            <li class="p-2 bg-gray-100 rounded-md hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">Item 1</li>
            <li class="p-2 bg-gray-100 rounded-md hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">Item 2</li>
            <li class="p-2 bg-gray-100 rounded-md hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">Item 3</li>
            <li class="p-2 bg-gray-100 rounded-md hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">Item 4</li>
          </ul>
        </div>
                    <!-- Search Input -->
                    <input type="text" placeholder="Search" class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 text-sm text-gray-700 dark:text-gray-300 focus:outline-none">
                    <!-- Search Button -->
                    <button class="px-2">
                        <svg class="w-6 h-6 text-gray-500 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Auth Buttons -->
            <div class="flex items-center space-x-4 mt-4 md:mt-0">
                <a href="<?php echo $user_path; ?>Signin/signIn.php" class="px-5 py-2 text-white bg-red-500 rounded-full hover:bg-red-600 text-sm font-semibold">
                    Sign In
                </a>
                <a href="<?php echo $user_path; ?>Signin/signUp.php" class="px-5 py-2 text-white bg-gray-900 rounded-full hover:bg-gray-800 text-sm font-semibold dark:text-black dark:bg-white dark:hover:border-2 dark:hover:border-red-500 hover:text-white">
                    Sign Up </a>
<!-- Dark Mode Toogle -->
                    <label class="flex items-center cursor-pointer">
                    <input type="checkbox" id="toggle-dark-mode" class="hidden">
                    <div class="w-10 h-5 bg-gray-300 rounded-full dark:bg-gray-600 flex items-center">
                        <div class="w-4 h-4 bg-white rounded-full shadow transition-transform duration-300 dark:translate-x-5"></div>
                    </div>
                    
            </label> 
            </div>

            
            
        </div>
    </div>
<script>
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const menu = document.getElementById('menu');
    //  Mobile Menu Toggle
mobileMenuToggle.addEventListener('click', () => {
    menu.classList.toggle('hidden'); // Show/hide menu
});

//Dropdown
function toggleDropdown() {
  const dropdown = document.getElementById('dropdownMenu');
  dropdown.classList.toggle('hidden');
}

    </script>
</header>
</body>
</html>