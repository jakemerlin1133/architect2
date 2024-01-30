<!-- <?php
        include('function.php');
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/445aa1d2b6.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>

    <div class="container mx-auto text-center bg-red-300">
        <div>
            <div>
                <h4 class="text-5xl font-bold p-8">Image Upload</h4>
                <form class="form" id="form" name="form" action="#" method="post">
                    <input type="file" name="image" id="image" multiple="" class="hidden" onchange="image_select()">
                    <button onclick="document.getElementById('image').click()" type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                        Upload Images
                    </button>
                </form>
            </div>

            <div>
                <div id="container" class="grid grid-cols-4 h-auto p-4 overflow-hidden">
                   
                </div>
            </div>

        </div>
    </div>

    <script src="upload.js"></script>
</body>

</html>