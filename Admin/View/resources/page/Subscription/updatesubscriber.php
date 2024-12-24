<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Subscriber</title>
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body class="font-sans bg-light-text">
    <div class="flex h-auto">
    <div class="bg-light-text px-6 pt-5 rounded-lg shadow-md w-full -mt-3">
        <div class="flex-1 container p-4 justify-center">
            <h1 class="text-2xl font-bold flex justify-center mb-10">Update Subscriber Information</h1>
        <div class="w-1/2 flex justify-center m-auto">
        <form action="update_subscriber.php" method="POST">
            <!-- ID Field -->
            <div class="mb-10 flex items-center">
                <label for="id" class="text-sm font-medium text-gray-600 w-32">ID</label>
                <input type="text" id="id" name="id" value="5" readonly
                    class="w-60 px-3 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-700">
            </div>
            <!-- Subscriber Name -->
            <div class="mb-10 flex items-center">
                <label for="name" class="text-sm font-medium text-gray-600 w-32">Subscriber Name</label>
                <input type="text" id="name" name="name" value="Mo Mo" required
                    class="w-60 px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none">
            </div>
            <!-- Email -->
            <div class="mb-10 flex items-center">
                <label for="email" class="text-sm font-medium text-gray-600 w-32">Email</label>
                <input type="email" id="email" name="email" value="momo@gmail.com" required
                    class="w-60 px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none">
            </div>
            <!-- Plan Type -->
            <div class="mb-10 flex items-center">
                <label for="plan_type" class="text-sm font-medium text-gray-600 w-32">Plan Type</label>
                <select id="plan_type" name="plan_type" required
                    class="w-60 px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none">
                    <option value="Basic">Basic</option>
                    <option value="Standard">Standard</option>
                    <option value="Premium">Premium</option>
                </select>
            </div>
            <!-- Status -->
            <div class="mb-10 flex items-center">
                <label for="status" class="text-sm font-medium text-gray-600 w-32">Status</label>
                <select id="status" name="status" required
                    class="w-60 px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none">
                    <option value="Active" selected>Active</option>
                    <option value="Expired">Expired</option>
                    <option value="Trial">Trial</option>
                </select>
            </div>
            <!-- Start Date -->
            <div class="mb-10 flex items-center">
                <label for="start_date" class="text-sm font-medium text-gray-600 w-32">Start Date</label>
                <input type="date" id="start_date" name="start_date" value="2024-12-10" required
                    class="w-60 px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none">
            </div>
            <!-- End Date -->
            <div class="mb-10 flex items-center">
                <label for="end_date" class="text-sm font-medium text-gray-600 w-32">End Date</label>
                <input type="date" id="end_date" name="end_date" value="2024-01-10" required
                    class="w-60 px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none">
            </div>
            <!-- Buttons -->
            <div class="flex justify-end space-x-4 mt-6">
                <button type="submit" class="w-auto bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 focus:ring focus:ring-green-200">
                    Save
                </button>
                <button type="button" onclick="window.location.href='/yumrecipe/Admin/View/resources/page/Subscription/subscription.php'" class="w-auto bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 focus:ring focus:ring-red-200">Cancel
                </button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>
