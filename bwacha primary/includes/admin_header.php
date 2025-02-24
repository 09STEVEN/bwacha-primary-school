<script src="https://cdn.tailwindcss.com"></script>
<script>

    function logoutsession(){
        window.location.replace('logout.php');
    }

    function indexme(){
        window.location.replace('index.php');
    }

</script>
    <header class="shadow-inherit text-gray-600 body-font " style="box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">

          <img onclick="indexme()" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-80 h-22 bg-black-500 rounded-full" viewBox="0 0 24 24" src="" style="cursor: pointer;">

         
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center"></nav>
        <button onclick="logoutsession()" class="inline-flex items-center border-0 py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Logout <?php echo $_SESSION["usr_nam"]; ?>
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </button>
      </div>
    </header>
    