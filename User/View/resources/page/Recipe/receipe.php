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
  <?php require_once '../../../common/nav.php'; ?>
  <!-- Main Content -->
  <main class="container mx-auto py-8 px-4">
    <h1 class="text-2xl font-bold mb-6 text-center">All Recipes</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-8">
      <!-- Recipe Card -->

      <?php
      $recipes = [
        [
          'id' => 1,
          'title' => 'Beef Tacos',
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
          'title' => 'Burmese Prawn Curry',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/Burmese-Prawn-Curry.jpg'
        ],
        [
          'id' => 4,
          'title' => 'Easy Lemon dill sauce',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/easy-lemon-dill-sauce.webp'
        ],
        [
          'id' => 5,
          'title' => 'Crab cakes',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/maryland-crab-cakes.webp'
        ],
        [
          'id' => 6,
          'title' => 'Strawberry Salsa',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/strawberry-salsa.jpg'
        ],
        [
          'id' => 7,
          'title' => 'Cake',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/Cake.webp'
        ],
        [
          'id' => 8,
          'title' => 'Cheese Ball',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/Cheeseball.webp'
        ],
        [
          'id' => 9,
          'title' => 'Tomato Soup',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/tomato-soup.jpg'
        ],
        [
          'id' => 10,
          'title' => 'Si Hta Min',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/Si Hta Min.jpg'
        ],
        [
          'id' => 11,
          'title' => 'Monte Cristo Sandwich',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/monte_cristo_sandwich.webp'
        ],
        [
          'id' => 12,
          'title' => 'Spaghetti Bolognese',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/IMG_8.jpg'
        ],
        [
          'id' => 13,
          'title' => 'Herb Butter',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/herb-butter.webp'
        ],
        [
          'id' => 14,
          'title' => 'Chocolate Strawberry',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/Chocolate-Strawberry.jpeg'
        ],
        [
          'id' => 15,
          'title' => 'Chicken Khao Soi',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/Chicken-Khao-Soi.jpg'
        ],
        [
          'id' => 16,
          'title' => 'Cranberry Sause',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/cranberry-sauce.webp'
        ],
        [
          'id' => 17,
          'title' => 'Grinch Cookies',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/easy-holiday-grinch-cookies.webp'
        ],
        [
          'id' => 18,
          'title' => 'Cheese Cake',
          'author' => 'Anna',
          'time' => '45 min',
          'stars' => 5,
          'reviews' => 48,
          'image' => '/yumrecipe/User/View/resources/images/Best-Cheesecake.jpg'
        ],
        // Add more recipes here...
      ];


      foreach ($recipes as $recipe) {
        echo '
        <a href="receipeDetail.php?id=' . $recipe['id'] . '" class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer">
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
    <!-- Pagination -->
    <div>
      <?php require_once '../../../common/pagination.php'; ?>
    </div>

  </main>

  <div class="bg-cover bg-center bg-no-repeat p-10 rounded-lg "
    style="background-image: url('http://localhost/yumrecipe/User/View/resources/images/bg9.png');">
    <div class="container mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 mb-0">
      <!-- Popular Categories Section -->
      <div class="col-span-2 md:col-span-2 h-auto">
        <h2 class="text-red-500 font-bold text-lg mb-4">Popular Categories</h2>
        <ul class="space-y-2 text-gray-700 ">
          <li><a href="receipe.php?category=quick-and-easy" class="inline-block mr-2 hover:text-gray-900">🍴 Quick and
              Easy</a></li>
          <li><a href="receipe.php?category=pasta" class="inline-block mr-2 hover:text-gray-900">🍝 Pasta</a></li>
          <li><a href="receipe.php?category=shashimi" class="inline-block mr-2 hover:text-gray-900">🍣 Shashimi</a></li>
          <li><a href="receipe.php?category=instant-pot" class="inline-block mr-2 hover:text-gray-900">🔥 Instant
              Pot</a></li>
          <li><a href="receipe.php?category=vegetarian" class="inline-block mr-2 hover:text-gray-900">🥗 Vegetarian</a>
          </li>
        </ul>
      </div>

      <!-- Recipe By Season Section -->
      <div class="col-span-2 md:col-span-2">
        <h2 class="text-red-500 font-bold text-lg mb-4">Recipe By Season</h2>
        <div class="grid grid-cols-2 gap-2 text-gray-700">
          <ul class="space-y-2">
            <li><a href="receipe.php?season=spring" class="inline-block hover:text-gray-900">Spring</a></li>
            <li><a href="receipe.php?season=winter" class="inline-block hover:text-gray-900">Winter</a></li>
            <li><a href="receipe.php?season=summer" class="inline-block hover:text-gray-900">Summer</a></li>
          </ul>
          <ul class="space-y-2">
            <li><a href="receipe.php?season=rainy" class="inline-block hover:text-gray-900">Rainy</a></li>
            <li><a href="receipe.php?season=fall" class="inline-block hover:text-gray-900">Fall</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="bg-gray-900 ">
  <?php require_once '../../../common/footer.php'; ?>
  </div>
  
</body>

</html>