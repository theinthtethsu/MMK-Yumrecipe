<<<<<<< HEAD
<?php 
=======
<?php
>>>>>>> 4bf1c7d818e29b11087bc83d1ae14c9ecf92ef6b
$images_path = "/yumrecipe/User/View/resources/images/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Recipes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="">
  <!-- Navbar -->
  <?php include('C:/xampp/htdocs/yumrecipe/User/View/common/header-before-login.php'); ?>

  <!-- Main Content -->
  <main class="container mx-auto py-8 px-4">
    <h1 class="text-2xl font-bold mb-6 text-center">All Recipes</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-8">
      <!-- Recipe Card -->

<<<<<<< HEAD
            <?php
                $recipes = [
                    [
                        'id' => 1,
                        'title' => 'Shredded Beef Tacos',
                        'author' => 'Ricky',
                        'time' => '1 hour 22 min',
                        'stars' => 4,
                        'reviews' => 23,
                        'image' => '/yumrecipe/User/View/resources/images/shredded-beef-tacos-recipe.jpg'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Charcuterie Cups',
                        'author' => 'Anna',
                        'time' => '45 min',
                        'stars' => 5,
                        'reviews' => 48,
                        'image' => '/yumrecipe/User/View/resources/images/Charcuterie Cups.jpg'
                    ],
                    [
                      'id' => 3,
                      'title' => 'Crab Cakes ',
                      'author' => 'Anna',
                      'time' => '45 min',
                      'stars' => 5,
                      'reviews' => 48,
                      'image' => '/yumrecipe/User/View/resources/images/maryland-crab-cakes-recipe-jennifercooks_1676-copy.webp'
                  ],
                  [
                    'id' => 4,
                    'title' => 'Strawberry Dessert',
                    'author' => 'Anna',
                    'time' => '45 min',
                    'stars' => 5,
                    'reviews' => 48,
                    'image' => '/yumrecipe/User/View/resources/images/strawberry-salsa-with-cinnamon-and-sugar-chips-recipe.jpg'
                ],
                [
                  'id' => 5,
                  'title' => 'Cheddar Cheeseball',
                  'author' => 'Anna',
                  'time' => '45 min',
                  'stars' => 5,
                  'reviews' => 48,
                  'image' => '/yumrecipe/User/View/resources/images/old-fashioned-cheeseball.webp'
              ],
              [
                'id' => 6,
                'title' => 'Grinch Cookies',
                'author' => 'Anna',
                'time' => '45 min',
                'stars' => 5,
                'reviews' => 48,
                'image' => '/yumrecipe/User/View/resources/images/easy-holiday-grinch-cookies-recipe-jennifercooks.webp'
            ],
            [
              'id' => 7,
              'title' => 'Spaghetti Bolognese',
              'author' => 'Anna',
              'time' => '45 min',
              'stars' => 5,
              'reviews' => 48,
              'image' => '/yumrecipe/User/View/resources/images/recipe.png'
          ],
          [
            'id' => 8,
            'title' => 'Spaghetti Bolognese',
            'author' => 'Anna',
            'time' => '45 min',
            'stars' => 5,
            'reviews' => 48,
            'image' => '/yumrecipe/User/View/resources/images/recipe.png'
=======
      <?php
      $recipes = [
        [
          'id' => 1,
          'title' => 'Shredded Beef Tacos',
          'author' => 'Ricky',
          'time' => '1 hour 22 min',
          'stars' => 4,
          'reviews' => 23,
          'image' => '/yumrecipe/User/View/resources/images/shredded-beef-tacos-recipe.jpg'
>>>>>>> 4bf1c7d818e29b11087bc83d1ae14c9ecf92ef6b
        ],
        [
          'id' => 2,
          'title' => 'Charcuterie Cups',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
<<<<<<< HEAD
          'image' => '/yumrecipe/User/View/resources/images/recipe.png'
      ],
      [
        'id' => 10,
        'title' => 'Spaghetti Bolognese',
        'author' => 'Anna',
        'time' => '45 min',
        'stars' => 5,
        'reviews' => 48,
        'image' => '/yumrecipe/User/View/resources/images/recipe.png'
    ],
    [
      'id' => 11,
      'title' => 'Spaghetti Bolognese',
      'author' => 'Anna',
      'time' => '45 min',
      'stars' => 5,
      'reviews' => 48,
      'image' => '/yumrecipe/User/View/resources/images/recipe.png'
  ],
  [
    'id' => 12,
    'title' => 'Spaghetti Bolognese',
    'author' => 'Anna',
    'time' => '45 min',
    'stars' => 5,
    'reviews' => 48,
    'image' => '/yumrecipe/User/View/resources/images/recipe.png'
],
[
  'id' => 13,
  'title' => 'Spaghetti Bolognese',
  'author' => 'Anna',
  'time' => '45 min',
  'stars' => 5,
  'reviews' => 48,
  'image' => '/yumrecipe/User/View/resources/images/recipe.png'
],
[
  'id' => 14,
  'title' => 'Spaghetti Bolognese',
  'author' => 'Anna',
  'time' => '45 min',
  'stars' => 5,
  'reviews' => 48,
  'image' => '/yumrecipe/User/View/resources/images/recipe.png'
],
[
  'id' => 15,
  'title' => 'Spaghetti Bolognese',
  'author' => 'Anna',
  'time' => '45 min',
  'stars' => 5,
  'reviews' => 48,
  'image' => '/yumrecipe/User/View/resources/images/recipe.png'
],
[
  'id' => 16,
  'title' => 'Spaghetti Bolognese',
  'author' => 'Anna',
  'time' => '45 min',
  'stars' => 5,
  'reviews' => 48,
  'image' => '/yumrecipe/User/View/resources/images/recipe.png'
],
[
  'id' => 17,
  'title' => 'Spaghetti Bolognese',
  'author' => 'Anna',
  'time' => '45 min',
  'stars' => 5,
  'reviews' => 48,
  'image' => '/yumrecipe/User/View/resources/images/recipe.png'
],
[
  'id' => 18,
  'title' => 'Spaghetti Bolognese',
  'author' => 'Anna',
  'time' => '45 min',
  'stars' => 5,
  'reviews' => 48,
  'image' => '/yumrecipe/User/View/resources/images/recipe.png'
],
                    // Add more recipes here...
                ];
                
                
                foreach ($recipes as $recipe) {
                  echo '
                  <div class="bg-white w-52 shadow-lg rounded-lg overflow-hidden">
                  

=======
          'image' => '/yumrecipe/User/View/resources/images/Charcuterie Cups.jpg'
        ],
        [
          'id' => 3,
          'title' => 'Crab Cakes ',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/maryland-crab-cakes-recipe-jennifercooks_1676-copy.webp'
        ],
        [
          'id' => 4,
          'title' => 'Strawberry Dessert',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/strawberry-salsa-with-cinnamon-and-sugar-chips-recipe.jpg'
        ],
        [
          'id' => 5,
          'title' => 'Cheddar Cheeseball',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/old-fashioned-cheeseball.webp'
        ],
        [
          'id' => 6,
          'title' => 'Grinch Cookies',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/easy-holiday-grinch-cookies-recipe-jennifercooks.webp'
        ],
        [
          'id' => 7,
          'title' => 'Herb-Butter Rubbed Turkey',
          'author' => 'Dev',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/herb-butter-rubbed-rub-turkey.webp'
        ],
        [
          'id' => 8,
          'title' => 'Easy Lemon Dill Sauce
',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/easy-lemon-dill-sauce.webp'
        ],
        [
          'id' => 9,
          'title' => 'Monte Cristo Sliders',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/monte_cristo_sandwich.webp'
        ],
        [
          'id' => 10,
          'title' => 'Cup Cake',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/Cake.webp'
        ],
        [
          'id' => 11,
          'title' => 'Classic Crunchy Ground Beef Tacos',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/IMG_8.jpg'
        ],
        [
          'id' => 12,
          'title' => 'Chicken Khao Soi',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/Chicken-Khao-Soi.jpg'
        ],
        [
          'id' => 13,
          'title' => 'Si Hta Min',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/Si Hta Min.jpg'
        ],
        [
          'id' => 14,
          'title' => 'Cranberry Sauce',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/cranberry-sauce-recipe-1.webp'
        ],
        [
          'id' => 15,
          'title' => 'Chocolate Layer Sweet Treat',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/Forticreme-Chocolate-Chocolate-Layered.jpeg'
        ],
        [
          'id' => 16,
          'title' => 'Burmese Prawn Curry',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 4,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/Burmese-Prawn-Curry.jpg'
        ],
        [
          'id' => 17,
          'title' => 'Tomato Soup',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/tomato-soup-recipe.jpg'
        ],
        [
          'id' => 18,
          'title' => 'Cheese Cake',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/Best-Cheesecake-Recipe-2-1-of-1-4.jpg'
        ],
        // Add more recipes here...
      ];

      foreach ($recipes as $recipe) {
        echo '
                  <a href="receipeDetail.php" style="text-decoration: none; color: inherit;">
                  <div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer">
                
>>>>>>> 4bf1c7d818e29b11087bc83d1ae14c9ecf92ef6b
                      <img src="' . $recipe['image'] . '" alt="' . $recipe['title'] . '" class="w-full h-40 object-cover">
                      <div class="absolute top-2 right-2"> <!-- Bookmark Icon -->
            <div class="bg-yellow-300 rounded-full p-2"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                </svg> </div>
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
                      
                  </div>';
      }
      ?>
    </div>
    <!-- Pagination -->
    <div class="flex justify-center mt-8">
      <ul class="flex gap-2">
        <li><button class="py-2 px-4 bg-gray-200 text-gray-600 rounded">1</button></li>
        <li><button class="py-2 px-4 bg-gray-200 text-gray-600 rounded">2</button></li>
        <li><button class="py-2 px-4 bg-gray-200 text-gray-600 rounded">3</button></li>
      </ul>
    </div>
  </main>

  <div class="bg-cover bg-center bg-no-repeat p-10 rounded-lg"
    style="background-image: url('http://localhost/yumrecipe/User/View/resources/images/bg9.png');">
    <div class="container mx-auto grid grid-cols-2 md:grid-cols-4 gap-6">
      <!-- Popular Categories Section -->
      <div class="col-span-2 md:col-span-2">
        <h2 class="text-red-500 font-bold text-lg mb-4">Popular Categories</h2>
        <ul class="space-y-2 text-gray-700">
          <li><span class="inline-block mr-2">🍴</span>Quick and Easy</li>
          <li><span class="inline-block mr-2">🍝</span>Pasta</li>
          <li><span class="inline-block mr-2">🍣</span>Shashimi</li>
          <li><span class="inline-block mr-2">🔥</span>Instant Pot</li>
          <li><span class="inline-block mr-2">🥗</span>Vegetarian</li>
        </ul>
      </div>

      <!-- Recipe By Season Section -->
      <div class="col-span-2 md:col-span-2">
        <h2 class="text-red-500 font-bold text-lg mb-4">Recipe By Season</h2>
        <div class="grid grid-cols-2 gap-2 text-gray-700">
          <ul class="space-y-2">
            <li>Spring</li>
            <li>Winter</li>
            <li>Summer</li>
          </ul>
          <ul class="space-y-2">
            <li>Rainy</li>
            <li>Fall</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <div class="bg-gray-900">
    <?php include('C:/xampp/htdocs/yumrecipe/User/View/common/footer.php'); ?>
  </div>
</body>

</html>