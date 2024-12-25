<?php
$subscription_path = '/yumrecipe/Admin/View/resources/page/Subscription/';
$detailpending_path = '/yumrecipe/Admin/View/resources/page/Subscription/detailpending.php';
$addnewplan_path = '/yumrecipe/Admin/View/resources/page/Subscription/addnewplan.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../../../../output.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body class="font-sans bg-light-text">
    <div class="flex min-h-screen">
        <!-- Side Menu -->
        <?php require_once '../../../common/sideMenu.php'; ?>
        <!-- Content -->
        <div class="flex-1 container p-4 bg-secondary overflow-y-auto" style="max-height: calc(100vh - 0px);">
            <h1 class="text-2xl font-bold mb-4">Subscription</h1>
            <!-- Tabs -->
            <ul class="flex space-x-4 justify-end">
                <li class="cursor-pointer px-2 py-2 pb-5 bg-light-text rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Pending</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Plans</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Subscribers</li>
                <li class="cursor-pointer px-2 py-2 pb-5 rounded-md hover:text-blue-500" onclick="toggleBackground(this);">Payment History</li>
            </ul>
            <!-- Content -->
            <div id="content"></div>
        </div>
    </div>
    <script>

        // function to toggle the background color of the selected tab
         function toggleBackground(selected) {
            const items = document.querySelectorAll('ul li');
            items.forEach(item => {
                item.classList.remove('bg-light-text');
            });
            selected.classList.toggle('bg-light-text');
            const contentDiv = document.getElementById('content');

            // switch case to load the content of the selected tab
            switch (selected.innerText) {
                case 'Pending':
                    contentDiv.innerHTML = `
                    <div class="bg-light-text p-6 rounded-lg shadow-md w-full -mt-3">
                    <div class="flex-1 container p-4 ">
                      <!-- Filters -->
                         <div class="flex space-x-4 justify-end">
                                <select class="border rounded p-2 bg-secondary">
                                    <option>All Type</option>
                                    <option>Basic</option>
                                    <option>Standard</option>
                                    <option>Premium</option>
                                </select>
                                 <select class="border rounded p-2 bg-secondary">
                                   <option>All Payment</option>
                                  <option>KBZPay</option>
                                  <option>WavePay</option>
                                </select>
                                <select class="border rounded p-2 bg-secondary">
                                 <option>Newest First</option>
                                 <option>Oldest First</option>
                                </select>
                         </div>
                    </div>
            <?php
            // Associative array of pending subscription
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
            ?>
            <table class="min-w-full border border-collapse border-black">
                <thead>
                    <tr class="bg-light-text">
                        <th class="border border-black p-2">No</th>
                        <th class="border border-black p-2">Subscriber</th>
                        <th class="border border-black p-2">Email</th>
                        <th class="border border-black p-2">Type</th>
                        <th class="border border-black p-2">Status</th>
                        <th class="border border-black p-2">Payment Method</th>
                        <th class="border border-black p-2">Action</th>
                    </tr>
                </thead > 
                 <tbody>
                    <?php foreach ($pending as $index => $subscription): ?>
                        <tr class="<?= $index % 2 == 0 ? 'bg-gray-300' : 'bg-light-text' ?>">
                            <td class="border border-black p-2"><?= $subscription['no'] ?></td>
                            <td class="border border-black p-2"><?= strtok($subscription['subscriber'], '@') ?></td>
                            <td class="border border-black p-2"><?= $subscription['subscriber'] ?></td>
                            <td class="border border-black p-2"><?= $subscription['type'] ?></td>
                            <td class="border border-black p-2"><?= $subscription['status'] ?></td>
                            <td class="border border-black p-2"><?= $subscription['paymentmethod'] ?></td>
                            <td class="border border-black p-2">
                                <button onclick="window.location.href='detailpending.php?no=<?= $subscription['no'] ?>'" class="text-indigo-800 hover:text-blue-600">
                                   View Details
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- Pagination -->
            <div class="flex justify-center mt-4">
                <div class="flex space-x-5 ml-30">
                    <a href="#" class="text-gray-700 hover:text-accent mt-2">
                        <img src="../../../resources/icons/ArrowLeft.svg" alt="Previous" class="w-4 h-4">
                    </a>
                    <?php for ($i = 1; $i <= 4; $i++): ?>
                        <a href="#" class="flex items-center justify-center w-8 h-8 <?= $i === 1 ? 'bg-accent text-white rounded-full' : 'text-gray-700 hover:bg-gray-300 rounded-full' ?>">
                            <?= $i ?>
                        </a>
                    <?php endfor; ?>
                    <a href="#" class="text-gray-700 hover:text-accent mt-2">
                        <img src="../../../resources/icons/ArrowRight.svg" alt="Next" class="w-4 h-4">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div> `;   
            break;
                case 'Plans':
                    contentDiv.innerHTML = `
                     <div class="bg-light-text p-6 rounded-lg shadow-md w-full -mt-3">
                      <!--card container-->
                            <div class="container mx-auto px-11 py-10">
                                    <!-- Cards Container -->
                                    <div class="flex flex-col md:flex-row justify-center items-center gap-6">
                                            <!-- Basic Plan -->
                                            <div class="bg-white border border-yellow-400 rounded-lg shadow-lg p-6 w-full md:w-1/3">
                                                <h2 class="text-xl font-semibold text-gray-800 text-center mb-4">Basic</h2>
                                                <p class="text-4xl text-red-500 text-center font-bold mb-2">$1.99</p>
                                                <p class="text-gray-500 text-center mb-4">Free Plus</p>
                                                <ul class="text-gray-600 space-y-2 mb-6">
                                                    <li>✅ Upload up to 10 recipes per month</li>
                                                    <li>✅ Save up to 5 grocery lists</li>
                                                    <li>✅ Reduced ads</li>
                                                    <li>✅ Get a verified badge in the community</li>
                                                    <li>✅ Join Up to 3 Live Cooking per month</li>
                                                </ul>
                                            </div>
                                            <!-- Premium Plan -->
                                            <div class="bg-white border border-yellow-400 rounded-lg shadow-lg p-6 w-full md:w-1/3">
                                                <h2 class="text-xl font-semibold text-gray-800 text-center mb-4">Premium</h2>
                                                <p class="text-4xl text-red-500 text-center font-bold mb-2">$4.99</p>
                                                <p class="text-gray-500 text-center mb-4">Standard Plus</p>
                                                <ul class="text-gray-600 space-y-2 mb-6">
                                                    <li>✅ Upload recipes without restrictions</li>
                                                    <li>✅ Export or print grocery lists from recipes</li>
                                                    <li>✅ Unlimited access to all live cooking, including Q&A with chefs</li>
                                                    <li>✅ Advanced folders and tagging system for recipes</li>
                                                    <li>✅ Exclusive access to workshops, recipes, and content</li>
                                                    <li>✅ No ads</li>
                                                </ul>
                                            </div>
                                    </div>
                            </div>
                            <div>
                             <!-- Add New Plan -->
                                    <button onclick="loadAddNewPlan()" class=" w-auto bg-accent text-white font-bold ml-10 py-2 px-4 rounded hover:bg-blue-500">Add New Plan
                                    </button>
                            </div>
                  </div> `;
                    break;
                case 'Subscribers':
                    contentDiv.innerHTML = `
                    <div class="bg-light-text p-6 rounded-lg shadow-md w-full -mt-3">
              <div class="flex-1 container p-4 ">
              <div>
                     <h1 class="text-2xl font-bold flex justify-center">Subscriber History</h1>
                         <div class="flex space-x-4 justify-end">
                          <select class="border rounded p-2 bg-secondary">
                            <option>Filtered By</option>
                            <option>Active</option>
                            <option>Expired</option>
                            <option>Trial</option>
                        </select>
                        <input type="text" placeholder="Search..." class="border rounded p-2 flex-grow" style="max-width: 200px;" />
                        <button class="bg-accent text-white rounded px-4 py-2 transition duration-200 ease-in-out hover:bg-accent-dark active:bg-accent-light">Search</button>
                    </div>
            </div>

            </div>
            <!-- Table -->
            <?php
            // Associative array of user activities
            $subscriber = [
                [
                    "no" => 1,
                    "subscriber" => "Mary",
                    "email" => "mary@example.com",                   
                    "type" => "Basic",
                    "status" => "Active",
                    "startdate" => "2023-10-01",
                    "enddate" => "2023-11-01",
                ],      
                [
                    "no" => 2,
                    "subscriber" => "Harry",
                    "email" => "harry@example.com",                   
                    "type" => "Standard",
                    "status" => "Expired",
                    "startdate" => "2023-10-01",
                    "enddate" => "2023-11-01",
                ],
                [
                    "no" => 3,
                    "subscriber" => "Alice",
                    "email" => "alice@example.com",                   
                    "type" => "Premium",
                    "status" => "Trial",
                    "startdate" => "2023-10-01",
                    "enddate" => "2023-11-01",
                ],
                [
                    "no" => 4,
                    "subscriber" => "Mark",
                    "email" => "mark@example.com",                   
                    "type" => "Basic",
                    "status" => "Active",
                    "startdate" => "2023-10-01",
                    "enddate" => "2023-11-01",
                ],
                [
                    "no" => 5,
                    "subscriber" => "Phyo",
                    "email" => "phyo@example.com",                   
                    "type" => "Standard",
                    "status" => "Expired",
                    "startdate" => "2023-10-01",
                    "enddate" => "2023-11-01",
                ],
                [
                    "no" => 6,
                    "subscriber" => "Khaing",
                    "email" => "khaing@example.com",                   
                    "type" => "Premium",
                    "status" => "Trial",
                    "startdate" => "2023-10-01",
                    "enddate" => "2023-11-01",
                ],
                [
                    "no" => 7,
                    "subscriber" => "MMK",
                    "email" => "mmk@example.com",                   
                    "type" => "Basic",
                    "status" => "Active",
                    "startdate" => "2023-10-01",
                    "enddate" => "2023-11-01",
                ],
                [
                    "no" => 8,
                    "subscriber" => "HYO",
                    "email" => "hyo@example.com",                   
                    "type" => "Standard",
                    "status" => "Expired",
                    "startdate" => "2023-10-01",
                    "enddate" => "2023-11-01",
                ],
                [
                    "no" => 9,
                    "subscriber" => "KKK",
                    "email" => "kkk@example.com",                   
                    "type" => "Premium",
                    "status" => "Trial",
                    "startdate" => "2023-10-01",
                    "enddate" => "2023-11-01",
                ],
                [
                    "no" => 10,
                    "subscriber" => "AAA",
                    "email" => "aaa@example.com",                   
                    "type" => "Basic",
                    "status" => "Active",
                    "startdate" => "2023-10-01",
                    "enddate" => "2023-11-01",
                ],
            ];
            ?>

            <table class="min-w-full border border-collapse border-black">
                <thead>
                    <tr class="bg-light-text">
                        <th class="border border-black p-2">No</th>
                        <th class="border border-black p-2">Subscriber</th>
                        <th class="border border-black p-2">Email</th>
                        <th class="border border-black p-2">Type</th>
                        <th class="border border-black p-2">Status</th>
                        <th class="border border-black p-2">Start Date</th>
                        <th class="border border-black p-2">End Date</th>
                        <th class="border border-black p-2">Action</th>
                    </tr>
                </thead > 
                 <tbody>
                    <?php foreach ($subscriber as $index => $subscriber): ?>
                        <tr class="<?= $index % 2 == 0 ? 'bg-gray-300' : 'bg-light-text'  ?>">
                            <td class="border border-black p-2"><?= $subscriber['no'] ?></td>
                            <td class="border border-black p-2"><?= $subscriber['subscriber'] ?></td>
                            <td class="border border-black p-2"><?= $subscriber['email'] ?></td>
                            <td class="border border-black p-2"><?= $subscriber['type'] ?></td>
                            <td class="border border-black p-2"><?= $subscriber['status'] ?></td>
                            <td class="border border-black p-2"><?= $subscriber['startdate'] ?></td>
                            <td class="border border-black p-2"><?= $subscriber['enddate'] ?></td>
                            <td class="border border-black p-2 flex justify-center gap-2">
                                <button onclick="loadUpdateSubscriber(<?= $subscriber['no'] ?>)" class="text-indigo-800 hover:text-blue-600">
                                    <span class="material-icons text-xl">edit</span>
                                </button>
                                <button type="button" onclick="showModal('delete')" class="text-red-600 hover:text-red-600">
                                 <span class="material-icons text-xl">delete</span></button>
                            </td>
                        </tr>
                        
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- Delete Popup Modal -->
                        <div id="deleteModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
                            <div class="bg-secondary p-6 rounded shadow-lg w-96">
                                <h2 class="text-xl font-bold text-center">Delete Confirmation</h2>
                                <p class="text-center text-gray-700 mb-4">Are you sure you want to delete this category?</p>
                                <div class="flex justify-center gap-x-4">
                                    <button class="px-4 py-2 bg-red-500 text-white rounded shadow hover:bg-red-600">Delete</button>
                                    <button type="button" onclick="hideModal('update')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded shadow hover:bg-gray-400">Cancel</button>
                                </div>
                            </div>
            </div>
            <!-- Pagination -->
                 <div class="flex items-center mt-4">
                            <span class="text-sm text-gray-700 mr-2">Showing 1 to <?= count($subscriber) ?> of <?= count($subscriber) ?> entries</span>
                            <div class="flex space-x-5 ml-60">
                                <a href="#" class="text-gray-700 hover:text-accent mt-2">
                                    <img src="../../../resources/icons/ArrowLeft.svg" alt="Previous" class="w-4 h-4">
                                </a>
                                <?php for ($i = 1; $i <= 4; $i++): ?>
                                    <a href="#" class="flex items-center justify-center w-8 h-8 <?= $i === 1 ? 'bg-accent text-white rounded-full' : 'text-gray-700 hover:bg-gray-300 rounded-full' ?>">
                                        <?= $i ?>
                                    </a>
                                <?php endfor; ?>
                                <a href="#" class="text-gray-700 hover:text-accent mt-2">
                                    <img src="../../../resources/icons/ArrowRight.svg" alt="Next" class="w-4 h-4">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>`;
                break;
                case 'Payment History':
                    contentDiv.innerHTML = `

                    <div class="bg-light-text p-6 rounded-lg shadow-md w-full -mt-3">
              <div class="flex-1 container p-4 ">
              <div>
                     <h1 class="text-2xl font-bold flex justify-center">Payment History</h1>
                    <div class="flex space-x-4 justify-end">
                        <select class="border rounded-md p-2 bg-secondary w-40">
                            <option>Filtered By</option>
                            <option>Approved</option>
                            <option>Filled</option>
                        </select>
                    </div>
            </div>
            </div>
            <?php
            // Associative array of user activities
            $subscriberArray = [
                [
                    "no" => 1,
                    "subscriber" => "Mary",
                    "email" => "mary@example.com",                   
                    "date" => "2023-10-01",
                    "paymentmethod" => "Kpay",
                    "status" => "Approved",    
                ],
                [
                    "no" => 2,
                    "subscriber" => "Harry",
                    "email" => "harry@example.com",                   
                    "date" => "2023-10-01",
                    "paymentmethod" => "Kpay",
                    "status" => "Approved",  
                ],
                [
                    "no" => 3,
                    "subscriber" => "Alice",
                    "email" => "alice@example.com",                   
                    "date" => "2023-10-01",
                    "paymentmethod" => "Kpay",
                    "status" => "Approved",     
                ],
                [
                    "no" => 4,
                    "subscriber" => "Mark",
                    "email" => "mark@example.com",                   
                    "date" => "2023-10-01",
                    "paymentmethod" => "Kpay",
                    "status" => "Approved",  
                ],
                [
                    "no" => 5,
                    "subscriber" => "Phyo",
                    "email" => "phyo@example.com",                   
                    "date" => "2023-10-01",
                    "paymentmethod" => "Kpay",
                    "status" => "Approved",  
                ],
                [
                    "no" => 6,
                    "subscriber" => "Khaing",
                    "email" => "khaing@example.com",                   
                    "date" => "2023-10-01",
                    "paymentmethod" => "Kpay",
                    "status" => "Approved",  
                ],
                [
                    "no" => 7,
                    "subscriber" => "MMK",
                    "email" => "mmk@example.com",                   
                    "date" => "2023-10-01",
                    "paymentmethod" => "Kpay",
                    "status" => "Approved",  
                ],
                [
                    "no" => 8,
                    "subscriber" => "HYO",
                    "email" => "hyo@example.com",                   
                    "date" => "2023-10-01",
                    "paymentmethod" => "Kpay",
                    "status" => "Approved",  
                ],
                [
                    "no" => 9,
                    "subscriber" => "KKK",
                    "email" => "kkk@example.com",                   
                    "date" => "2023-10-01",
                    "paymentmethod" => "Kpay",
                    "status" => "Approved",  
                ],
                [
                    "no" => 10,
                    "subscriber" => "AAA",
                    "email" => "aaa@example.com",                   
                    "date" => "2023-10-01",
                    "paymentmethod" => "Kpay",
                    "status" => "Approved",  
                ],
            ];
            ?>
            <table class="min-w-full border border-collapse border-black">
                 <thead>
                     <tr class="bg-light-text">
                            <th class="border border-black p-2">No</th>
                            <th class="border border-black p-2">Subscriber</th>
                            <th class="border border-black p-2">Email</th>
                            <th class="border border-black p-2">Date</th>
                            <th class="border border-black p-2">Payment Method</th>
                            <th class="border border-black p-2">Status</th>
                            </tr>
                    </thead > 
                    <tbody>
                            <?php foreach ($subscriberArray as $index => $subscriber): ?>
                                <tr class="<?= $index % 2 == 0 ? 'bg-gray-200' : 'bg-light-text'  ?>">
                                    <td class="border border-black p-2"><?= $subscriber['no'] ?></td>
                                    <td class="border border-black p-2"><?= $subscriber['subscriber'] ?></td>
                                    <td class="border border-black p-2"><?= $subscriber['email'] ?></td>
                                    <td class="border border-black p-2"><?= $subscriber['date'] ?></td>
                                    <td class="border border-black p-2"><?= $subscriber['paymentmethod'] ?></td>
                                    <td class="border border-black p-2"><?= $subscriber['status'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="flex items-center mt-4">
                        <span class="text-sm text-gray-700 mr-2">Showing 1 to <?= count($subscriber) ?> of <?= count($subscriber) ?> entries</span>
                        <div class="flex space-x-5 ml-60">
                            <a href="#" class="text-gray-700 hover:text-accent mt-2">
                                <img src="../../../resources/icons/ArrowLeft.svg" alt="Previous" class="w-4 h-4">
                            </a>
                            <?php for ($i = 1; $i <= 4; $i++): ?>
                                <a href="#" class="flex items-center justify-center w-8 h-8 <?= $i === 1 ? 'bg-accent text-white rounded-full' : 'text-gray-700 hover:bg-gray-300 rounded-full' ?>">
                                    <?= $i ?>
                                </a>
                            <?php endfor; ?>
                            <a href="#" class="text-gray-700 hover:text-accent mt-2">
                                <img src="../../../resources/icons/ArrowRight.svg" alt="Next" class="w-4 h-4">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>`;
            default:
            console.log('Unknown option clicked');
        }
        }
        document.addEventListener('DOMContentLoaded', () => {
            const defaultTab = document.querySelector('ul li:first-child');
            toggleBackground(defaultTab);
        });
          // Add these functions at the top of your script section
          function showModal(type) {
            const modal = document.getElementById('deleteModal');
            if (modal) {
                modal.classList.remove('hidden');
            }
        }
        function hideModal(type) {
            const modal = document.getElementById('deleteModal');
            if (modal) {
                modal.classList.add('hidden');
            }
        }
        // Also update your delete modal's cancel button
        document.querySelector('#deleteModal button:last-child').onclick = function() {
            hideModal('delete');
        };
        async function loadUpdateSubscriber(id) {
            try {
                const response = await fetch(`/yumrecipe/Admin/View/resources/page/Subscription/updatesubscriber.php?id=${id}`);
                const content = await response.text();
                document.getElementById('content').innerHTML = content;
            } catch (error) {
                console.error('Error loading update subscriber content:', error);
            }
        }
        async function loadAddNewPlan() {
            try {
                const response = await fetch(`/yumrecipe/Admin/View/resources/page/Subscription/addnewplan.php`);
                const content = await response.text();
                document.getElementById('content').innerHTML = content;
         //  `addFeature` is redefined after content is loaded
            initializeAddNewPlanHandlers();

            } catch (error) {
                console.error('Error loading add new plan content:', error);
            }
        }
        function initializeAddNewPlanHandlers() {
        // Adding Feature Instructions
        window.addFeature = function () {
            const feature = document.getElementById("feature-text").value.trim();

            if (feature) {
                const listItem = document.createElement("li");
                listItem.className =
                    "flex justify-between items-center p-2 bg-white shadow rounded border border-gray-200";
                listItem.innerHTML = `
                    <span>${feature}</span>
                    <button class="text-red-500 ml-10 hover:text-red-700" onclick="removeItem(this)">X</button>
                `;
                document.getElementById("featureinstruction-items").appendChild(listItem);
                // Clear textarea
                document.getElementById("feature-text").value = "";
            }
        };
            // Remove List Item
            window.removeItem = function (button) {
                const listItem = button.parentElement;
                listItem.remove();
            };
        }
    </script>
</body>
</html>