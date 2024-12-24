<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meal Planner</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <header class="px-20 py-1 bg-white shadow-md">
        <div class="container mx-auto flex items-center justify-between ">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="../img/logo.png" alt="Logo" class="h-20 w-20">
            </div>
            <!-- Search Section -->
            <div class="flex-1 max-w-2xl mx-40">
                <div class="flex items-center bg-gray-100 rounded-full">
                    <!-- Categories Dropdown -->
                    <button class="flex items-center justify-center px-4 py-2 text-white bg-red-500 rounded-full w-1/2">
                        All Categories <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Search Input -->
                    <input type="text" placeholder="Search"
                        class="w-full  px-4 py-2 bg-gray-100 focus:outline-none text-sm opacity-50 border-gray-100">
                    <!-- Search Button -->
                    <button class="">
                        <svg class="mr-4 w-7 h-7 text-gray-500 bg-white rounded-full p-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Profile Section -->
            <div class="flex items-center space-x-4">
                <button class="p-2">
                    <img src="../img/notification.svg" alt="" class="w-7 h-7">

                </button>
                <div class="flex items-center">
                    <span class="text-gray-700 dark:text-gray-300 mr-2">My Profile</span>
                    <button class="w-6 h-6 rounded-full bg-gray-200 dark:bg-gray-600 flex items-center justify-center">
                        <img src="../img/profile.svg" alt="" class="w-6 h-6">
                    </button>
                </div>
            </div>
        </div>
    </header>

        <!-- Top Navbar -->
        <div class="">
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

            <!-- Parent Container -->
    <div class="flex ">

        <!-- Sidebar -->
        <aside class="w-1/5 bg-white border-r text-center">
            <ul class="mt-10 space-y-4 pl-5">
                <li class=" hover:text-red-500 cursor-pointer">Profile</li>
                <li class="hover:text-red-500 cursor-pointer">Save Recipes</li>
                <li class="hover:text-red-500 cursor-pointer">Notification</li>
                <li class="text-white font-bold italic bg-red-500 p-2">Meal Planner</li>
                <li class="hover:text-red-500 cursor-pointer">Grocery List</li>
                <li class="hover:text-red-500 cursor-pointer">Setting</li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="container mx-auto px-11 py-10">
            <!-- Title -->
            <h1 class="text-center text-xl md:text-2xl font-bold mb-8 text-gray-800">
                You have not subscribed any premium plans.
            </h1>
    
            <!-- Cards Container -->
            <?php include_once '../../../common/plans.php'; ?>
        </div>
    </div>


</body>
</html>
