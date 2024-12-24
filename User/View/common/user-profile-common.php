<?php
$user_path = "/yumrecipe/User/View/resources/page/";
$images_path = "/yumrecipe/User/View/resources/img/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
<style>
    aside {
    position: sticky;
    top: 8.5rem;
    height: calc(100vh - 8.5rem); 
    z-index: 10;
}
</style>
</head>
<body>

<header class="shadow-md sticky top-0 z-50 bg-white">
    <div class="container mx-auto flex items-center justify-between ">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="<?php echo $images_path ?>logo.png" alt="Logo" class="h-20 w-20">
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
                    <button class="p-2">
                        <img src="<?php echo $images_path ?>notification.svg" alt="" class="w-7 h-7">

                    </button>
                    <div class="flex items-center">
                        <span class="text-gray-700 dark:text-gray-300 mr-2">My Profile</span>
                        <button class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-600 flex items-center justify-center">
                            <img src="<?php echo $images_path ?>profile.svg" alt="" class="w-7 h-7">                         
                        </button>
                    </div>
                </div>
    </div>
    
        <!-- Top Navbar -->
        <div class="w-full">
        <nav class="bg-gray-100  p-4 flex justify-center items-center">
            <div class="space-x-8 text-gray-700">
                <a href="<?php echo $user_path; ?>homepage.php" class="hover:text-red-500">Home</a>
                <a href="<?php echo $user_path; ?>receipe.php" class="hover:text-red-500">Recipes</a>
                <a href="<?php echo $user_path; ?>addRecipe.html" class="hover:text-red-500">Add Recipes</a>
                <a href="<?php echo $user_path; ?>blog.html" class="hover:text-red-500">Blogs</a>
                <a href="<?php echo $user_path; ?>aboutUs.html" class="hover:text-red-500">About Us</a>
            </div>
        </nav>
    </div>
</header>

    <!-- Parent Container -->
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-1/5 bg-white border-r text-center">
            <ul class="mt-10 space-y-4 pl-5">
                <li class="text-white font-bold italic bg-red-500 p-2"><a href="<?php echo $user_path; ?>profile.html">Profile</a></li>
                <li class="hover:text-red-500 cursor-pointer"><a href="<?php echo $user_path; ?>savedRecipes.html">Save Recipes</a></li>
                <li class="hover:text-red-500 cursor-pointer"><a href="<?php echo $user_path; ?>notification.html">Notification</a></li>
                <li class="hover:text-red-500 cursor-pointer"><a href="<?php echo $user_path; ?>mealPlanner.html">Meal Planner</a></li>
                <li class="hover:text-red-500 cursor-pointer"><a href="<?php echo $user_path; ?>groceryList.html">Grocery List</a></li>
                <li class="hover:text-red-500 cursor-pointer"><a href="<?php echo $user_path; ?>setting.html">Setting</a></li>
            </ul>
        </aside>
        

        <!-- Main Content -->



</body>
</html>