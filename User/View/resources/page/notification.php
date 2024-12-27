<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notification</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>

  <?php require_once '../../common/user-profile-common.php'; ?>
        <!-- Main Content -->
        <div class="flex-1 flex flex-col bg-gray-50 dark:bg-gray-900 dark:text-white">

            <div class="container mx-auto px-4 py-8">

                <div class="max-w-2xl mt-8 p-4">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-4">
                      <h1 class="text-xl font-bold text-gray-800 dark:text-white">Inbox</h1>
                      <button class="text-sm text-gray-500 hover:text-gray-700 dark:text-white">Mark all as read</button>
                    </div>
                    
                    <!-- Comment List -->
                    <div class="space-y-4">
                      <!-- Comment Item -->
                      <div class="flex items-start p-4 bg-white dark:bg-gray-800 rounded-lg shadow transition-all transform hover:shadow-lg hover:-translate-y-1">
                        <img src="https://i.pravatar.cc/48?img=10" alt="Profile" class="w-12 h-12 rounded-full mr-4">
                        <div class="flex-1">
                          <h2 class="font-bold text-gray-700 dark:text-white">Sandi <span class="font-normal text-gray-600 dark:text-white">commented on your recipe.</span></h2>
                          <p class="text-sm text-pink-500 ">2 min ago.</p>
                        </div>
                        <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded">View</button>
                      </div>
                
                      <!-- Comment Item -->
                      <div class="flex items-start p-4 bg-white dark:bg-gray-800 rounded-lg shadow transition-all transform hover:shadow-lg hover:-translate-y-1">
                        <img src="https://i.pravatar.cc/48?img=10" alt="Profile" class="w-12 h-12 rounded-full mr-4">
                        <div class="flex-1">
                          <h2 class="font-bold text-gray-700 dark:text-white">Sandi <span class="font-normal text-gray-600 dark:text-white">commented on your recipe.</span></h2>
                          <p class="text-sm text-pink-500 ">2 min ago.</p>
                        </div>
                        <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded">View</button>
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
