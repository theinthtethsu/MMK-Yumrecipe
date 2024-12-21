<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="px-20 py-1 bg-white shadow-md">
        <div class="container mx-auto flex items-center justify-between ">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="./resources/img/logo.png" alt="Logo" class="h-20 w-20">
            </div>
            <!-- Search Section -->
            <div class="flex-1 max-w-2xl mx-40">
                <div class="flex items-center bg-gray-100 rounded-full">
                    <!-- Categories Dropdown -->
                    <button class="flex items-center justify-center px-4 py-2 text-white bg-red-500 rounded-full w-1/2"> All Categories <svg
                            class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Search Input -->
                    <input type="text" placeholder="Search"
                        class="w-full  px-4 py-2 bg-gray-100 focus:outline-none text-sm opacity-50 border-gray-100">
                    <!-- Search Button -->
                    <button class="">
                        <svg class="mr-4 w-7 h-7 text-gray-500 bg-white rounded-full p-1" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Auth Buttons -->
            <div class="flex items-center space-x-4">
                <button class="px-5 py-2 text-white bg-red-500 rounded-full hover:bg-red-600 text-sm font-semibold">
                    Login
                </button>
                <button class="px-5 py-2 text-white bg-gray-900 rounded-full hover:bg-gray-800 text-sm font-semibold">
                    Sign Up </button>
            </div>
        </div>
    </header>

<!-- Image Slider -->
<section class="bg-gray-100 flex items-center justify-center mt-0 w-full ">
  <!-- Slider Container -->
  <div class="relative w-full h-[500px] max-w-8xl overflow-hidden">
    <!-- Slides -->
    <div class="flex transition-transform duration-700 ease-in-out" id="slider">
      <img src="./resources/img/lemonfish.jpg" class="w-full flex-shrink-0" alt="Slide 1">
      <img src="./resources/img/lemonfish.jpg" class="w-full flex-shrink-0" alt="Slide 2">
      <img src="./resources/img/lemonfish.jpg" class="w-full flex-shrink-0" alt="Slide 3">
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
<section class="flex items-center justify-center mt-9" >
    <nav class="w-full max-w-2xl  text-gray-700">
        <!-- Top Red Line -->
        <div class="h-0.5 bg-red-400 w-full"></div>
    
        <!-- Menu Items -->
        <ul class="flex justify-center space-x-10 py-4 font-semibold">
          <li>
            <a href="#" class="text-red-500 hover:text-red-600">Home</a>
          </li>
          <li>
            <a href="#" class="hover:text-red-600">Recipes</a>
          </li>
          <li>
            <a href="#" class="hover:text-red-600">Add Recipes</a>
          </li>
          <li>
            <a href="#" class="hover:text-red-600">Blogs</a>
          </li>
          <li>
            <a href="#" class="hover:text-red-600">About Us</a>
          </li>
        </ul>
    
        <!-- Bottom Red Line -->
        <div class="h-0.5 bg-red-400 w-full"></div>
      </nav>
</section>

<!-- Trending Recipes -->
<h1 class="text-3xl font-bold text-gray-600 font-family:'poppins',sans-serif text-center mb-10 mt-10">
    Trending Recipes
</h1>
<section class="px-20 flex items-center justify-between mb-10">
<!-- Recipe Card -->
<div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="./resources/img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
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
                <img src="./resources/img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="./resources/img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <!-- <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"> <path d="M8 9a3 3 0 116 0 3 3 0 01-6 0z" /> <path fill-rule="evenodd" d="M5 15a7 7 0 1110 0H5z" clip-rule="evenodd" /> </svg> -->
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
<!-- Recipe Card -->
<div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="./resources/img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
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
                <img src="./resources/img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="./resources/img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <!-- <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"> <path d="M8 9a3 3 0 116 0 3 3 0 01-6 0z" /> <path fill-rule="evenodd" d="M5 15a7 7 0 1110 0H5z" clip-rule="evenodd" /> </svg> -->
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
<!-- Recipe Card -->
<div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="./resources/img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
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
                <img src="./resources/img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="./resources/img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <!-- <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"> <path d="M8 9a3 3 0 116 0 3 3 0 01-6 0z" /> <path fill-rule="evenodd" d="M5 15a7 7 0 1110 0H5z" clip-rule="evenodd" /> </svg> -->
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
<!-- Recipe Card -->
<div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="./resources/img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
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
                <img src="./resources/img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="./resources/img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <!-- <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"> <path d="M8 9a3 3 0 116 0 3 3 0 01-6 0z" /> <path fill-rule="evenodd" d="M5 15a7 7 0 1110 0H5z" clip-rule="evenodd" /> </svg> -->
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
</section>
<section class="px-20 flex items-center justify-between">
    <!-- Recipe Card -->
    <div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer"> 
        <!-- Image Section -->
        <div class="relative"> 
            <img src="./resources/img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
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
                    <img src="./resources/img/clock.svg" alt="" class="w-5 h-5 mr-1">
                    <span>1 hour 23 min</span> </div>
                <div class="flex items-center"> 
                    <img src="./resources/img/comment.svg" alt=""
                        class="w-5 h-5 mr-1">
                    <!-- <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"> <path d="M8 9a3 3 0 116 0 3 3 0 01-6 0z" /> <path fill-rule="evenodd" d="M5 15a7 7 0 1110 0H5z" clip-rule="evenodd" /> </svg> -->
                    <span>23</span> 
                </div>
            </div>
        </div>
    </div>
    <!-- Recipe Card -->
    <div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer"> 
        <!-- Image Section -->
        <div class="relative"> 
            <img src="./resources/img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
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
                    <img src="./resources/img/clock.svg" alt="" class="w-5 h-5 mr-1">
                    <span>1 hour 23 min</span> </div>
                <div class="flex items-center"> 
                    <img src="./resources/img/comment.svg" alt=""
                        class="w-5 h-5 mr-1">
                    <!-- <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"> <path d="M8 9a3 3 0 116 0 3 3 0 01-6 0z" /> <path fill-rule="evenodd" d="M5 15a7 7 0 1110 0H5z" clip-rule="evenodd" /> </svg> -->
                    <span>23</span> 
                </div>
            </div>
        </div>
    </div>
    <!-- Recipe Card -->
    <div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer"> 
        <!-- Image Section -->
        <div class="relative"> 
            <img src="./resources/img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
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
                    <img src="./resources/img/clock.svg" alt="" class="w-5 h-5 mr-1">
                    <span>1 hour 23 min</span> </div>
                <div class="flex items-center"> 
                    <img src="./resources/img/comment.svg" alt=""
                        class="w-5 h-5 mr-1">
                    <!-- <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"> <path d="M8 9a3 3 0 116 0 3 3 0 01-6 0z" /> <path fill-rule="evenodd" d="M5 15a7 7 0 1110 0H5z" clip-rule="evenodd" /> </svg> -->
                    <span>23</span> 
                </div>
            </div>
        </div>
    </div>
    <!-- Recipe Card -->
    <div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer"> 
        <!-- Image Section -->
        <div class="relative"> 
            <img src="./resources/img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
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
                    <img src="./resources/img/clock.svg" alt="" class="w-5 h-5 mr-1">
                    <span>1 hour 23 min</span> </div>
                <div class="flex items-center"> 
                    <img src="./resources/img/comment.svg" alt=""
                        class="w-5 h-5 mr-1">
                    <!-- <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"> <path d="M8 9a3 3 0 116 0 3 3 0 01-6 0z" /> <path fill-rule="evenodd" d="M5 15a7 7 0 1110 0H5z" clip-rule="evenodd" /> </svg> -->
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
      <img src="./resources/img/rice.jpg" alt="Recipe Image" class="rounded-lg object-cover" class="h-[250px]">
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
        <img src="./resources/img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
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
                <img src="./resources/img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="./resources/img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <!-- <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"> <path d="M8 9a3 3 0 116 0 3 3 0 01-6 0z" /> <path fill-rule="evenodd" d="M5 15a7 7 0 1110 0H5z" clip-rule="evenodd" /> </svg> -->
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
<!-- Recipe Card -->
<div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="./resources/img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
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
                <img src="./resources/img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="./resources/img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <!-- <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"> <path d="M8 9a3 3 0 116 0 3 3 0 01-6 0z" /> <path fill-rule="evenodd" d="M5 15a7 7 0 1110 0H5z" clip-rule="evenodd" /> </svg> -->
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
<!-- Recipe Card -->
<div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="./resources/img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
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
                <img src="./resources/img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="./resources/img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <!-- <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"> <path d="M8 9a3 3 0 116 0 3 3 0 01-6 0z" /> <path fill-rule="evenodd" d="M5 15a7 7 0 1110 0H5z" clip-rule="evenodd" /> </svg> -->
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
<!-- Recipe Card -->
<div class="max-w-sm rounded-lg shadow-lg bg-white overflow-hidden"> 
    <!-- Image Section -->
    <div class="relative"> 
        <img src="./resources/img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-48 object-cover">
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
                <img src="./resources/img/clock.svg" alt="" class="w-5 h-5 mr-1">
                <span>1 hour 23 min</span> </div>
            <div class="flex items-center"> 
                <img src="./resources/img/comment.svg" alt=""
                    class="w-5 h-5 mr-1">
                <!-- <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"> <path d="M8 9a3 3 0 116 0 3 3 0 01-6 0z" /> <path fill-rule="evenodd" d="M5 15a7 7 0 1110 0H5z" clip-rule="evenodd" /> </svg> -->
                <span>23</span> 
            </div>
        </div>
    </div>
</div>
</section>

<!-- footer -->
<section class="bg-gray-900 text-white mt-14">
    <div class="max-w-7xl mx-auto p-8 flex flex-col md:flex-row gap-8">
        <!-- Left Section: Pages -->
        <div class="flex-1">
            <h2 class="text-3xl font-bold mb-6">Pages</h2>
            <ul class="space-y-4 text-lg">
                <li><a href="#" class="text-red-500">Home</a></li>
                <li><a href="#" class=" hover:text-red-500">Recipe</a></li>
                <li><a href="#" class="hover:text-red-500">Add Recipe</a></li>
                <li><a href="#" class="hover:text-red-500">Blogs</a></li>
                <li><a href="#" class="hover:text-red-500">About Us</a></li>
                <li><a href="#" class="hover:text-red-500">FAQ</a></li>
                <li><a href="#" class="hover:text-red-500">Privacy Policy</a></li>
            </ul>
        </div>
 
        <!-- Center Section: About Yum Recipe -->
        <div class="flex-1 text-center">
            <h2 class="text-3xl font-bold text-red-500 mb-4">Yum Recipe</h2>
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
 
        <!-- Right Section: Contact Form -->
        <div class="flex-1">
            <h2 class="text-3xl font-bold mb-6 text-center">How can I help you?</h2>
            <p class="text-gray-300 text-center mb-6">
                Please feel free to reach out to us using the contact below.
            </p>
            <form class="space-y-4">
                <input type="email" placeholder="Enter Your Email"
                    class="w-full px-4 py-2 rounded-md bg-gray-800 text-gray-200 focus:outline-none focus:ring-red-400" />
                <textarea placeholder="Enter Your Message" rows="3"
                    class="w-full px-4 py-2 rounded-md bg-gray-800 text-gray-200 focus:outline-none  focus:ring-red-400"></textarea>
                <div class="text-center">
                    <button type="submit"
                        class="bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-400">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>     
</section>

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