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
  

<div class="flex-1 flex flex-col bg-gray-50 px-11 py-5">
  <!-- Recent Activities Section -->
  <div class="bg-white rounded-lg shadow-md p-6 mb-6">
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
  </div>

  <!-- Subscription Section -->
  <div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <h2 class="text-lg font-semibold mb-4">Your Subscriptions</h2>
    <p class="mb-4">You have subscribed to <span class="font-semibold text-green-600">Premium Plan</span>.</p>
    <ul class="space-y-2 text-sm text-gray-700">
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
  <div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <h2 class="text-lg font-semibold mb-4">Default Mode</h2>
    <div class="flex items-center space-x-4">
      <p>Light</p>
      <label class="relative inline-flex items-center cursor-pointer">
        <input type="checkbox" class="sr-only peer">
        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-red-300 rounded-full peer-checked:bg-red-600 peer-checked:after:translate-x-5 peer-checked:after:bg-white after:content-[''] after:absolute after:top-1 after:left-1 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all"></div>
        <span class="ml-3 text-sm font-medium text-gray-700">Dark</span>
      </label>
    </div>
  </div>

  <!-- Preferences Section -->
 <!-- Preferences Section -->
 <div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-lg font-semibold mb-4">Preferences</h2>
    <div class="flex flex-wrap gap-2">
      <!-- Tag -->
      <div class="flex items-center space-x-2 border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">
        <span>Japanese</span>
        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
          ✕
        </button>
      </div>
      <!-- Repeat for each tag -->
      <div class="flex items-center space-x-2 border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">
        <span>Heart-healthy</span>
        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
          ✕
        </button>
      </div>
      <div class="flex items-center space-x-2 border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">
        <span>Under 15 mins</span>
        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
          ✕
        </button>
      </div>
      <div class="flex items-center space-x-2 border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">
        <span>Appetizer</span>
        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
          ✕
        </button>
      </div>
      <div class="flex items-center space-x-2 border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">
        <span>Dessert</span>
        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
          ✕
        </button>
      </div>
      <div class="flex items-center space-x-2 border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">
        <span>Chicken</span>
        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
          ✕
        </button>
      </div>
      <div class="flex items-center space-x-2 border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">
        <span>Grilling</span>
        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
          ✕
        </button>
      </div>
      <div class="flex items-center space-x-2 border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">
        <span>Party</span>
        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
          ✕
        </button>
      </div>
      <div class="flex items-center space-x-2 border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">
        <span>Family Dinner</span>
        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
          ✕
        </button>
      </div>
      <div class="flex items-center space-x-2 border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">
        <span>Summer</span>
        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
          ✕
        </button>
      </div>
      <div class="flex items-center space-x-2 border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">
        <span>Vegetarian</span>
        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
          ✕
        </button>
      </div>
    </div>
  </div>

 
    </div>

    </div>

  </body>
</html>
