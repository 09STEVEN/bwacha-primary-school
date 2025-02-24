<?php
include 'connection/database.php';

try {

    $query = "SELECT * FROM web_content WHERE id = 6";
    $result = mysqli_query($connection, $query);


    if ($result) {

        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Error executing the query: " . mysqli_error($connection);
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {

    mysqli_close($connection);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extras </title>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="javaScript/extras.js"></script>
    

</head>

<body>






    <?php include("includes/header.php") ?>
    <main>
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-10 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-black underline">EXTRAS</h1>
                    <p class="text-sm md:text-base lg:w-2/3 mx-auto leading-relaxed text-base"><?php echo $row['one'];?>
                    </p>
                </div>
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full" onclick="gallery()">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg hover:bg-blue-100">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="assects/images/extras_avatar/gallery.jpg">
                            <div class="flex-grow">
                                <h2 class="text-blue-600 title-font font-medium">Gallery</h2>
                                <p class="text-sm md:text-base text-gray-500">Events, Picnic, Memories</p>
                            </div>
                        </div>
                    </div>
            
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full" onclick="nepalicalender()">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg hover:bg-blue-100">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="assects/images/extras_avatar/calender.png">
                            <div class="flex-grow">
                                <h2 class="text-blue-600 title-font font-medium">Calender</h2>
                                <p class="text-sm md:text-base text-gray-500">Holidays, Events, Days</p>
                            </div>
                        </div>
                    </div>
                 
                  
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full" onclick="eskulu()">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg hover:bg-blue-100">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="assects/images/extras_avatar/online.png">
                            <div class="flex-grow">
                                <h2 class="text-blue-600 title-font font-medium">Online books</h2>
                                <p class="text-sm md:text-base text-gray-500">Digital Copy of Any Book</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full" onclick="staffs()">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg hover:bg-blue-100">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="assects/images/extras_avatar/staffs.png">
                            <div class="flex-grow">
                                <h2 class="text-blue-600 title-font font-medium">Staff</h2>
                                <p class="text-sm md:text-base text-gray-500">School Staff,
                                    Teacher Association (PTA)</p>
                            </div>
                        </div>
                    </div>
                
                    
                </div>
            </div>
           
        </section>
    </main>
    <?php include("includes/footer.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
<script>
console.clear();
</script>

</html>