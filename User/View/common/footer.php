<?php
$user_path = "/yumrecipe/User/View/resources/page/";
$blog_path = "/yumrecipe/User/View/resources/page/Blog/";
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yum Recipe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

</head>

<body>
    <section class="bg-gray-800 text-white p-8">
        
            <div class="flex justify-around">
            <!-- Left Section: Pages -->
            <div class="mb-10">
                <h2 class="text-3xl font-bold mb-6">Pages</h2>
                <div class="flex">
                <ul class="space-y-4 text-lg">
                    <li><a href="<?php echo $user_path; ?>homepage.php" class=" hover:text-red-500">Home</a></li>
                    <li><a href="<?php echo $user_path; ?>Recipe/receipe.php" class=" hover:text-red-500">Recipes</a></li>
                    <li><a href="<?php echo $user_path; ?>addRecipe.php" class="hover:text-red-500">Add Recipes</a></li>
                    <li><a href="<?php echo $user_path; ?>blog.html" class="hover:text-red-500">Blogs</a></li>
                </ul>

                <ul class="ml-10 space-y-4 text-lg">
                <li><a href="<?php echo $user_path; ?>aboutUs.html" class="hover:text-red-500">About Us</a></li>
                    <li><a href="<?php echo $user_path; ?>FAQ/faq1.php" class="hover:text-red-500">FAQ</a></li>
                    <li><a href="<?php echo $user_path; ?>privacyPolicy.php" class="hover:text-red-500">Privacy
                            Policy</a></li>
                </ul>
                </div>
            </div>

            <!-- Right Section: About Yum Recipe -->
            <div class=" text-center">
                <h2 class="text-4xl font-bold text-red-500 mb-6">Yum Recipe</h2>
                <p class="text-gray-300 mb-6 leading-relaxed">
                    I am always sharing fresh, flavorful, and healthy recipes<br />
                    that I love to make and eat in my real life.
                </p>
                <!-- Social Media Icons -->
                <div class="flex justify-center gap-6">
                    <a href="#" class="text-red-500 text-2xl"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-red-500 text-2xl"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-red-500 text-2xl"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-red-500 text-2xl"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- FontAwesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>