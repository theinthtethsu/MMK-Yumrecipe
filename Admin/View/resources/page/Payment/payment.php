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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="font-sans bg-light-text">
    <div class="flex min-h-screen">
        <!-- Side Menu -->
        <?php require_once '../../../common/sideMenu.php'; ?>
        <!-- Content -->
        <div class="flex-1 container p-4 bg-secondary overflow-y-auto" style="height: 100vh;">
            <h1 class="text-2xl font-bold mb-4">Payment</h1>
            <div class="mb-4 flex justify-end">
                <!-- Add New Payment Button -->
                <button id="addNewPayment" class="bg-accent text-white px-4 py-2 rounded-md shadow hover:bg-accent2 mb-4">Add New Payment</button>
            </div>

            <!-- Modal Box -->
            <div id="paymentModal" class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center hidden mx-auto my-auto">
                <div class="bg-white p-6 rounded-md shadow-md w-1/3">
                    <h2 class="text-xl font-semibold mb-4">Add New Payment Method</h2>
                    <!-- Modal Content -->
                    <div>
                        <label for="new-payment-name" class="block text-dark-text">Payment Name</label>
                        <input type="text" id="new-payment-name" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" placeholder="Enter Payment Name" required>
                    </div>
                    <div class="mt-4">
                        <label for="new-payment-logo" class="block text-dark-text">Payment Logo</label>
                        <input type="file" id="new-payment-logo" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2">
                    </div>
                    <div class="mt-4 flex justify-center">
                        <button id="closePaymentModal" class="bg-gray-500 text-white px-4 py-2 rounded-md shadow hover:bg-gray-600 mr-2">Cancel</button>
                        <button class="bg-accent text-white px-4 py-2 rounded-md shadow hover:bg-accent2" id="savePayment">Save</button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <!-- Payment Inputs -->
                <div class="space-y-4">
                    <div>
                        <!-- Label to Choose Mobile Banking -->
                        <label for="mobile-banking" class="block text-dark-text">Choose Mobile Banking </label>
                        <!-- Payment Methods in associative array -->
                        <?php
                        $paymentMethods = [
                            [
                                'name' => 'KBZPAY',
                                'logo' => $paymentlogo_path . 'kpayLogo.png',
                                'account_name' => 'Admin KPay',
                                'phone_number' => '0134343414',
                                'qr_code' => $paymentlogo_path . 'kpayqr.png'
                            ],
                            [
                                'name' => 'WAVEPAY',
                                'logo' => $paymentlogo_path . 'wavepayLogo.png',
                                'account_name' => 'Admin Wave Pay',
                                'phone_number' => '09999999999',
                                'qr_code' => $paymentlogo_path . 'kpayqr.png'
                            ],
                            [
                                'name' => 'AYAPAY',
                                'logo' => $paymentlogo_path . 'ayapayLogo.png',
                                'account_name' => 'Admin Aya Pay',
                                'phone_number' => '09914545453',
                                'qr_code' => $paymentlogo_path . 'kpayqr.png'
                            ]
                        ];
                        ?>
                        <!-- Select Box to Choose Mobile Banking -->
                        <select id="mobile-banking" class="mt-1 w-64 bg-gray-200 rounded-md shadow-md p-2 inline-flex items-center">
                            <!-- Default Option -->
                            <option value="default">Select Mobile Banking</option>
                            <!-- Loop through payment methods -->
                            <?php foreach ($paymentMethods as $paymentMethod => $option): ?>
                                <option value="<?php echo $paymentMethod; ?>">
                                    <?php echo $option['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <!-- Payment Logo -->
                        <img id="payment-logo" src="" alt="Payment Logo" class="hidden ml-2 border border-gray-300" style="width: 40px; height: 30px;">
                    </div>

                    <!-- Receiving Info -->
                    <div id="grid grid-cols-2">
                        <div id=" receiving-info">
                            <?php foreach ($paymentMethods as $paymentMethod => $option): ?>
                                <!--Account Name-->
                                <div class="payment-method" data-value="<?php echo $paymentMethod; ?>">
                                    <!--Label-->
                                    <label for="account-name-input" class="block text-dark-text">Enter Receiving Account Name for <?php echo $option['name']; ?></label>
                                    <!--Input-->
                                    <input type="text" id="account-name-input" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2 account-name" placeholder="Account Name" value="<?php echo $option['account_name']; ?>" required>
                                </div>
                                <!--Phone Number-->
                                <div class="payment-method" data-value="<?php echo $paymentMethod; ?>">
                                    <!--Label-->
                                    <label for="phone-number-input" class="block text-dark-text">Enter Receiving Phone Number for <?php echo $option['name']; ?></label>
                                    <!--Input-->
                                    <input type="tel" id="phone-number-input" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2 phone-number" placeholder="Phone Number" value="<?php echo $option['phone_number']; ?>" required>
                                </div>
                                <!--QR Code-->
                                <div class="payment-method" data-value="<?php echo $paymentMethod; ?>">
                                    <!--Label-->
                                    <label class="block text-dark-text">Upload QR Code or Banking Info Image for <?php echo $option['name']; ?></label>
                                    <!--Input-->
                                    <div class="flex items-center mt-1">
                                        <input type="file" id="qr-code-input" class="block w-full bg-gray-200 rounded-md shadow-md p-2 qr-code" required />
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Preview -->
                <div id="preview" class="border p-4 rounded-md hidden">
                    <h2 class="text-xl font-semibold mb-2">Preview</h2>
                    <div class="bg-gray-100 h-64 flex flex-col items-center justify-center">
                        <img id="preview-logo" src="" alt="Kpay" class="inline ml-2 border border-gray-300" style="width: 40px; height: 30px;">
                        <p class="text-gray-500">Scan To Pay</p>
                        <img id="preview-qr-code" src="" alt="KpayQR" class="ml-2 border border-gray-300" style="width: 100px; height: 100px;">
                        <p class="text-gray-500">Account Name: <span id="preview-account-name"></span></p>
                        <p class="text-gray-500">Account Number: <span id="preview-account-number"></span></p>
                    </div>
                </div>
            </div>
            <!-- Save Changes -->
            <div class=" flex justify-center mt-10 " id="saveChangesButton">
                <button class="bg-accent text-white px-4 py-2 rounded-md shadow hover:bg-accent2" id="saveChanges" onclick="">Save Changes</button>
            </div>
            <!--save changes modal-->
            <div id="saveChangesModal" class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center hidden mx-auto my-auto">
                <div class="bg-white p-6 rounded-md shadow-md w-1/3">
                    <h2 class="text-xl font-semibold mb-4">Save Changes</h2>
                    <p class="text-center mb-4">Are you sure you want to save changes?</p>
                    <div class="flex justify-center gap-4">
                        <button class="bg-gray-500 text-white px-4 py-2 rounded-md shadow hover:bg-gray-600" id="saveChangesCancel" onclick="">Cancel</button>
                        <button class="bg-accent text-white px-4 py-2 rounded-md shadow hover:bg-accent2" id="saveChangesConfirm" onclick="saveChanges()">Confirm</button>
                    </div>
                </div>
            </div>

        </div>
</body>
<!-- Script -->
<script>
    // Now paymentMethods is a JavaScript array
    
    $(document).ready(function() {
        $('#mobile-banking').change(function() {
                        if ($(this).val() === 'default') {
            $('#saveChangesButton').hide();
        } else {
            $('#saveChangesButton').show();
        }
    });
        var paymentMethods = <?php echo json_encode($paymentMethods); ?>;

        // This function is used to render the payment info
        function renderPaymentInfo(){
            const receivingInfo = $('#receiving-info');
            const paymentSelect = $('#mobile-banking');
            receivingInfo.empty();
            paymentSelect.empty();
            //render payment select
            for(let i = 0; i < paymentMethods.length; i++){
                paymentSelect.append(`<option value="${i}">${paymentMethods[i].name}</option>`);
            }
            //render receiving info
            paymentMethods.forEach((method, index) => {
                receivingInfo.append(`<div class="payment-method" data-value="${index}">
                    <label for="account-name-input" class="block text-dark-text">Enter Receiving Account Name for ${method.name}</label>
                    <input type="text" id="account-name-input" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2 account-name" placeholder="Account Name" value="${method.account_name}" required>
                </div>
                <div class="payment-method" data-value="${index}">
                    <label for="phone-number-input" class="block text-dark-text">Enter Receiving Phone Number for ${method.name}</label>
                    <input type="tel" id="phone-number-input" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2 phone-number" placeholder="Phone Number" value="${method.phone_number}" required>
                </div>
                <div class="payment-method" data-value="${index}">
                    <label class="block text-dark-text">Upload QR Code or Banking Info Image for ${method.name}</label>
                    <div class="flex items-center mt-1">
                        <input type="file" id="qr-code-input" class="block w-full bg-gray-200 rounded-md shadow-md p-2 qr-code" required />
                    </div>
                </div>
                `);
            }); 
        }
        
        // This function is used to show the selected payment info
        function showSelectedPaymentInfo() {
            var selectedIndex = $(this).val();
            console.log(`selectedIndex: ${selectedIndex}`);
            $('.payment-method').hide(); // Hide all payment method sections
            $('.payment-method[data-value="' + selectedIndex + '"]').show(); // Show the selected payment method section

            // Update preview section
            var selectedOption = paymentMethods[selectedIndex];
            if (selectedOption) {
                $('#preview-logo').attr('src', selectedOption.logo);
                $('#preview-qr-code').attr('src', selectedOption.qr_code);
                $('#preview-account-name').text(selectedOption.account_name);
                $('#preview-account-number').text(selectedOption.phone_number);
                $('#preview').show();
            } else {
                $('#preview').hide();
            }
        }

        $('#mobile-banking').change(showSelectedPaymentInfo);

        // This function is used to sync the payment inputs
        function syncPaymentInputs() {
            var selectedIndex = $('#mobile-banking').val();
            var selectedOption = paymentMethods[selectedIndex];
            console.log(`selectedOption: ${selectedOption}`);
            if (selectedOption) {
                var accountName = $('.payment-method[data-value="' + selectedIndex + '"] .account-name').val();
                var phoneNumber = $('.payment-method[data-value="' + selectedIndex + '"] .phone-number').val();
                $('#preview-account-name').text(accountName);
                $('#preview-account-number').text(phoneNumber);
            }
        }

        $('.payment-method input').on('input', syncPaymentInputs);

        // Trigger change event on page load to set initial state
        $('#mobile-banking').trigger('change');

        // Show payment modal
        $('#addNewPayment').click(function() {
            $('#paymentModal').removeClass('hidden');
            $('#paymentModal').addClass('flex');
        });

        // Hide payment modal on cancel
        $('#closePaymentModal').click(function() {
            $('#paymentModal').removeClass('flex');
            $('#paymentModal').addClass('hidden');
        });

        // Save changes
        $('#saveChanges').click(function() {
            $('#saveChangesModal').removeClass('hidden');
            $('#saveChangesModal').addClass('flex');
        });

        // Confirm save changes
        $('#saveChangesConfirm').click(function() {
            $('#saveChangesModal').removeClass('flex');
            $('#saveChangesModal').addClass('hidden');
        });
        // Close save changes modal
        $('#saveChangesCancel').click(function() {
            $('#saveChangesModal').removeClass('flex');
            $('#saveChangesModal').addClass('hidden');
        });
        // Save payment
        $('#savePayment').click(function() {
            //get input payment name
            const paymentName = $('#new-payment-name').val();
            //get input payment logo
            const paymentLogo = $('#new-payment-logo').val();
            if (paymentName) {
                const newPaymentMethod = {
                    name: paymentName,
                    logo: paymentLogo,
                    account_name: null,
                    phone_number: null,
                    qr_code: null
                };
                paymentMethods.push(newPaymentMethod);
                $('#new-payment-name').val('');
                $('#new-payment-logo').val('');
                //select the new payment method
                $('#mobile-banking').val(paymentMethods.length - 1);
                console.log(newPaymentMethod);
                console.log(paymentMethods);
            } else {
                alert('Please enter a payment name');
            }

            //update the select box with the new payment method
            $('#mobile-banking').append(new Option(paymentName, paymentMethods.length - 1));
            $('#mobile-banking').trigger('change');

            //close payment modal
            $('#paymentModal').removeClass('flex');
            $('#paymentModal').addClass('hidden');
        });
    });
</script>

</html>