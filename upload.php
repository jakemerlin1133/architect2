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

<body>

    <div class="text-center">
        <img class="max-[320px]:ml-[80px] min-[320px]:mx-auto mt-[2rem] rounded-lg" height="150" width="150" src="Architect_files/images/sample-logo.png">
        <div class="font-bold text-3xl mt-[1rem]">SZD Architectural Design Studio</div>
    </div>

    <main class="app">
        <form id="queued-form">

            <div>
                <h1>Title of the Design</h1>
                <input class="w-full focus:outline-none" type="text" placeholder="Title">
            </div>


            <div class="mt-[2rem]">
                <h1>Desciption of the Design</h1>
                <textarea class="w-full h-[50vh] focus:outline-none p-[10px]" placeholder="Description"></textarea>
            </div>

            <div class="header">
                <h2>Upload Image </h2>
                <div class="server-message"></div>
            </div>
            <div class="input-div">
                <p>Drag & Drop images here <span class="browse">Browser</span></p>
                <input type="file" class="file" multiple="multiple" accept="image/png, image/jpeg, image/jpg, image/webp">
            </div>

            <div class="queued-div"></div>
            <div class="text-center mt-[1rem]">
                <button class="mx-auto" type="submit">Upload</button>
            </div>
        </form>
    </main>














    <script src="upload.js"></script>
</body>

</html>