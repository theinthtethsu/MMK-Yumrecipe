<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="font-roboto text-gray-700 leading-none font-normal">
  <?php include_once '../../../common/header-before-login.php'; ?>
  <?php include_once '../../../common/nav.php'; ?>
    <!-- Main Container -->
    <div class="max-w-screen-lg mx-auto px-4 py-4 mt-14 ">
      <!-- Header -->
      <header class="text-center mb-20 md:mb-16">
        <img
          src="../../img/Salad.png"
          alt="Blog Logo"
          class="w-24 h-24 mx-auto mb-2"
        />
        <h1 class="text-3xl md:text-5xl font-bold tracking-tight mb-2">
          Welcome to our Blog
        </h1>
        <p class="text-base md:text-lg text-gray-600">
          See offers, Featured News, best served with freshly baked
        </p>
      </header>

      <!-- Main Content Grid -->
      <div
        class=" grid grid-cols-1 md:grid-cols-[14rem_1fr] gap-12 md:gap-24 items-start"
      >
        <!-- Left Sidebar -->
        <div class="md:col-span-1">
          <h2 class="italic text-xl font-semibold mb-4">Hi There!</h2>
          <p class="text-base text-gray-600 mb-8 leading-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
            lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
          </p>
          <img
            src="../../img/ian-dooley-TLD6iCOlyb0-unsplash (1).jpg"
            alt="food picture"
            class="w-40 rounded-lg mb-6"
          />

          <!-- Newsletter Section -->
          <div class="bg-gray-100 rounded-lg">
            <h3 class="font-semibold mb-4">Subscribe to our Newsletter</h3>
            <input
              type="email"
              placeholder="Email address"
              class="w-full p-2 mb-3 border rounded outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-red-500"
            />
            <button
              class="w-full bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600"
            >
              Subscribe
            </button>
          </div>
        </div>

        <!-- Blog Posts Content -->
        <div class="flex flex-col gap-11">
      <a href="blog_detail.php" class="block transition-transform transform hover:scale-105">
        <section
          class="shadow-lg border-gray-200 border-2 bg-primaryTint p-2 rounded-lg "
        >
          <div class="grid grid-cols-1 md:grid-cols-3 gap-1">
            <img
              src="../../img/allen-rad-9G_oJBKwi1c-unsplash.jpg"
              alt="People sitting on chairs"
              class="w-full md:w-52 h-32 object-cover col-span-1 rounded-lg shadow-lg"
            />
            <div class="testimonial-box col-span-2">
              <blockquote
                class="text-lg mb-4 leading-relaxed text-gray-600 font-bold"
              >
                The World’s Most Delicious Burgers and Where to Find Them
              </blockquote>
              <p class="testimonial-author text-gray-500">Dec 20, 2024</p>
            </div>
          </div>
        </section>
      </a>
      <a href="blog_detail.php" class="block transition-transform transform hover:scale-105">
        <section
          class="shadow-lg border-gray-200 border-2 bg-primaryTint p-2 rounded-lg"
        >
          <div class="grid grid-cols-1 md:grid-cols-3 gap-1">
            <img
              src="../../img/allen-rad-9G_oJBKwi1c-unsplash.jpg"
              alt="People sitting on chairs"
              class="w-full md:w-52 h-32 object-cover col-span-1 rounded-lg shadow-lg"
            />
            <div class="testimonial-box col-span-2">
              <blockquote
                class="text-lg mb-4 leading-relaxed text-gray-600 font-bold"
              >
                The World’s Most Delicious Burgers and Where to Find Them
              </blockquote>
              <p class="testimonial-author text-gray-500">Dec 20, 2024</p>
            </div>
          </div>
        </section>
      </a>
      <a href="blog_detail.php" class="block transition-transform transform hover:scale-105">
        <section
          class="shadow-lg border-gray-200 border-2 bg-primaryTint p-2 rounded-lg"
        >
          <div class="grid grid-cols-1 md:grid-cols-3 gap-1">
            <img
              src="../../img/allen-rad-9G_oJBKwi1c-unsplash.jpg"
              alt="People sitting on chairs"
              class="w-full md:w-52 h-32 object-cover col-span-1 rounded-lg shadow-lg"
            />
            <div class="testimonial-box col-span-2">
              <blockquote
                class="text-lg mb-4 leading-relaxed text-gray-600 font-bold"
              >
                The World’s Most Delicious Burgers and Where to Find Them
              </blockquote>
              <p class="testimonial-author text-gray-500">Dec 20, 2024</p>
            </div>
          </div>
        </section>
      </a>
      <a href="blog_detail.php" class="block transition-transform transform hover:scale-105">
        <section
          class="shadow-lg border-gray-200 border-2 bg-primaryTint p-2 rounded-lg"
        >
          <div class="grid grid-cols-1 md:grid-cols-3 gap-1">
            <img
              src="../../img/allen-rad-9G_oJBKwi1c-unsplash.jpg"
              alt="People sitting on chairs"
              class="w-full md:w-52 h-32 object-cover col-span-1 rounded-lg shadow-lg"
            />
            <div class="testimonial-box col-span-2">
              <blockquote
                class="text-lg mb-4 leading-relaxed text-gray-600 font-bold"
              >
                The World’s Most Delicious Burgers and Where to Find Them
              </blockquote>
              <p class="testimonial-author text-gray-500">Dec 20, 2024</p>
            </div>
          </div>
        </section>
      </a>
    </div>
      </div>
    </div>
    <?php include_once '../../../common/footer.php'; ?>
  </body>
</html>
