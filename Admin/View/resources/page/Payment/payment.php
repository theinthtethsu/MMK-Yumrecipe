<?php
$paymentlogo_path = "/yumrecipe/Admin/View/resources/images/PaymentLogo/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
    <script src="../../js/payment.js" defer></script>
</head>

<body class="font-sans bg-light-text">
    <div class="flex min-h-screen">
        <!-- Side Menu -->
        <?php require_once '../../../common/sideMenu.php'; ?>
        <!-- Content -->
        <div class="flex-1 container p-4 bg-secondary">
            <h1 class="text-2xl font-bold mb-4">Payment</h1>
            <div class="mb-4 flex justify-end">
                <button class="bg-accent text-white px-4 py-2 rounded-md shadow hover:bg-accent2 mb-4" onclick="showPaymentModal()">Add New Payment</button>
                <!-- Payment Modal -->
                <div id="paymentModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <div class="bg-white p-6 rounded-md shadow-md w-1/3">
                        <h2 class="text-xl font-semibold mb-4">Add New Payment</h2>
                        <label for="payment-name" class="block text-dark-text">Payment Name</label>
                        <input type="text" id="payment-name" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" placeholder="Enter Payment Name">

                        <label for="payment-logo" class="block text-dark-text mt-4">Payment Logo</label>
                        <input type="file" id="payment-logo" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2">

                        <div class="mt-4 flex justify-end">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-md shadow hover:bg-blue-600" onclick="savePayment()">Save</button>
                            <button class="bg-gray-300 text-black px-4 py-2 rounded-md shadow ml-2 hover:bg-gray-400" onclick="closePaymentModal()">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-4">
                    <div>
                        <label for="mobile-banking" class="block text-dark-text">Choose Mobile Banking </label>
                        <?php
                        $mobileBankingOptions = [
                            'kpay' => [
                                'label' => 'KBZPAY',
                                'logo' => $paymentlogo_path . 'kpayLogo.png',
                                'account_name' => 'Admin KPay',
                                'phone_number' => '0134343414',
                                'qr_code' => $paymentlogo_path . 'kpayqr.png'
                            ],
                            'wavepay' => [
                                'label' => 'WAVEPAY',
                                'logo' => $paymentlogo_path . 'wavepayLogo.png',
                                'account_name' => 'Admin Wave Pay',
                                'phone_number' => '09999999999',
                                'qr_code' => $paymentlogo_path . 'kpayqr.png'
                            ],
                            'ayapay' => [
                                'label' => 'AYAPAY',
                                'logo' => $paymentlogo_path . 'ayapayLogo.png',
                                'account_name' => 'Admin Aya Pay',
                                'phone_number' => '09914545453',
                                'qr_code' => $paymentlogo_path . 'kpayqr.png'
                            ]
                        ];
                        ?>
                        <select id="mobile-banking" class="mt-1 w-64 bg-gray-200 rounded-md shadow-md p-2 inline-flex items-center">
                            <option value="default">Select Mobile Banking</option>
                            <?php foreach ($mobileBankingOptions as $value => $option): ?>
                                <option value="<?php echo $value; ?>">
                                    <?php echo $option['label']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <img id="logo-preview" src="" alt="Payment Logo" class="inline ml-2 border border-gray-300 hidden" style="width: 40px; height: 30px;">
                    </div>
                    <!-- Receiving Info -->
                    <?php foreach ($mobileBankingOptions as $key => $option): ?>
                        <div class="mobile-banking-option hidden" data-value="<?php echo $key; ?>">
                            <label for="account-name-<?php echo $key; ?>" class="block text-dark-text">Enter Receiving Account Name for <?php echo $option['label']; ?></label>
                            <input type="text" id="account-name-<?php echo $key; ?>" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" placeholder="Account Name" value="<?php echo $option['account_name']; ?>" required>
                        </div>
                        <div class="mobile-banking-option hidden" data-value="<?php echo $key; ?>">
                            <label for="phone-number-<?php echo $key; ?>" class="block text-dark-text">Enter Receiving Phone Number for <?php echo $option['label']; ?></label>
                            <input type="text" id="phone-number-<?php echo $key; ?>" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" placeholder="Phone Number" value="<?php echo $option['phone_number']; ?>" required>
                        </div>
                        <div class="mobile-banking-option hidden" data-value="<?php echo $key; ?>">
                            <label class="block text-dark-text">Upload QR Code or Banking Info Image for <?php echo $option['label']; ?></label>
                            <div class="flex items-center mt-1">
                                <input type="file" class="block w-full bg-gray-200 rounded-md shadow-md p-2" required />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Preview -->
                <div id="preview" class="border p-4 rounded-md hidden">
                    <h2 class="text-xl font-semibold mb-2">Preview</h2>
                    <div class="bg-gray-100 h-64 flex flex-col items-center justify-center">
                        <img id="preview-logo" src="<?php echo $paymentlogo_path; ?>kpayLogo.png" alt="Kpay" class="inline ml-2 border border-gray-300" style="width: 40px; height: 30px;">
                        <p class="text-gray-500">Scan To Pay</p>
                        <img id="preview-qr" src="<?php echo $paymentlogo_path; ?>kpayqr.png" alt="KpayQR" class="ml-2 border border-gray-300" style="width: 100px; height: 100px;">
                        <p class="text-gray-500">Account Name: <span id="preview-account-name">Admin</span></p>
                        <p class="text-gray-500">Account Number: <span id="preview-account-number">1234567890</span></p>
                    </div>
                </div>
                <div class="flex justify-center mt-10">
                    <button class="bg-accent text-white px-4 py-2 rounded-md shadow hover:bg-accent2">Save Changes</button>
                </div>
            </div>
        </div>
</body>

</html>