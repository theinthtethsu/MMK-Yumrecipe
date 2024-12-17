<?php

$icons_path = '../resources/icons/';
$images_path = '../resources/images/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Header</title>
    <link rel="stylesheet" href="../resources/css/root.css">
    <link rel="stylesheet" href="../../../output.css">
</head>

<body>

    <div class="w-64 bg-primary text-white flex flex-col justify-center items-center">
        <!-- Logo -->
        <div class="p-4">
            <img src="<?php echo $images_path; ?>logo.svg" alt="Logo" class="mb-4" />
        </div>
        <!-- Menu -->
        <nav class="w-full flex flex-col items-center">
            <div class="space-y-2 w-full text-center">
                <div class="w-full text-left">
                    <a href="#dashboard" class="block w-full p-2  hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>Frame.svg" alt="Dashboard Icon" class="inline ml-10"> Dashboard
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="#Profile" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>UserSquare.svg" alt="Profile Icon" class="inline ml-10"> Profile
                    </a>
                </div>
                <div class="w-full text-left ">
                    <a href="userActivities.php" class="block w-full p-2 hover:bg-secondary <?php echo basename($_SERVER['PHP_SELF']) == 'userActivities.php' ? 'bg-accent' : '' ?>">
                        <img src="<?php echo $icons_path; ?>Pulse.svg" alt="User Activities Icon" class="inline ml-10"> User Activities
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="userManagement.php" class="block w-full p-2 hover:bg-secondary <?php echo basename($_SERVER['PHP_SELF']) == 'userManagement.php' ? 'bg-accent' : '' ?>">
                        <img src="<?php echo $icons_path; ?>UsersFour.svg" alt="User Management Icon" class="inline ml-10"> User Management
                    </a>
                </div>
                <div class="w-full text-left">
                        <a href="#recipe-management" class="block w-full p-2 hover:bg-secondary">
                        <img src="<?php echo $icons_path; ?>CookingPot.svg" alt="Recipe Management Icon" class="inline ml-10"> Recipe Management
                    </a>
                </div>
                <div class="w-full text-left">
                        <a href="#pending-recipes" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>Notification.svg" alt="Pending Recipes Icon" class="inline ml-10"> Pending Recipes
                    </a>
                </div>
                <div class="w-full text-left">
                        <a href="#community" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>Globe.svg" alt="Community Icon" class="inline ml-10"> Community
                    </a>
                </div>
                <div class="w-full text-left">
                                <a href="#push-notifications" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>Megaphone.svg" alt="Push Notifications Icon" class="inline ml-10"> Push Notifications
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="#contents" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>PenNib.svg" alt="Contents Icon" class="inline ml-10"> Contents
                    </a>
                </div>
                <div class="w-full text-left">
                        <a href="#subscription" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>SketchLogo.svg" alt="Subscription Icon" class="inline ml-10"> Subscription
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="#payment" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>PayPalLogo.svg" alt="Payment Icon" class="inline ml-10"> Payment
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="#financial" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>CurrencyCircleDollar.svg" alt="Financial Icon" class="inline ml-10"> Financial
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="#gallery" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>Image.svg" alt="Gallery Icon" class="inline ml-10"> Gallery
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="#settings" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>Gear.svg" alt="Settings Icon" class="inline ml-10"> Settings
                    </a>
                </div>
            </div>
        </nav>
    </div>

</body>

</html>