<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Subscriber</title>
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body class="font-sans bg-light-text">
<div class="flex min-h-screen">
      <!-- Side Menu -->
      <?php require_once '../../../common/sideMenu.php'; ?>
    <?php
    $pending = [
      [
        "no" => 1,
        "date" => "2024-12-02",
        "subscriber" => "mary@example.com",                   
        "type" => "Basic",
        "status" => "Pending",
        "paymentmethod" => "KBZPay",
    ],      
    [
        "no" => 2,
        "date" => "2024-12-03",
        "subscriber" => "john@example.com",                   
        "type" => "Standard",
        "status" => "Pending",
        "paymentmethod" => "WavePay",
    ],
    [
        "no" => 3,
        "date" => "2024-12-04",
        "subscriber" => "jane@example.com",                   
        "type" => "Premium",
        "status" => "Pending",
        "paymentmethod" => "KBZPay",
    ],
    [
        "no" => 4,
        "date" => "2024-12-05",
        "subscriber" => "cathy123@example.com",                   
        "type" => "Standard",
        "status" => "Pending",
        "paymentmethod" => "KBZPay",
    ],
    [
        "no" => 5,
        "date" => "2024-12-06",
        "subscriber" => "jack@example.com",                   
        "type" => "Premium",
        "status" => "Pending",
        "paymentmethod" => "KBZPay",
    ],
    [
        "no" => 6,
        "date" => "2024-12-07",
        "subscriber" => "eathy123@example.com",                   
        "type" => "Basic",
        "status" => "Pending",
        "paymentmethod" => "KBZPay",
    ]
    ];
     // Get the 'no' from the query string
     $subscriptionNo = isset($_GET['no']) ? $_GET['no'] : null;

     // Find the subscription based on 'no'
    $pendingDetail = null;
    foreach ($pending as $subscription) {
        if ($subscription['no'] == $subscriptionNo) {
            $pendingDetail = $subscription;
            break;
        }
    }

    // If subscription is not found, show an error
    if (!$pendingDetail) {
        echo "<p>Subscription not found.</p>";
        exit;
    }
    ?>
    
    <div class="flex-1 container bg-secondary px-9 pt-9 rounded-lg shadow-md w-full mt-10">
         <!-- Buttons -->
         <div class="flex justify-end space-x-4 mt-6">
               <button type="button" onclick="window.location.href='/yumrecipe/Admin/View/resources/page/Subscription/subscription.php'" class="w-auto bg-accent text-white py-2 px-6 align-center rounded-md hover:bg-blue-500 focus:ring focus:ring-red-100">Back
              </button>
            </div>
           
            <div class="w-full md:w-1/2 m-auto mt-10 bg-light-text p-6 rounded-lg shadow-md">
               <h1 class="text-2xl underline text-accent underline-offset-7 font-bold flex justify-center mt-10 mb-5">
                Detail For <?=strtok($pendingDetail['subscriber'], '@') ?></h1>
                <div class="mb-4 flex justify-between">
                    <label class="font-bold text-gray-700">No:</label>
                    <p class="text-gray-800"><?= $pendingDetail['no'] ?></p>
                </div>
                <div class="mb-4 flex justify-between">
                    <label class="font-bold text-gray-700">Date:</label>
                    <p class="text-gray-800"><?= $pendingDetail['date'] ?></p>
                </div>
                <div class="mb-4 flex justify-between">
                    <label class="font-bold text-gray-700">Subscriber:</label>
                    <p class="text-gray-800"><?= $pendingDetail['subscriber'] ?></p>
                </div>
                <div class="mb-4 flex justify-between">
                    <label class="font-bold text-gray-700">Type:</label>
                    <span class="text-gray-800"><?= $pendingDetail['type'] ?></span>
                </div>
                <div class="mb-4 flex justify-between">
                    <label class="font-bold text-gray-700">Status:</label>
                    <p class="text-gray-800"><?= $pendingDetail['status'] ?></p>
                </div>
                <div class="mb-4 flex justify-between">
                    <label class="font-bold text-gray-700">Payment Method:</label>
                    <p class="text-gray-800"><?= $pendingDetail['paymentmethod'] ?></p>
                </div>
                <div class="mb-4 flex justify-between ">
                    <label class="font-bold text-gray-700">Screenshot:</label>
                    <img src="/yumrecipe/Admin/View/resources/images/PaymentLogo/kpayQr.png" alt="Screenshot" class="w-20 h-20">
            </div>
        </div>

    </body>
</html>