<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yum Recipe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

</head>
<body class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto p-8 flex  bg-gray-900 text-white flex-col md:flex-row gap-8">
        <!-- Left Section: Pages -->
        <div class="flex-1 bg-gray-900 text-white" >
            <h2 class="text-3xl font-bold mb-6">Pages</h2>
            <ul class="space-y-4 text-lg">
                <li><a href="#" class="hover:text-red-400">Home</a></li>
                <li><a href="#" class="text-red-400">Recipe</a></li>
                <li><a href="#" class="hover:text-red-400">Add Recipe</a></li>
                <li><a href="#" class="hover:text-red-400">Blogs</a></li>
                <li><a href="#" class="hover:text-red-400">About Us</a></li>
                <li><a href="#" class="hover:text-red-400">FAQ</a></li>
                <li><a href="#" class="hover:text-red-400">Privacy Policy</a></li>
            </ul>
        </div>

        <!-- Center Section: About Yum Recipe -->
        <div class="flex-1 text-center">
            <h2 class="text-3xl font-bold text-red-400 mb-4">Yum Recipe</h2>
            <p class="text-gray-300 mb-6 leading-relaxed">
                I am always sharing fresh, flavorful, and healthy recipes<br />
                that I love to make and eat in my real life.
            </p>
            <!-- Social Media Icons -->
            <div class="flex justify-center gap-6">
    <a href="#" class="text-red-400 text-2xl" aria-label="YouTube">
        <i class="fab fa-youtube"></i>
    </a>
    <a href="#" class="text-red-400 text-2xl" aria-label="Instagram">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="#" class="text-red-400 text-2xl" aria-label="Twitter">
        <i class="fab fa-twitter"></i>
    </a>
    <a href="#" class="text-red-400 text-2xl" aria-label="Facebook">
        <i class="fab fa-facebook"></i>
    </a>
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
                    class="w-full px-4 py-2 rounded-full bg-gray-800 text-gray-200 focus:outline-none focus:ring-2 focus:ring-red-400" />
                <textarea placeholder="Enter Your Message"  
                    class="w-full px-4 py-2 rounded-full bg-gray-800 text-gray-200 focus:outline-none focus:ring-2 focus:ring-red-400"></textarea>
                <div class="text-center">
                    <button type="submit" 
                        class="bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-400">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- FontAwesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
