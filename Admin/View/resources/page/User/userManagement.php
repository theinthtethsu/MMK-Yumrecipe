<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../../../output.css">
    <link rel="stylesheet" href="../../css/root.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../../js/userManagement.js" defer></script>
</head>

<body class="font-sans bg-light-text h-screen">
    <div class="flex min-h-screen">
        <!-- Side Menu -->
        <?php 
            require_once '../../../common/sideMenu.php'; 
        ?>
        <!-- Container -->
        <div class="flex-1 container p-4 bg-secondary">
            <h1 class="text-2xl font-bold">User management</h1>
            <p class="mb-4">Manage Users and their accounts here</p>
            <div class="flex justify-end mb-10">
                    <div class="flex space-x-4">
                        <!-- Role Filter -->
                        <select class="border rounded p-2 bg-light-text">
                            <option>All Type</option>
                            <option>Free</option>
                            <option>Basic</option>
                            <option>Standard</option>
                            <option>Premium</option>
                        </select>
                        <!-- Time Filter -->
                        <select class="border rounded p-2 bg-light-text">
                            <option>All Time</option>   
                            <option>Last 24 hours</option>
                            <option>Last 7 days</option>
                        </select>
                        <!-- Status Filter -->
                        <select class="border rounded p-2 bg-light-text">
                            <option>All Status</option>
                            <option>Active</option>
                            <option>Inactive</option>
                            <option>Banned</option>
                        </select>
                        <!-- Search -->
                        <input type="text" placeholder="Search..." class="border rounded p-2 flex-grow bg-light-text" style="max-width: 200px; " />
                        <button class="bg-accent text-white rounded px-4 py-2 transition duration-200 ease-in-out hover:bg-accent2 ">Search</button>
                    </div>
            </div>
            <!--Mock Data-->
            <?php
            global $users;
            $users = [
                [
                    'id' => 1, 
                    'name' => 'John Doe',
                    'email' => 'john@example.com',
                    'type' => 'Standard', 
                    'registered_date' => '2023-01-01',
                    'status' => 'Active',
                ],
                [
                    'id' => 2, 
                    'name' => 'Jane Smith', 
                    'email' => 'jane@example.com', 
                    'type' => 'Premium', 
                    'registered_date' => '2023-02-01',
                    'status' => 'Active',
                ],
                [
                    'id' => 3, 
                    'name' => 'John Doe', 
                    'email' => 'john@example.com', 
                    'type' => 'Free', 
                    'registered_date' => '2023-01-01',
                    'status' => 'Active',
                ],
                [
                    'id' => 4, 
                    'name' => 'Jane Smith', 
                    'email' => 'jane@example.com', 
                    'type' => 'Basic', 
                    'registered_date' => '2023-02-01',
                    'status' => 'Active',
                ],
                [
                    'id' => 5, 
                    'name' => 'John Doe', 
                    'email' => 'john@example.com', 
                    'type' => 'Standard', 
                    'registered_date' => '2023-01-01',
                    'status' => 'Active',
                ],
                [
                    'id' => 6, 
                    'name' => 'Jane Smith', 
                    'email' => 'jane@example.com', 
                    'type' => 'Premium', 
                    'registered_date' => '2023-02-01',
                    'status' => 'Active',
                ],
                [
                    'id' => 7, 
                    'name' => 'John Doe', 
                    'email' => 'john@example.com', 
                    'type' => 'Standard', 
                    'registered_date' => '2023-01-01',
                    'status' => 'Active',
                ],
                [
                    'id' => 8, 
                    'name' => 'Jane Smith', 
                    'email' => 'jane@example.com', 
                    'type' => 'Premium', 
                    'registered_date' => '2023-02-01',
                    'status' => 'Active',
                ],
                [
                    'id' => 9, 
                    'name' => 'John Doe', 
                    'email' => 'john@example.com', 
                    'type' => 'Standard', 
                    'registered_date' => '2023-01-01',
                    'status' => 'Active',
                ],
                [
                    'id' => 10, 
                    'name' => 'Jane Smith', 
                    'email' => 'jane@example.com', 
                    'type' => 'Premium', 
                    'registered_date' => '2023-02-01',
                    'status' => 'Active',
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
                        <th class="border border-black p-2">Status</th>
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
                        echo "<td class='border border-black p-2'>{$user['status']}</td>";
                        echo "<td class='border border-black p-2'>";
                        echo "<div class='flex justify-center gap-2'>";  
                        echo "<i class='material-icons text-green-500 cursor-pointer' id='edit-user-{$user['id']}' onclick='editUser({$user['id']})'>edit</i>";  
                        echo "<i class='material-icons text-red-500 cursor-pointer' id='delete-user-{$user['id']}' onclick='deleteUser({$user['id']})'>delete</i>";
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
            <!-- Modal -->
            <div id="delete-modal" class="fixed inset-0 hidden items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white p-6 rounded-md">
                    <h1 class="text-2xl font-bold text-red-500 mb-4 text-center">Delete User</h1>
                    <p class="mb-4">Are you sure you want to delete this user?</p>
                    <div class="flex justify-center space-x-4">
                        <button class="bg-accent text-white py-2 px-4 rounded-md hover:bg-red-600 focus:ring focus:ring-red-200" onclick="confirmDelete()">Confirm</button>
                        <button class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600 focus:ring focus:ring-gray-200" onclick="cancelDelete()">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Script -->
<script>
    function editUser(id) {
            const user = <?php $user = json_encode($users); echo "JSON.parse('$user')"; ?>[id === 1 ? 0 : id-1];
            console.log(user);
            window.location.href = `updateUser.php?id=${user.id}&name=${user.name}&email=${user.email}&type=${user.type}&status=${user.status}&registered_date=${user.registered_date}`;
        }
        function deleteUser(id) {
            const user = <?php $user = json_encode($users); echo "JSON.parse('$user')"; ?>[id === 1 ? 0 : id-1];
            console.log(user);
            document.getElementById('delete-modal').classList.remove('hidden');
            document.getElementById('delete-modal').classList.add('flex');
        }
        function confirmDelete() {
            document.getElementById('delete-modal').classList.remove('flex');
            document.getElementById('delete-modal').classList.add('hidden');
            console.log('User deleted');
        }
        function cancelDelete() {
            document.getElementById('delete-modal').classList.remove('flex');
            document.getElementById('delete-modal').classList.add('hidden');
        }
</script>
</html>