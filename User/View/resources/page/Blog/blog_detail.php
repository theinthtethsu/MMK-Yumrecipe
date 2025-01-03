<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="font-roboto text-gray-700 leading-none font-normal dark:bg-gray-900 dark:text-white">
  <?php 
if(isset($_GET['email'])) {
    include '../../../common/header-after-login.php';
} else {
    include '../../../common/header-before-login.php';
}
?>
    <?php include_once '../../../common/nav.php'; ?>
    <!-- Main Container -->
    <div class="max-w-screen-lg mx-auto px-4 py-4 mt-14">
      <!-- Header -->
      <header class="text-center mb-20 md:mb-16">
        <img src="../../img/Salad.png" alt="Blog Logo" class="w-24 h-24 mx-auto mb-2" />
        <h1 class="text-3xl md:text-5xl font-bold tracking-tight mb-2">Welcome to our Blog</h1>
        <p class="text-base md:text-lg text-gray-600">See offers, Featured News, best served with freshly baked</p>
      </header>

      <!-- Main Content Grid -->
      <div class="grid grid-cols-1 md:grid-cols-[14rem_1fr] gap-12 md:gap-24 items-start">
        <!-- Left Sidebar -->
        <div class="md:col-span-1">
          <h2 class="italic text-xl font-semibold mb-4">Hi There!</h2>
          <p class="text-base text-gray-600 mb-8 leading-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
          </p>
          <img src="../../img/ian-dooley-TLD6iCOlyb0-unsplash (1).jpg" alt="food picture" class="w-40 rounded-lg mb-6" />

          <!-- Newsletter Section -->
          <div class="bg-gray-100 rounded-lg p-4">
            <h3 class="font-semibold mb-4">Subscribe to our Newsletter</h3>
            <input
              type="email"
              placeholder="Email address"
              class="w-full p-2 mb-3 border rounded outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
            />
            <button class="w-full bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Subscribe</button>
          </div>
        </div>

        <!-- Main Blog Content -->
        <div>
          <article class="mb-12">
            <div class="text-gray-500 mb-2">Dec 20, 2022</div>
            <h2 class="text-2xl font-semibold mb-2">The World’s Most Delicious Burgers and Where to Find Them</h2>
            <p class="text-lg text-gray-600 mb-4 leading-7">
              Ever wondered where to find the most mouthwatering burgers on the planet? From classic American staples to gourmet international creations, here’s a global journey to discover the best burgers you must try!
            </p>
            <img src="../../img/amin-ramezani-dcdlng96XME-unsplash.jpg" alt="Delicious Burger" class="w-full h-96 rounded-lg mb-6 object-cover" />

            <div class="prose max-w-none">
              <h3 class="text-2xl font-semibold mb-3">Create Relevant Content</h3>
              <div class="text-lg leading-7">
                <p class="mb-4">
                  <h1>The Classic: USA – The Heart of the Burger World 🍔</h1>
                  <br />It’s no surprise that the United States, the home of the burger, is where you’ll find some of the best. New York, Los Angeles, and Chicago are overflowing with iconic joints. The ‘Double ShackBurger’ from Shake Shack or the legendary ‘In-N-Out Double-Double’ are life-changing experiences for burger lovers. For a gourmet option, head to New York’s ‘Black Label Burger’ at Minetta Tavern — juicy dry-aged beef that melts in your mouth. Fun Fact: The cheeseburger was “accidentally” invented in the 1920s when a chef in California dropped a slice of cheese on a beef patty!
                </p>

                <p>
                  <h1></h1>
                  <br />Japan takes burgers to a new level of decadence. Imagine a burger made with buttery, melt-in-your-mouth Wagyu beef. The ‘Ginza Wagyu Burger’ in Tokyo combines premium Japanese beef with truffle mayo, caramelized onions, and a toasted brioche bun. It’s rich, indulgent, and worth every yen. Why Japan? Wagyu beef is famous for its marbling, making it one of the most tender meats in the world.
                </p>
              </div>
            </div>
          </article>
        </div>
      </div>
      <hr class="p-2 border-gray-300" />
    </div>
    <div class="mt-20 ml-4 md:ml-20 mb-18">
      <div class="font-semibold text-lg mb-1">Recent Post</div>
      <!-- Recent Post -->
      <a href="#" class="block">
        <figure class="border-gray-300 bg-primaryTint w-full md:w-80 h-auto md:h-72 shadow-lg rounded-md overflow-hidden">
          <img src="../../img/allen-rad-9G_oJBKwi1c-unsplash.jpg" alt="food" class="w-full h-48 object-cover" />
          <div class="p-2">
            <h3 class="mb-4 text-sm font-semibold">10 Best Deserts to Satisfy the Sweet Tooth</h3>
            <div class="text-xs">December 19, 2024</div>
          </div>
        </figure>
      </a>
    </div>

    <?php include_once '../../../common/footer.php'; ?>
  </body>
</html>

