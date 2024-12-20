<?php
$setting_path = '/yumrecipe/Admin/View/resources/page/Setting/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
</head>
<body class="font-sans bg-light-text h-screen">
    <div class="flex min-h-screen">
        <?php require_once '../../../common/sideMenu.php'; ?>
        <div class="flex-1 container p-4 bg-secondary">
            <h1 class="text-2xl font-bold mb-4">Setting</h1>
            <ul class="flex space-x-4 mb-6 justify-end">
                <li class="cursor-pointer px-2 py-2 pb-5 bg-light-text rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Logo/ Site Name</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Icons/Social Links</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Contact Us</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">About Us</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Privacy Policy</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Faq</li>
            </ul>
            <div id="content"></div>
        </div>
    </div>

    <script>
        function toggleBackground(selected) {
            const items = document.querySelectorAll('ul li');
            items.forEach(item => {
                item.classList.remove('bg-light-text');
            });
            selected.classList.toggle('bg-light-text');

            const contentDiv = document.getElementById('content');

            switch (selected.innerText) {
                case 'Logo/ Site Name':
                    contentDiv.innerHTML = `
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
                    `;
                    break;
                case 'Icons/Social Links':
                    contentDiv.innerHTML = `
                        <div class="bg-light-text p-6 rounded-lg shadow-md w-full -mt-8">
                            <h2 class="text-xl font-semibold mb-2">Icons/Social Links</h2>
                            <p class="text-sm text-yellow-500 mb-4"><a href="#">Settings > Icons/Social Links</a></p>
                            <form action="" method="post">
                            <div class="mb-4">
                                <label for="facebook" class="block text-dark-text">Facebook URL</label>
                                <input type="url" id="facebook" name="facebook" class="mt-1 block w-50 bg-gray-200 rounded-md shadow-md p-2" placeholder="https://facebook.com/yourpage">
                            </div>
                            <div class="mb-4">
                                <label for="twitter" class="block text-dark-text">Twitter URL</label>
                                <input type="url" id="twitter" name="twitter" class="mt-1 block w-50 bg-gray-200 rounded-md shadow-md p-2" placeholder="https://twitter.com/yourprofile">
                            </div>
                            <div class="mb-4">
                                <label for="instagram" class="block text-dark-text">Instagram URL</label>
                                <input type="url" id="instagram" name="instagram" class="mt-1 block w-50 bg-gray-200 rounded-md shadow-md p-2" placeholder="https://instagram.com/yourprofile">
                            </div>
                            <div class="mb-4">
                                <label for="linkedin" class="block text-dark-text">LinkedIn URL</label>
                                <input type="url" id="linkedin" name="linkedin" class="mt-1 block w-50 bg-gray-200 rounded-md shadow-md p-2" placeholder="https://linkedin.com/in/yourprofile">
                            </div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow hover:bg-blue-600">Save Changes</button>
                            <button type="button" class="bg-gray-300 text-black px-4 py-2 rounded-md shadow ml-2 hover:bg-gray-400">Cancel</button>
                        </form>
                    </div>`;
                    break;
                case 'Contact Us':
                    console.log('Contact Us clicked');
                    break;
                case 'About Us':
                    console.log('About Us clicked');
                    break;
                case 'Privacy Policy':
                    console.log('Privacy Policy clicked');
                    break;
                case 'Faq':
                    console.log('Faq clicked');
                    break;
                default:
                    console.log('Unknown option clicked');
            }
        }
    </script>
</body>
</html>
