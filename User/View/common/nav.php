<?php
$user_path = "/yumrecipe/User/View/resources/page/";
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
    <nav class="w-full max-w-2xl  text-gray-700">
        <!-- Top Red Line -->
        <div class="h-0.5 bg-red-400 w-full">
          
        </div>
    
        <!-- Menu Items -->
        <ul class="flex justify-center space-x-10 py-4 font-semibold">
          <li>
            <a href="<?php echo $user_path; ?>homepage.php" class="text-red-500 hover:text-red-600">Home</a>
          </li>
          <li>
            <a href="<?php echo $user_path; ?>receipe.php" class="hover:text-red-600">Recipes</a>
          </li>
          <li>
            <a href="<?php echo $user_path; ?>addRecipe.html" class="hover:text-red-600">Add Recipes</a>
          </li>
          <li>
            <a href="<?php echo $user_path; ?>blog.html" class="hover:text-red-600">Blogs</a>
          </li>
          <li>
            <a href="<?php echo $user_path; ?>about_us.php" class="hover:text-red-600">About Us</a>
          </li>
        </ul>
    
        <!-- Bottom Red Line -->
        <div class="h-0.5 bg-red-400 w-full"></div>
      </nav>
</section>
</body>
</html>