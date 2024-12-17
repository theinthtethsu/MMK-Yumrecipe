<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../../../output.css">
    <link rel="stylesheet" href="../../css/root.css">
</head>

<body>
    <div class="flex">
        <?php require_once '../../../common/sideMenu.php'; ?>
        <div class="flex-1 container p-4 bg-secondary">
            <h1 class="text-2xl font-bold">User Management</h1>
            <p class="mb-4">Manage Users and their accounts here</p>
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
                            <option>All Time</option>
                            <option>Last 24 hours</option>
                            <option>Last 7 days</option>
                        </select>
                        <input type="text" placeholder="Search..." class="border rounded p-2 flex-grow bg-light-text" style="max-width: 200px; " />
                        <button class="bg-accent text-white rounded px-4 py-2 transition duration-200 ease-in-out hover:bg-accent2 ">Search</button>
                    </div>
            </div>

            <?php
            $users = [
                [
                    'id' => 1, 
                    'name' => 'John Doe', 
                    'username' => 'johndoe', 
                    'email' => 'john@example.com', 
                    'password' => 'password123', 
                    'type' => 'Admin', 
                    'created_date' => '2023-01-01'
                ],
                [
                    'id' => 2, 
                    'name' => 'Jane Smith', 
                    'username' => 'janesmith', 
                    'email' => 'jane@example.com', 
                    'password' => 'password456', 
                    'type' => 'User', 
                    'created_date' => '2023-02-01'
                ],
                [
                    'id' => 3, 
                    'name' => 'John Doe', 
                    'username' => 'johndoe', 
                    'email' => 'john@example.com', 
                    'password' => 'password123', 
                    'type' => 'Admin', 
                    'created_date' => '2023-01-01'
                ],
                [
                    'id' => 4, 
                    'name' => 'Jane Smith', 
                    'username' => 'janesmith', 
                    'email' => 'jane@example.com', 
                    'password' => 'password456', 
                    'type' => 'User', 
                    'created_date' => '2023-02-01'
                ],
                [
                    'id' => 5, 
                    'name' => 'John Doe', 
                    'username' => 'johndoe', 
                    'email' => 'john@example.com', 
                    'password' => 'password123', 
                    'type' => 'Admin', 
                    'created_date' => '2023-01-01'
                ],
                [
                    'id' => 6, 
                    'name' => 'Jane Smith', 
                    'username' => 'janesmith', 
                    'email' => 'jane@example.com', 
                    'password' => 'password456', 
                    'type' => 'User', 
                    'created_date' => '2023-02-01'
                ],
                [
                    'id' => 7, 
                    'name' => 'John Doe', 
                    'username' => 'johndoe', 
                    'email' => 'john@example.com', 
                    'password' => 'password123', 
                    'type' => 'Admin', 
                    'created_date' => '2023-01-01'
                ],
                [
                    'id' => 8, 
                    'name' => 'Jane Smith', 
                    'username' => 'janesmith', 
                    'email' => 'jane@example.com', 
                    'password' => 'password456', 
                    'type' => 'User', 
                    'created_date' => '2023-02-01'
                ],
                [
                    'id' => 9, 
                    'name' => 'John Doe', 
                    'username' => 'johndoe', 
                    'email' => 'john@example.com', 
                    'password' => 'password123', 
                    'type' => 'Admin', 
                    'created_date' => '2023-01-01'
                ],
                [
                    'id' => 10, 
                    'name' => 'Jane Smith', 
                    'username' => 'janesmith', 
                    'email' => 'jane@example.com', 
                    'password' => 'password456', 
                    'type' => 'User', 
                    'created_date' => '2023-02-01'
                ],
                // Add more users as needed
            ];
            ?>
            <table class="min-w-full border border-collapse border-black">
                <thead>
                    <tr class="bg-light-text">
                        <th class="border border-black p-2">Id</th>
                        <th class="border border-black p-2">Name</th>
                        <th class="border border-black p-2">Username</th>
                        <th class="border border-black p-2">Email</th>
                        <th class="border border-black p-2">Password</th>
                        <th class="border border-black p-2">Type</th>
                        <th class="border border-black p-2">Created Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Sample data for demonstration

                    foreach ($users as $index => $user) {
                        echo "<tr class='" . ($index % 2 == 0 ? 'bg-gray-300' : 'bg-light-text') . "'>";
                        echo "<td class='border border-black p-2'>{$user['id']}</td>";
                        echo "<td class='border border-black p-2'>{$user['name']}</td>";
                        echo "<td class='border border-black p-2'>{$user['username']}</td>";
                        echo "<td class='border border-black p-2'>{$user['email']}</td>";
                        echo "<td class='border border-black p-2'>{$user['password']}</td>";
                        echo "<td class='border border-black p-2'>{$user['type']}</td>";
                        echo "<td class='border border-black p-2'>{$user['created_date']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="flex items-center mt-4">
                <span class="text-sm text-gray-700 mr-2">Showing 1 to <?= count($users) ?> of <?= count($users) ?> entries</span>
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