<?php
$images_path = "/yumrecipe/User/View/resources/img/";
$user_path = "/yumrecipe/User/View/resources/page/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header with Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="px-6 py-2 bg-white shadow-md dark:bg-gray-800">
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
        <div id="menu" class="hidden w-full md:flex md:flex-1 md:items-center md:justify-between md:w-auto">
            <!-- Search Section -->
            <div class="flex flex-1 max-w-xl mx-auto mt-4 md:mt-0">
                <div class="flex items-center bg-gray-100 dark:bg-gray-700 rounded-full w-full">
                    <!-- Categories Dropdown -->
                    <button class="flex items-center justify-center px-4 py-2 text-white bg-red-500 rounded-full w-1/2">
                        All Categories
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
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
                <!-- Profile Section -->
                <div class="flex items-center space-x-4">
                    <a href="<?php echo $user_path; ?>notification.php" class="p-2">
                        <img src="<?php echo $images_path ?>notification.svg" alt="" class="w-7 h-7">
                    </a>
                    <div class="flex items-center">
                        <span class="text-gray-700 dark:text-gray-300 mr-2">My Profile</span>
                        <a href="<?php echo $user_path; ?>userProfile.php" class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-600 flex items-center justify-center">
                            <img src="<?php echo $images_path ?>profile.svg" alt="" class="w-7 h-7">                         
                        </a>
                    </div>
                    <button id="darkModeToggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                    <svg id="lightIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 3a1 1 0 011-1V1a1 1 0 10-2 0v1a1 1 0 011 1zm4.293-1.293a1 1 0 011.414 0l1-1a1 1 0 00-1.414-1.414l-1 1a1 1 0 010 1.414zM10 17a1 1 0 011-1v1a1 1 0 10-2 0v-1a1 1 0 011-1zm6.293-1.293a1 1 0 01-1.414 0l-1 1a1 1 0 101.414 1.414l1-1a1 1 0 010-1.414zM10 9a1 1 0 011-1V7a1 1 0 10-2 0v1a1 1 0 011 1zm4.293 4.293a1 1 0 00-1.414 0l-1-1a1 1 0 101.414-1.414l1 1a1 1 0 000 1.414zM10 5a5 5 0 100 10 5 5 0 000-10zm-3.536 7.464a1 1 0 000 1.414l1 1a1 1 0 101.414-1.414l-1-1a1 1 0 00-1.414 0z" />
                    </svg>
                    <svg id="darkIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 2a8 8 0 106.32 12.906A6 6 0 0112 4.8a8.044 8.044 0 00-2-.8z" clip-rule="evenodd" />
                    </svg>
                </button>
                </div>
    </div>
</header>
</html>