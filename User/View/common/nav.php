<?php
$user_path = "/yumrecipe/User/View/resources/page/";
$blog_path = "/yumrecipe/User/View/resources/page/Blog/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
      <!-- Navigation Bar -->
<section class="flex items-center justify-center mt-9" >
    <nav class="w-full max-w-2xl  text-gray-700 dark:text-white">
        <!-- Top Red Line -->
        <div class="h-0.5 bg-red-400 w-full">
          
        </div>
    
        <!-- Menu Items -->
        <ul class="flex justify-center space-x-10 py-4 font-semibold md:px-3">
          <li class="md:block">
            <a href="<?php echo $user_path; ?>homepage.php" class=" hover:text-red-600 <?php echo basename($_SERVER['PHP_SELF']) == 'homepage.php' ? 'text-red-500' : '' ?>">Home</a>
          </li>
          <li class="md:block">
            <a href="<?php echo $user_path; ?>Recipe/receipe.php" class=" hover:text-red-600">Recipes</a>
          </li>
          <li class="md:block">
            <a href="<?php echo $user_path; ?>add_recipe.php" class=" hover:text-red-600 <?php echo basename($_SERVER['PHP_SELF']) == 'add_recipe.php' ? 'text-red-500' : '' ?>">Add Recipes</a>
          </li>
          <li class="md:block">
            <a href="<?php echo $blog_path; ?>blog.php" class=" hover:text-red-600 <?php echo basename($_SERVER['PHP_SELF']) == 'blog.php' ? 'text-red-500' : '' ?>">Blogs</a>
          </li>
          <li class="md:block">
            <a href="<?php echo $user_path; ?>about_us.php" class=" hover:text-red-600 <?php echo basename($_SERVER['PHP_SELF']) == 'about_us.php' ? 'text-red-500' : '' ?>">About Us</a>
          </li>
        </ul>
    
        <!-- Bottom Red Line -->
        <div class="h-0.5 bg-red-400 w-full"></div>
      </nav>
</section>
</body>
</html>