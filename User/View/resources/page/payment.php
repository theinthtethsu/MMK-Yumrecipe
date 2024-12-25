<?php
$images_path = "/yumrecipe/User/View/resources/img/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Payment Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php require_once '../../common/header-after-login.php'; ?>

<body class="bg-gray-100">
  <div class="max-w-6xl mx-auto p-4">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <!-- Left Section: Payment Methods -->
      <div>
        <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-4">Payment Methods</h2>
        <div class="flex flex-wrap gap-4 mb-6">
          <!-- KBZ Pay -->
          <div class="relative w-24 sm:w-32 lg:w-40 bg-white p-4 flex justify-center rounded shadow">
            <input type="radio" id="kbz-pay" name="payment-method" class="absolute top-2 right-2 w-5 h-5" checked>
            <label for="kbz-pay" class="flex justify-center">
              <img src="<?php echo $images_path ?>Payment/KBZ.png" alt="KBZ Pay"
                class="w-16 h-12 object-contain">
            </label>
          </div>
          <!-- Wave Pay -->
          <div class="relative w-24 sm:w-32 lg:w-40 bg-white p-4 flex justify-center rounded shadow">
            <input type="radio" id="wave-pay" name="payment-method" class="absolute top-2 right-2 w-5 h-5">
            <label for="wave-pay" class="flex justify-center">
              <img src="<?php echo $images_path ?>Payment/Wave.png" alt="WavePay"
                class="w-16 h-12 object-contain">
            </label>
          </div>
          <!-- AYA Pay -->
          <div class="relative w-24 sm:w-32 lg:w-40 bg-white p-4 flex justify-center rounded shadow">
            <input type="radio" id="aya-pay" name="payment-method" class="absolute top-2 right-2 w-5 h-5">
            <label for="aya-pay" class="flex justify-center">
              <img src="<?php echo $images_path ?>Payment/AYA.png" alt="AYA Pay"
                class="w-16 h-12 object-contain">
            </label>
          </div>
        </div>

        <!-- QR Code Section -->
        <div id="qr-section" class="bg-white p-6 rounded-lg shadow">
          <div class="flex flex-col sm:flex-row items-center gap-4 mb-4">
            <img id="qr-logo" src="<?php echo $images_path ?>Payment/KBZ.png" alt="KBZ Pay"
              class="w-12 h-12 object-contain">
            <span id="qr-text" class="text-gray-600 text-lg font-medium">SCAN TO PAY</span>
          </div>
          <img id="qr-code" src="<?php echo $images_path ?>Payment/Kbz-QR.png" alt="QR Code"
            class="w-32 sm:w-40 md:w-48 h-auto mx-auto mb-4">
          <div class="text-center">
            <p id="account-number" class="text-gray-700 font-medium text-sm sm:text-base">Account Number: <span
                class="font-normal">0912345678</span></p>
            <p id="account-name" class="text-gray-700 font-medium text-sm sm:text-base">Account Name: <span
                class="font-normal">Recipe Admin</span></p>
          </div>
        </div>
      </div>

      <!-- Right Section: Payment Form -->
      <div>
        <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-4">Payment Form</h2>
        <div class="bg-white p-6 rounded-lg shadow">
          <form action="#" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
              <label for="account-name" class="block text-gray-700 font-medium mb-2 text-sm sm:text-base">Account Name</label>
              <input type="text" id="account-name"
                class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm sm:text-base">
            </div>
            <div class="mb-4">
              <label for="email-address" class="block text-gray-700 font-medium mb-2 text-sm sm:text-base">Email Address</label>
              <input type="email" id="email-address"
                class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm sm:text-base">
            </div>
            <div class="mb-4">
              <label for="plan-type" class="block text-gray-700 font-medium mb-2 text-sm sm:text-base">Plan Type</label>
              <select id="plan-type"
                class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm sm:text-base">
                <option>Plan Type</option>
                <option>Basic</option>
                <option>Premium</option>
              </select>
            </div>
            <div class="mb-4">
              <label for="payment-screenshot"
                class="block text-gray-700 font-medium mb-2 text-sm sm:text-base">Payment Screenshot</label>
              <div class="border-dashed border-2 border-gray-300 rounded-lg p-4 text-center">
                <input type="file" id="payment-screenshot" class="hidden">
                <label for="payment-screenshot" class="cursor-pointer text-red-500 text-sm sm:text-base">Upload</label>
                <div class="mt-2">
                  <img src="https://via.placeholder.com/100x100.png?text=Placeholder" alt="Preview"
                    class="w-16 sm:w-24 h-auto mx-auto">
                  <button type="button" class="text-red-500 mt-2 text-sm">Delete</button>
                </div>
              </div>
            </div>
            <button type="submit"
              class="bg-red-500 text-white w-full py-2 rounded hover:bg-red-600 transition text-sm sm:text-base">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    // JavaScript for dynamically updating QR code (same as before)
    const paymentMethods = document.querySelectorAll('input[name="payment-method"]');
    const qrLogo = document.getElementById('qr-logo');
    const qrCode = document.getElementById('qr-code');
    const accountNumber = document.getElementById('account-number');
    const accountName = document.getElementById('account-name');

    const paymentData = {
      'kbz-pay': {
        logo: "<?php echo $images_path ?>Payment/KBZ.png",
        qr: "<?php echo $images_path ?>Payment/Kbz-QR.png",
        number: "0912345678",
        name: "Recipe Admin"
      },
      'wave-pay': {
        logo: "<?php echo $images_path ?>Payment/Wave.png",
        qr: "<?php echo $images_path ?>Payment/Wave-QR.png",
        number: "0923456789",
        name: "Wave Admin"
      },
      'aya-pay': {
        logo: "<?php echo $images_path ?>Payment/AYA.png",
        qr: "<?php echo $images_path ?>Payment/Aya-QR.jpg",
        number: "0934567890",
        name: "AYA Admin"
      }
    };

    paymentMethods.forEach(method => {
      method.addEventListener('change', () => {
        const selected = paymentData[method.id];
        qrLogo.src = selected.logo;
        qrCode.src = selected.qr;
        accountNumber.innerHTML = `Account Number: <span class="font-normal">${selected.number}</span>`;
        accountName.innerHTML = `Account Name: <span class="font-normal">${selected.name}</span>`;
      });
    });
  </script>
</body>

</html>
