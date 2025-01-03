<?php
session_start();
// Get category from URL parameter
$category = isset($_GET['category']) ? $_GET['category'] : null;

// Get recipes based on category
if ($category) {
   // $recipes = $recipeController->getSavedRecipesByCategory($userId, $category);
    $currentCategory = ucfirst($category); // Capitalize first letter for display
} else {
 //   $recipes = $recipeController->getAllSavedRecipes($userId);
    $currentCategory = "All Personal Recipes";
}
?>
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile save recipes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<?php require_once '../../common/user-profile-common.php'; ?>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col bg-gray-50 dark:bg-gray-900">
                <!-- Navigation Bar -->
    <?php require_once '../../common/nav.php'; ?>
            <div class="container mx-auto px-4 py-8">
                <!-- Top Section: Search and Filter -->
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-xl font-semibold"><?php echo $currentCategory; ?></h1>

                    <div class="flex items-center space-x-4">
                        <!-- Filter Button -->
                        <button class="flex items-center bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                            <span class="mr-2">Filter</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 01.8 1.6l-3.6 4.8V15a1 1 0 01-.4.8l-3 2a1 1 0 01-1.6-.8v-5.6L3.2 6.6A1 1 0 013 5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Search Bar -->
                        <div class="relative">
                            <input type="text" placeholder="Search favorites"
                                class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 absolute left-3 top-2.5 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 2a6 6 0 100 12 6 6 0 000-12zM0 8a8 8 0 1114.32 4.906l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387A8 8 0 010 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4">
                    <!-- Recipe Card -->
                    <div class="w-[300px] h-[350px] rounded-lg shadow-lg bg-white dark:bg-gray-800 overflow-hidden"> 
                        <!-- Image Section -->
                        <div class="relative"> 
                            <img src="<?php echo $images_path ?>lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2"> 
                                <!-- Bookmark Icon -->
                                <div class="bg-yellow-300 rounded-full p-2"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                                    </svg> 
                                </div>
                            </div>
                        </div> <!-- Content Section -->
                        <div class="p-4">
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-white">Lemon Butter Fish</h2>
                            <p class="text-gray-500 dark:text-white text-sm mt-1">by Ricky</p> <!-- Rating -->
                            <div class="flex items-center mt-2">
                                <div class="flex text-yellow-300"> 
                                    <!-- Star Rating --> 
                                    <svg class="w-5 h-5" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                                    </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                                    </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                                    </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                                    </svg> <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                                    </svg> </div>
                            </div> 
                            <!-- Meta Data -->
                            <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
                                <div class="flex items-center"> 
                                <span class="material-icons text-gray-400 dark:text-gray-300 mr-2">watch_later</span>
                                    <span class="dark:text-white">1 hour 23 min</span> </div>
                                <div class="flex items-center"> 
                                <span class="material-icons text-gray-400 dark:text-gray-300 mr-2">comment</span>
                                    <span class="dark:text-white">23</span> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recipe Card -->
                    <div class="w-[300px] h-[350px] rounded-lg shadow-lg bg-white dark:bg-gray-800 overflow-hidden"> 
                        <!-- Image Section -->
                        <div class="relative"> 
                            <img src="<?php echo $images_path ?>lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2"> 
                                <!-- Bookmark Icon -->
                                <div class="bg-yellow-300 rounded-full p-2"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                                    </svg> 
                                </div>
                            </div>
                        </div> <!-- Content Section -->
                        <div class="p-4">
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-white">Lemon Butter Fish</h2>
                            <p class="text-gray-500 dark:text-white text-sm mt-1">by Ricky</p> <!-- Rating -->
                            <div class="flex items-center mt-2">
                                <div class="flex text-yellow-300"> 
                                    <!-- Star Rating --> 
                                    <svg class="w-5 h-5" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                                    </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                                    </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                                    </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                                    </svg> <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                                    </svg> </div>
                            </div> 
                            <!-- Meta Data -->
                            <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
                                <div class="flex items-center"> 
                                <span class="material-icons text-gray-400 dark:text-gray-300 mr-2">watch_later</span>
                                    <span class="dark:text-white">1 hour 23 min</span> </div>
                                <div class="flex items-center"> 
                                <span class="material-icons text-gray-400 dark:text-gray-300 mr-2">comment</span>
                                    <span class="dark:text-white">23</span> 
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>

                    <!-- Premium Section -->
                    <?php require_once '../../common/premium-section.php'; ?>
            </div>
        </div>
    </div>
</body>

</html>