<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php require_once '../../common/user-profile-common.php'; ?>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col bg-white dark:bg-gray-900">
    <!-- Navigation Bar -->
    <?php require_once '../../common/nav.php'; ?>
            <!-- Profile Section -->
            <div class="flex flex-col items-center mt-10">
                <p class="text-gray-600 mb-5">You are signed in as <span class="font-bold">abc123@gmail.com</span></p>

                <!-- Credentials Box -->
                <div class="bg-gradient-to-r from-yellow-400 via-red-400 to-pink-500 p-1 rounded-3xl">
                    <div class="bg-gray-800 p-10 rounded-3xl text-white w-[500px] ">
                        <h2 class="text-center font-semibold text-lg mb-5 underline">Credentials</h2>

                        <form action="" class="px-10">
                            <!-- Email -->
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-semibold">Email</label>
                                <input type="text" value="" placeholder="abc123@gmail.com"
                                    class="w-80 px-3 py-2 rounded bg-gray-200 text-gray-600 focus:outline-none" disabled>
                            </div>

                            <!-- Password -->
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-semibold">Password</label>

                                <input type="password" value="" placeholder="********"
                                    class="w-80 px-3 py-2 rounded bg-gray-200 text-gray-600 focus:outline-none">


                                <a href="#" class="block ml-2 text-blue-400 text-sm hover:underline">Change Password</a>
                            </div>

                            <!-- Username -->
                            <div class="mb-6">
                                <label class="block mb-2 text-sm font-semibold">Username</label>
                                <input type="text" value="" placeholder="John"
                                    class="w-80 px-3 py-2 rounded bg-gray-200 text-gray-600 focus:outline-none">
                            </div>

                            <!-- Signout Button -->
                            <div class="text-center">
                                 <button onclick="saveProfile()" class="bg-white text-gray-700 px-5 py-2 rounded hover:bg-gray-200 font-semibold" >
                                    Save
                                </button> 
                            </div>
                        </form>
                        <!-- <a href="signout.php" class="bg-white text-gray-700 px-5 py-2 rounded hover:bg-gray-200">
                                    Signout ↩
                        </a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
<script>
    function saveProfile() {
        alert("Profile saved");
        window.location.href = "userProfile.php";
        window.location.reload();
        
    }
</script>
</body>
</html>