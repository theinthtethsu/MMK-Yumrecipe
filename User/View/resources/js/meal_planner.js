const calendar = document.querySelector(".calendar"),
  date = document.querySelector(".date"),
  daysContainer = document.querySelector(".days"),
  prev = document.querySelector(".prev"),
  next = document.querySelector(".next"),
  todayBtn = document.querySelector(".today-btn"),
  gotoBtn = document.querySelector(".goto-btn"),
  dateInput = document.querySelector(".date-input"),
  eventDay = document.querySelector(".event-day"),
  eventDate = document.querySelector(".event-date"),
  eventsContainer = document.querySelector(".events"),
  addEventBtn = document.querySelector(".add-event"),
  addEventWrapper = document.querySelector(".add-event-wrapper"),
  addEventCloseBtn = document.querySelector(".close"),
  addEventTitle = document.querySelector(".event-name"),
  addEventRecipe = document.querySelector(".event-recipe"),
  addEventServingSize = document.querySelector(".event-serving-size"),
  addEventNote = document.querySelector(".event-note"),
  addEventTime = document.querySelector("#time"),
  addEventSubmit = document.querySelector(".add-event-btn");

let today = new Date();
let activeDay;
let month = today.getMonth();
let year = today.getFullYear();
const eventsArr = [];
let tempEvent = null; // Store temporary event during editing

const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

function initCalendar() {
  const firstDay = new Date(year, month, 1);
  const lastDay = new Date(year, month + 1, 0);
  const prevLastDay = new Date(year, month, 0);
  const prevDays = prevLastDay.getDate();
  const lastDate = lastDay.getDate();
  const day = firstDay.getDay();
  const nextDays = 7 - lastDay.getDay() - 1;

  date.innerHTML = `${months[month]} ${year}`;

  let days = "";

  for (let x = day; x > 0; x--) {
    days += `<div class="day w-full h-14 flex items-center justify-center border border-gray-200 text-gray-400">
      ${prevDays - x + 1}
    </div>`;
  }

  for (let i = 1; i <= lastDate; i++) {
    let event = false;
    eventsArr.forEach((eventObj) => {
      if (
        eventObj.day === i &&
        eventObj.month === month + 1 &&
        eventObj.year === year
      ) {
        event = true;
      }
    });

    const emoji = event ? "📅" : "";

    if (
      i === new Date().getDate() &&
      year === new Date().getFullYear() &&
      month === new Date().getMonth()
    ) {
      activeDay = i;
      getActiveDay(i);
      days += `<div class="day w-full h-14 flex items-center justify-center border border-gray-200 cursor-pointer hover:bg-red-500 hover:text-white bg-red-500 text-white rounded-lg ${event ? "event" : ""}">
        ${i} ${emoji}
      </div>`;
    } else {
      days += `<div class="day w-full h-14 flex items-center justify-center border border-gray-200 cursor-pointer hover:bg-red-500 hover:text-white ${event ? "event" : ""}">
        ${i} ${emoji}
      </div>`;
    }
  }

  for (let j = 1; j <= nextDays; j++) {
    days += `<div class="day w-full h-14 flex items-center justify-center border border-gray-200 text-gray-400">
      ${j}
    </div>`;
  }

  daysContainer.innerHTML = days;
  addListner();
}

// function addListner() {
//   const days = document.querySelectorAll(".day");
//   days.forEach((day) => {
//     day.addEventListener("click", (e) => {
//       activeDay = Number(e.target.textContent.trim());
//       updateEvents(activeDay);
//       days.forEach((day) => {
//         day.classList.remove("bg-red-500", "text-white");
//       });
//       e.target.classList.add("bg-red-500", "text-white");
//     });
//   });
// }
function addListner() {
  const days = document.querySelectorAll(".day");
  days.forEach((day) => {
    day.addEventListener("click", (e) => {
      const dayNumber = parseInt(e.target.textContent.trim());

      if (isNaN(dayNumber)) return; // Skip invalid clicks (e.g., on empty areas)

      activeDay = dayNumber;
      getActiveDay(activeDay); // Update active day details
      updateEvents(activeDay); // Update the events list

      // Highlight the clicked day
      days.forEach((day) => {
        day.classList.remove("bg-red-500", "text-white");
      });
      e.target.classList.add("bg-red-500", "text-white");
    });
  });
}


function updateEvents(date) {
  let events = "";
  eventsArr.forEach((eventObj) => {
    if (eventObj.day === date && eventObj.month === month + 1 && eventObj.year === year) {
      eventObj.events.forEach((event, index) => {
        events += `<div class="event bg-red-100 p-4 mb-2 rounded-lg relative">
          <div class="title text-gray-600 font-bold">Meal: ${event.title}</div>
          <div class="recipe text-gray-500">Recipe: ${event.recipe}</div>
          <div class="serving-size text-gray-500">Serving Size: ${event.servingSize}</div>
          <div class="time text-gray-500">Time: ${convertTo12Hour(event.time)}</div>
          <div class="note text-gray-500">Note: ${event.note}</div>
          <div class="absolute top-2 right-2 flex space-x-2">
            <i class="fas fa-edit text-blue-500 cursor-pointer" onclick="editEvent(${date}, ${index})"></i>
            <i class="fas fa-trash text-red-500 cursor-pointer" onclick="deleteEvent(${date}, ${index})"></i>
          </div>
        </div>`;
      });
    }
  });
  if (!events) {
    events = "<div class='no-event text-center text-gray-400'>No Events</div>";
  }
  eventsContainer.innerHTML = events;
}

function getActiveDay(date) {
  const day = new Date(year, month, date);
  const dayName = day.toLocaleDateString("en-US", { weekday: "long" });
  eventDay.innerHTML = dayName;
  eventDate.innerHTML = `${date} ${months[month]} ${year}`;
}

function convertTo12Hour(time) {
  const [hour, minute] = time.split(":");
  const ampm = hour >= 12 ? "PM" : "AM";
  const formattedHour = hour % 12 || 12;
  return `${formattedHour}:${minute} ${ampm}`;
}

function editEvent(date, index) {
  const eventObj = eventsArr.find(
    (e) => e.day === date && e.month === month + 1 && e.year === year
  );
  if (eventObj) {
    const event = eventObj.events[index];
    addEventTitle.value = event.title;
    addEventRecipe.value = event.recipe;
    addEventServingSize.value = event.servingSize;
    addEventTime.value = event.time;
    addEventNote.value = event.note;
    addEventWrapper.classList.remove("hidden");

    // Store temporary event for restoration if not submitted
    tempEvent = { ...event, index, date };
  }
}

function deleteEvent(date, index) {
  const eventObj = eventsArr.find(
    (e) => e.day === date && e.month === month + 1 && e.year === year
  );
  if (eventObj) {
    eventObj.events.splice(index, 1);
    if (eventObj.events.length === 0) {
      const objIndex = eventsArr.indexOf(eventObj);
      eventsArr.splice(objIndex, 1);
    }
  }
  updateEvents(date);
  updateCalendarEmoji(date);
}

function updateCalendarEmoji(date) {
  const dayElements = document.querySelectorAll(".day");
  dayElements.forEach((dayEl) => {
    const dayNumber = parseInt(dayEl.textContent.trim());
    if (dayNumber === date) {
      const eventObj = eventsArr.find(
        (e) => e.day === date && e.month === month + 1 && e.year === year
      );
      if (!eventObj) {
        dayEl.classList.remove("event");
        dayEl.innerHTML = `${date}`;
      }
    }
  });
}

addEventBtn.addEventListener("click", () => {
  addEventWrapper.classList.remove("hidden");
  tempEvent = null; // Reset temporary event to avoid editing conflicts

  // Clear the form fields
  addEventTitle.value = "";
  addEventRecipe.value = "";
  addEventServingSize.value = "";
  addEventTime.value = "09:00";
  addEventNote.value = "";
});


addEventCloseBtn.addEventListener("click", () => {
  addEventWrapper.classList.add("hidden");

  // Restore temporary event if editing is canceled
  if (tempEvent) {
    tempEvent = null;
  }
});

addEventSubmit.addEventListener("click", (e) => {
  e.preventDefault();

  const title = addEventTitle.value.trim();
  const recipe = addEventRecipe.value.trim();
  const servingSize = addEventServingSize.value.trim();
  const time = addEventTime.value;
  const note = addEventNote.value.trim();

  if (!title || !recipe ) {
    alert("Please fill meal name and time");
    return;
  }

  if (tempEvent) {
    // Update the existing event
    const { date, index } = tempEvent;
    const eventObj = eventsArr.find(
      (e) => e.day === date && e.month === month + 1 && e.year === year
    );
    if (eventObj) {
      eventObj.events[index] = { title, recipe, servingSize, time, note };
    }
  } else {
    // Add a new event
    const newEvent = {
      title,
      recipe,
      servingSize,
      time,
      note,
    };

    let eventAdded = false;
    eventsArr.forEach((eventObj) => {
      if (
        eventObj.day === activeDay &&
        eventObj.month === month + 1 &&
        eventObj.year === year
      ) {
        eventObj.events.push(newEvent);
        eventAdded = true;
      }
    });

    if (!eventAdded) {
      eventsArr.push({
        day: activeDay,
        month: month + 1,
        year,
        events: [newEvent],
      });
    }
  }

  addEventWrapper.classList.add("hidden");
  addEventTitle.value = "";
  addEventRecipe.value = "";
  addEventServingSize.value = "";
  addEventTime.value = "09:00";
  addEventNote.value = "";
  tempEvent = null; // Clear temporary event
  updateEvents(activeDay);

  const allDays = document.querySelectorAll(".day");
  allDays.forEach((dayEl) => {
    const dayNumber = parseInt(dayEl.textContent.trim());
    if (dayNumber === activeDay) {
      dayEl.classList.add("event");
      if (!dayEl.innerHTML.includes("📅")) {
        dayEl.innerHTML += " 📅";
      }
    }
  });
});

prev.addEventListener("click", () => {
  month--;
  if (month < 0) {
    month = 11;
    year--;
  }
  initCalendar();
});

next.addEventListener("click", () => {
  month++;
  if (month > 11) {
    month = 0;
    year++;
  }
  initCalendar();
});

todayBtn.addEventListener("click", () => {
  today = new Date();
  month = today.getMonth();
  year = today.getFullYear();
  initCalendar();
});

gotoBtn.addEventListener("click", () => {
  const dateArr = dateInput.value.split("/");
  if (dateArr.length === 2) {
    const mm = parseInt(dateArr[0], 10) - 1;
    const yyyy = parseInt(dateArr[1], 10);
    if (mm >= 0 && mm <= 11 && yyyy) {
      month = mm;
      year = yyyy;
      initCalendar();
    } else {
      alert("Invalid Date");
    }
  } else {
    alert("Invalid Date Format. Use mm/yyyy");
  }
});

initCalendar();
