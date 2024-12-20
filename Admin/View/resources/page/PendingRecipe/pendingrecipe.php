
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Recipe</title>
    <link rel="stylesheet" href="../../../../../output.css">
    <link rel="stylesheet" href="../../css/root.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body class="font-sans bg-light-text h-screen">
    <div class="flex min-h-screen">
        <?php require_once '../../../common/sideMenu.php'; ?>
        <div class="flex-1 container p-4 bg-secondary">
            <h1 class="text-2xl font-bold">Pending Recipe</h1>
            <div class="flex justify-end">
              <!-- Container -->
            <div class="flex items-center space-x-2 sm:space-x-4 justify-end mx-2 sm:mx-10 mt-5 mb-5 flex-wrap">
              <!-- Search Input -->
            <div class="relative w-64">
            <div class="flex items-center border border-gray-300 rounded-lg bg-white shadow-sm">
            <!-- Input -->
            <input type="date" id="date"
              class="block w-full py-2 px-3 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" />
            <!-- Calendar Icon -->
            <button type="button" class="p-2 text-gray-500 hover:text-blue-600"></button>
          </div>
        </div>
        <!-- Search Button -->
            <button class="bg-accent text-white rounded px-4 py-2 transition duration-200 ease-in-out hover:bg-accent-dark active:bg-accent-light">Search</button>
            </div>
            </div>

            <?php
            // Associative array of user activities
            $recipePending = [
                [
                    "no" => 1,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",    
                ],
                [
                    "no" => 2,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",   
                ],
                [
                    "no" => 3,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",   
                ],
                [
                    "no" => 4,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",
                ],
                [
                    "no" => 5,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",
                ],
                [
                    "no" => 6,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",
                ],
                [
                    "no" => 7,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",
                ],
                [
                    "no" => 8,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",
                ],
                [
                    "no" => 9,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",
                ],
                [
                    "no" => 10,
                    "username" => "John Doe",
                    "email" => "john.doe@example.com",                   
                    "date" => "2023-10-01",
                    "recipetitle" => "Recipe Title",
                    "status" => "Pending",
                ],
            ];
            ?>

            <table class="min-w-full border border-collapse border-black">
                <thead>
                    <tr class="bg-light-text">
                        <th class="border border-black p-2">No</th>
                        <th class="border border-black p-2">Username</th>
                        <th class="border border-black p-2">Email</th>
                        <th class="border border-black p-2">Date</th>
                        <th class="border border-black p-2">Recipe Title</th>
                        <th class="border border-black p-2">Status</th>
                        <th class="border border-black p-2">Action</th>
                    </tr>
                </thead > 
                <tbody>
                    <?php foreach ($recipePending as $index => $pending): ?>
                        <tr class="<?= $index % 2 == 0 ? 'bg-gray-300' : 'bg-light-text'  ?>">
                            <td class="border border-black p-2"><?= $pending['no'] ?></td>
                            <td class="border border-black p-2"><?= $pending['username'] ?></td>
                            <td class="border border-black p-2"><?= $pending['email'] ?></td>
                            <td class="border border-black p-2"><?= $pending['date'] ?></td>
                            <td class="border border-black p-2"><?= $pending['recipetitle'] ?></td>
                            <td class="border border-black p-2"><?= $pending['status'] ?></td>
                            <td class="border border-black p-2 flex justify-between">
                            <?php 
                                // Debug output to see the actual value
                                echo "<!-- Debug: pending no = " . $pending['no'] . " -->"; 
                            ?>
                            <a href="view_recipe.php?id=<?= $pending['no'] ?>" onclick="console.log('Clicked link with ID: <?= $pending['no'] ?>')"class="text-indigo-800 hover:text-blue-600">
                                    <span class="material-icons text-xl">visibility</span>
                                </a>
                                <button class="text-green-600 hover:text-green-800">
                                    <span class="material-icons text-xl">check_circle</span>
                                </button>
                                <button class="text-red-600 hover:text-red-800">
                                    <span class="material-icons text-xl">cancel</span>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- Pagination -->
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