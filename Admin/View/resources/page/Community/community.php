<?php
$community_path = '/yumrecipe/Admin/View/resources/page/Community/';
?>

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

    <div class="flex-1 container p-4 bg-secondary overflow-y-auto" style="height: 100vh;">
            <h1 class="text-2xl font-bold mb-3">Community</h1>
            <!-- Tabs -->
            <ul class="flex space-x-4 justify-end">
                <li class="cursor-pointer px-2 py-2 pb-5 bg-light-text rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Blogs</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Contents</li>
                <li class="cursor-pointer px-2 py-2 pb-5  rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Comments</li>
                
            </ul>
            <!-- Content -->
            <div id="content"></div>
        </div>
    </div>
    <script>
        // function to toggle the background color of the selected tab
        function toggleBackground(selected) {
            const items = document.querySelectorAll('ul li');
            items.forEach(item => {
                item.classList.remove('bg-light-text');
            });
            selected.classList.toggle('bg-light-text');
            const contentDiv = document.getElementById('content');
            // switch case to load the content of the selected tab
            switch (selected.innerText) {
                case 'Blogs':
                    contentDiv.innerHTML = `
    <!-- Main Content -->
    <main class="flex-1 bg-light-text max-w-full rounded-lg shadow-md ml-3 mr-3 -mt-3"> 
        <div class="flex justify-end mr-5">
            <a href="/yumrecipe/Admin/View/resources/page/Community/addnewblog.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-gray-300 mt-3 mb-3">Add New Blog</a>
        </div>
 
        <!-- Two Columns Layout -->
        <div id="blogContent" class="grid grid-cols-1 sm:grid-cols-3 gap-6 ml-5 mr-5">
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
      <h2 class="text-2xl font-semibold flex justify-center">Edit</h2>    
        <div class="col-span-2">
          <p class="text-sm font-bold text-gray-500 flex justify-end">Blog From 2024/12/01</p>
        </div>    
    <!-- Form -->
    <form id="upload-form" action="naninani.php" method="POST" enctype="multipart/form-data" class="space-y-4">
      <!-- Photo Upload -->
      <div>
        <label for="photo" class="block text-lg font-bold text-gray-700">Photo</label>
 <div class="flex items-center space-x-4">
   <div class="w-24 h-24 bg-gray-200 border border-dashed border-gray-400 rounded-lg flex items-center justify-center overflow-hidden">
     <img id="photo-preview" src="/yumrecipe/Admin/View/resources/images/prawn.jpg" alt="Photo Preview" class="w-full h-full object-cover">
   </div>
   <label class="px-4 py-2 bg-gray-200 text-sm font-medium text-gray-700 rounded-md border border-gray-300 hover:bg-gray-300 cursor-pointer">
     <input type="file" name="photo" id="photo-input" class="hidden" accept="image/*" required>
     Change
   </label>
 </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label class="block font-medium" for="author">Author</label>
          <input id="author" type="text" value="Hnin Hnin"
            class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400" />
        </div>
        <div>
          <label class="block font-medium" for="intro">Intro</label>
          <input id="intro" type="text" value="Prawn is a good food" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400" />
        </div>
      </div>
      <div>
        <label class="block font-medium" for="title">Title</label>
        <input id="title" type="text" value="What To Cook in Christmas?"
          class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400" />
      </div>
      <div>
        <label class="block font-medium" for="description">Description</label>
        <textarea id="description" rows="5" 
          class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </textarea>
      </div>
      <div class="text-right">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-gray-300 ">Save Changes</button>
      </div>
    </form>
  </div>`;
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
  break;
  case 'Contents':
            contentDiv.innerHTML = `
            <div class="bg-light-text p-6 rounded-md shadow-md w-full -mt-3">
              <div class="flex-1 container p-4">
              <div class="flex justify-end mb-3">
                    <div class="flex space-x-4">
                        <select class="border rounded p-2 bg-white">
                            <option>Pending</option>
                            <option>Approved</option>
                            <option>Reject</option>
                            <option>Delete</option>
                        </select>
                        <select class="border rounded p-2 bg-white">
                            <option>All Time</option>
                            <option>Last 24 hours</option>
                            <option>Last 7 days</option>
                        </select>
                        <input type="text" placeholder="Search..." class="border rounded p-2 flex-grow" style="max-width: 200px;" />
                        <button class="bg-accent text-white rounded px-4 py-2 transition duration-200 ease-in-out hover:bg-accent-dark active:bg-accent-light">Search</button>
                    </div>
            </div>

            </div>

            <?php
            // Associative array of user activities
            $recipePending = [
                [
                    "no" => 1,
                    "username" => "Su Su",
                    "email" => "susu@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",    
                ],
                [
                    "no" => 2,
                    "username" => "HHK",
                    "email" => "hhk@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",   
                ],
                [
                    "no" => 3,
                    "username" => "TTS",
                    "email" => "tts@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",   
                ],
                [
                    "no" => 4,
                    "username" => "Palae",
                    "email" => "palae@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",
                ],
                [
                    "no" => 5,
                    "username" => "ZZN",
                    "email" => "zzn@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",
                ],
                [
                    "no" => 6,
                    "username" => "KK",
                    "email" => "kk@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",
                ],
                [
                    "no" => 7,
                    "username" => "www",
                    "email" => "www@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",
                ],
                [
                    "no" => 8,
                    "username" => "qqq",
                    "email" => "qqq@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",
                ],
                [
                    "no" => 9,
                    "username" => "aaa",
                    "email" => "aaa@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",
                ],
                [
                    "no" => 10,
                    "username" => "bbb",
                    "email" => "bbb@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",
                ],
            ];
            ?>

            <table class="min-w-full border border-black">
                <thead>
                    <tr class="bg-light-text">
                        <th class="border border-black p-2">No</th>
                        <th class="border border-black p-2">Username</th>
                        <th class="border border-black p-2">Email</th>
                        <th class="border border-black p-2">Date</th>
                        <th class="border border-black p-2">Recipe Title</th>
                        <th class="border border-black p-2">Status</th>
                        <th class="border border-t-black border-r-black p-2">Action</th>
                    </tr>
                </thead > 
                <tbody>
                    <?php foreach ($recipePending as $index => $pending): ?>
                        <tr class="<?= $index % 2 == 0 ? 'bg-gray-300' : 'bg-light-text'  ?>">
                            <td class="border border-black p-2"><?= $pending['no'] ?></td>
                            <td class="border border-black p-2"><?= $pending['username'] ?></td>
                            <td class="border border-black p-2"><?= $pending['email'] ?></td>
                            <td class="border border-black p-2"><?= $pending['date'] ?></td>
                            <td class="border border-black p-2"><?= $pending['recipetitle'] ?></td>
                            <td class="border border-black p-2 "><?= $pending['status'] ?></td>
                            <td class="p-2 border border-t-black flex justify-between">
                            <?php 
                                // Debug output to see the actual value
                                echo "<!-- Debug: pending no = " . $pending['no'] . " -->"; 
                            ?>
                            <a href="/yumrecipe/Admin/View/resources/page/PendingRecipe/view_recipe.php?id=<?= $pending['no'] ?>" onclick="console.log('Clicked link with ID: <?= $pending['no'] ?>')"class="text-indigo-800 hover:text-blue-600">
                                <span class="material-icons text-xl">visibility</span>
                            </a>
                            <button type="button" onclick="showModal('approve')" class="text-green-600 hover:text-green-600">
                                <span class="material-icons text-xl">check_circle</span></button>
                            <button type="button" onclick="showModal('reject')" class="text-red-600 hover:text-red-600">
                                <span class="material-icons text-xl">cancel</span></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
             <!-- Delete Popup Modal -->
                        <div id="deleteModal" class="fixed inset-0 bg-grey-800 bg-opacity-50 flex items-center justify-center hidden">
                            <div class="bg-white p-6 rounded shadow-lg w-96">
                                <h2 class="text-xl font-bold text-center text-red-500">Reject Confirmation</h2>
                                <p class="text-center text-gray-700 mb-4">Are you sure you want to reject  this category?</p>
                                <div class="flex justify-center gap-x-4">
                                    <button class="px-4 py-2 bg-red-500 text-white rounded shadow hover:bg-red-600">Reject</button>
                                    <button type="button" onclick="hideModal('reject')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded shadow hover:bg-gray-400">Cancel</button>
                                </div>
                            </div>
            </div>
            <!-- Approved Popup Modal -->
                        <div id="approveModal" class="fixed inset-0 bg-grey-800 bg-opacity-50 flex items-center justify-center hidden">
                            <div class="bg-white p-6 rounded shadow-lg w-96">
                                <h2 class="text-xl font-bold text-center text-green-500">Approve Confirmation</h2>
                                <p class="text-center text-gray-700 mb-4">Are you sure you want to approve  this category?</p>
                                <div class="flex justify-center gap-x-4">
                                    <button class="px-4 py-2 bg-green-500 text-white rounded shadow hover:bg-green-600">Approve</button>
                                    <button type="button" onclick="hideModal('approve')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded shadow hover:bg-gray-400">Cancel</button>
                                </div>
                            </div>
            </div>
            <!-- Pagination -->
            <div class="flex items-center mt-4">
                <span class="text-sm text-gray-700 mr-2">Showing 1 to <?= count($pending) ?> of <?= count($pending) ?> entries</span>
                <div class="flex space-x-5 ml-60">
                    <a href="#" class="text-gray-700 hover:text-accent mt-2">
                        <img src="../../../resources/icons/ArrowLeft.svg" alt="Previous" class="w-4 h-4">
                    </a>
                    <?php for ($i = 1; $i <= 4; $i++): ?>
                        <a href="#" class="flex items-center justify-center w-8 h-8 <?= $i === 1 ? 'bg-accent text-white rounded-full' : 'text-gray-700 hover:bg-gray-300 rounded-full' ?>">
                            <?= $i ?>
                        </a>
                    <?php endfor; ?>
                    <a href="#" class="text-gray-700 hover:text-accent mt-2">
                        <img src="../../../resources/icons/ArrowRight.svg" alt="Next" class="w-4 h-4">
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>`;
    break;
    case 'Comments':
            contentDiv.innerHTML = `
            <div class="bg-light-text p-6 rounded-lg shadow-md w-full -mt-3">
              <div class="flex-1 container p-4">
            <div class="flex justify-end">
              <div class="flex justify-end mb-3">
                    <div class="flex space-x-4">
                        <select class="border rounded-md p-2 bg-white">
                            <option>All Time</option>
                            <option>Last 24 hours</option>
                            <option>Last 7 days</option>
                        </select>
                        <input type="text" placeholder="Search..." class="border rounded p-2 flex-grow" style="max-width: 200px;" />
                        <button class="bg-accent text-white rounded px-4 py-2 transition duration-200 ease-in-out hover:bg-accent-dark active:bg-accent-light">Search</button>
                    </div>
            </div>

            </div>


            <?php
            // Associative array of user activities
            $recipeComment = [
                [
                    "no" => 1,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "comment" => "This is comment",    
                ],
                [
                    "no" => 2,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "comment" => "This is comment",  
                ],
                [
                    "no" => 3,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "comment" => "This is comment",     
                ],
                [
                    "no" => 4,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "comment" => "This is comment",  
                ],
                [
                    "no" => 5,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "comment" => "This is comment",  
                ],
                [
                    "no" => 6,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "comment" => "This is comment",  
                ],
                [
                    "no" => 7,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "comment" => "This is comment",  
                ],
                [
                    "no" => 8,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "comment" => "This is comment",  
                ],
                [
                    "no" => 9,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "comment" => "This is comment",  
                ],
                [
                    "no" => 10,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "comment" => "This is comment",  
                ],
            ];
            ?>

            <table class="min-w-full border border-collapse border-black">
                <thead>
                    <tr class="bg-light-text">
                        <th class="border border-black p-2">No</th>
                        <th class="border border-black p-2">Username</th>
                        <th class="border border-black p-2">Email</th>
                        <th class="border border-black p-2">Date</th>
                        <th class="border border-black p-2">Recipe Title</th>
                        <th class="border border-black p-2">Comment</th>
                        <th class="border border-t-black border-r-black p-2">Action</th>
                    </tr>
                </thead > 
                <tbody>
                    <?php foreach ($recipeComment as $index => $comment): ?>
                        <tr class="<?= $index % 2 == 0 ? 'bg-gray-300' : 'bg-light-text'  ?>">
                            <td class="border border-black p-2"><?= $comment['no'] ?></td>
                            <td class="border border-black p-2"><?= $comment['username'] ?></td>
                            <td class="border border-black p-2"><?= $comment['email'] ?></td>
                            <td class="border border-black p-2"><?= $comment['date'] ?></td>
                            <td class="border border-black p-2"><?= $comment['recipetitle'] ?></td>
                            <td class="border border-black p-2"><?= $comment['comment'] ?></td>
                            <td class="border border-t-black p-2 flex justify-center">
                                <button type="button" onclick="showModal('delete')" class="text-red-600 hover:text-red-600">
                                 <span class="material-icons text-xl">delete</span></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
             <!-- Delete Popup Modal -->
                        <div id="deleteModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
                            <div class="bg-white p-6 rounded shadow-lg w-96">
                                <h2 class="text-xl font-bold text-center text-red-500">Delete Confirmation</h2>
                                <p class="text-center text-gray-700 mb-4">Are you sure you want to delete this category?</p>
                                <div class="flex justify-center gap-x-4">
                                    <button class="px-4 py-2 bg-red-500 text-white rounded shadow hover:bg-red-600">Delete</button>
                                    <button type="button" onclick="hideModal('update')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded shadow hover:bg-gray-400">Cancel</button>
                                </div>
                            </div>
            </div>
            <!-- Pagination -->
            <div class="flex items-center mt-4">
                <span class="text-sm text-gray-700 mr-2">Showing 1 to <?= count($comment) ?> of <?= count($comment) ?> entries</span>
                <div class="flex space-x-5 ml-60">
                    <a href="#" class="text-gray-700 hover:text-accent mt-2">
                        <img src="../../../resources/icons/ArrowLeft.svg" alt="Previous" class="w-4 h-4">
                    </a>
                    <?php for ($i = 1; $i <= 4; $i++): ?>
                        <a href="#" class="flex items-center justify-center w-8 h-8 <?= $i === 1 ? 'bg-accent text-white rounded-full' : 'text-gray-700 hover:bg-gray-300 rounded-full' ?>">
                            <?= $i ?>
                        </a>
                    <?php endfor; ?>
                    <a href="#" class="text-gray-700 hover:text-accent mt-2">
                        <img src="../../../resources/icons/ArrowRight.svg" alt="Next" class="w-4 h-4">
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>`;
  default:
          console.log('Unknown option clicked');
            }
        }
        document.addEventListener('DOMContentLoaded', () => {
            const defaultTab = document.querySelector('ul li:first-child');
            toggleBackground(defaultTab);
        });

        function showModal(type) {
            const modalId = type === 'approve' ? 'approveModal' : 'deleteModal';
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove('hidden');
            }
        }
        function hideModal(type) {
            const modalId = type === 'approve' ? 'approveModal' : 'deleteModal';
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('hidden');
            }
        }
  </script>
</body> 
</html>