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

<body>
    <div class="flex">
        <?php require_once '../../../common/sideMenu.php'; ?>
        <div class="flex-1 container p-4 bg-secondary">
            <h1 class="text-2xl font-bold mb-10">User Activities</h1>
            <div class="flex justify-end mb-10">
                    <div class="flex space-x-4">
                        <select class="border rounded p-2 bg-light-text">
                            <option>All Role</option>
                            <option>Free</option>
                            <option>Basic</option>
                            <option>Standard</option>
                            <option>Premium</option>
                            <option>Non-Registered</option>
                        </select>
                        <select class="border rounded p-2 bg-light-text">
                            <option>All Action</option>
                            <option>Logged in</option>
                            <option>Logged out</option>
                            <option>Commented</option>
                            <option>Subscribed</option>
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
                    "id" => 1,
                    "date" => "2023-10-01",
                    "author" => "John Doe",
                    "type" => "Basic",
                    "action" => "Logged In",
                    "description" => "User logged in successfully."
                ],
                [
                    "id" => 2,
                    "date" => "2023-10-02",
                    "author" => "Jane Smith",
                    "type" => "Standard",
                    "action" => "Subscribed",
                    "description" => "User logged out successfully."
                ],
                [
                    "id" => 3,
                    "date" => "2023-10-03",
                    "author" => "Alice Johnson",
                    "type" => "Premium",
                    "action" => "Logged In",
                    "description" => "User failed to update profile."
                ],
                [
                    "id" => 4,
                    "date" => "2023-10-04",
                    "author" => "Bob Brown",
                    "type" => "Free",
                    "action" => "Commented",
                    "description" => "User commented on a post."
                ],
                [
                    "id" => 5,
                    "date" => "2023-10-05",
                    "author" => "Charlie Green",
                    "type" => "Non-Registered",
                    "action" => "Commented",
                    "description" => "User subscribed to the newsletter."
                ],
                [
                    "id" => 6,
                    "date" => "2023-10-05",
                    "author" => "Charlie Green",
                    "type" => "Free",
                    "action" => "Rated",
                    "description" => "User subscribed to the newsletter."
                ],
                [
                    "id" => 7,
                    "date" => "2023-10-05",
                    "author" => "Charlie Green",
                    "type" => "Subscribe",
                    "action" => "Logged In",
                    "description" => "User subscribed to the newsletter."
                ],
                [
                    "id" => 8,
                    "date" => "2023-10-05",
                    "author" => "Charlie Green",
                    "type" => "Subscribe",
                    "action" => "Logged Out",
                    "description" => "User subscribed to the newsletter."
                ],
                [
                    "id" => 9,
                    "date" => "2023-10-05",
                    "author" => "Charlie Green",
                    "type" => "Subscribe",
                    "action" => "Logged In",
                    "description" => "User subscribed to the newsletter."
                ],
                [
                    "id" => 10,
                    "date" => "2023-10-05",
                    "author" => "Charlie Green",
                    "type" => "Free",
                    "action" => "Rated",
                    "description" => "User subscribed to the newsletter."
                ],
            ];
            ?>

            <table class="min-w-full border border-collapse border-black">
                <thead>
                    <tr class="bg-light-text">
                        <th class="border border-black p-2">No</th>
                        <th class="border border-black p-2">Date</th>
                        <th class="border border-black p-2">Author</th>
                        <th class="border border-black p-2">Type</th>
                        <th class="border border-black p-2">Action</th>
                        <th class="border border-black p-2">Description</th>
                    </tr>
                </thead > 
                <tbody>
                    <?php foreach ($userActivities as $index => $activity): ?>
                        <tr class="<?= $index % 2 == 0 ? 'bg-gray-300' : 'bg-light-text'  ?>">
                            <td class="border border-black p-2"><?= $activity['id'] ?></td>
                            <td class="border border-black p-2"><?= $activity['date'] ?></td>
                            <td class="border border-black p-2"><?= $activity['author'] ?></td>
                            <td class="border border-black p-2"><?= $activity['type'] ?></td>
                            <td class="border border-black p-2"><?= $activity['action'] ?></td>
                            <td class="border border-black p-2"><?= $activity['description'] ?></td>
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