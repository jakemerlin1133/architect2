<?php
include('function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/445aa1d2b6.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="upload.css">
    <title>Document</title>
</head>

<body class="bg-slate-200">

    <div class="text-center">
        <img class="max-[320px]:ml-[80px] min-[320px]:mx-auto mt-[2rem] rounded-lg" height="150" width="150" src="Architect_files/images/sample-logo.png">
        <div class="font-bold text-3xl mt-[1rem]">SZD Architectural Design Studio</div>
    </div>

    <main class="app">
        <form method="POST" id="queued-form" enctype="multipart/form-data">

            <div>
                <h1 class="font-bold">Choose category of the Design</h1>
                <select name="category" id="category" class="w-[50%] pl-[5px]">
                    <?php foreach ($category as $categories) { ?>
                        <option value="<?php echo $categories['Category']; ?>"><?php echo $categories['Category']; ?></option>
                    <?php } ?>

                </select>
            </div>


            <div>
                <h1 class="font-bold">Title of the Design</h1>
                <input class="w-full focus:outline-none" name="title" id="title" type="text" placeholder="Title">
            </div>


            <div class="mt-[2rem]">
                <h1 class="font-bold">Description of the Design</h1>
                <textarea class="w-full h-[50vh] focus:outline-none p-[10px]" name="description" id="description" placeholder="Description"></textarea>
            </div>

            <div class="header">
                <h2 class="font-bold">Upload Image </h2>
                <div class="server-message"></div>
            </div>

            <div class="input-div">
                <p>Drag & Drop images here <span class="browse">Browser</span></p>
            </div> 
                <input type="file" name="image[]" multiple="multiple" accept="image/png, image/jpeg, image/jpg, image/webp">



            <div class="queued-div"></div>
            <div class="text-center mt-[1rem]">
                <button class="mx-auto" type="submit" name="upload" id="upload">Upload</button>
            </div>
        </form>
    </main>






    <script src="upload.js"></script>
</body>

</html>