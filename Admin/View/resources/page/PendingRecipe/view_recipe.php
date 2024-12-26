<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Recipe</title>
    <link rel="stylesheet" href="../../../../../output.css">
    <link rel="stylesheet" href="../../css/root.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body class="font-sans bg-light-text h-screen">
    <div class="flex min-h-screen">
        <?php require_once '../../../common/sideMenu.php'; ?>
        <div class="flex-1 container p-4 bg-secondary border border-black">
            <h1 class="text-2xl font-bold mb-5">Pending Recipe</h1>
            <div class="flex justify-center">
            <div class="max-w-2xl bg-light-text shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4 text-center">Approval</h2>
                <div class="mb-4">
                    <h2 class="text-lg font-semibold">Recipe Title: <span class="font-normal">Pasta</span></h2>
                </div>
    <div class="mb-4">
      <p><strong>Number of Servings:</strong> 2</p>
    </div>
    <div class="mb-4">
      <p><strong>Categories:</strong> Dinner</p>
    </div>
    <div class="mb-4">
      <p><strong>Tags:</strong> Family Dinner</p>
    </div>
    <div class="mb-4">
      <p><strong>Cooking Time:</strong> 1 hr 30 mins</p>
    </div>
    <div class="mb-4">
      <p><strong>Ingredients:</strong> cake, mix flour, sugar, baking powder, salt, eggs, melted butter or oil, milk, and vanilla extract.</p>
    </div>
    <div class="mb-4">
      <p><strong>Directions:</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    <div class="mb-4">
      <p><strong>Photo:</strong></p>
      <img src="/yumrecipe/Admin/View/resources/images/prawn.jpg" alt="Prawn Photo" class="w-1/3 h-40 object-cover rounded-md mt-2">
    </div>
    <div class="flex justify-end space-x-2">
      <button class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Approve</button>
      <button class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Reject</button>
    </div>
  </div>
</div>
<div class="flex justify-end">
        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-gray-300" onclick="window.location.href='/yumrecipe/Admin/View/resources/page/Community/community.php'">Back to Community</button>
</div>
</body>

</html>