<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Plan</title>
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>
<body class="font-sans bg-light-text">
<div class="flex h-auto">
    <div class="bg-light-text px-6 pt-5 rounded-lg shadow-md w-full -mt-3">
        <div class="flex-1 container p-4 justify-center">
            <h1 class="text-2xl font-bold flex justify-center mb-10">Add/Edit Subscription Plan</h1>
        <div class="w-1/2 flex justify-center m-auto">
        <form id="planForm" action="addnewplan.php" method="POST">
            <!-- Plan Name -->
                    <div class="mb-10 flex items-center">
                            <label for="planName" class="block text-gray-700 font-bold mb-2 w-32">Plan Name:</label>
                            <input type="text" id="planName" name="planName" class="border border-accent rounded w-80 py-2 px-3 text-gray-700">
                    </div>
                    <!-- Price -->
                    <div class="mb-10 flex items-center">
                            <label for="price" class="block text-gray-700 font-bold mb-2 w-32">Price:</label>
                            <input type="number" id="price" name="price" class="border border-accent rounded w-80 py-2 px-3 text-gray-700" step="0.01" >
                    </div>
                    <!-- Duration -->
                    <div class="mb-10 flex items-center">
                            <label for="duration" class="block text-gray-700 font-bold mb-2 w-32">Duration:</label>
                            <select id="duration" name="duration" required
                                    class="w-60 px-3 py-2 border border-accent rounded-md focus:ring focus:ring-blue-200 focus:outline-none">
                                    <option value="1">Monthly</option>
                                    <option value="3">Yearly</option>
                                </select>
                    </div>
                    <!-- Description -->
                    <div class="mb-10 flex items-center">
                            <label for="description" class="block text-gray-700 font-bold mb-2 w-32">Description:</label>
                            <textarea id="description" name="description" placeholder="Enter Description" class="border border-accent rounded w-80 py-2 px-3 text-gray-700" rows="4"></textarea>
                        </div>
                   <!-- Feature adding Section -->
                   <div class="mb-10 flex items-center">
                            <label for="feature-text" class="block text-gray-700 font-bold mb-2 w-32">Features:</label>
                            <input type="text" id="feature-text" placeholder="Enter new features" class="border border-accent rounded w-80 py-2 px-3 text-gray-700">
                            <div class="ml-8">
                                <button type="button" onclick="addFeature()"
                                        class="bg-accent text-white px-4 py-2 rounded shadow hover:bg-blue-600 focus:ring-2 focus:ring-accent">
                                        Add
                                </button>  
                            </div>
                    </div>
                     <div id="feature-list" class="w-1/2 rounded flex items-center" >
                            <ul id="featureinstruction-items" class="space-y-3">
                               <!--Dynamically added features will appear here -->
                            </ul>
                    </div>
                    <!-- Buttons -->
                    <div class="flex justify-center space-x-4 mt-6">
                        <button type="submit" class="w-auto bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 focus:ring focus:ring-green-200">
                            Save
                        </button>
                    </div>
                    <button type="button" onclick="window.location.href='subscription.php'" class="w-auto bg-accent text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:ring focus:ring-blue-200 justify-end">Back
                    </button>
         </form>
    </div>
</body>
</html>