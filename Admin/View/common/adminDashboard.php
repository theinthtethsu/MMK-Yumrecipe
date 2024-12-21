<?php

$icons_path = "/yumrecipe/Admin/View/resources/icons/";
$images_path = "/yumrecipe/Admin/View/resources/images/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../resources/css/root.css">
    <link rel="stylesheet" href="../../../output.css">
</head>
<body>
<div class="flex h-screen">
<div class="fixed top-0 left-0 w-64 h-full bg-primary text-white flex flex-col items-center">
        <!-- Logo -->
        <div class="p-1 ">
            <img src="<?php echo $images_path ?>logo.svg" alt="Logo" class="mt-2" style="width: 100px; height: 100px;" />
        </div>
        <!-- Menu -->
        <nav class="w-full flex flex-col items-center">
            <div class="space-y-0 w-full text-center">
                <div class="w-full text-left bg-accent">
                    <a href="#dashboard" class="block w-full p-2  hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path ?>Frame.svg" alt="Dashboard Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Dashboard
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="#Profile" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>UserSquare.svg" alt="Profile Icon" class="inline ml-10" 
                        style="width: 20px; height: 20px;"> Profile
                    </a>
                </div>
                <div class="w-full text-left ">
                    <a href="<?php echo $user_path; ?>userActivities.php" class="block w-full p-2 hover:bg-secondary <?php echo basename($_SERVER['PHP_SELF']) == '#userActivities.php' ? 'bg-accent' : '' ?>">
                        <img src="<?php echo $icons_path; ?>Pulse.svg" alt="User Activities Icon" class="inline ml-10" style="width: 20px; height: 20px;"> User Activities
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="<?php echo $user_path; ?>userManagement.php" class="block w-full p-2 hover:bg-secondary <?php echo basename($_SERVER['PHP_SELF']) == '#userManagement.php' ? 'bg-accent' : '' ?>">
                        <img src="<?php echo $icons_path; ?>UsersFour.svg" alt="User Management Icon" class="inline ml-10" style="width: 20px; height: 20px;"> User Management
                    </a>
                </div>
                <div class="w-full text-left">
                        <a href="#recipe-management" class="block w-full p-2 hover:bg-secondary">
                        <img src="<?php echo $icons_path; ?>CookingPot.svg" alt="Recipe Management Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Recipe Management
                    </a>
                </div>
                <div class="w-full text-left">
                        <a href="#pending-recipes" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>Notification.svg" alt="Pending Recipes Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Pending Recipes
                    </a>
                </div>
                <div class="w-full text-left">
                        <a href="#community" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>Globe.svg" alt="Community Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Community
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="#contents" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>PenNib.svg" alt="Contents Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Contents
                    </a>
                </div>
                <div class="w-full text-left">
                        <a href="#subscription" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>SketchLogo.svg" alt="Subscription Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Subscription
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="#payment" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>PayPalLogo.svg" alt="Payment Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Payment
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="#financial" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>CurrencyCircleDollar.svg" alt="Financial Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Financial
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="#gallery" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>Image.svg" alt="Gallery Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Gallery
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="<?php echo $setting_path; ?>setting.php" class="block w-full p-2 hover:bg-secondary <?php echo basename($_SERVER['PHP_SELF']) == 'setting.php' ? 'bg-accent' : '' ?>">
                        <img src="<?php echo $icons_path; ?>Gear.svg" alt="Settings Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Settings
                    </a>
                </div>
            </div>
        </nav>
    </div>
 <!-- Main Content -->
    <div class="flex-1 ml-64 p-10 overflow-y-auto">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-semibold">Dashboard</h1>
            <div class="flex items-center space-x-3">
                <img src="<?php echo $images_path ?>adminphoto.jpg" alt="Admin" class="w-10 h-10 mb-4 rounded-full">
                <div class="text-sm">
                    <p class="font-bold mb-4">Rose</p>
                    <p class="text-gray-600 mb-3">Admin</p>
                </div>
            </div>
        </div>
  <!-- Dashboard Status -->
  <div class="flex gap-4 bg-gray-200 p-4 rounded-md">
    <!-- Total Recipes -->
    <div class="flex flex-col items-center bg-gray-400 p-4 rounded-md shadow-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 9h18M3 15h18M3 21h18" stroke="white"></path>
        </svg>
        <p class="text-xl font-bold">1000</p>
        <p class="text-sm text-footer-color">Total recipe</p>
    </div>
    <!-- Subscription -->
    <div class="flex flex-col items-center bg-gray-400 p-4 rounded-md shadow-md">
        <img src="<?php echo $icons_path; ?>SketchLogo.svg" alt="Subscription Icon" class="inline align-middle" style="width: 30px; height: 30px;">
        <p class="text-xl font-bold">200</p>
        <p class="text-sm text-footer-color">Subscription</p>
    </div>
    <!-- New Visitors -->
    <div class="flex flex-col items-center bg-gray-400 p-4 rounded-md shadow-md">
       <img src="<?php echo $icons_path; ?>UserSquare.svg" alt="Profile Icon" class="inline align-middle " 
        style="width: 30px; height: 30px;"> 
        <p class="text-xl font-bold">3056</p>
        <p class="text-sm text-footer-color">New Visitor</p>
    </div>
    <!-- Total Users -->
    <div class="flex flex-col items-center bg-gray-400 p-4 rounded-md shadow-md">
        <img src="<?php echo $icons_path; ?>UsersFour.svg" alt="Profile Icon" class="inline align-middle " 
         style="width: 30px; height: 30px;"> 
        <p class="text-xl font-bold">2456</p>
        <p class="text-sm text-footer-color"> Total user </p>
    </div>
</div>
 <!-- Charts and Tables -->
        <div class="grid grid-cols-2 lg:grid-cols-2 gap-6 mt-8">
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-xl font-semibold mb-4">Monthly Subscription Overview</h3>
                <div class="flex justify-between items-center mb-4">
                    <select class="dropdown border p-2 rounded">
                        <option>By Year</option>
                        <option>2024</option>
                        <option>2023</option>
                        <option>2022</option>
                    </select>
                </div>
                <canvas id="subscriptionChart"></canvas>
            </div>
            <!-- List Table-->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-xl font-semibold mb-4">Recent Activities</h3>
                <table class="w-full text-left table-auto">
                    <thead>
                    <tr class="border-b">
                        <th class="py-2 px-4">Date</th>
                        <th class="py-2 px-4">Title</th>
                        <th class="py-2 px-4">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-b">
                        <td class="py-2 px-4">2024-12-18</td>
                        <td class="py-2 px-4">User Management</td>
                        <td class="py-2 px-4 text-green-600">Approved</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">2024-12-17</td>
                        <td class="py-2 px-4">Recipe Submission</td>
                        <td class="py-2 px-4 text-yellow-600">Pending</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('subscriptionChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Subscriptions',
                data: [10, 20, 15, 25, 30, 20, 35, 40, 30, 45, 50, 60],
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        }
    });
</script>
</body>
</html>