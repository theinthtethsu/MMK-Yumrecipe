<div class="bg-light-text p-6 rounded-lg shadow-md w-full -mt-8">
                <h2 class="text-xl font-semibold mb-2">Logo</h2>
                <p class="text-sm text-yellow-500 mb-4"><a href="#">Settings > Logo Setting</a></p>
                
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="site-name" class="block text-dark-text">Site Name</label>
                        <input type="text" id="site-name" name="site_name" value="Yum Recipe" class="mt-1 block w-50 bg-gray-200 rounded-md shadow-md p-2">
                    </div>

                     <div class="mb-4">
                        <label for="logo" class="block text-dark-text">Current Logo</label>
                        <img src="/yumrecipe/Admin/View/resources/images/logo.svg" alt="Current Logo" class="w-24 h-auto mt-2">
                    </div>
                    
                    <div class="mb-4">
                        <label for="logo" class="block text-dark-text">Logo</label>
                        <input type="file" id="logo" name="logo" class="mt-1 block w-50 bg-gray-200 rounded-md shadow-md p-2">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow hover:bg-blue-600">Save Changes</button>
                    <button type="button" class="bg-gray-300 text-black px-4 py-2 rounded-md shadow ml-2 hover:bg-gray-400">Cancel</button>
                </form>
            </div>