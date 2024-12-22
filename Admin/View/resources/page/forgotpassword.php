<?php
$icons_path = "/yumrecipe/Admin/View/resources/icons/";
$images_path = "/yumrecipe/Admin/View/resources/images/";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../css/root.css">
    <link rel="stylesheet" href="../../../../output.css">
</head>

<body>
    <div class="flex h-screen ">
        <img src="<?php echo $images_path; ?>signinbg.png" alt="bg" class="w-full h-full object-cover absolute top-0 left-0">
        <!-- forgot password card -->
        <div class="flex-1 flex justify-center items-center backdrop-blur-sm bg-gray-500/50 ">
            <div class="bg-primary px-10 py-3 pb-10 rounded-3xl shadow-md w-1/4 flex flex-col gap-4 items-center ">
                <img src="<?php echo $images_path; ?>logo.svg" alt="logo" class="w-1/2" style="width: 100px; height: 100px;">
                <div class="flex gap-6 items-center text-center">
                    <h1 class="text-xl mb-4 text-light-text">Forgot Password</h1>
                </div>
                <form action="" method="post">
                    <div class="flex flex-col gap-2">
                        <!-- email -->
                        <div class="flex items-center">
                            <div class="relative">
                                <img src="<?php echo $icons_path; ?>mail.svg" alt="username" class="w-1/2 absolute top-2 left-3" style="width: 20px; height: 20px;">
                                <input type="text" id="email" name="email" placeholder="Enter your email" class="w-full p-2 border-b bg-transparent border-gray-300 focus:outline-none focus:border-accent ml-2 pl-10 focus:placeholder-gray-500 text-light-text" required> 
                            </div>
                        </div>
                        <!-- forgot password button -->
                        <button type="submit" class="bg-accent w-40 text-white p-2 rounded-md mt-4 hover:bg-accent2 transition-all duration-300 self-center">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>