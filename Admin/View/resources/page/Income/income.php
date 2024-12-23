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

<body class="font-sans bg-light-text h-screen">
    <div class="flex min-h-screen">
        <?php require_once '../../../common/sideMenu.php'; ?>
        <div class="flex-1 container p-4 bg-secondary">

            <h1 class="text-2xl font-bold mb-5">Income Status Overview</h1>

            <!-- Chart and Info Section -->
            <div class="flex">
                <!-- Chart Section -->
                <div class="w-3/4 bg-white p-4 rounded-lg shadow-lg">
                    <div style="width: 700px; height: 500px;">
                        <canvas id="myPieChart"></canvas>
                    </div>
                </div>

                <!-- Info Section -->
                <div class="w-2/4 space-y-4 ml-6">
                    <!-- Total Revenue Card -->
                    <div class="bg-white p-3 rounded-lg shadow-lg max-h-48 max-w-48">
                        <div class="mb-2">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="material-icons text-primary">payments</span>
                            <h3 class="text-sm font-semibold">Total Revenue</h3>
                       </div>
                            <p class="text-lg font-bold">$2120.54</p>
                        </div>
                    </div>

                    <!-- Active Subscriptions Card -->
                    <div class="bg-white p-3 rounded-lg shadow-lg max-h-48">
                        <div>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="material-icons text-primary">people</span>
                            <h3 class="text-sm font-semibold">Active Subscriptions</h3>
                       </div>
                            <ul class="list-disc list-inside text-xs space-y-0.5">
                                <li>Premium: 20</li>
                                <li>Standard: 30</li>
                                <li>Basic: 45</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<?php
            // Associative array of user activities
            $recipeIncome = [
                [
                    "no" => 1,
                    "username" => "HHK",
                    "email" => "hhk@gmail.com",
                    "amount" => "$200.00",
                    "type" => "Premium",
                    "paymentmethod" => "Credit Card",
                    "transitiontime" => "13:45",
                    "date" => "2023-10-01",
                ],
                [
                   "no" => 2,
                    "username" => "ZZN",
                    "email" => "zzn@gmail.com",
                    "amount" => "$200.00",
                    "type" => "Premium",
                    "paymentmethod" => "Credit Card",
                    "transitiontime" => "13:45",
                    "date" => "2023-10-01",
                ],
                [
                   "no" => 3,
                    "username" => "EKK",
                    "email" => "ekk@gmail.com",
                    "amount" => "$200.00",
                    "type" => "Premium",
                    "paymentmethod" => "Credit Card",
                    "transitiontime" => "13:45",
                    "date" => "2023-10-01",    
                ],
            ];
            ?>

            <table class="min-w-full border border-collapse border-black mt-10">
                <thead>
                    <tr class="bg-light-text">
                        <th class="border border-black p-2">No</th>
                        <th class="border border-black p-2">Username</th>
                        <th class="border border-black p-2">Email</th>
                        <th class="border border-black p-2">Amount</th>
                        <th class="border border-black p-2">Type</th>
                        <th class="border border-black p-2">Payment Method</th>
                        <th class="border border-black p-2">Transition Time</th>
                        <th class="border border-black p-2">Date</th>
                    </tr>
                </thead > 
                <tbody>
                    <?php foreach ($recipeIncome as $index => $income): ?>
                        <tr class="<?= $index % 2 == 0 ? 'bg-gray-300' : 'bg-light-text'  ?>">
                            <td class="border border-black p-2"><?= $income['no'] ?></td>
                            <td class="border border-black p-2"><?= $income['username'] ?></td>
                            <td class="border border-black p-2"><?= $income['email'] ?></td>
                            <td class="border border-black p-2"><?= $income['amount'] ?></td>
                            <td class="border border-black p-2"><?= $income['type'] ?></td>
                            <td class="border border-black p-2"><?= $income['paymentmethod'] ?></td>
                            <td class="border border-black p-2"><?= $income['transitiontime'] ?></td>
                            <td class="border border-black p-2"><?= $income['date'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctx = document.getElementById('myPieChart').getContext('2d');
                const myPieChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: [
                            'January ($400.00)',
                            'February ($300.00)',
                            'March ($300.00)',
                            'April ($700.00)',
                            'May ($520.00)',
                            'June ($400.00)',
                            'July ($300.00)',
                            'August ($300.00)',
                            'September ($700.00)',
                            'October ($520.00)',
                            'November ($400.00)',
                            'December ($300.00)'
                        ],
                        datasets: [{
                            label: 'Revenue Distribution',
                            data: [400, 300, 300, 700, 520, 400, 300, 300, 700, 520, 400, 300],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        plugins: {
                            legend: {
                                position: 'right',
                                labels: {
                                    padding: 20,
                                    font: {
                                        size: 14
                                    },
                                    boxWidth: 40
                                }
                            },
                            title: {
                                display: true,
                                text: 'Monthly Revenue',
                                font: {
                                    size: 18
                                }
                            }
                        }
                    }
                });
        </script>
</body>
</html>