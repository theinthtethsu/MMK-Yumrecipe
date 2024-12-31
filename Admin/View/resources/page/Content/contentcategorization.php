
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Management</title>
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
    <!-- material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="font-sans bg-light-text">
    <div class="flex min-h-screen">
        <!-- Side Menu -->
        <?php require_once '../../../common/sideMenu.php'; ?>
        <!-- Content -->
       
        <div class="flex-1 container p-4 bg-secondary overflow-y-auto" style="max-height: calc(100vh - 0px);">
            <h1 class="text-2xl font-bold mb-4">Content Categorization</h1>
            <!-- Tabs -->
            <ul class="flex space-x-4 mb-6 justify-end">
                <li class="cursor-pointer px-2 py-2 pb-5 bg-light-text rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Category</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Tag</li>
                    </ul>
            <div id="content"></div>
            </div>
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
      // Function to toggle between tabs and dynamically load content
            // Switch case to load the appropriate content
            switch (selected.innerText) {
                case 'Category':
                    contentDiv.innerHTML = `
                    <div class="bg-light-text p-6 rounded-lg shadow-md -mt-8">
                        <h2 class="text-xl font-bold text-center">Category</h2>
                        <div class="flex justify-between items-center mb-4">
                            <button onclick="showaddingModal('addModal')" class="bg-accent text-white px-4 py-2 rounded shadow hover:bg-blue-600">Add New Category</button>
                        <div class="flex space-x-2 items-center">
                        <input type="text" placeholder="Search Category" class="p-2 border border-gray-300 rounded shadow-sm focus:ring focus:ring-blue-300" />
                        <button class="bg-accent text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                        Search </button>
                        </div>
                    </div>
                    <table class="w-full border-collapse border-black bg-white">
                         <thead>
                             <tr class="text-left bg-gray-100 border-b">
                                    <th class="p-4 border border-black">No</th>
                                    <th class="p-4 border border-black">Category Name</th>
                                    <th class="p-4 border border-black">Recipe Count</th>
                                    <th class="p-4 border border-black">Action</th>
                            </tr>
                         </thead>
                         <tbody>
                                <?php
                                $categories = [
                                    ['id' => 1, 'name' => 'Breakfast', 'count' => 10],
                                    ['id' => 2, 'name' => 'Dinner', 'count' => 22],
                                    ['id' => 3, 'name' => 'Appetizer', 'count' => 5],
                                    ['id' => 4, 'name' => 'Main Dish', 'count' => 12],
                                    ['id' => 5, 'name' => 'Side Dish', 'count' => 3],
                                ];
                                foreach ($categories as $index => $category) {
                                    echo "
                                        <tr class='" . ($index % 2 == 0 ? 'bg-gray-300' : 'bg-light-text') . "'>
                                            <td class='p-4 border border-black'>{$category['id']}</td>
                                            <td class='p-4 border border-black'>{$category['name']}</td>
                                            <td class='p-4 border border-black'>{$category['count']}</td>
                                            <td class='p-4 border border-black space-x-4'>
                                                <i class='material-icons text-green-500' onclick=\"showModal('update', ${category['id']})\">edit</i>
                                                <i class='material-icons text-red-500' onclick=\"showModal('delete', ${category['id']})\">delete</i>
                                            </td>
                                        </tr>
                                    ";
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- Pagination -->
                        <div class="flex items-center mt-4">
                            <span class="text-sm text-gray-700 mr-2">Showing 1 to <?= count($categories) ?> of <?= count($categories) ?> entries</span>
                            <div class="flex space-x-5 ml-80">
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
                       <!-- Add Category Popup Modal -->
                            <div id="addModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
                                <div class="bg-secondary p-6 rounded shadow-lg w-96">
                                    <h2 class="text-xl font-bold text-center mb-4">Add Category</h2>
                                    <form>
                                        <div class="mb-4">
                                            <label for="categoryName" class="block text-sm font-medium text-center text-gray-700">Category Name</label>
                                            <input type="text" id="categoryName" placeholder="Enter category name" class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300" />
                                        </div>
                                        <div class="flex justify-center gap-x-4">
                                            <button type="submit" class="px-6 py-2 bg-accent text-white rounded-lg shadow hover:bg-blue-600">
                                            Add</button>
                                            <button type="button" onclick="hideaddingModal('addModal')" 
                                                class="px-6 py-2 bg-gray-300 text-gray-700 rounded-lg shadow hover:bg-gray-400">
                                            Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <!--Update Category PopUp Modal -->
                            <div id="updateModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
                                <div class="bg-secondary p-6 rounded shadow-lg w-96">
                                    <h2 class="text-xl font-bold text-center">Update Category</h2>
                                    <form>
                                        <div class="mb-4">
                                            <input type="text" id="categoryName" placeholder="Enter category name" class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300" />
                                        </div>
                                        <div class="flex justify-center gap-x-4">
                                            <button type="submit" class="px-4 py-2 bg-accent text-white rounded shadow hover:bg-blue-600">Update</button>
                                            <button type="button" onclick="hideModal('update')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded shadow hover:bg-gray-400">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <!-- Delete Popup Modal -->
                        <div id="deleteModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
                            <div class="bg-secondary p-6 rounded shadow-lg w-96">
                                <h2 class="text-xl font-bold text-center">Delete Confirmation</h2>
                                <p class="text-center text-gray-700 mb-4">Are you sure you want to delete this category?</p>
                                <div class="flex justify-center gap-x-4">
                                    <button class="px-4 py-2 bg-red-500 text-white rounded shadow hover:bg-red-600">Delete</button>
                                    <button type="button" onclick="hideModal('delete')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded shadow hover:bg-gray-400">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <!-- End of Delete Popup Modal -->
                        </div>
                    `;
                    break;
                case 'Tag':
                    contentDiv.innerHTML = `
                    <div class="bg-light-text p-6 rounded-lg shadow-md -mt-8">
                        <h2 class="text-xl font-bold text-center">Tag List</h2>
                        <div class="flex justify-between items-center mb-4">
                            <button onclick="showaddingModal('addModal')" class="bg-accent text-white px-4 py-2 rounded shadow hover:bg-blue-600">Add New Tag</button>
                        <div class="flex space-x-2 items-center">
                        <input type="text" placeholder="Search Tag" class="p-2 border border-gray-300 rounded shadow-sm focus:ring focus:ring-blue-300" />
                        <button class="bg-accent text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                        Search </button>
                        </div>
                    </div>
                    <table class="w-full border-collapse bg-white">
                         <thead>
                             <tr class="text-left bg-gray-100 border-b">
                                    <th class="p-4 border border-black">No</th>
                                    <th class="p-4 border border-black">Tag Name</th>
                                    <th class="p-4 border border-black">Recipe Count</th>
                                    <th class="p-4 border border-black">Action</th>
                            </tr>
                         </thead>
                         <tbody>
                                <?php
                                $tags = [
                                    ['id' => 1, 'name' => 'Quick and Easy', 'count' => 10],
                                    ['id' => 2, 'name' => 'Pasta', 'count' => 22],
                                    ['id' => 3, 'name' => 'Instant Pot', 'count' => 5],
                                    ['id' => 4, 'name' => 'Shashimi', 'count' => 12],
                                    ['id' => 5, 'name' => 'Vegetarian', 'count' => 3],
                                ];
                                foreach ($tags as $index => $tag) {
                                    echo "
                                        <tr class='" . ($index % 2 == 0 ? 'bg-gray-300' : 'bg-light-text') . "'>
                                            <td class='p-4 border border-black'>{$tag['id']}</td>
                                            <td class='p-4 border border-black'>{$tag['name']}</td>
                                            <td class='p-4 border border-black'>{$tag['count']}</td>
                                            <td class='p-4 border border-black space-x-4'>
                                                <i class='material-icons text-green-500' onclick=\"showModal('update', ${tag['id']})\">edit</i>
                                                <i class='material-icons text-red-500' onclick=\"showModal('delete', ${tag['id']})\">delete</i>
                                            </td>
                                        </tr>
                                    ";
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- Pagination -->
                        <div class="flex items-center mt-4">
                             <span class="text-sm text-gray-700 mr-2">Showing 1 to <?= count($tags) ?> of <?= count($tags) ?> entries</span>
                            <div class="flex space-x-5 ml-80">
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
                       <!-- Add Tag Popup Modal -->
                            <div id="addModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
                                <div class="bg-secondary p-6 rounded shadow-lg w-96">
                                    <h2 class="text-xl font-bold text-center mb-4">Add Tag</h2>
                                    <form>
                                        <div class="mb-4">
                                            <label for="tagName" class="block text-sm font-medium text-center text-gray-700">Tag Name</label>
                                            <input type="text" id="tagName" placeholder="Enter tag name" class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300" />
                                        </div>
                                        <div class="flex justify-center gap-x-4">
                                            <button type="submit" class="px-6 py-2 bg-accent text-white rounded-lg shadow hover:bg-blue-600">
                                            Add</button>
                                            <button type="button" onclick="hideaddingModal('addModal')" 
                                                class="px-6 py-2 bg-gray-300 text-gray-700 rounded-lg shadow hover:bg-gray-400">
                                            Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <!--Update Tag PopUp Modal -->
                            <div id="updateModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
                                <div class="bg-secondary p-6 rounded shadow-lg w-96">
                                    <h2 class="text-xl font-bold text-center">Update Tag</h2>
                                    <form>
                                        <div class="mb-4">
                                            <input type="text" id="tagName" placeholder="Enter tag name" class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300" />
                                        </div>
                                        <div class="flex justify-center gap-x-4">
                                            <button type="submit" class="px-4 py-2 bg-accent text-white rounded shadow hover:bg-blue-600">Update</button>
                                            <button type="button" onclick="hideModal('update')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded shadow hover:bg-gray-400">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <!-- Delete Tag Popup Modal -->
                        <div id="deleteModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
                            <div class="bg-secondary p-6 rounded shadow-lg w-96">
                                <h2 class="text-xl font-bold text-center">Delete Confirmation</h2>
                                <p class="text-center text-gray-700 mb-4">Are you sure you want to delete this tag?</p>
                                <div class="flex justify-center gap-x-4">
                                    <button class="px-4 py-2 bg-red-500 text-white rounded shadow hover:bg-red-600">Delete</button>
                                    <button type="button" onclick="hideModal('delete')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded shadow hover:bg-gray-400">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <!-- End of Delete Tag Popup Modal -->
                        </div>
                    `;
                    break;

                default:
                    console.error('Unknown tab selected:');
            }
        }
        // Automatically load "Category" tab content on page load
        document.addEventListener('DOMContentLoaded', () => {
            const defaultTab = document.querySelector('ul li:first-child');
            toggleBackground(defaultTab);
        });
        // Function to show the add modal
        function showaddingModal(type) {
            if (type === 'addModal') {
                document.getElementById('addModal').classList.remove('hidden');
            }
        }
        function hideaddingModal(type) {
            if (type === 'addModal') {
                document.getElementById('addModal').classList.add('hidden');
            }
        }
        // Function to show the modal
        function showModal(type, id) {
            if (type === 'update') {
                document.getElementById('updateModal').classList.remove('hidden');
            }
            else if (type === 'delete') {
                document.getElementById('deleteModal').classList.remove('hidden');
            }
        }
        // Function to hide the modal
        function hideModal(type) {
            if (type === 'update') {
                document.getElementById('updateModal').classList.add('hidden');
            } else if (type === 'delete') {
                document.getElementById('deleteModal').classList.add('hidden');
                }
        }
    </script>
</body>
</html>