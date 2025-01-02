<?php
$images_path = "/yumrecipe/User/View/resources/img/";
$user_path = "/yumrecipe/User/View/resources/page/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
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
<body class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-900 dark:text-white">
    <section class="bg-primary dark:bg-darkBg  h-full p-20 rounded-2xl dark:bg-gray-800 dark:text-white">
        <!-- Image -->
    <div class="w-[400px] max-w-md bg-white dark:bg-gray-800 rounded-xl shadow-lg relative">
        <div class="absolute -top-14 right-1/2 transform translate-x-1/2 w-32 h-32 ">
            <img src="<?php echo $images_path ?>lemonfish.jpg" alt="Food Image" class="rounded-full w-full h-full object-cover border-2 border-white">
        </div>

        <!-- Content Section -->
        <div class="px-10 pt-20 pb-8 w-96">
            <!-- Title -->
            <div class="text-center mb-6">
                <p class="text-2xl font-bold text-black dark:text-white">Sign Up</p>
                <p class="text-sm text-gray-500 dark:text-gray-400">or <a href="<?php echo $user_path ?>signIn.php" class="text-primary font-semibold">Sign In</a></p>
            </div>

            <!-- Form Section -->
            <form action="../../../Controller/SignUpController.php" method="post">
                <!-- Username Field -->
                <div class="mb-4">
                    <div class="flex items-center border-b-2 border-red-400 p-2">
                        <span class="material-icons text-gray-400 dark:text-gray-300">person</span>
                        <input id="username" name="username" type="text" placeholder="User Name" class="ml-2 w-full bg-transparent focus:outline-none text-black dark:text-white">
                    </div>
                </div>

                      <!-- Email Field -->
                      <div class="mb-4">
                    <div class="flex items-center border-b-2 border-red-400 p-2">
                        <span class="material-icons text-gray-400 dark:text-gray-300">email</span>
                        <input id="email" name="email" type="email" placeholder="Email" class="ml-2 w-full bg-transparent focus:outline-none text-black dark:text-white">
                    </div>
                </div>

                      <!-- Phone No Field -->
                      <div class="mb-4">
                    <div class="flex items-center border-b-2 border-red-400 p-2">
                        <span class="material-icons text-gray-400 dark:text-gray-300">phone</span>
                        <input id="phone" name="phone" type="text" placeholder="Phone Number" class="ml-2 w-full bg-transparent focus:outline-none text-black dark:text-white">
                    </div>
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <div class="flex items-center border-b-2 border-red-400 p-2">
                        <span class="material-icons text-gray-400 dark:text-gray-300">lock</span>
                        <input id="password" type="password" name="password" placeholder="Password" class="ml-2 w-full bg-transparent focus:outline-none text-black dark:text-white">
                        <span class="material-icons text-gray-400 dark:text-gray-300">visibility</span>
                    </div>
                </div>

                <!-- Remember Me -->
                <!-- <div class="flex items-center justify-between mb-6 mt-10">
                    <label class="flex items-center text-sm text-gray-600 dark:text-gray-300">
                        <input type="checkbox" name="remember" class="form-checkbox text-primary dark:text-primary focus:ring-primary dark:focus:ring-primary">
                        <span class="ml-2">Remember Me</span>
                    </label>                  
                </div> -->

                <!-- Sign Up Button -->
                 <div class=" flex justify-center items-center mt-5">
                    <button type="submit" name="signup" class="m-auto px-10 py-3 border rounded-full bg-red-500 text-white text-md font-semibold hover:bg-red-600 ml-auto">Sign Up</button>
                 </div>
            </form>
        </div>      
    </div>
</section>
 
</body>
</html>
