<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body>
<?php require_once '../../common/header-before-login.php'; ?>

<!-- Image Slider -->
<section class="bg-gray-100 flex items-center justify-center mt-0 w-full ">
  <!-- Slider Container -->
  <div class="relative w-full h-[500px] max-w-8xl overflow-hidden">
    <!-- Slides -->
    <div class="flex transition-transform duration-700 ease-in-out" id="slider">
      <img src="../img/lemonfish.jpg" class="w-full flex-shrink-0" alt="Slide 1">
      <img src="../img/lemonfish.jpg" class="w-full flex-shrink-0" alt="Slide 2">
      <img src="../img/lemonfish.jpg" class="w-full flex-shrink-0" alt="Slide 3">
    </div>

    <!-- Navigation Arrows -->
    <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white p-2 rounded-full hover:bg-gray-900">
      &#10094;
    </button>
    <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white p-2 rounded-full hover:bg-gray-900">
      &#10095;
    </button>

    <!-- Card Container -->
  <div class="absolute top-24 left-48  rounded-xl p-6 max-w-lg shadow-lg text-center">
    <!-- Heading -->
    <h1 class="text-5xl font-bold text-gray-800 font-family:'poppins',sans-serif">
      Cook, Share, <span class="text-red-600">Enjoy</span>
    </h1>
    <!-- Description -->
    <p class="text-gray-500 mt-3 text-sm">
        "Discover the joy of cooking and sharing delicious meals with your loved ones. Explore a world of mouthwatering recipes, each crafted to bring flavor and happiness to your table."
    </p>
    <!-- Button -->
    <div class="mt-6">
      <a href="#" class="inline-block px-6 py-3 bg-red-500 text-white font-medium rounded-full shadow-md hover:bg-red-600 transition duration-300">
        All Recipes →
      </a>
    </div>
    <!-- Bottom Accent -->
    <div class="absolute bottom-0 left-0 w-full h-1 bg-red-500 rounded-bl-lg rounded-br-lg"></div>
  </div>

    <!-- Indicators -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
      <span class="indicator w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></span>
      <span class="indicator w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></span>
      <span class="indicator w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></span>
    </div>
  </div>
</section>

  <!-- Navigation Bar -->
  <?php require_once '../../common/nav.php'; ?>

<!-- Trending Recipes -->
<h1 class="text-3xl font-bold text-gray-600 font-family:'poppins',sans-serif text-center mb-10 mt-10">
    Trending Recipes
</h1>
<section class="px-20 flex items-center justify-between mb-10">
<!-- Recipe Card -->
<div class="w-[288px] h-[340px] rounded-lg shadow-lg bg-white overflow-hidden"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="<?php echo $images_path ?>lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
        <div class="absolute top-2 right-2"> 
            <!-- Bookmark Icon -->
            <div class="bg-yellow-300 rounded-full p-2"> 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                </svg> 
            </div>
        </div>
    </div> <!-- Content Section -->
    <div class="p-4">
        <h2 class="font-bold text-xl text-gray-800">Lemon Butter Fish</h2>
        <p class="text-gray-500 text-sm mt-1">by Ricky</p> <!-- Rating -->
        <div class="flex items-center mt-2">
            <div class="flex text-yellow-300"> 
                <!-- Star Rating --> 
                 <svg class="w-5 h-5" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> </div>
        </div> 
        <!-- Meta Data -->
        <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
            <div class="flex items-center"> 
                <img src="<?php echo $images_path ?>clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="<?php echo $images_path ?>comment.svg" alt=""
                    class="w-5 h-5 mr-1">
               
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
<div class="w-[288px] h-[340px] rounded-lg shadow-lg bg-white overflow-hidden"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="<?php echo $images_path ?>lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
        <div class="absolute top-2 right-2"> 
            <!-- Bookmark Icon -->
            <div class="bg-yellow-300 rounded-full p-2"> 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                </svg> 
            </div>
        </div>
    </div> <!-- Content Section -->
    <div class="p-4">
        <h2 class="font-bold text-xl text-gray-800">Lemon Butter Fish</h2>
        <p class="text-gray-500 text-sm mt-1">by Ricky</p> <!-- Rating -->
        <div class="flex items-center mt-2">
            <div class="flex text-yellow-300"> 
                <!-- Star Rating --> 
                 <svg class="w-5 h-5" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> </div>
        </div> 
        <!-- Meta Data -->
        <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
            <div class="flex items-center"> 
                <img src="<?php echo $images_path ?>clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="<?php echo $images_path ?>comment.svg" alt=""
                    class="w-5 h-5 mr-1">
               
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
<div class="w-[288px] h-[340px] rounded-lg shadow-lg bg-white overflow-hidden"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="<?php echo $images_path ?>lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
        <div class="absolute top-2 right-2"> 
            <!-- Bookmark Icon -->
            <div class="bg-yellow-300 rounded-full p-2"> 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                </svg> 
            </div>
        </div>
    </div> <!-- Content Section -->
    <div class="p-4">
        <h2 class="font-bold text-xl text-gray-800">Lemon Butter Fish</h2>
        <p class="text-gray-500 text-sm mt-1">by Ricky</p> <!-- Rating -->
        <div class="flex items-center mt-2">
            <div class="flex text-yellow-300"> 
                <!-- Star Rating --> 
                 <svg class="w-5 h-5" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> </div>
        </div> 
        <!-- Meta Data -->
        <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
            <div class="flex items-center"> 
                <img src="<?php echo $images_path ?>clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="<?php echo $images_path ?>comment.svg" alt=""
                    class="w-5 h-5 mr-1">
               
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
<div class="w-[288px] h-[340px] rounded-lg shadow-lg bg-white overflow-hidden"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="<?php echo $images_path ?>lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
        <div class="absolute top-2 right-2"> 
            <!-- Bookmark Icon -->
            <div class="bg-yellow-300 rounded-full p-2"> 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                </svg> 
            </div>
        </div>
    </div> <!-- Content Section -->
    <div class="p-4">
        <h2 class="font-bold text-xl text-gray-800">Lemon Butter Fish</h2>
        <p class="text-gray-500 text-sm mt-1">by Ricky</p> <!-- Rating -->
        <div class="flex items-center mt-2">
            <div class="flex text-yellow-300"> 
                <!-- Star Rating --> 
                 <svg class="w-5 h-5" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> </div>
        </div> 
        <!-- Meta Data -->
        <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
            <div class="flex items-center"> 
                <img src="<?php echo $images_path ?>clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="<?php echo $images_path ?>comment.svg" alt=""
                    class="w-5 h-5 mr-1">
               
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
</section>

<section class="px-20 flex items-center justify-between">
    <!-- Recipe Card -->
<?php require_once '../../common/card.php'; ?>

<!-- Recipe Card -->
<div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="../img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
        <div class="absolute top-2 right-2"> <!-- Bookmark Icon -->
            <div class="bg-yellow-300 rounded-full p-2"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                </svg> </div>
        </div>
    </div> <!-- Content Section -->
    <div class="p-4">
        <h2 class="font-bold text-xl text-gray-800">Lemon Butter Fish</h2>
        <p class="text-gray-500 text-sm mt-1">by Ricky</p> <!-- Rating -->
        <div class="flex items-center mt-2">
            <div class="flex text-yellow-300"> 
                <!-- Star Rating --> 
                 <svg class="w-5 h-5" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> </div>
        </div> 
        <!-- Meta Data -->
        <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
            <div class="flex items-center"> 
                <img src="../img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="../img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
<!-- Recipe Card -->
<div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="../img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
        <div class="absolute top-2 right-2"> <!-- Bookmark Icon -->
            <div class="bg-yellow-300 rounded-full p-2"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                </svg> </div>
        </div>
    </div> <!-- Content Section -->
    <div class="p-4">
        <h2 class="font-bold text-xl text-gray-800">Lemon Butter Fish</h2>
        <p class="text-gray-500 text-sm mt-1">by Ricky</p> <!-- Rating -->
        <div class="flex items-center mt-2">
            <div class="flex text-yellow-300"> 
                <!-- Star Rating --> 
                 <svg class="w-5 h-5" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> </div>
        </div> 
        <!-- Meta Data -->
        <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
            <div class="flex items-center"> 
                <img src="../img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="../img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
<!-- Recipe Card -->
<div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="../img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
        <div class="absolute top-2 right-2"> <!-- Bookmark Icon -->
            <div class="bg-yellow-300 rounded-full p-2"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                </svg> </div>
        </div>
    </div> <!-- Content Section -->
    <div class="p-4">
        <h2 class="font-bold text-xl text-gray-800">Lemon Butter Fish</h2>
        <p class="text-gray-500 text-sm mt-1">by Ricky</p> <!-- Rating -->
        <div class="flex items-center mt-2">
            <div class="flex text-yellow-300"> 
                <!-- Star Rating --> 
                 <svg class="w-5 h-5" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> </div>
        </div> 
        <!-- Meta Data -->
        <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
            <div class="flex items-center"> 
                <img src="../img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="../img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <span>23</span> 
            </div>
        </div>
    </div>
</div>

</section>

    <div class="flex items-center justify-end mt-11 px-20 mb-10">
        <!-- Centered Button -->
        <a href="#" class="px-6 py-3 bg-red-500 text-white font-medium rounded-full shadow-md hover:bg-red-600 transition duration-300">
          View All Recipes
        </a>      
      </div>

<!-- Share Recipes -->
<section class="flex items-center justify-center bg-gray-100 py-10 px-20">
  <!-- Card Container -->
  <div class="h-[300px] bg-white rounded-xl shadow-lg p-6 max-w-5xl flex items-center space-x-6 ">
    <!-- Left Section: Image -->
    <div class="w-1/2">
      <img src="../img/rice.jpg" alt="Recipe Image" class="rounded-lg object-cover" class="h-[250px]">
    </div>   
    <!-- Right Section: Content -->
    <div class="w-1/2 space-y-4 ml-12">
      <!-- Heading -->
      <h2 class="text-3xl font-semibold text-gray-800">
        Share Your <span class="text-red-500 font-bold text-4xl italic">Recipes</span>
      </h2>     
      <!-- Description -->
      <p class="text-gray-500 text-sm">
        Share your favorite recipes with the world! From traditional dishes to creative twists, inspire others to cook, taste, and enjoy your culinary creations.
      </p>    
      <!-- Button -->
      <a href="#" class="inline-block px-6 py-3 bg-red-500 text-white font-medium rounded-full shadow-md hover:bg-red-600 transition duration-300 animate-bounce">
        Add Recipe
      </a>
    </div>
  </div>
</section>


<!-- Popular Recipes -->
<h1 class="text-3xl font-bold text-gray-600 font-family:'poppins',sans-serif text-center mb-10 mt-10">
    Popular Recipes
</h1>
<section class="px-20 flex items-center justify-between mb-10">
<!-- Recipe Card -->
<div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="../img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
        <div class="absolute top-2 right-2"> <!-- Bookmark Icon -->
            <div class="bg-yellow-300 rounded-full p-2"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                </svg> </div>
        </div>
    </div> <!-- Content Section -->
    <div class="p-4">
        <h2 class="font-bold text-xl text-gray-800">Lemon Butter Fish</h2>
        <p class="text-gray-500 text-sm mt-1">by Ricky</p> <!-- Rating -->
        <div class="flex items-center mt-2">
            <div class="flex text-yellow-300"> 
                <!-- Star Rating --> 
                 <svg class="w-5 h-5" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> </div>
        </div> 
        <!-- Meta Data -->
        <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
            <div class="flex items-center"> 
                <img src="../img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="../img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
<!-- Recipe Card -->
<div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="../img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
        <div class="absolute top-2 right-2"> 
            <!-- Bookmark Icon -->
            <div class="bg-yellow-300 rounded-full p-2"> 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                </svg> 
            </div>
        </div>
    </div> <!-- Content Section -->
    <div class="p-4">
        <h2 class="font-bold text-xl text-gray-800">Lemon Butter Fish</h2>
        <p class="text-gray-500 text-sm mt-1">by Ricky</p> <!-- Rating -->
        <div class="flex items-center mt-2">
            <div class="flex text-yellow-300"> 
                <!-- Star Rating --> 
                 <svg class="w-5 h-5" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> </div>
        </div> 
        <!-- Meta Data -->
        <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
            <div class="flex items-center"> 
                <img src="../img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="../img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
<!-- Recipe Card -->
<div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="../img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
        <div class="absolute top-2 right-2"> <!-- Bookmark Icon -->
            <div class="bg-yellow-300 rounded-full p-2"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                </svg> </div>
        </div>
    </div>
    <!-- Content Section -->
    <div class="p-4">
        <h2 class="font-bold text-xl text-gray-800">Lemon Butter Fish</h2>
        <p class="text-gray-500 text-sm mt-1">by Ricky</p> 
        <!-- Rating -->
        <div class="flex items-center mt-2">
            <div class="flex text-yellow-300"> 
                <!-- Star Rating --> 
                 <svg class="w-5 h-5" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> </div>
        </div> 
        <!-- Meta Data -->
        <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
            <div class="flex items-center"> 
                <img src="../img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="../img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
<!-- Recipe Card -->
<div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="../img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
        <div class="absolute top-2 right-2"> <!-- Bookmark Icon -->
            <div class="bg-yellow-300 rounded-full p-2"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v18l7-5 7 5V3z" />
                </svg> </div>
        </div>
    </div> <!-- Content Section -->
    <div class="p-4">
        <h2 class="font-bold text-xl text-gray-800">Lemon Butter Fish</h2>
        <p class="text-gray-500 text-sm mt-1">by Ricky</p> 
        <!-- Rating -->
        <div class="flex items-center mt-2">
            <div class="flex text-yellow-300"> 
                <!-- Star Rating --> 
                 <svg class="w-5 h-5" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.357 2.44a1 1 0 00-.364 1.118l1.286 3.947c.3.922-.755 1.688-1.54 1.118l-3.357-2.44a1 1 0 00-1.175 0l-3.357 2.44c-.784.57-1.838-.196-1.54-1.118l1.286-3.947a1 1 0 00-.364-1.118L2.075 9.374c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.947z" />
                </svg> </div>
        </div> 
        <!-- Meta Data -->
        <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
            <div class="flex items-center"> 
                <img src="../img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="../img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
</section>

<!-- footer -->
<?php require_once '../../common/footer.php'; ?>

<!-- FontAwesome for Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <script>
    // Slider Logic
    const slider = document.getElementById('slider');
    const slides = slider.children;
    const indicators = document.querySelectorAll('.indicator');
    let index = 0;

    // Navigation Buttons
    document.getElementById('prev').addEventListener('click', () => moveSlide(-1));
    document.getElementById('next').addEventListener('click', () => moveSlide(1));

    function moveSlide(direction) {
      index = (index + direction + slides.length) % slides.length;
      updateSlider();
    }

    function updateSlider() {
      slider.style.transform = `translateX(-${index * 100}%)`;
      indicators.forEach((dot, i) => {
        dot.classList.toggle('bg-gray-800', i === index);
        dot.classList.toggle('bg-gray-300', i !== index);
      });
    }

    // Auto Slide
    setInterval(() => moveSlide(1), 5000); // Change every 5 seconds
    updateSlider();

    // Indicators Click
    indicators.forEach((dot, i) => {
      dot.addEventListener('click', () => {
        index = i;
        updateSlider();
      });
    });
  </script>
</body>
</html>