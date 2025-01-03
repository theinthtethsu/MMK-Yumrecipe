<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white dark:bg-gray-900">
<?php 
if(isset($_GET['email'])) {
    include '../../common/header-after-login.php';
} else {
    include '../../common/header-before-login.php';
}
?>
  <?php require_once '../../common/nav.php'; ?>
  <div>
    <h1 class="text-2xl font-bold m-8 dark:text-white">Results For Pasta</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 m-4 lg:grid-cols-4 xl:grid-cols-4 gap-8">
      <!-- Recipe Card -->

      <?php
      $recipes = [
        [
          'id' => 1,
          'title' => 'Bucatini Pasta',
          'author' => 'Ricky',
          'time' => '1 hour 22 min',
          'stars' => 4,
          'reviews' => 23,
          'image' => '/yumrecipe/User/View/resources/img/Pastas/Bucatini Pasta.webp'
        ],
        [
          'id' => 2,
          'title' => 'Ditalini Pasta',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/img/Pastas/ditalini-pasta.jpg'
        ],
        [
          'id' => 3,
          'title' => 'Spicy Pasta',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/img/Pastas/Spicy-Pasta-.webp'
        ],
        [
          'id' => 4,
          'title' => 'Pasta',
          'author' => 'Mary',
          'time' => '60 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/img/Pastas/FussiliPastawithSpicyTomatoSauce.jpg'
        ],
        [
          'id' => 5,
          'title' => 'Veg Pasta',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/img/Pastas/images.jpg'
        ],
        [
          'id' => 6,
          'title' => 'Strawberry Salsa',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/img/Pastas/Spaghetti.jpg'
        ],
        [
          'id' => 7,
          'title' => 'Cake',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/img/Pastas/rigatoni-tomato-sauce.jpg'
        ],

        // Add more recipes here...
      ];

      foreach ($recipes as $recipe) {
        echo '
        <a href="receipeDetail.php?id=' . $recipe['id'] . '" class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer m-4">
            <img src="' . $recipe['image'] . '" alt="' . $recipe['title'] . '" class="w-full h-40 object-cover">
            <div class="absolute top-2 right-2"> <!-- Bookmark Icon -->
                <div class="bg-yellow-300 rounded-full p-2"> 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                        </svg> 
                </div>
            </div>
            <div class="p-2">
                <h3 class="text-lg font-bold text-gray-900">' . $recipe['title'] . '</h3>
                <p class="text-sm text-gray-500">by ' . $recipe['author'] . '</p>
                <div class="flex items-center text-yellow-500 mt-2">';
           
        for ($i = 0; $i < 5; $i++) {
          if ($i < $recipe['stars']) {
            echo '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927a.5.5 0 011.902 0l1.794 5.303h5.386a.5.5 0 01.3.9l-4.356 3.168 1.663 5.11a.5.5 0 01-.748.557L10 14.153l-4.39 3.312a.5.5 0 01-.748-.557l1.663-5.11-4.356-3.168a.5.5 0 01.3-.9h5.386L9.049 2.927z"/></svg>';
          } else {
            echo '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current text-gray-300" viewBox="0 0 20 20"><path d="M9.049 2.927a.5.5 0 011.902 0l1.794 5.303h5.386a.5.5 0 01.3.9l-4.356 3.168 1.663 5.11a.5.5 0 01-.748.557L10 14.153l-4.39 3.312a.5.5 0 01-.748-.557l1.663-5.11-4.356-3.168a.5.5 0 01.3-.9h5.386L9.049 2.927z"/></svg>';
          }
        }

        echo '</div>
                <p class="text-sm text-gray-500 mt-2">' . $recipe['time'] . '</p>
                <p class="text-sm text-gray-500">' . $recipe['reviews'] . ' reviews</p>
            </div>
            
        </a>';
      }
      ?>
    </div>
  </div>
  </div>
  <div class="bg-gray-900">
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/yumrecipe/User/View/common/footer.php'); ?>
  </div>
  </body>
</html>