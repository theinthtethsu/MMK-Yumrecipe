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
  <header class="px-20 py-1 bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between ">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="/yumrecipe/User/View/resources/page/homepage.php" class="cursor-pointer">
                <img src="<?php echo $images_path ?>logo.png" alt="Logo" class="h-20 w-20">
            </a>
        </div>
        <!-- Search Section -->
        <div class="flex-1 max-w-2xl mx-40">
            <div class="flex items-center bg-gray-100 rounded-full">
                <!-- Categories Dropdown -->
                <button class="flex items-center justify-center px-4 py-2 text-white bg-red-500 rounded-full w-1/2"> All Categories <svg
                        class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <!-- Search Input -->
                <input type="text" placeholder="Search"
                    class="w-full  px-4 py-2 bg-gray-100 focus:outline-none text-sm opacity-50 border-gray-100">
                <!-- Search Button -->
                <button class="">
                    <svg class="mr-4 w-7 h-7 text-gray-500 bg-white rounded-full p-1" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
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
                </div>
    </div>
</header>
</html>