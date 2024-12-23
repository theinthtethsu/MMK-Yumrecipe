<?php
$user_path = "/yumrecipe/User/View/resources/page/";
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

<?php require_once './user-profile-nav.php'; ?>

    <!-- Parent Container -->
    <div class="flex ">
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
        <div class="flex-1 flex flex-col bg-gray-50">
        <div class="p-5 space-y-4">
                <div class="h-[2000px] bg-gray-200 rounded shadow p-4">
                    Scrollable Content Goes Here
                </div>
            </div>
        </div>
    </div>

</body>
</html>