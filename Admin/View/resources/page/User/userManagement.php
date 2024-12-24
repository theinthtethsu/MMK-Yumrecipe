<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../../../output.css">
    <link rel="stylesheet" href="../../css/root.css">
</head>

<body class="font-sans bg-light-text h-screen">
    <div class="flex min-h-screen">
        <!-- Side Menu -->
        <?php require_once '../../../common/sideMenu.php'; ?>
        <!-- Container -->
        <div class="flex-1 container p-4 bg-secondary">
            <h1 class="text-2xl font-bold">User management</h1>
            <p class="mb-4">Manage Users and their accounts here</p>
            <div class="flex justify-end mb-10">
                    <div class="flex space-x-4">
                        <!-- Role Filter -->
                        <select class="border rounded p-2 bg-light-text">
                            <option>All Role</option>
                            <option>Free</option>
                            <option>Basic</option>
                            <option>Standard</option>
                            <option>Premium</option>
                            <option>Non-Registered</option>
                        </select>
                        <!-- Time Filter -->
                        <select class="border rounded p-2 bg-light-text">
                            <option>All Time</option>   
                            <option>Last 24 hours</option>
                            <option>Last 7 days</option>
                        </select>
                        <!-- Search -->
                        <input type="text" placeholder="Search..." class="border rounded p-2 flex-grow bg-light-text" style="max-width: 200px; " />
                        <button class="bg-accent text-white rounded px-4 py-2 transition duration-200 ease-in-out hover:bg-accent2 ">Search</button>
                    </div>
            </div>
            <!--Mock Data-->
            <?php
            $users = [
                [
                    'id' => 1, 
                    'name' => 'John Doe',
                    'email' => 'john@example.com',
                    'type' => 'Admin', 
                    'registered_date' => '2023-01-01',
                ],
                [
                    'id' => 2, 
                    'name' => 'Jane Smith', 
                    'email' => 'jane@example.com', 
                    'type' => 'User', 
                    'registered_date' => '2023-02-01',
                ],
                [
                    'id' => 3, 
                    'name' => 'John Doe', 
                    'email' => 'john@example.com', 
                    'type' => 'Admin', 
                    'registered_date' => '2023-01-01',
                ],
                [
                    'id' => 4, 
                    'name' => 'Jane Smith', 
                    'email' => 'jane@example.com', 
                    'type' => 'User', 
                    'registered_date' => '2023-02-01',
                ],
                [
                    'id' => 5, 
                    'name' => 'John Doe', 
                    'email' => 'john@example.com', 
                    'type' => 'Admin', 
                    'registered_date' => '2023-01-01',
                ],
                [
                    'id' => 6, 
                    'name' => 'Jane Smith', 
                    'email' => 'jane@example.com', 
                    'type' => 'User', 
                    'registered_date' => '2023-02-01',
                ],
                [
                    'id' => 7, 
                    'name' => 'John Doe', 
                    'email' => 'john@example.com', 
                    'type' => 'Admin', 
                    'registered_date' => '2023-01-01',
                ],
                [
                    'id' => 8, 
                    'name' => 'Jane Smith', 
                    'email' => 'jane@example.com', 
                    'type' => 'User', 
                    'registered_date' => '2023-02-01',
                ],
                [
                    'id' => 9, 
                    'name' => 'John Doe', 
                    'email' => 'john@example.com', 
                    'type' => 'Admin', 
                    'registered_date' => '2023-01-01',
                ],
                [
                    'id' => 10, 
                    'name' => 'Jane Smith', 
                    'email' => 'jane@example.com', 
                    'type' => 'User', 
                    'registered_date' => '2023-02-01',
                ],
            ];
            ?>
            <!-- Table -->
            <table class="min-w-full border border-collapse border-black">
                <thead>
                    <tr class="bg-light-text">
                        <th class="border border-black p-2">Id</th>
                        <th class="border border-black p-2">Name</th>
                        <th class="border border-black p-2">Email</th>
                        <th class="border border-black p-2">Type</th>
                        <th class="border border-black p-2">Registered Date</th>
                        <th class="border border-black p-2">Action</th>
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody>
                    <?php
                    foreach ($users as $index => $user) {
                        echo "<tr class='" . ($index % 2 == 0 ? 'bg-gray-300' : 'bg-light-text') . "'>";
                        echo "<td class='border border-black p-2'>{$user['id']}</td>";
                        echo "<td class='border border-black p-2'>{$user['name']}</td>";
                        echo "<td class='border border-black p-2'>{$user['email']}</td>";
                        echo "<td class='border border-black p-2'>{$user['type']}</td>";
                        echo "<td class='border border-black p-2'>{$user['registered_date']}</td>";
                        echo "<td class='border border-black p-2'>";
                        echo "<div class='flex justify-center gap-2'>";  
                        echo "<img src='../../../resources/icons/PencilSimple.svg' alt='Edit' class='inline w-6 h-6'>";  
                        echo "<img src='../../../resources/icons/Trash.svg' alt='Delete' class='inline w-6 h-6'>";
                        echo "</div>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <!-- Pagination -->
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