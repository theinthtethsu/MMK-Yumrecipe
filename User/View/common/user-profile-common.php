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
        <aside class="w-1/5 bg-white text-black border-r text-center dark:bg-gray-900 dark:text-white">
            <ul class="mt-10 space-y-4 pl-5">
                <li class="cursor-pointer p-2 <?php echo basename($_SERVER['PHP_SELF']) == 'userProfile.php' ? 'text-white font-bold italic bg-red-500' : '' ?> "><a href="<?php echo $user_path; ?>userProfile.php">Profile</a></li>
                <li class="cursor-pointer p-2 <?php echo basename($_SERVER['PHP_SELF']) == 'savedRecipes.php' ? 'text-white font-bold italic bg-red-500' : '' ?> "><a href="<?php echo $user_path; ?>savedRecipes.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'savedRecipes.php' ? 'text-white font-bold italic bg-red-500' : '' ?>">Saved Recipes</a></li>
                <li class="cursor-pointer p-2 <?php echo basename($_SERVER['PHP_SELF']) == 'notification.php' ? 'text-white font-bold italic bg-red-500' : '' ?>"><a href="<?php echo $user_path; ?>notification.php">Notification</a></li>
                <li class="cursor-pointer p-2 <?php echo basename($_SERVER['PHP_SELF']) == 'meal_planner.php' ? 'text-white font-bold italic bg-red-500' : '' ?>"><a href="<?php echo $meal_plan_path; ?>meal_planner.php">Meal Planner</a></li>
                <li class="cursor-pointer p-2 <?php echo basename($_SERVER['PHP_SELF']) == 'shopping_list.php' ? 'text-white font-bold italic bg-red-500' : '' ?>"><a href="<?php echo $shopping_list_path; ?>shopping_list.php">Grocery List</a></li>
                <li class="cursor-pointer p-2 <?php echo basename($_SERVER['PHP_SELF']) == 'userAccSetting.php' ? 'text-white font-bold italic bg-red-500' : '' ?>"><a href="<?php echo $user_path; ?>userAccSetting.php">Setting</a></li>
            </ul>
        </aside>
</body>
</html>