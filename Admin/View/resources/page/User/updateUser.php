<?php
    $id = $_GET['id'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $type = $_GET['type'];
    $status = $_GET['status'];
    $registered_date = $_GET['registered_date'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>
<body class="font-sans bg-light-text h-screen">
    <div class="flex min-h-screen">
            <!-- Side Menu -->
        <?php require_once '../../../common/sideMenu.php'; ?>
        <!-- Container -->
        <div class="flex-1 container p-4 bg-secondary">
            <div class="flex justify-start mb-10 ml-10 mt-10 cursor-pointer" onclick="window.location.href='userManagement.php'">
                <i class="material-icons">arrow_back</i>
            </div>
    <h1 class="text-2xl font-bold text-center mt-10">Update User Information</h1>
    <div class="flex h-auto w-1/2 m-auto mt-10 rounded-lg bg-light-text shadow-md p-10">
        <!-- input card -->
        <div class="w-1/2 flex justify-center m-auto">
            <div class="flex items-center flex-col">
                        <div class="flex items-center">
                            <label for="id" class="text-sm font-medium text-gray-600 w-32">ID</label>
                            <input type="text" id="id" name="id" value="<?php echo $id; ?>" readonly
                            class="w-60 px-3 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-700">
                        </div>
                        <div class="flex items-center">
                            <label for="name" class="text-sm font-medium text-gray-600 w-32">Name</label>
                            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required
                            class="w-60 px-3 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-700">
                        </div>
                        <div class="flex items-center">
                            <label for="email" class="text-sm font-medium text-gray-600 w-32">Email</label>
                            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required
                            class="w-60 px-3 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-700">
                        </div>
                        <div class="flex items-center">
                            <label for="role" class="text-sm font-medium text-gray-600 w-32">Type</label>
                            <select id="role" name="role" class="w-60 px-3 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-700">
                                <option value="free" <?php echo $type == 'Free' ? 'selected' : ''; ?>>Free</option>
                                <option value="basic" <?php echo $type == 'Basic' ? 'selected' : ''; ?>>Basic</option>
                                <option value="standard" <?php echo $type == 'Standard' ? 'selected' : ''; ?>>Standard</option>
                                <option value="premium" <?php echo $type == 'Premium' ? 'selected' : ''; ?>>Premium</option>
                            </select>
                        </div>
                        <div class="flex items-center">
                            <label for="status" class="text-sm font-medium text-gray-600 w-32">Status</label>
                            <select id="status" name="status" class="w-60 px-3 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-700" value="<?php echo $status; ?>">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="flex items-center">
                            <label for="created_at" class="text-sm font-medium text-gray-600 w-32">Created At</label>
                            <input type="text" id="created_at" name="created_at" value="<?php echo $registered_date; ?>" readonly
                            class="w-60 px-3 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-700">
                        </div>
                        <!-- Buttons -->
                        <div class="flex justify-end space-x-4 mt-6">
                            <button type="submit" class="w-auto bg-accent text-white py-2 px-4 rounded-md hover:bg-accent2 focus:ring focus:ring-green-200" onclick="saveUser()">
                                Save
                            </button>
                            <button type="button" onclick="cancelUser()" class="w-auto bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600 focus:ring focus:ring-gray-200">Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <script>
        function saveUser() {
            console.log('User saved');
            //save user to database
            //redirect to userManagement.php
            window.location.href = '/yumrecipe/Admin/View/resources/page/User/userManagement.php';
        }
        function cancelUser() {
            //redirect to userManagement.php
            window.location.href = '/yumrecipe/Admin/View/resources/page/User/userManagement.php';
        }
    </script>
</html>