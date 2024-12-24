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
      <div class="flex-1 flex flex-col bg-gray-50">
        <div class="container mx-auto px-4 py-8">
          <div class="max-w-2xl mt-8 p-4">
            <!-- Header -->
            <div class="flex justify-between items-center mb-4">
              <h1 class="text-xl font-bold text-gray-800">Inbox</h1>
              <button class="text-sm text-gray-500 hover:text-gray-700">
                Mark all as read
              </button>
            </div>

            <!-- Comment List -->
            <div class="space-y-4">
              <!-- Comment Item -->
              <div
                class="flex items-start p-4 bg-white rounded-lg shadow transition-all transform hover:shadow-lg hover:-translate-y-1"
              >
                <img
                  src="https://i.pravatar.cc/48?img=10"
                  alt="Profile"
                  class="w-12 h-12 rounded-full mr-4"
                />
                <div class="flex-1">
                  <h2 class="font-bold text-gray-700">
                    Sandi
                    <span class="font-normal text-gray-600"
                      >commented on your recipe.</span
                    >
                  </h2>
                  <p class="text-sm text-pink-500">2 min ago.</p>
                </div>
                <button
                  class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded"
                >
                  View
                </button>
              </div>

              <!-- Comment Item -->
              <div
                class="flex items-start p-4 bg-white rounded-lg shadow transition-all transform hover:shadow-lg hover:-translate-y-1"
              >
                <img
                  src="https://i.pravatar.cc/48?img=2"
                  alt="Profile"
                  class="w-12 h-12 rounded-full mr-4"
                />
                <div class="flex-1">
                  <h2 class="font-bold text-gray-700">
                    Hsu
                    <span class="font-normal text-gray-600"
                      >commented on your recipe.</span
                    >
                  </h2>
                  <p class="text-sm text-pink-500">2 min ago.</p>
                </div>
                <button
                  class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded"
                >
                  View
                </button>
              </div>

              <!-- Comment Item -->
              <div
                class="flex items-start p-4 bg-white rounded-lg shadow transition-all transform hover:shadow-lg hover:-translate-y-1"
              >
                <img
                  src="https://i.pravatar.cc/48?img=5"
                  alt="Profile"
                  class="w-12 h-12 rounded-full mr-4"
                />
                <div class="flex-1">
                  <h2 class="font-bold text-gray-700">
                    Crystal
                    <span class="font-normal text-gray-600"
                      >commented on your recipe.</span
                    >
                  </h2>
                  <p class="text-sm text-pink-500">2 min ago.</p>
                </div>
                <button
                  class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded"
                >
                  View
                </button>
              </div>
            </div>
          </div>

          <!-- Premium Section -->
          <div class="bg-gray-200 rounded-lg mt-10 p-6">
            <h2 class="text-lg font-semibold mb-4">
              Get More Premium Features
            </h2>
            <div class="flex justify-between items-center">
              <!-- Price Cards -->
              <div class="text-center">
                <p class="text-red-500 font-bold">$1.99 Basic</p>
                <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="text-center">
                <p class="text-red-500 font-bold">$2.99 Standard</p>
                <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="text-center">
                <p class="text-red-500 font-bold">$4.99 Premium</p>
                <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet.</p>
              </div>
              <button
                class="bg-red-500 text-white px-5 py-2 rounded-lg hover:bg-red-600"
              >
                See Details
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
