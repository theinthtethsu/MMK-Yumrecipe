<?php
//Page Path
$user_path = "/yumrecipe/Admin/View/resources/page/User/";
$setting_path = "/yumrecipe/Admin/View/resources/page/Setting/";
$payment_path = "/yumrecipe/Admin/View/resources/page/Payment/";
$pendingrecipe_path = "/yumrecipe/Admin/View/resources/page/PendingRecipe/";
$gallery_path = "/yumrecipe/Admin/View/resources/page/Gallery/";
$admin_path = "/yumrecipe/Admin/View/resources/page/Admin/";

//Images Path
$icons_path = "/yumrecipe/Admin/View/resources/icons/";
$images_path = "/yumrecipe/Admin/View/resources/images/";
$paymentlogo_path = "/yumrecipe/Admin/View/resources/images/PaymentLogo/";
?>

<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Header</title>
    <link rel="stylesheet" href="../resources/css/root.css">
    <link rel="stylesheet" href="../../../output.css">
</head>

<body class="">

    <div class="w-64 bg-primary text-white flex flex-col justify-center items-center">
        <!-- Logo -->
        <div class="p-1 ">
            <img src="<?php echo $images_path ?>logo.svg" alt="Logo" class="mt-2" style="width: 100px; height: 100px;" />
        </div>
        <!-- Menu -->
        <nav class="w-full flex flex-col items-center">
            <div class="space-y-0 w-full text-center">
                <div class="w-full text-left">
                    <a href="<?php echo $admin_path; ?>adminDashboard.php" class="block w-full p-2  hover:bg-secondary active:bg-accent <?php echo basename($_SERVER['PHP_SELF']) == 'adminDashboard.php' ? 'bg-accent' : '' ?>">
                        <img src="<?php echo $icons_path ?>Frame.svg" alt="Dashboard Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Dashboard
                    </a>
                </div>
                <div class="w-full text-left ">
                    <a href="<?php echo $user_path; ?>userActivities.php" class="block w-full p-2 hover:bg-secondary <?php echo basename($_SERVER['PHP_SELF']) == 'userActivities.php' ? 'bg-accent' : '' ?>">
                        <img src="<?php echo $icons_path; ?>Pulse.svg" alt="User Activities Icon" class="inline ml-10" style="width: 20px; height: 20px;"> User Activities
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="<?php echo $user_path; ?>userManagement.php" class="block w-full p-2 hover:bg-secondary <?php echo basename($_SERVER['PHP_SELF']) == 'userManagement.php' ? 'bg-accent' : '' ?>">
                        <img src="<?php echo $icons_path; ?>UsersFour.svg" alt="User Management Icon" class="inline ml-10" style="width: 20px; height: 20px;"> User Management
                    </a>
                </div>
                <div class="w-full text-left">
                        <a href="#recipe-management" class="block w-full p-2 hover:bg-secondary">
                        <img src="<?php echo $icons_path; ?>CookingPot.svg" alt="Recipe Management Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Recipe Management
                    </a>
                </div>
                <div class="w-full text-left">
                        <a href="<?php echo $pendingrecipe_path; ?>pendingrecipe.php" class="block w-full p-2 hover:bg-secondary <?php echo basename($_SERVER['PHP_SELF']) == 'pendingrecipe.php' ? 'bg-accent' : '' ?>">
                        <img src="<?php echo $icons_path; ?>Notification.svg" alt="Pending Recipes Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Pending Recipes
                    </a>
                </div>
                <div class="w-full text-left">
                        <a href="#community" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>Globe.svg" alt="Community Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Community
                    </a>
                </div>
                <div class="w-full text-left">
                                <a href="#push-notifications" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>Megaphone.svg" alt="Push Notifications Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Push Notifications
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="#contents" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>PenNib.svg" alt="Contents Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Contents
                    </a>
                </div>
                <div class="w-full text-left">
                        <a href="#subscription" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>SketchLogo.svg" alt="Subscription Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Subscription
                    </a>
                </div>  
                <div class="w-full text-left">
                    <a href="<?php echo $payment_path; ?>payment.php" class="block w-full p-2 hover:bg-secondary active:bg-accent <?php echo basename($_SERVER['PHP_SELF']) == 'payment.php' ? 'bg-accent' : '' ?>">
                        <img src="<?php echo $icons_path; ?>PayPalLogo.svg" alt="Payment Icon" class="inline ml-10 " style="width: 20px; height: 20px;"> Payment
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="#financial" class="block w-full p-2 hover:bg-secondary active:bg-accent">
                        <img src="<?php echo $icons_path; ?>CurrencyCircleDollar.svg" alt="Financial Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Income
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="<?php echo $gallery_path; ?>gallery.php" class="block w-full p-2 hover:bg-secondary <?php echo basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'bg-accent' : '' ?>">
                        <img src="<?php echo $icons_path; ?>Image.svg" alt="Gallery Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Gallery
                    </a>
                </div>
                <div class="w-full text-left">
                    <a href="<?php echo $setting_path; ?>setting.php" class="block w-full p-2 hover:bg-secondary <?php echo basename($_SERVER['PHP_SELF']) == 'setting.php' ? 'bg-accent' : '' ?>">
                        <img src="<?php echo $icons_path; ?>Gear.svg" alt="Settings Icon" class="inline ml-10" style="width: 20px; height: 20px;"> Settings
                    </a>
                </div>
            </div>
        </nav>
    </div>

</body>

</html>