<?php
$user_path = "/yumrecipe/User/View/resources/page/";
?>
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

    <div class="w-[450px] max-w-md bg-white dark:bg-gray-800 rounded-xl shadow-lg relative">

        <!-- Content Section -->
        <div class="px-10 pt-10 pb-8">
            <!-- Title -->
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-black dark:text-white mb-7">Forgot your password?</h1>
                <p class=" text-regular font-regular text-black dark:text-white">No worries, we will send you reset instructions to your email.</p>
            </div>

            <!-- Form Section -->
            <form action="" method="post">
            <!-- Email Field -->
            <div class="mb-4 w-full">
                    <div class="flex items-center border-b-2 border-red-400 p-2">
                        <span class="material-icons text-gray-400 dark:text-gray-300">email</span>
                        <input id="email" name="email" type="email" placeholder="Email" class="ml-2 w-full bg-transparent focus:outline-none text-black dark:text-white">
                    </div>
                </div>

                <!-- Change Password Button -->
                 <div class=" flex justify-center items-center mt-10">
                    <button type="submit" class="m-auto px-10 py-3 border rounded-full bg-red-500 text-white text-md font-semibold hover:bg-red-600 ml-auto">Reset Password</button>
                 </div>
            </form>

            <div class="text-center mb-10 mt-10">
                <p class="mt-3 text-regular font-regular text-black dark:text-white">Go back to the <a href="<?php echo $user_path ?>signIn.php" class="text-primary font-semibold">Sign In</a> page.</p>
            </div>
        </div>      
    </div>
</section>
</body>
</html>