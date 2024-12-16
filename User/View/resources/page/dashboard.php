<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 h-screen p-4">
            <div class="text-2xl font-bold mb-6">Flowbite</div>
            <ul>
                <li class="mb-4"><a href="#" class="flex items-center"><span class="mr-2">🏠</span> Dashboard</a></li>
                <li class="mb-4"><a href="#" class="flex items-center"><span class="mr-2">📧</span> Inbox</a></li>
                <li class="mb-4"><a href="#" class="flex items-center"><span class="mr-2">🛒</span> E-commerce</a></li>
                <li class="mb-4"><a href="#" class="flex items-center"><span class="mr-2">👤</span> Users</a></li>
                <li class="mb-4"><a href="#" class="flex items-center"><span class="mr-2">📄</span> Pages</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Top Navigation -->
            <div class="flex justify-between items-center mb-6">
                <div class="text-xl font-bold">Dashboard</div>
                <input type="text" placeholder="Search" class="p-2 bg-gray-700 rounded">
            </div>

            <!-- Charts and Stats -->
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-gray-800 p-4 rounded">
                    <div class="text-3xl font-bold">2,340</div>
                    <div class="text-sm">New products this week</div>
                </div>
                <div class="bg-gray-800 p-4 rounded">
                    <div class="text-3xl font-bold">5,355</div>
                    <div class="text-sm">Visitors this week</div>
                </div>
                <div class="bg-gray-800 p-4 rounded">
                    <div class="text-3xl font-bold">385</div>
                    <div class="text-sm">User signups this week</div>
                </div>
            </div>

            <!-- Example Chart -->
            <div class="bg-gray-800 p-6 mt-6 rounded">
                <div class="text-lg font-bold mb-4">Sales this Week</div>
                <!-- Placeholder for chart -->
                <div class="h-64 bg-gray-700 rounded"></div>
            </div>
        </div>
    </div>
</body>
</html>
