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

<body class="font-sans bg-light-text">
    <div class="flex min-h-screen">
        <!-- Side Menu -->
        <?php require_once '../../../common/sideMenu.php'; ?>
        <!-- Content -->
        <div class="flex-1 container p-4 bg-secondary overflow-y-auto" style="max-height: calc(100vh - 0px);">
            <h1 class="text-2xl font-bold mb-4">Setting</h1>
            <!-- Tabs -->
            <ul class="flex space-x-4 mb-6 justify-end">
                <li class="cursor-pointer px-2 py-2 pb-5 bg-light-text rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Logo/ Site Name</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Social Links</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Contact Us</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">About Us</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Privacy Policy</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Faq</li>
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
                case 'Logo/ Site Name':
                    contentDiv.innerHTML = `
                        <div class="bg-light-text p-6 rounded-lg shadow-md w-full -mt-8">
                            <h2 class="text-xl font-semibold mb-2">Logo</h2>
                            <p class="text-sm text-yellow-500 mb-4"><a href="#">Settings > Logo Setting</a></p>
                            <form action="" method="post" enctype="multipart/form-data">
                            <!-- Site Name -->
                                <div class="mb-4">
                                    <label for="site-name" class="block text-dark-text">Site Name</label>
                                    <input type="text" id="site-name" name="site_name" value="Yum Recipe" class="mt-1 block w-50 bg-gray-200 rounded-md shadow-md p-2">
                                </div>
                                <!-- Current Logo -->
                                <div class="mb-4">
                                    <label for="logo" class="block text-dark-text">Current Logo</label>
                                    <img src="/yumrecipe/Admin/View/resources/images/logo.svg" alt="Current Logo" class="w-24 h-auto mt-2">
                                </div>
                                <!-- Logo -->
                                <div class="mb-4">
                                    <label for="logo" class="block text-dark-text">Logo</label>
                                    <input type="file" id="logo" name="logo" class="mt-1 block w-50 bg-gray-200 rounded-md shadow-md p-2">
                                </div>
                                <!-- Save Changes -->
                                <button type="submit" class="bg-accent text-light-text px-4 py-2 rounded-md shadow hover:bg-blue-600">Save Changes</button>
                                <!--Modal Message-->
                                <div id="modal-message" class="hidden" onclick="showModalMessage()">
                                    <p>Logo updated successfully</p>
                                </div>
                                <!-- Cancel -->
                                <button type="button" class="bg-gray-300 text-black px-4 py-2 rounded-md shadow ml-2 hover:bg-gray-400">Cancel</button>
                            </form>
                        </div>
                    `;
                    break;
                case 'Social Links':
                    contentDiv.innerHTML = `
                        <div class="bg-light-text p-6 rounded-lg shadow-md w-full -mt-8">
                            <h2 class="text-xl font-semibold mb-2">Icons/Social Links</h2>
                            <p class="text-sm text-yellow-500 mb-4"><a href="#">Settings > Icons/Social Links</a></p>
                            <form action="" method="post">
                                <!-- Facebook -->
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="mb-4">
                                        <label for="facebook" class="block text-dark-text">Facebook URL</label>
                                        <input type="url" id="facebook" name="facebook" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" placeholder="https://facebook.com/yourpage">
                                    </div>
                                    <div class="mb-4">
                                        <label for="twitter" class="block text-dark-text">Twitter URL</label>
                                        <input type="url" id="twitter" name="twitter" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" placeholder="https://twitter.com/yourprofile">
                                    </div>
                                    <div class="mb-4">
                                        <label for="instagram" class="block text-dark-text">Instagram URL</label>
                                        <input type="url" id="instagram" name="instagram" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" placeholder="https://instagram.com/yourprofile">
                                    </div>  
                                    <div class="mb-4">
                                        <label for="linkedin" class="block text-dark-text">LinkedIn URL</label>
                                        <input type="url" id="linkedin" name="linkedin" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" placeholder="https://linkedin.com/in/yourprofile">
                                    </div>
                                    <div class="mb-4">
                                        <label for="youtube" class="block text-dark-text">YouTube URL</label>
                                        <input type="url" id="youtube" name="youtube" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" placeholder="https://youtube.com/yourchannel">
                                    </div>
                                    <div class="mb-4">
                                        <label for="pinterest" class="block text-dark-text">Pinterest URL</label>
                                        <input type="url" id="pinterest" name="pinterest" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" placeholder="https://pinterest.com/yourprofile">
                                    </div>
                                    <div class="mb-4">
                                        <label for="snapchat" class="block text-dark-text">Snapchat URL</label>
                                        <input type="url" id="snapchat" name="snapchat" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" placeholder="https://snapchat.com/add/yourusername">
                                    </div>
                                    <div class="mb-4">
                                        <label for="tiktok" class="block text-dark-text">TikTok URL</label>
                                        <input type="url" id="tiktok" name="tiktok" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" placeholder="https://tiktok.com/@yourprofile">
                                    </div>
                                </div>
                                <!-- Save Changes -->
                                <button type="submit" class="bg-accent text-light-text px-4 py-2 rounded-md shadow hover:bg-blue-600">Save Changes</button>
                                <!-- Cancel -->
                                <button type="button" class="bg-gray-300 text-black px-4 py-2 rounded-md shadow ml-2 hover:bg-gray-400">Cancel</button>
                            </form>
                        </div>`;
                    break;
                case 'Contact Us':
                    contentDiv.innerHTML = `
                        <div class="bg-light-text p-6 rounded-lg shadow-md w-full -mt-8">
                            <h2 class="text-xl font-semibold mb-2">Contact Us</h2>
                            <p class="text-sm text-yellow-500 mb-4"><a href="#">Settings > Contact Us</a></p>
                            <form action="" method="post">
                                <div class="mb-4">
                                    <label for="title" class="block text-dark-text">Title</label>
                                    <input type="text" id="title" name="title" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" value="How Can I Help You?">
                                </div>
                                <div class="mb-4">
                                    <label for="subtitle" class="block text-dark-text">Subtitle</label>
                                    <input type="text" id="subtitle" name="subtitle" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" value="Please feel free to reach out to us using the contact below.">
                                </div>
                                <div class="mb-4">
                                   <label for="input1" class="block text-dark-text">Input 1</label>
                                   <input type="text" id="input1" name="input1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" value="Enter Your Email">
                                </div>
                                <div class="mb-4">  
                                    <label for="input2" class="block text-dark-text">Input 2</label>
                                    <input type="text" id="input2" name="input2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" value="Enter Your Phone">
                                </div>
                                <div class="mb-4">
                                    <label for="input3" class="block text-dark-text">Input 3</label>
                                    <input type="text" id="input3" name="input3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" value="Enter Your Message">
                                </div>
                                <!-- Send Message -->
                                <button type="submit" class="bg-accent text-light-text px-4 py-2 rounded-md shadow hover:bg-blue-600">Save Changes</button>
                                <!-- Cancel -->
                                <button type="button" class="bg-gray-300 text-black px-4 py-2 rounded-md shadow ml-2 hover:bg-gray-400">Cancel</button>
                            </form>
                        </div>`;
                    break;
                case 'About Us':
                    contentDiv.innerHTML = `
                        <div class="bg-light-text p-6 rounded-lg shadow-md w-full -mt-8">
                            <h2 class="text-xl font-semibold mb-2">About Us</h2>
                            <p class="text-sm text-yellow-500 mb-4"><a href="#">Settings > About Us</a></p>
                            <form action="" method="post">
                                <div class="grid grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label for="about-us" class="block text-dark-text">About Us</label>
                                        <textarea id="about-us" name="about-us" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="4">We’re passionate about bringing people together through the joy of cooking and sharing recipes. Our platform combines personal recipe management with a vibrant community of food enthusiasts, making it easy to save your favorite dishes, explore new cuisines, and connect with like-minded creators. Join us in celebrating the art of cooking and the stories behind every meal.
                                        </textarea>
                                    </div>
                                    <div>
                                        <label for="image" class="block text-dark-text">Current Image</label>
                                        <div class="flex items-center">
                                            <img src="/yumrecipe/Admin/View/resources/images/aboutUs.png" alt="Current Image" class="w-24 h-auto mt-2">
                                            <label for="image-upload" class="bg-gray-300 text-black px-4 py-2 rounded-md shadow ml-2 hover:bg-gray-400 cursor-pointer">Change</label>
                                            <input type="file" id="image-upload" name="image-upload" class="hidden">
                                        </div>
                                    </div>
                                </div>
                                <!-- Our Writers -->
                                <div class="mb-4">
                                    <label for="image" class="block text-dark-text">Our Writers</label>
                                    <div class="grid grid-cols-3 gap-2">
                                        <div class="bg-white p-2 rounded-lg shadow-md">
                                            <div class="flex items-center justify-center">
                                                <img src="/yumrecipe/Admin/View/resources/images/writer1.png" alt="Writer 1" class="w-20 h-20 rounded-full mb-1 border border-dark-text">
                                                <button type="button" class="ml-1 bg-gray-300 text-dark-text px-1 rounded-md shadow hover:bg-gray-400">Change</button>
                                            </div>
                                            <label for="writer1" class="block text-dark-text text-sm">Writer Name</label>
                                            <input type="text" id="writer1" name="writer1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" value="Mary Janes">
                                            <label for="role1" class="block text-dark-text text-sm">Role</label>
                                            <textarea id="role1" name="role1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" rows="2">cooking and sharing recipes.</textarea>
                                            <label for="facebook1" class="block text-dark-text text-sm">Facebook</label>
                                            <input type="text" id="facebook1" name="facebook1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" value="https://facebook.com/maryjanes">
                                            <label for="twitter1" class="block text-dark-text text-sm">Twitter</label>
                                            <input type="text" id="twitter1" name="twitter1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" value="https://twitter.com/maryjanes">
                                            <label for="linkedin1" class="block text-dark-text text-sm">LinkedIn</label>
                                            <input type="text" id="linkedin1" name="linkedin1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" value="https://linkedin.com/maryjanes">
                                        </div>
                                        <div class="bg-white p-2 rounded-lg shadow-md">
                                            <div class="flex items-center justify-center">
                                                <img src="/yumrecipe/Admin/View/resources/images/writer2.png" alt="Writer 2" class="w-20 h-20 rounded-full mb-1 border border-dark-text">
                                                <button type="button" class="ml-1 bg-gray-300 text-dark-text px-1 rounded-md shadow hover:bg-gray-400">Change</button>
                                            </div>
                                            <label for="writer2" class="block text-dark-text text-sm">Writer Name</label>
                                            <input type="text" id="writer2" name="writer2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" value="Mary Janes">
                                            <label for="role2" class="block text-dark-text text-sm">Role</label>
                                            <textarea id="role2" name="role2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" rows="2">cooking and sharing recipes.</textarea>
                                            <label for="facebook2" class="block text-dark-text text-sm">Facebook</label>
                                            <input type="text" id="facebook2" name="facebook2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" value="https://facebook.com/maryjanes">
                                            <label for="twitter2" class="block text-dark-text text-sm">Twitter</label>
                                            <input type="text" id="twitter2" name="twitter2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" value="https://twitter.com/maryjanes">
                                            <label for="linkedin2" class="block text-dark-text text-sm">LinkedIn</label>
                                            <input type="text" id="linkedin2" name="linkedin2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" value="https://linkedin.com/maryjanes">
                                        </div>
                                        <div class="bg-white p-2 rounded-lg shadow-md">
                                            <div class="flex items-center justify-center">  
                                                <img src="/yumrecipe/Admin/View/resources/images/writer3.png" alt="Writer 3" class="w-20 h-20 rounded-full mb-1 border border-dark-text">
                                                <button type="button" class="ml-1 bg-gray-300 text-dark-text px-1 rounded-md shadow hover:bg-gray-400">Change</button>
                                            </div>
                                            <label for="writer3" class="block text-dark-text text-sm">Writer Name</label>
                                            <input type="text" id="writer3" name="writer3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" value="Mary Janes">
                                            <label for="role3" class="block text-dark-text text-sm">Role</label>
                                            <textarea id="role3" name="role3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" rows="2">cooking and sharing recipes.</textarea>
                                            <label for="facebook3" class="block text-dark-text text-sm">Facebook</label>
                                            <input type="text" id="facebook3" name="facebook3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" value="https://facebook.com/maryjanes">
                                            <label for="twitter3" class="block text-dark-text text-sm">Twitter</label>
                                            <input type="text" id="twitter3" name="twitter3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" value="https://twitter.com/maryjanes">
                                            <label for="linkedin3" class="block text-dark-text text-sm">LinkedIn</label>
                                            <input type="text" id="linkedin3" name="linkedin3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-1 text-sm" value="https://linkedin.com/maryjanes">
                                        </div>
                                    </div>
                                </div>
                                <!-- Save Changes -->
                                <button type="submit" class="bg-accent text-light-text px-4 py-2 rounded-md shadow hover:bg-accent2">Save Changes</button>
                                <!-- Cancel -->
                                <button type="button" class="bg-gray-300 text-black px-4 py-2 rounded-md shadow ml-2 hover:bg-gray-400">Cancel</button>
                            </form>
                        </div>`;
                    break;
                case 'Privacy Policy':
                    contentDiv.innerHTML = `
                        <div class="bg-light-text p-6 rounded-lg shadow-md w-full -mt-8">
                            <h2 class="text-xl font-semibold mb-2">Privacy Policy</h2>
                            <p class="text-sm text-yellow-500 mb-4"><a href="#">Settings > Privacy Policy</a></p>
                            <form action="" method="post">
                                <div class="mb-4">
                                    <label for="privacy-policy" class="block text-dark-text">1. Information We Collect</label>
                                    <textarea id="privacy-policy" name="privacy-policy" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="4">           We collect personal information such as name, email address, and password when users create an account, along with optional profile details like profile pictures or food preferences. Additionally, we gather data on recipes saved or submitted by users, usage details like pages visited and features used, and device information such as IP address, browser type, and operating system. We also use cookies and tracking data to enhance user experience and remember preferences.
</textarea>
                                </div>
                                 <div class="mb-4">
                                    <label for="privacy-policy" class="block text-dark-text">2.How We Use Your Information</label>
                                    <textarea id="privacy-policy" name="privacy-policy" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="4">We use the collected information to manage user accounts, enable recipe-saving features, and provide personalized recommendations. It helps us improve the website by analyzing user interactions and enhancing the experience. We also use the data to communicate updates, respond to inquiries, and ensure security by protecting against unauthorized access or fraud.</textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="privacy-policy" class="block text-dark-text">3.How We Share Your Information</label>
                                    <textarea id="privacy-policy" name="privacy-policy" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="4"> We respect your privacy and do not sell your personal information. However, we may share it with trusted service providers, such as those handling hosting, analytics, or email services, to support our website's functionality. If required by law or to comply with legal obligations, we may disclose information to authorities. In the event of a business merger, acquisition, or sale, user data may be transferred to the new entity. Additionally, we may share anonymized, aggregated data, such as website usage trends, which cannot identify individual users.</textarea>
                                </div>
                               
                                <!-- Save Changes -->
                                <button type="submit" class="bg-accent text-light-text px-4 py-2 rounded-md shadow hover:bg-blue-600">Save Changes</button>
                                <!-- Cancel -->
                                <button type="button" class="bg-gray-300 text-black px-4 py-2 rounded-md shadow ml-2 hover:bg-gray-400">Cancel</button>
                            </form>
                        </div>`;
                    break;
                case 'Faq':
                    contentDiv.innerHTML = `
                        <div class="bg-light-text p-6 rounded-lg shadow-md w-full -mt-8">
                            <h2 class="text-xl font-semibold mb-2">Faq</h2>
                            <p class="text-sm text-yellow-500 mb-4"><a href="#">Settings > Faq</a></p>
                            <form action="" method="post">
                                <div class="grid grid-cols-3 gap-4 mb-4">
                                    <div class="overflow-y-auto max-h-60 shadow-md p-2">
                                        <label for="general-question" class="block text-dark-text fixed shadow-md sticky top-0 bg-yellow-500">General Question</label>
                                        <label for="general-answer" class="block text-dark-text mt-5">Question 1</label>
                                        <textarea id="general-question1" name="general-question1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="general-answer" class="block text-dark-text">Answer 1</label>
                                        <textarea id="general-answer1" name="general-answer1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <hr class="my-4 border-t border-gray-300">
                                        <label for="general-answer" class="block text-dark-text">Question 2</label>
                                        <textarea id="general-question2" name="general-question2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="general-answer" class="block text-dark-text">Answer 2</label>
                                        <textarea id="general-answer2" name="general-answer2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <hr class="my-4 border-t border-gray-300">
                                        <label for="general-answer" class="block text-dark-text">Question 3</label>
                                        <textarea id="general-question3" name="general-question3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="general-answer" class="block text-dark-text">Answer 3</label>
                                        <textarea id="general-answer3" name="general-answer3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>

                                    </div>
                                    <div class="overflow-y-auto max-h-60 shadow-md p-2">
                                        <label for="account-registration" class="block text-dark-text sticky top-0 bg-green-500">Account and Registration</label>
                                        <label for="account-registration" class="block text-dark-text mt-5">Question 1</label>
                                        <textarea id="account-registration1" name="account-registration1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="account-registration" class="block text-dark-text">Answer 1</label>
                                        <textarea id="account-registration1" name="account-registration1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <hr class="my-4 border-t border-gray-300">
                                        <label for="account-registration" class="block text-dark-text">Question 2</label>
                                        <textarea id="account-registration2" name="account-registration2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="account-registration" class="block text-dark-text">Answer 2</label>
                                        <textarea id="account-registration2" name="account-registration2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <hr class="my-4 border-t border-gray-300">
                                        <label for="account-registration" class="block text-dark-text">Question 3</label>
                                        <textarea id="account-registration3" name="account-registration3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="account-registration" class="block text-dark-text">Answer 3</label>
                                        <textarea id="account-registration3" name="account-registration3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                    </div>
                                    <div class="overflow-y-auto max-h-60 shadow-md p-2">
                                        <label for="recipe-specific" class="block text-dark-text sticky top-0 bg-red-500">Recipe-Specific Question</label>
                                        <label for="recipe-specific" class="block text-dark-text mt-5">Question 1</label>
                                        <textarea id="recipe-specific1" name="recipe-specific1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="recipe-specific" class="block text-dark-text">Answer 1</label>
                                        <textarea id="recipe-specific1" name="recipe-specific1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="recipe-specific" class="block text-dark-text">Question 2</label>
                                        <hr class="my-4 border-t border-gray-300">
                                        <textarea id="recipe-specific2" name="recipe-specific2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="recipe-specific" class="block text-dark-text">Answer 2</label>
                                        <textarea id="recipe-specific2" name="recipe-specific2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <hr class="my-4 border-t border-gray-300">
                                        <label for="recipe-specific" class="block text-dark-text">Question 3</label>
                                        <textarea id="recipe-specific3" name="recipe-specific3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="recipe-specific" class="block text-dark-text">Answer 3</label>
                                        <textarea id="recipe-specific3" name="recipe-specific3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                    </div>
                                    <div class="overflow-y-auto max-h-60 shadow-md p-2">
                                        <label for="premium-plans" class="block text-dark-text sticky top-0 bg-blue-500">Premium Plans</label>
                                        <label for="premium-plans" class="block text-dark-text mt-5">Question 1</label>
                                        <textarea id="premium-plans1" name="premium-plans1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="premium-plans" class="block text-dark-text">Answer 1</label>
                                        <textarea id="premium-plans1" name="premium-plans1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <hr class="my-4 border-t border-gray-300">
                                        <label for="premium-plans" class="block text-dark-text">Question 2</label>
                                        <textarea id="premium-plans2" name="premium-plans2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="premium-plans" class="block text-dark-text">Answer 2</label>
                                        <textarea id="premium-plans2" name="premium-plans2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <hr class="my-4 border-t border-gray-300">
                                        <label for="premium-plans" class="block text-dark-text">Question 3</label>
                                        <textarea id="premium-plans3" name="premium-plans3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="premium-plans" class="block text-dark-text">Answer 3</label>
                                        <textarea id="premium-plans3" name="premium-plans3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea> 
                                    </div>
                                    <div class="overflow-y-auto max-h-60 shadow-md p-2">
                                        <label for="community-contribution" class="block text-dark-text sticky top-0 bg-purple-500">Community and Contribution</label>
                                        <label for="community-contribution" class="block text-dark-text mt-5">Question 1</label>
                                        <textarea id="community-contribution1" name="community-contribution1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="community-contribution" class="block text-dark-text">Answer 1</label>
                                        <textarea id="community-contribution1" name="community-contribution1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <hr class="my-4 border-t border-gray-300">
                                        <label for="community-contribution" class="block text-dark-text">Question 2</label>
                                        <textarea id="community-contribution2" name="community-contribution2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="community-contribution" class="block text-dark-text">Answer 2</label>
                                        <textarea id="community-contribution2" name="community-contribution2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <hr class="my-4 border-t border-gray-300">
                                        <label for="community-contribution" class="block text-dark-text">Question 3</label>
                                        <textarea id="community-contribution3" name="community-contribution3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="community-contribution" class="block text-dark-text">Answer 3</label>
                                        <textarea id="community-contribution3" name="community-contribution3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                    </div>
                                    <div class="overflow-y-auto max-h-60 shadow-md p-2">
                                        <label for="miscellaneous" class="block text-light-text sticky top-0 bg-black">Miscellaneous</label>
                                        <label for="miscellaneous" class="block text-dark-text mt-5">Question 1</label>
                                        <textarea id="miscellaneous1" name="miscellaneous1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="miscellaneous" class="block text-dark-text">Answer 1</label>
                                        <textarea id="miscellaneous1" name="miscellaneous1" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <hr class="my-4 border-t border-gray-300">
                                        <label for="miscellaneous" class="block text-dark-text">Question 2</label>
                                        <textarea id="miscellaneous2" name="miscellaneous2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="miscellaneous" class="block text-dark-text">Answer 2</label>
                                        <textarea id="miscellaneous2" name="miscellaneous2" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <hr class="my-4 border-t border-gray-300">
                                        <label for="miscellaneous" class="block text-dark-text">Question 3</label>
                                        <textarea id="miscellaneous3" name="miscellaneous3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                        <label for="miscellaneous" class="block text-dark-text">Answer 3</label>
                                        <textarea id="miscellaneous3" name="miscellaneous3" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" rows="2"></textarea>
                                    </div>
                                </div>
                                <!-- Save Changes -->
                                <button type="submit" class="bg-accent text-light-text px-4 py-2 rounded-md shadow hover:bg-blue-600">Save Changes</button>
                                <!-- Cancel -->
                                <button type="button" class="bg-gray-300 text-black px-4 py-2 rounded-md shadow ml-2 hover:bg-gray-400">Cancel</button>
                            </form>
                        </div>`;
                    break;
                default:
                    console.log('Unknown option clicked');
            }
        }
        // Automatically select "Logo/ Site Name" on page load
        document.addEventListener('DOMContentLoaded', () => {
            const defaultTab = document.querySelector('ul li:first-child');
            toggleBackground(defaultTab);
        });

        // Modal Message
        function showModalMessage() {
            const modalMessage = document.getElementById('modal-message');
            modalMessage.classList.remove('hidden');
            modalMessage.classList.add('flex');
        }
    </script>
</body>

</html>