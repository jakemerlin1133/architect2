<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/445aa1d2b6.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <header class="header" id="header-pc">
        <div class="grid grid-cols-2">
            <div class="flex .... max-[320px]:h-[50px] max-[320px]:w-[50px] .... min-[320px]:h-[50px] min-[320px]:w-[50px]">
                <img class="max-[320px]:h-[40px] max-[320px]:w-[40px] max-[320px]:my-[5px] max-[320px]:ml-[7px] .... min-[320px]:h-[40px] min-[320px]:w-[40px] min-[320px]:my-[5px] min-[320px]:ml-[7px] .... max-[1023px]:hidden" src="Architect_files/images/sample-logo.png">
                <div id="archi-name" class="text-white my-auto .... max-[320px]:ml-[5px] max-[320px]:font-bold max-[320px]:text-[1.6em] .... min-[320px]:ml-[5px] min-[320px]:font-bold min-[320px]:text-[1.6em] .... max-[1023px]:hidden">SZD</div>
                <i class="fa-solid fa-bars text-white ml-[10px]" id="burger"></i>
            </div>

            <div class="text-white">
                <!-- Menubar for mobile -->


                <!-- PC/laptop ul -->
                <ul class="flex font-bold" id="pc-header">

                    <li>
                        <a href="index.php">Home</a>
                    </li>


                    <li>
                        <a href="service.php">Service</a>
                    </li>


                    <li>
                        <a href="portfolio.php">Portfolio</a>
                    </li>


                    <li>
                        <a href="team.php">Team</a>
                    </li>


                    <li>
                        <a href="contact-us.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

        <!-- sidebar -->
    <div class="sidebar" id="sidebar">

        <div class="flex ml-[65px] mt-[20px]">
            <img class="max-[1023px]:h-[50px] max-[1023px]:w-[50px]" src="Architect_files/images/sample-logo.png">
            <div id="archi-name" class="text-white font-bold my-auto .... max-[1023px]:text-[1.8em] max-[1023px]:ml-[5px]">SZD</div>
        </div>

        <ul>
            <li>
                <a href="index.php">Homes</a>
            </li>

            <li>
                <a href="service.php">Service</a>
            </li>

            <li>
                <a href="portfolio.php">Portfolio</a>
            </li>

            <li>
                <a href="team.php">Team</a>
            </li>

            <li>
                <a href="contact-us.php">Contact Us</a>
            </li>

        </ul>
    </div>
    <!-- video header -->
    <div class="" id="contrast"></div>
    
    <div class="video-container">
        <video muted autoplay loop>
            <source src="Architect_files/videos/Homepage.mp4">
        </video>

        <div class="relative text-white" id="overlay">
            <div class="absolute bottom-[9%] left-[4%]">
                <div class="max-[1023px]:text-[7vw] .... min-[1024px]:text-[4.5vw] font-bold" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="200">Design</div>
                <div class="pl-[6vw] max-[1023px]:text-[7vw] .... min-[1024px]:text-[4.5vw] font-bold" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">& Build.</div>
                <div class="pl-[6vw] max-[1023px]:text-[2.5vw] .... min-[1024px]:text-[1.5vw]" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="400">We design and build award-winning commercial interiors.</div>
            </div>
        </div>
    </div>



    <div class="max-[969px]:mt-[56.2%] min-[970px]:mt-[74.5vh] w-full h-[100vh] bg-red-900">
        sadqwqwd
    </div>


    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>