<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
        <!-- Pagination -->
  <div class="flex justify-center font-sans text-gray-800 mt-10 mb-36">
    <div class="flex items-center gap-2 sm:gap-3 flex-wrap justify-center">
    <button class="w-8 h-8 sm:w-10 sm:h-10 border border-red-500 rounded-full flex items-center justify-center hover:bg-red-500 group">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="w-5 h-5 sm:w-6 sm:h-6 stroke-red-500 group-hover:stroke-white"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M15 19l-7-7 7-7"
          />
        </svg>
      </button>
      <a
        href="#"
        class="w-8 h-8 sm:w-9 sm:h-9 text-xs sm:text-sm flex items-center justify-center rounded-full text-gray-800 hover:bg-red-500 hover:text-white"
      >
        1
      </a>
      <a
        href="#"
        class="w-8 h-8 sm:w-9 sm:h-9 text-xs sm:text-sm flex items-center justify-center rounded-full text-gray-800 hover:bg-red-500 hover:text-white"
      >
        2
      </a>
      <a
        href="#"
        class="w-8 h-8 sm:w-9 sm:h-9 text-xs sm:text-sm flex items-center justify-center rounded-full text-white bg-red-500"
      >
        3
      </a>
      <a
        href="#"
        class="w-8 h-8 sm:w-9 sm:h-9 text-xs sm:text-sm flex items-center justify-center rounded-full text-gray-800 hover:bg-red-500 hover:text-white"
      >
        4
      </a>
      <a
        href="#"
        class="w-8 h-8 sm:w-9 sm:h-9 text-xs sm:text-sm flex items-center justify-center rounded-full text-gray-800 hover:bg-red-500 hover:text-white"
      >
        5
      </a>
      <a
        href="#"
        class="w-8 h-8 sm:w-9 sm:h-9 text-xs sm:text-sm flex items-center justify-center rounded-full text-gray-800 hover:bg-red-500 hover:text-white"
      >
        6
      </a>
      <span class="text-gray-500 text-xs sm:text-sm">...</span>
      <a
        href="#"
        class="w-8 h-8 sm:w-9 sm:h-9 text-xs sm:text-sm flex items-center justify-center rounded-full text-gray-800 hover:bg-red-500 hover:text-white"
      >
        23
      </a>
      <button class="w-8 h-8 sm:w-10 sm:h-10 border border-red-500 rounded-full flex items-center justify-center hover:bg-red-500 group">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="w-5 h-5 sm:w-6 sm:h-6 stroke-red-500 group-hover:stroke-white"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M9 5l7 7-7 7"
          />
        </svg>
      </button>
    </div>
  </div>
    
</body>
</html>