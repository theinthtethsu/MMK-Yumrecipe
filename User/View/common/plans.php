<?php
$commonPath = '/yumrecipe/User/View/common/';
$user_path = "/yumrecipe/User/View/resources/page/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plans</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
</head>
<body>
        <div class="container mx-auto px-11 py-10">
            <!-- Cards Container -->
            <div class="flex flex-col md:flex-row justify-center items-center gap-6">
                <!-- Basic Plan -->
                <div class="bg-white dark:bg-gray-800 dark:text-white border rounded-lg shadow-lg p-6 w-full md:w-1/3 hover:bg-gray-100 hover:dark:bg-gray-900 transition-all duration-300 hover:transform hover:scale-105 hover:shadow-xl hover:border-yellow-500">
                    <h2 class="text-xl font-semibold text-gray-800 text-center mb-4 dark:text-white">Basic</h2>
                    <p class="text-4xl text-red-500 text-center font-bold mb-2">$1.99</p>
                    <p class="text-gray-500 text-center mb-4">Free Plus</p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="dark:text-gray-300">✅ Upload up to 10 recipes per month</li>
                        <li class="dark:text-gray-300">✅ Save up to 5 grocery lists</li>
                        <li class="dark:text-gray-300">✅ Reduced ads</li>
                        <li class="dark:text-gray-300">✅ Get a verified badge in the community</li>
                        <li class="dark:text-gray-300">✅ Join Up to 3 Live Cooking per month</li>
                    </ul>
                    <div class="flex justify-center">
        <a href="<?php echo $user_path; ?>payment.php" class="bg-red-500 text-white font-semibold px-12 py-2 rounded hover:bg-red-600 text-center">
            Buy
        </a>
    </div>
                </div>
    
                <!-- Premium Plan -->
                <div class="bg-white dark:bg-gray-800 dark:text-white border border-yellow-400 rounded-lg shadow-lg p-6 w-full md:w-1/3 hover:bg-gray-100 hover:dark:bg-gray-900 transition-all duration-300 hover:transform hover:scale-105 hover:shadow-xl hover:border-yellow-500">
                    <h2 class="text-xl font-semibold text-gray-800 text-center mb-4 dark:text-white">Premium</h2>
                    <p class="text-4xl text-red-500 text-center font-bold mb-2">$4.99</p>
                    <p class="text-gray-500 text-center mb-4">Standard Plus</p>
                    <ul class="text-gray-600 space-y-2 mb-6 ">
                        <li class="dark:text-gray-300">✅ Upload recipes without restrictions</li>
                        <li class="dark:text-gray-300">✅ Export or print grocery lists from recipes</li>
                        <li class="dark:text-gray-300">✅ Unlimited access to all live cooking, including Q&A with chefs</li>
                        <li class="dark:text-gray-300">✅ Advanced folders and tagging system for recipes</li>
                        <li class="dark:text-gray-300">✅ Exclusive access to workshops, recipes, and content</li>
                        <li class="dark:text-gray-300">✅ No ads</li>
                    </ul>
                    <div class="flex justify-center">
        <a href="<?php echo $user_path; ?>payment.php" class="bg-red-500 text-white font-semibold px-12 py-2 rounded hover:bg-red-600 text-center">
            Buy
        </a>
    </div>
                </div>
    
                <!-- Standard Plan -->
                <div class="bg-white dark:bg-gray-800 dark:text-white border rounded-lg shadow-lg p-6 w-full md:w-1/3 hover:bg-gray-100 hover:dark:bg-gray-900 transition-all duration-300 hover:transform hover:scale-105 hover:shadow-xl hover:border-yellow-500">
                    <h2 class="text-xl font-semibold text-gray-800 text-center mb-4 dark:text-white">Standard</h2>
                    <p class="text-4xl text-red-500 text-center font-bold mb-2">$2.99</p>
                    <p class="text-gray-500 text-center mb-4">Basic Plus</p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="dark:text-gray-300">✅ Upload up to 15 recipes per month</li>
                        <li class="dark:text-gray-300">✅ Unlimited grocery lists with sharing options</li>
                        <li class="dark:text-gray-300">✅ Organize saved recipes into custom folders</li>
                        <li class="dark:text-gray-300">✅ Join Up to 7 Live Cooking per month</li>
                        <li class="dark:text-gray-300">✅ Access exclusive blogs</li>
                    </ul>
                    <div class="flex justify-center">
        <a href="<?php echo $user_path; ?>payment.php" class="bg-red-500 text-white font-semibold px-12 py-2 rounded hover:bg-red-600 text-center">
            Buy
        </a>
    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>