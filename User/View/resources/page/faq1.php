<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
  <?php require_once '../../common/header-before-login.php'; ?>

      <!-- Navigation Bar -->
      <?php require_once '../../common/nav.php'; ?>

<!-- FAQ -->
<section class="bg-gray-50 flex items-center justify-center mt-10">
    <div class="py-10 px-20 bg-white shadow-md rounded-lg">
        <div class="grid grid-cols-2 gap-8 mb-6 sm:grid-cols-3">
          <!-- Buttons -->
          <a class="text-center px-4 py-3 border-2 border-red-500 rounded-full text-red-500 font-semibold hover:bg-red-50 transition" href="faq2.html">
            General Questions
          </a>
          <a class="text-center px-4 py-3 border-2 border-yellow-500 rounded-full text-yellow-500 font-semibold hover:bg-yellow-50 transition">
            Account and Registration
          </a>
          <a class="text-center px-4 py-3 border-2 border-yellow-500 rounded-full text-yellow-500 font-semibold hover:bg-yellow-50 transition">
            Recipe-Specific Questions
          </a>
          <a class="text-center px-4 py-3 border-2 border-red-500 rounded-full text-red-500 font-semibold hover:bg-red-50 transition">
            Premium Plans
          </a>
          <a class="text-center px-4 py-3 border-2 border-yellow-500 rounded-full text-yellow-500 font-semibold hover:bg-yellow-50 transition">
            Community and Contributions
          </a>
          <a class="text-center px-4 py-3 border-2 border-yellow-500 rounded-full text-yellow-500 font-semibold hover:bg-yellow-50 transition">
            Miscellaneous
          </a>
        </div>
        <!-- Question submission -->
        <div class="text-center mt-10">
          <p class="text-blue-600 font-medium mb-3">Didn't find your question? Ask us!</p>
          <form action="">
            <div class="flex items-center justify-center gap-2">
                <input
                  type="text"
                  placeholder="Type your question"
                  class="border border-gray-300 rounded-lg px-3 py-2 w-full max-w-xs focus:outline-none focus:ring focus:ring-blue-300"
                />
                <button class="bg-red-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-600 transition">
                  Submit Your Question!
                </button>
              </div>
          </form>
          
        </div>
      </div>
</section>

    <!-- Footers -->
    <?php require_once '../../common/footer.php'; ?>
   
    <!-- FontAwesome for Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>