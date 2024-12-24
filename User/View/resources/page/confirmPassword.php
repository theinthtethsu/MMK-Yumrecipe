<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FF4C4C',
                        darkBg: '#2D2D2D',
                    },
                },
            },
            darkMode: 'class',
        };
    </script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-50">
<section class="bg-primary dark:bg-darkBg  h-full p-20 rounded-2xl">

    <div class="w-[400px] max-w-md bg-white dark:bg-gray-800 rounded-xl shadow-lg relative">

        <!-- Content Section -->
        <div class="px-10 pt-10 pb-8 w-96">
            <!-- Title -->
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-black dark:text-white">Pick a new password</h1>
    
            </div>

            <!-- Form Section -->
            <form action="" method="post">
              <!-- Password Field -->
              <div class="mb-4">
                    <div class="flex items-center border-b-2 border-red-400 p-2">
                        <input id="pw1" type="password" name="password1" placeholder="New Password" class="ml-2 w-full bg-transparent focus:outline-none text-black dark:text-white">
                        <span class="material-icons text-gray-400 dark:text-gray-300">visibility</span>
                    </div>
                </div>
         

                <!-- Password Field -->
                <div class="mb-4">
                    <div class="flex items-center border-b-2 border-red-400 p-2">
                        <input id="pw2" type="password" name="password2" placeholder="Type it again" class="ml-2 w-full bg-transparent focus:outline-none text-black dark:text-white">
                        <span class="material-icons text-gray-400 dark:text-gray-300">visibility</span>
                    </div>
                </div>

                <!-- Change Password Button -->
                 <div class=" flex justify-center items-center mt-10">
                    <button type="submit" class="m-auto px-10 py-3 border rounded-full bg-red-500 text-white text-md font-semibold hover:bg-red-600 ml-auto">Change Password</button>
                 </div>
            </form>
        </div>      
    </div>
</section>
</body>
</html>