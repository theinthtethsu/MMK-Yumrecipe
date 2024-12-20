<?php

$root_dir = $_SERVER['DOCUMENT_ROOT'];
$icons_path = $root_dir . '/Admin/View/resources/icons/';
$images_path = $root_dir . '/Admin/View/resources/images/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Activities</title>
    <link rel="stylesheet" href="../../../../../output.css">
    <link rel="stylesheet" href="../../css/root.css">
</head>

<body class="font-sans bg-light-text h-screen">
    <div class="flex min-h-screen">
        <?php require_once '../../../common/sideMenu.php'; ?>
        <div class="flex-1 container p-4 bg-secondary">
            <h1 class="text-2xl font-bold mb-10">User Activities</h1>
            <div class="flex justify-end mb-10">
                    <div class="flex space-x-4">
                        <select class="border rounded p-2 bg-light-text">
                            <option>All Action</option>
                            <option>Subscribed to Basic Plan</option>
                            <option>Subscribed to Standard Plan</option>
                            <option>Subscribed to Premium Plan</option>
                            <option>Rated 1 star</option>
                            <option>Rated 5 stars</option>
                        </select>
                        <select class="border rounded p-2 bg-light-text">
                            <option>All Time</option>
                            <option>Last 24 hours</option>
                            <option>Last 7 days</option>
                        </select>
                        <input type="text" placeholder="Search..." class="border rounded p-2 flex-grow" style="max-width: 200px;" />
                        <button class="bg-accent text-white rounded px-4 py-2 transition duration-200 ease-in-out hover:bg-accent-dark active:bg-accent-light">Search</button>
                    </div>
            </div>

            <?php
            // Associative array of user activities
            $userActivities = [
                [
                    "no" => 1,
                    "email" => "john.doe@example.com",
                    "username" => "John Doe",
                    "date" => "2023-10-01",
                    "action" => "Subscribed to Basic Plan",
                ],
                [
                    "no" => 2,
                    "email" => "jane.smith@example.com",
                    "username" => "Jane Smith",
                    "date" => "2023-10-02",
                    "action" => "Subscribed to Standard Plan",
                ],
                [
                    "no" => 3,
                    "email" => "alice.johnson@example.com",
                    "username" => "Alice Johnson",
                    "date" => "2023-10-03",
                    "action" => "Rated 5 stars",
                ],
                [
                    "no" => 4,
                    "email" => "bob.brown@example.com",
                    "username" => "Bob Brown",
                    "date" => "2023-10-04",
                    "action" => "Rated 5 stars",
                ],
                [
                    "no" => 5,
                    "email" => "charlie.green@example.com",
                    "username" => "Charlie Green",
                    "date" => "2023-10-05",
                    "action" => "Rated 1 stars",
                ],
                [
                    "no" => 6,
                    "email" => "charlie.green@example.com",
                    "username" => "Charlie Green",
                    "date" => "2023-10-05",
                    "action" => "Rated 1 star",
                ],
                [
                    "no" => 7,
                    "email" => "charlie.green@example.com",
                    "username" => "Charlie Green",
                    "date" => "2023-10-05",
                    "action" => "Subscribed to Premium Plan",
                ],
                [
                    "no" => 8,
                    "email" => "charlie.green@example.com",
                    "username" => "Charlie Green",
                    "date" => "2023-10-05",
                    "action" => "Subscribed to Premium Plan",
                ],
                [
                    "no" => 9,
                    "email" => "charlie.green@example.com",
                    "username" => "Charlie Green",
                    "date" => "2023-10-05",
                    "action" => "Rated 5 stars",
                ],
                [
                    "no" => 10,
                    "email" => "charlie.green@example.com",
                    "username" => "Charlie Green",
                    "date" => "2023-10-05",
                    "action" => "Rated 5 stars",
                ],
            ];
            ?>

            <table class="min-w-full border border-collapse border-black">
                <thead>
                    <tr class="bg-light-text">
                        <th class="border border-black p-2">No</th>
                        <th class="border border-black p-2">Date</th>
                        <th class="border border-black p-2">Email</th>
                        <th class="border border-black p-2">Username</th>
                        <th class="border border-black p-2">Action</th>
                    </tr>
                </thead > 
                <tbody>
                    <?php foreach ($userActivities as $index => $activity): ?>
                        <tr class="<?= $index % 2 == 0 ? 'bg-gray-300' : 'bg-light-text'  ?>">
                            <td class="border border-black p-2"><?= $activity['no'] ?></td>
                            <td class="border border-black p-2"><?= $activity['date'] ?></td>
                            <td class="border border-black p-2"><?= $activity['email'] ?></td>
                            <td class="border border-black p-2"><?= $activity['username'] ?></td>
                            <td class="border border-black p-2"><?= $activity['action'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="flex items-center mt-4">
                <span class="text-sm text-gray-700 mr-2">Showing 1 to <?= count($userActivities) ?> of <?= count($userActivities) ?> entries</span>
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
</body>

</html>