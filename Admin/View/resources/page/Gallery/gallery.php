<?php
//Image Path
$images_path = "/yumrecipe/Admin/View/resources/images/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
</head>

<body class="font-sans bg-light-text">
    <div class="flex min-h-screen">
        <!-- Side Menu -->
        <?php require_once '../../../common/sideMenu.php'; ?>
        <!-- Content -->
        <div class="flex-1 container p-4 bg-secondary overflow-y-auto" style="max-height: calc(100vh - 0px);">
            <h1 class="text-2xl font-bold mb-4">Gallery</h1>
            <div class="flex justify-end items-center mb-4 gap-2">
                <input type="text" id="search" class="w-50 p-2 border border-gray-300 rounded-md mb-4" placeholder="Search">
                <button class="bg-accent hover:bg-accent2 text-white px-4 py-2 rounded-md mb-4">Search</button>
            </div>
            <!-- Grid Gallery -->
            <div class="grid grid-cols-5 gap-4">
                <!-- Repeat this block for each image -->
                <?php
                $images = [
                    ["name" => "slide1", "file name" => "slide1.png", "title" => "Slide 1", "location" => "Home Slide", "resolution" => "1920x1080"],
                    ["name" => "lemonbutterfish", "file name" => "lemonbutterfish.png", "title" => "Lemon Butter Fish", "location" => "Recipe", "resolution" => "1920x1080"],
                    ["name" => "spicytofuu", "file name" => "spicytofuu.png", "title" => "Spicy Tofuu", "location" => "Recipe", "resolution" => "1920x1080"],
                    ["name" => "logscreen", "file name" => "logscreen.png", "title" => "Log Screen", "location" => "Sign In", "resolution" => "1920x1080"],
                    ["name" => "rice", "file name" => "rice.png", "title" => "Rice", "location" => "Share Your Recipe", "resolution" => "1920x1080"],
                    ["name" => "chocolatecake", "file name" => "chocolatecake.png", "title" => "Chocolate Cake", "location" => "Recipe", "resolution" => "1920x1080"],
                    ["name" => "chickensalad", "file name" => "chickensalad.png", "title" => "Chicken Salad", "location" => "Recipe", "resolution" => "1920x1080"],
                    ["name" => "spaghetti", "file name" => "spaghetti.png", "title" => "Spaghetti", "location" => "Recipe", "resolution" => "1920x1080"],
                    ["name" => "italiansalad", "file name" => "italiansalad.png", "title" => "Italian Salad", "location" => "Recipe", "resolution" => "1920x1080"],
                    ["name" => "burger", "file name" => "burger.png", "title" => "Burger", "location" => "Blog", "resolution" => "1920x1080"],
                    ["name" => "icecream", "file name" => "icecream.png", "title" => "Ice Cream", "location" => "Blog", "resolution" => "1920x1080"],
                    ["name" => "steak", "file name" => "steak.png", "title" => "Steak", "location" => "Recipe", "resolution" => "1920x1080"],
                    ["name" => "privacypolicy", "file name" => "privacypolicy.png", "title" => "Privacy Policy", "location" => "Privacy Policy", "resolution" => "1920x1080"],
                    ["name" => "popularcategory", "file name" => "popularcategory.png", "title" => "Popular Category", "location" => "Recipe", "resolution" => "1920x1080"],
                    ["name" => "hotspinachartichokedip", "file name" => "hotspinachartichokedip.png", "title" => "Hot Spinach Artichoke Dip", "location" => "Recipe", "resolution" => "1920x1080"],
                ];
                ?>
                <?php foreach ($images as $image) { ?>
                    <div class="relative bg-white p-2 rounded shadow-md">
                        <button class="absolute top-2 right-2 bg-accent hover:bg-accent2 text-white text-sm px-2 py-1 rounded hover:bg-gray-600">
                            Edit
                        </button>
                        <img src="<?php echo $images_path; ?><?php echo $image['file name']; ?>" alt="Gallery Image" class="w-full h-24 object-contain rounded">
                        <p class="text-center text-dark-text"><?php echo $image['title']; ?> (<?php echo $image['location']; ?>)</p>
                        <p class="text-center text-dark-text"><?php echo $image['resolution']; ?></p>

                    </div>
                <?php } ?>
            </div>

            <!-- View More Link -->
            <div class="mt-6 text-center">
                <a href="#" class="text-blue-500 hover:underline">View More</a>
            </div>
        </div>
    </div>
</body>

</html>