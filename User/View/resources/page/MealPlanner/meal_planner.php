<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script defer src="../../js/meal_planner.js"></script>
</head>
<body>
<?php include_once '../../../common/user-profile-common.php'; ?>
<div class="container text-white flex flex-col lg:flex-row">
      <!-- Left Section -->
      <div class="left w-full lg:w-2/5 p-5">
        <div
          class="calendar bg-red-100 text-gray-700 rounded-lg flex flex-col p-5"
        >
          <!-- Month Navigation -->
          <div
            class="month flex justify-between items-center text-lg font-medium"
          >
            <i
              class="fas fa-angle-left prev cursor-pointer hover:text-red-500"
            ></i>
            <div class="date">December 2024</div>
            <i
              class="fas fa-angle-right next cursor-pointer hover:text-red-500"
            ></i>
          </div>

          <!-- Weekdays -->
          <div class="weekdays grid grid-cols-7 text-sm font-semibold mt-4">
            <div class="text-center">Sun</div>
            <div class="text-center">Mon</div>
            <div class="text-center">Tue</div>
            <div class="text-center">Wed</div>
            <div class="text-center">Thu</div>
            <div class="text-center">Fri</div>
            <div class="text-center">Sat</div>
          </div>

          <!-- Days -->
          <div class="days grid grid-cols-7 gap-1 mt-4">
            <!-- Dynamically generated days will be injected here -->
          </div>

          <!-- Goto and Today -->
          <div class="goto-today flex justify-between items-center mt-5">
            <div
              class="goto flex items-center border border-red-500 rounded-lg overflow-hidden"
            >
              <input
                type="text"
                placeholder="mm/yyyy"
                class="date-input px-4 py-2 text-red-500 outline-none"
              />
              <button class="goto-btn px-4 py-2 bg-red-500 text-white">
                Go
              </button>
            </div>
            <button
              class="today-btn px-4 py-2 border border-red-500 text-red-500 rounded-lg hover:bg-red-500 hover:text-white"
            >
              Today
            </button>
          </div>
        </div>
      </div>

      <!-- Right Section -->
      <div class="relative right w-full lg:w-2/5 p-5">
        <div
          class="today-date flex justify-between items-center text-lg font-medium text-gray-600"
        >
          <div class="event-day">Monday</div>
          <div class="event-date">23 December 2024</div>
        </div>

        <!-- Events -->
        <div class="events mt-5 max-h-[600px] overflow-y-auto space-y-4">
          <div class="no-event text-center text-gray-400">No Events</div>
        </div>

        <!-- Add Event Wrapper -->
        <form
          class="drop-shadow-lg absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 add-event-wrapper bg-white text-gray-700 rounded-lg mt-5 p-5 hidden w-2/3  "
        >
          <div
            class="add-event-header flex justify-between items-center border-b pb-3"
          >
            <div class="title text-lg font-medium">Add Meal</div>
            <i class="fas fa-times close cursor-pointer text-xl"></i>
          </div>
          <div class="add-event-body space-y-3 mt-3">
            <input
              type="text"
              placeholder="Event Name"
              class="event-name w-full border-b outline-none focus:border-red-500 px-2 py-1"
              required
            />
            <input
              type="text"
              placeholder="Recipe"
              class="event-recipe w-full border-b outline-none focus:border-red-500 px-2 py-1"
              required
            />
            <input
              type="number"
              placeholder="Serving Size"
              class="event-serving-size w-full border-b outline-none focus:border-red-500 px-2 py-1"
              
            />
            <div class="relative">
              <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                </svg>
              </div>
              <input type="time" id="time" class="border leading-none text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00"  />
            </div>
            <input
              type="text"
              placeholder="Note"
              class="event-note w-full border-b outline-none focus:border-red-500 px-2 py-1"
            />
          </div>
          <div class="add-event-footer mt-4">
            <button
              type="submit"
              class="add-event-btn bg-red-500 text-white px-4 py-2 rounded-lg w-full hover:bg-red-600"
            >
              Add Meal
            </button>
          </div>
        </form>

    <!-- Add Event Button -->
    <button
      class="add-event fixed bottom-10 right-10 w-12 h-12 flex items-center justify-center rounded-full bg-red-500 text-white text-xl shadow-lg hover:bg-red-600"
    >
      <i class="fas fa-plus"></i>
    </button>
    <!-- </div> -->
</body>
</html>