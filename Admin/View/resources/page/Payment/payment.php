<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
</head>
<body class="font-sans bg-light-text">
    <div class="flex min-h-screen">
        <!-- Side Menu -->
        <?php require_once '../../../common/sideMenu.php'; ?>
        <!-- Content -->
        <div class="flex-1 container p-4 bg-secondary">
            <h1 class="text-2xl font-bold mb-4">Payment</h1>
        <div class="mb-4 flex justify-end">
            <button class="bg-accent text-white px-4 py-2 rounded-md shadow hover:bg-accent2 mb-4">Add New Payment</button>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="space-y-4">
                <div>
                    <label for="mobile-banking" class="block text-dark-text">Choose Mobile Banking</label>
                    <select id="mobile-banking" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2">
                        <option value="kpay">Kpay</option>
                        <option value="wavepay">Wave Pay</option>
                        <option value="ayapay">Aya Pay</option>
                    </select>
                </div>
                <div>
                    <label for="phone-number" class="block text-dark-text">Enter Receiving Phone Number</label>
                    <input type="text" id="phone-number" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" placeholder="Phone Number">
                </div>
                <div>
                    <label for="account-name" class="block text-dark-text">Enter Receiving Account Name</label>
                    <input type="text" id="account-name" class="mt-1 block w-full bg-gray-200 rounded-md shadow-md p-2" placeholder="Account Name">
                </div>
                <div>
                    <label class="block text-dark-text">Upload QR Code or Banking Info Image</label>
                    <div class="flex items-center mt-1">
                        <input type="file" class="block w-full bg-gray-200 rounded-md shadow-md p-2" />
                        <button class="ml-2 text-red-500 hover:text-red-700">
                            <i class="fas fa-trash"></i> 
                        </button>
                    </div>  
                </div>
                
            </div>
            <!-- Preview -->
            <div class="border p-4 rounded-md">
                <h2 class="text-xl font-semibold mb-2">Preview</h2>
                <div class="bg-gray-100 h-48 flex items-center justify-center">
                    <p class="text-gray-500">Preview of QR Code or Banking Info will appear here.</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-10">
                    <button class="bg-accent text-white px-4 py-2 rounded-md shadow hover:bg-accent2">Save Changes</button>
                </div>
        </div>
    </div>
</body>
</html>