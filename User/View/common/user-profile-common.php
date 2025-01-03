<?php
$user_path = "/yumrecipe/User/View/resources/page/";
$images_path = "/yumrecipe/User/View/resources/img/";
$meal_plan_path = "/yumrecipe/User/View/resources/page/MealPlanner/";
$shopping_list_path = "/yumrecipe/User/View/resources/page/ShoppingList/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile UI</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        };
    </script>
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

<?php include 'header-after-login.php'; ?>

    <!-- Parent Container -->
    <div class="flex mt-1">

        <!-- Sidebar -->
        <aside class="w-full md:w-1/5 bg-white text-black border-r text-center dark:bg-gray-900 dark:text-white">
            <ul class="mt-10 space-y-4 pl-5 font-semibold">
                <li class="cursor-pointer p-2 text-sm sm:text-base <?php echo basename($_SERVER['PHP_SELF']) == 'userProfile.php' ? 'text-white font-bold italic bg-red-500' : '' ?>">
                    <a href="<?php echo $user_path; ?>userProfile.php">Profile</a>
                </li>
                <li class="cursor-pointer p-2 text-sm sm:text-base group relative <?php echo basename($_SERVER['PHP_SELF']) == 'savedRecipes.php' ? 'text-white font-bold italic bg-red-500' : '' ?>">
                    <div class="relative inline-block">
                        <a href="<?php echo $user_path; ?>savedRecipes.php" class="inline-block w-full">Saved Recipes</a>
                        <!-- Dropdown menu -->
                        <div class="absolute left-full top-0 ml-2 invisible group-hover:visible bg-white rounded-lg shadow-lg w-48 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                <li><a href="<?php echo $user_path; ?>savedRecipes.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All Personal Recipes</a></li>
                                <li><hr class="my-1 border-gray-200 dark:border-gray-600"></li>
                                <li><a href="<?php echo $user_path; ?>savedRecipes.php?category=breakfast" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Breakfast</a></li>
                                <li><a href="<?php echo $user_path; ?>savedRecipes.php?category=lunch" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lunch</a></li>
                                <li><a href="<?php echo $user_path; ?>savedRecipes.php?category=dinner" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dinner</a></li>
                                <li><a href="<?php echo $user_path; ?>savedRecipes.php?category=snacks" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Snacks</a></li>
                                <li><a href="<?php echo $user_path; ?>savedRecipes.php?category=desserts" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Desserts</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="cursor-pointer p-2 text-sm sm:text-base <?php echo basename($_SERVER['PHP_SELF']) == 'notification.php' ? 'text-white font-bold italic bg-red-500' : '' ?>">
                    <a href="<?php echo $user_path; ?>notification.php">Notification</a>
                </li>
                <li class="cursor-pointer p-2 text-sm sm:text-base <?php echo basename($_SERVER['PHP_SELF']) == 'meal_planner.php' ? 'text-white font-bold italic bg-red-500' : '' ?>">
                    <a href="<?php echo $meal_plan_path; ?>meal_planner.php">Meal Planner</a>
                </li>
                <li class="cursor-pointer p-2 text-sm sm:text-base <?php echo basename($_SERVER['PHP_SELF']) == 'shopping_list.php' ? 'text-white font-bold italic bg-red-500' : '' ?>">
                    <a href="<?php echo $shopping_list_path; ?>shopping_list.php">Grocery List</a>
                </li>
                <li class="cursor-pointer p-2 text-sm sm:text-base <?php echo basename($_SERVER['PHP_SELF']) == 'userAccSetting.php' ? 'text-white font-bold italic bg-red-500' : '' ?>">
                    <a href="<?php echo $user_path; ?>userAccSetting.php">Subscription</a>
                </li>
               
            </ul>
            <ul class="mt-[270px] space-y-4 pl-5">
                <li class="cursor-pointer p-2 text-sm sm:text-base font-semibold">
                    <a href="../../../Controller/SignOutController.php" class="inline-block w-full">Sign Out</a>
                </li>
            </ul>
        </aside>
</body>
</html>

