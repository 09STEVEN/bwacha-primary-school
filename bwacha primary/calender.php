<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calender</title>
<script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

<style>
input {
border-radius: 20px;
border: 1px solid black;
}
</style>
</head>

<body>
<?php include("includes/header.php") ?>
<section class="text-gray-600 body-font">
<div class="container px-5 py-10 mx-auto">
<div class="flex flex-col text-center w-full mb-20">
<h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-blue-600">Calender</h1>
<p class="text-sm md:text-base lg:w-2/3 mx-auto leading-relaxed text-base">Dear students,
Please find attached the calendar for your reference regarding traditional festivals. It is advisable to consult official notices for accurate information on holidays and time off.
</p>
</div>
</div>
</section>
<div class="mt-5 mb-0 mx-5">
<iframe src="https://calendar.google.com/calendar/embed?src=YOUR_CALENDAR_ID&ctz=Africa/Lusaka" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>
<div class="content-center mx-5 mb-10" style="display: flex; justify-content: center;">
<script>
  const api_key = "";
  const country = "Zambia";
  const year = new Date().getFullYear();

  fetch(`https://calendarific.com/api/v2/holidays?country=${country}&year=${year}&api_key=${api_key}`)
    .then(response => response.json())
    .then(data => {
      const events = data.response.holidays;
      const eventsHtml = events.map(event => {
        return `<div>${event.name} - ${event.date.iso}</div>`;
      }).join("");
      document.getElementById("events").innerHTML = eventsHtml;
    });
</script>

<div id="events"></div>
</div>
</body>
<script>
console.clear();
</script>
</html>

    <?php include("includes/footer.php") ?>
</body>
<script>
console.clear();
</script>

</html>