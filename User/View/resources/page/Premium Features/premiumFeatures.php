<?php
$commonPath = '/yumrecipe/User/View/common/';
?>

<!DOCTYPE html>
<html lang="en" class="font-roboto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Features</title>
    <link rel="stylesheet" href="../../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!--cdn fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body class=" h-screen">
    <img src="../../img/logo.png" alt="Logo" class="m-auto" style="width: 150px; height: 150px;">
    <section class="flex flex-col items-center border w-full text-black bg-[#fbecea] border-gray-200 shadow md:flex-row md:w-full h-[340px]">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Premium features made easy</h5>
            <p class="mb-3 font-normal text-gray-700">Add recipes unlimited, instantly create shopping lists, scheduled
                meals, access to live cooking, save your recipes in organize, and read our blogs.</p>
            <button class="bg-userPrimary hover:bg-userSecondary text-white font-bold py-2 px-4 rounded w-48 transition-transform duration-300 hover:translate-x-2" onclick="window.scrollTo({ top: document.getElementById('premium-card-container').offsetTop, behavior: 'smooth' });">Start Planning &nbsp; <i class="fa-solid fa-arrow-right ml-2  hover:text-yellow-500"></i></button>
        </div>
        <img src="../../img/lemonfish.jpg" alt="Lemon Butter Fish" class="w-full h-[340px] object-cover">
    </section>
    <!--premium features container-->
    <div class="grid grid-rows-2 gap-4 justify-center mt-10">
        <div class="grid grid-cols-3 gap-40 ">
            <!--circle and text container wrapper row 1-->
            <div class="flex flex-col justify-center items-center">
                <!--circle container with yellow background-->
                <div class="flex justify-center items-center bg-yellow-500 rounded-full w-24 h-24 hover:bg-yellow-600">
                    <img src="../../img/cup.svg" alt="Video" class="" style="width: 70%; height: 70%;">
                </div>
                <!--text container-->
                <div class="flex flex-col justify-center items-center mt-2">
                    <p class="text-center text-black text-sm inline-block w-32">Add recipes  up to 5,15 or even unlimited a month</p>
                </div>
            </div>
            <!--circle and text container wrapper row 1-->
            <div class="flex flex-col justify-center items-center">
                <!--circle container with yellow background-->
                <div class="flex justify-center items-center bg-yellow-500 rounded-full w-20 h-20 hover:bg-yellow-600">
                    <img src="../../img/Video.svg" alt="Video" class="" style="width: 70%; height: 70%;">
                </div>
                <!--text container-->
                <div class="flex flex-col justify-center items-center mt-2">
                    <p class="text-center text-black text-sm inline-block w-32">Access to watch videos and cook along with us
                    </p>
                </div>
            </div>
            <!--circle and text container wrapper row 1-->
            <div class="flex flex-col justify-center items-center">
                <!--circle container with yellow background-->
                <div class="flex justify-center items-center bg-yellow-500 rounded-full w-20 h-20 hover:bg-yellow-600">
                    <img src="../../img/ChefHat.svg" alt="Video" class="" style="width: 70%; height: 70%;">
                </div>
                <!--text container-->
                <div class="flex flex-col justify-center items-center mt-2">
                    <p class="text-center text-black text-sm inline-block w-32">Add recipes  up to 5,15 or even unlimited a month
                    </p>
                </div>
            </div>
            
        </div>
        <div class="grid grid-cols-2 gap-40 mt-10">
            <!--circle and text container wrapper row 2-->
            <div class="flex flex-col justify-center items-center">
                <!--circle container with yellow background-->
                <div class="flex justify-center items-center bg-yellow-500 rounded-full w-20 h-20 hover:bg-yellow-600">
                    <img src="../../img/Video.svg" alt="Video" class="" style="width: 70%; height: 70%;">
                </div>
                <!--text container-->
                <div class="flex flex-col justify-center items-center mt-2">
                    <p class="text-center text-black text-sm inline-block w-32">Access to watch videos and cook along with us
                    </p>
                </div>
            </div>
            <!--circle and text container wrapper row 2-->
            <div class="flex flex-col justify-center items-center">
                <!--circle container with yellow background-->
                <div class="flex justify-center items-center bg-yellow-500 rounded-full w-20 h-20 hover:bg-yellow-600">
                    <img src="../../img/cup.svg" alt="cup" class="" style="width: 70%; height: 70%;">
                </div>
                <!--text container-->
                <div class="flex flex-col justify-center items-center mt-2">
                    <p class="text-center text-black text-sm inline-block w-32">Add recipes  up to 5,15 or even unlimited a month</p>
                </div>
            </div>
        </div>
        
    </div>
    <hr class="w-full h-px my-8 bg-gray-200 border-0 rounded">
    <!--title--> 
    <h1 class="text-2xl font-bold text-center mt-8 text-gray-800">Choose your plan</h1>
    <!--premium card container-->
    <div id="premium-card-container" class="flex justify-center items-center">
        <?php require_once '../../../common/plans.php'; ?>
    </div>
</body>

</html>