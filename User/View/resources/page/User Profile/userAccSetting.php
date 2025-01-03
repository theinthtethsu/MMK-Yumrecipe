<?php $premium_path = "/yumrecipe/User/View/resources/page/Premium%20Features/"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile Setting</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php require_once '../../common/user-profile-common.php'; ?>
  

<div class="flex-1 flex flex-col bg-gray-50 dark:bg-gray-900 px-11 py-2">
    <!-- Navigation Bar -->
    <?php require_once '../../common/nav.php'; ?>
  <!-- Recent Activities Section -->
  <!-- <div class="bg-white dark:bg-gray-800 dark:text-white rounded-lg shadow-md p-6 mb-6 mt-4">
    <h2 class="text-lg font-semibold mb-4">Recent Activities</h2>
    <div class="space-y-4">
      <div class="flex items-center space-x-3">
        <div class="text-red-500">❤️</div>
        <p>Favorited to John's <span class="font-semibold">"Spaghetti in 5 mins"</span> Recipe.</p>
      </div>
      <div class="flex items-center space-x-3">
        <div class="text-blue-500">💬</div>
        <p>Commented to John's <span class="font-semibold">"Spaghetti in 5 mins"</span> Recipe.</p>
      </div>
      <div class="flex items-center space-x-3">
        <div class="text-yellow-500">⭐</div>
        <p>Rated 4 Stars to John's <span class="font-semibold">"Spaghetti in 5 mins"</span> Recipe.</p>
      </div>
    </div>
  </div> -->

  <!-- Subscription Section -->
  <div class="bg-white dark:bg-gray-800 dark:text-white rounded-lg shadow-md p-6 mb-6 relative mt-20">
    <a href="<?php echo $premium_path; ?>premiumFeatures.php" class="absolute top-[-15px] left-[200px] bg-red-500 text-white px-4 py-2 rounded-full">Subscribed</a>
  <h2 class="text-lg font-semibold">Your Subscriptions</h2>
  <span class="text-gray-400 text-sm">Expire:2025/03/23</span>
    <p class="mb-4 mt-4">You have subscribed to <span class="font-semibold text-green-600">Premium Plan</span>.</p>
    <ul class="space-y-2 text-sm text-gray-700 dark:text-white">
      <li class="flex items-center">
        <span class="text-green-500 mr-2">✔</span> Upload recipes without restrictions.
      </li>
      <li class="flex items-center">
        <span class="text-green-500 mr-2">✔</span> Export or print grocery lists from recipes.
      </li>
      <li class="flex items-center">
        <span class="text-green-500 mr-2">✔</span> Unlimited access to all live cooking, including Q&A with chefs.
      </li>
      <li class="flex items-center">
        <span class="text-green-500 mr-2">✔</span> Advanced folders and tagging system for recipes.
      </li>
      <li class="flex items-center">
        <span class="text-green-500 mr-2">✔</span> Exclusive access to workshops, recipes, and content from professional chefs.
      </li>
      <li class="flex items-center">
        <span class="text-green-500 mr-2">✔</span> No ads.
      </li>
    </ul>
  </div>

  <!-- Default Mode Section -->
  <!-- <div class="bg-white dark:bg-gray-800 dark:text-white rounded-lg shadow-md p-6 mb-6">
    <h2 class="text-lg font-semibold mb-4">Default Mode</h2>
    <div class="flex items-center space-x-4">
      <p>Light</p>
      <label class="relative inline-flex items-center cursor-pointer">
        <input type="checkbox" class="sr-only peer">
        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-red-300 rounded-full peer-checked:bg-red-600 peer-checked:after:translate-x-5 peer-checked:after:bg-white after:content-[''] after:absolute after:top-1 after:left-1 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all"></div>
        <span class="ml-3 text-sm font-medium text-gray-700 dark:text-white">Dark</span>
      </label>
    </div>
  </div> -->

  <!-- Preferences Section -->
 

  </body>
</html>
