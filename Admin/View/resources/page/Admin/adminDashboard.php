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
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
</head>

<body class="font-sans bg-light-text">
    <div class="flex min-h-screen">
        <!-- Side Menu -->
        <?php require_once '../../../common/sideMenu.php'; ?>
        <!-- Content -->
        <div class="flex-1 container p-4 bg-secondary overflow-y-auto" style="max-height: calc(100vh - 0px);">
            <!-- Main Content -->
            <div class="flex-1 p-10 overflow-y-auto">
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
                           <?php
                            $currentYear = date("Y"); // Get the current year
                            $startYear = $currentYear - 5; // Start from 5 years ago
                            $endYear = $currentYear + 5; // End 5 years from now
                            
                            for ($year = $startYear; $year <= $endYear; $year++) {
                                echo "<option value='{$year}'>{$year}</option>";
                            }
                            ?>
                            </select>
                        </div>
                        <canvas id="subscriptionChart"></canvas>
                    </div>
                    <!-- Doughnut Chart -->
                    <div class="p-6 rounded">
                        <h3 class="text-xl font-semibold mb-4">Category Overview</h3>
                        <canvas id="categoryChart"></canvas>
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
             // Doughnut Chart
             const categoryCtx = document.getElementById('categoryChart').getContext('2d');
            new Chart(categoryCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Main Course', 'Desserts', 'Appetizers', 'Drinks', 'Others'],
                    datasets: [{
                        data: [145.55, 180.89, 192.31, 190.21, 187.42],
                        backgroundColor: [
                            '#6B5B95',
                            '#FF6F61',
                            '#88B04B',
                            '#F7CAC9',
                            '#92A8D1'
                        ],
                        hoverOffset: 4
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            position: 'right',
                            labels: {
                                usePointStyle: true
                            }
                        }
                    }
                }
            });
        </script>
</body>

</html>