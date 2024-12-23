<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Community Blog Upload Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../../../../../output.css">
  <link rel="stylesheet" href="../../css/root.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>
 
<body class="bg-gray-200  h-screen">
  <div class="flex  w-full">
    <!-- Sidebar -->
    <?php require_once '../../../common/sideMenu.php'; ?>
 
    <!-- Main Content -->
    <main class="flex-1 bg-white max-w-full">
      <!-- Main Container -->
        <!-- Community Title -->
        <div class="bg-gray-300 px-4 py-3">
          <h1 class="text-2xl font-bold text-black">Community</h1>
            <h2 class="text-2xl font-semibold text-black flex justify-center">Upload New Blog</h2>
        </div>
        <div class="m-5">
        <!-- Two Columns Layout -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
          <!-- Left Column -->
          <div class="col-span-1">
            <div class="w-full bg-gray-100 p-4 rounded-lg ">
              <!-- Search and Filter Row -->
              <div class="flex items-center space-x-2 mb-4">
                <!-- Search Bar -->
                <div class="relative flex-1">
                  <input type="text" placeholder="Title"
                    class="w-full py-2 px-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
                  <!-- Search Icon -->
                  <div class="absolute right-2 top-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none"
                      viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
                    </svg>
                  </div>
                </div>
 
                <!-- Filter Dropdown -->
                <div>
                  <select
                    class="py-2 px-4 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    <option>All Time</option>
                    <option>Past Week</option>
                    <option>Past Month</option>
                  </select>
                </div>
              </div>
 
              <!-- Scrollable Card Container -->
              <div class="overflow-y-auto h-[550px] space-y-4 scrollbar-thin scrollbar-thumb-gray-300">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                  <img src="/yumrecipe/Admin/View/resources/images/prawn.jpg" alt="Recipe Image"
                    class="w-full h-[150px] object-cover" />
                  <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">What To Cook in Christmas?</h2>
                    <p class="text-sm text-gray-500">2024/12/01</p>
                  </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                  <img src="/yumrecipe/Admin/View/resources/images/avocado.jpg" alt="Recipe Image"
                    class="w-full h-[150px] object-cover" />
                  <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">What To Cook for Breakfast?</h2>
                    <p class="text-sm text-gray-500">2024/12/09</p>
                  </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                  <img src="/yumrecipe/Admin/View/resources/images/steak.jpg" alt="Recipe Image"
                    class="w-full h-[150px] object-cover" />
                  <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">What To Cook for Dinner?</h2>
                    <p class="text-sm text-gray-500">2024/12/11</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Form Container -->
    <div class="col-span-1 sm:col-span-2 border rounded p-5 bg-gray-50">
      <h2 id="formTitle" class="text-2xl font-semibold flex justify-center">Upload</h2>    
        <div class="col-span-2">
          <p id="formDate" class="text-sm font-bold text-gray-500 flex justify-end">Blog From 2024/12/01</p>
        </div>    
    <!-- Form -->
    <form id="upload-form" action="naninani.php" method="POST" enctype="multipart/form-data" class="space-y-4">
      <!-- Photo Upload -->
      <div>
        <label for="photo" class="block text-lg font-bold text-gray-700">Photo</label>
        <div class="flex items-center space-x-4">
          <div class="w-24 h-24 bg-gray-200 border border-dashed border-gray-400 rounded-lg flex items-center justify-center overflow-hidden">
            <img id="photo-preview" src="#" alt="Photo Preview" class=" w-full h-full object-cover">
          </div>
          <label class="px-4 py-2 bg-gray-200 text-sm font-medium text-gray-700 rounded-md border border-gray-300 hover:bg-gray-300 mt-12">
            <input type="file" name="photo" id="photo-input" class="hidden" accept="image/*" required>Change</label>
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label class="block font-medium" for="author">Author</label>
          <input id="author" type="text" value="John"
            class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400" />
        </div>
        <div>
          <label class="block font-medium" for="intro">Intro</label>
          <input id="intro" type="text" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400" />
        </div>
      </div>
      <div>
        <label class="block font-medium" for="title">Title</label>
        <input id="title" type="text" value="What To Cook in Christmas?"
          class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400" />
      </div>
      <div>
        <label class="block font-medium" for="description">Description</label>
        <textarea id="description" rows="5" value="Lorem Ipsum is simply dummy text of the printing and typesetting industry."
          class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400"></textarea>
      </div>
      <div class="text-right">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-gray-300 ">Upload </button>
      </div>
    </form>
  </div>
    </div>
    <div class="flex justify-end mb-3 mt-3 ">
        <button id="toggleFormBtn" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-gray-300" onclick="window.location.href='community.php'">Back to Blogs</button>
    </div>
    </div>
        </main>

  <script>
    // JavaScript for Image Preview
    const photoInput = document.getElementById('photo-input');
    const photoPreview = document.getElementById('photo-preview');
  
    photoInput.addEventListener('change', (event) => {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
          photoPreview.src = e.target.result; // Update the preview image
          photoPreview.classList.remove('hidden'); // Show the preview image
        };
        reader.readAsDataURL(file);
      }
    });
  </script>
</body> 
</html>