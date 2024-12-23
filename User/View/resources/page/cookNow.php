<?php 
$images_path = "/yumrecipe/User/View/resources/images/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scallion Pancake Recipe</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white font-sans">
<?php include($_SERVER['DOCUMENT_ROOT'] . '/yumrecipe/User/View/common/header-after-login.php'); ?>
  <!-- Main Container -->
  <div class=" mx-auto p-4">
    <!-- Header Section -->
    <div class="bg-red-500 text-white p-6  rounded-t-lg w-full">
      <div class="flex flex-col md:flex-row items-center gap-4">
        <img src="<?php echo $images_path ?>shredded-beef-tacos-recipe.jpg" alt="cheese-cake" class="w-36 h-28">
        <div>
          <h1 class="text-2xl font-bold">Beef Tacos</h1>
          <p class="text-sm">A frozen scallion pancake, loaded with eggs, spinach, avocado, and chili crisp! A five-minute meal perfect for breakfast, lunch, or dinner!</p>
        </div>
      </div>
    </div>

    <!-- Video Section -->
     <div class="flex  flex-col md:flex-row justify-between gap-6 mt-6">
     <div class="bg-white shadow-md rounded-lg overflow-hidden mt-4 w-1/2">
      <h2 class="text-lg font-bold p-4">Watch How To Make These Beef Tacos</h2>
      <div class="relative">
        <img src="<?php echo $images_path ?>shredded-beef-tacos-recipe.jpg" alt="cheese-cake" class="w-full h-96"">
        <button class="absolute inset-0 flex items-center justify-center">
          <div class="w-16 h-16 bg-red-500 text-white rounded-full flex items-center justify-center text-2xl font-bold">
            ▶
          </div>
        </button>
      </div>
    </div>
    <div class="bg-gray-100 shadow-md rounded-lg p-4 mt-12 w-1/5 h-60 mr-10">
      <h2 class="text-lg font-bold text-center text-red-500 mb-4">Ingredient</h2>
      <ul class="list-disc pl-5 space-y-2">
        <li class="text-sm">1/2 scallion pancake</li>
        <li class="text-sm">a spritz of avocado oil, or a small pat of butter</li>
        <li class="text-sm">1/2–1 eggs</li>
        <li class="text-sm">salt and pepper</li>
        <li class="text-sm">chili crisp to taste</li>
      </ul>
    </div>
     </div>
    

    <!-- Instructions Section -->
    <div class="bg-white shadow-md rounded-lg p-4 mt-4">
      <h2 class="text-lg font-bold mb-4">How To Make This Recipe</h2>
      <ul class="space-y-4">
        <li class="flex items-start">
          <input type="checkbox" class="mt-1 h-5 w-5 border-red-500 rounded checked:bg-red-500 checked:border-red-500 focus:ring-red-500">
          <label class="ml-4">
            <span class="font-bold text-red-500">Fry Up Your Scallion Pancake.</span><br>
            <span class="text-sm">The ones from Trader Joe's come frozen and individually wrapped. Toast or fry on both sides till nice and golden and yummy! It's flaky, chewy, very carb-forward in the best way.</span>
          </label>
        </li>
        <li class="flex items-start">
          <input type="checkbox" class="mt-1 h-5 w-5 text-red-500 rounded">
          <label class="ml-4">
            <span class="font-bold text-red-500">Fry Some Eggs.</span><br>
            <span class="text-sm">In the same pan, throw a couple eggs in there. Scallion pancake is coming on top in three, two...</span>
          </label>
        </li>
        <li class="flex items-start">
          <input type="checkbox" class="mt-1 h-5 w-5 border-red-500 rounded">
          <label class="ml-4">
            <span class="font-bold text-red-500">Squish that Pancake on Top.</span><br>
            <span class="text-sm">Scallion pancake goes on top, pressing it down gently to break the yolks and adhere to the eggs as they finish cooking.</span>
          </label>
        </li>
        <li class="flex items-start">
          <input type="checkbox" class="mt-1 h-5 w-5 text-red-500 rounded">
          <label class="ml-4">
            <span class="font-bold text-red-500">Finish with Toppings of Choice.</span><br>
            <span class="text-sm">For me, avocado and chili crisp. But I also like this with a slice or two of American cheese. Roll it up and go! Yum!</span>
          </label>
        </li>
      </ul>
    </div>

    <!-- Ingredient Section -->
    

    <!-- Back Button -->
    <div class="mt-6 text-center">
      <button class="bg-red-500 text-white py-2 px-6 rounded-full text-lg font-semibold hover:bg-red-600 transition">Back</button>
    </div>
  </div>
  <div class="bg-gray-900">
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/yumrecipe/User/View/common/footer.php'); ?>
  </div>
  
</body>
</html>
