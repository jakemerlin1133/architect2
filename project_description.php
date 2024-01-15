<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/445aa1d2b6.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <header class="header" id="header-pc">
        <div class="grid grid-cols-2">
            <div class="flex justify-center items-center .... max-[320px]:h-[50px] max-[320px]:w-[50px] .... min-[320px]:h-[50px] min-[320px]:w-[50px] .... min-[1024px]:ml-[1.8rem]">
                <img class="rounded-lg max-[320px]:h-[30px] max-[320px]:w-[30px] max-[320px]:my-[5px] max-[320px]:ml-[7px] .... min-[320px]:h-[30px] min-[320px]:w-[30px] min-[320px]:my-[5px] min-[320px]:ml-[7px] .... max-[1023px]:hidden" src="Architect_files/images/sample-logo.png">
                <div id="archi-name" class="text-white my-auto .... max-[320px]:ml-[5px] max-[320px]:font-bold max-[320px]:text-[1.6em] .... min-[320px]:ml-[5px] min-[320px]:font-bold min-[320px]:text-[1.6em] .... max-[1023px]:hidden">SZD</div>
                <i class="fa-solid fa-bars text-white ml-[10px]" id="burger"></i>
            </div>

            <div class="text-white .... max-[1023px]:hidden">

                <!-- PC/laptop ul -->
                <ul class="flex font-bold" id="pc-header">

                    <li>
                        <a href="index.php">Home</a>
                    </li>


                    <li>
                        <a href="service.php">Service</a>
                    </li>


                    <li>
                        <a href="showcase.php">Showcase</a>
                    </li>


                    <li>
                        <a href="about-us.php">About Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </header>

    <!-- sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="flex ml-[65px] mt-[20px]">
            <img class="max-[1023px]:rounded-lg max-[1023px]:h-[50px] max-[1023px]:w-[50px]" src="Architect_files/images/sample-logo.png">
            <div id="archi-name" class="text-white font-bold my-auto .... max-[1023px]:text-[1.8em] max-[1023px]:ml-[5px]">SZD</div>
        </div>

        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>

            <li>
                <a href="service.php">Service</a>
            </li>

            <li>
                <a href="showcase.php">Showcase</a>
            </li>

            <li>
                <a href="about-us.php">About Us</a>
            </li>
        </ul>
    </div>

    <!-- Services -->
    <div class=" text-center grid max-[1023px]:grid-cols-1 min-[1024px]:grid-cols-2  .... max-[969px]:pt-[18%] min-[970px]:pt-[12vh] w-full">
        <div class="mx-auto w-[80%]">
            <div class="text-zinc-900 text-center font-extrabold mb-[2%] .... min-[320px]:text-[2.6rem] .... min-[425px]:text-[3.2rem] .... min-[768px]:text-[4rem] .... min-[1600px]:text-[5em]">
                2 Storey
            </div>

            <div class="max-[1023px]:text-[1rem] .... min-[1024px]:text-[1.1rem] .... min-[1500px]:text-[1.6rem]">
                <div class="text-justify font-semibold text-gray-700">
                    <div>
                        We create award-winning spaces that inspire, motivate and empower the working community. Workspace design and functionality vary according to the people in them, and no projects are identical - something we have learnt over the past 25 years.
                    </div>
                    <div class="text-justify mt-[4%]">
                        To deliver a people-centric, we constantly strive to provide an array of interior design solutions that can be combined in various ways to meet different project needs. We believe that the design and construction process should be systematic, seamless nad integrated, with minimal hassle to our clients.
                    </div>
                    <div class="text-justify mt-[4%]">
                        To deliver a people-centric, we constantly strive to provide an array of interior design solutions that can be combined in various ways to meet different project needs. We believe that the design and construction process should be systematic, seamless nad integrated, with minimal hassle to our clients.
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="max-[1023px]:mx-auto w-[95%] .... min-[375px]:p-[1.2rem] min-[375px]:gap-5 min-[375px]:h-[20rem] .... max-[375px]:p-[1.2rem] max-[375px]:gap-5 max-[375px]:h-[20rem] .... min-[425px]:p-[1.4rem] min-[425px]:gap-5 min-[425px]:h-[28rem] .... min-[426px]:p-[1.3rem] min-[426px]:gap-5 min-[426px]:h-[30rem] .... min-[660px]:p-[1.6rem] min-[660px]:gap-6 min-[660px]:h-[40rem] .... min-[1024px]:p-[1.4rem] min-[1024px]:gap-6 min-[1024px]:h-[30rem] min-[1024px]:mt-[7rem] .... min-[1500px]:p-[1.8rem] min-[1500px]:gap-7 min-[1500px]:h-[40rem]">
            <div class="relative h-[400px]">
                <div id="default-carousel" class="relative w-full z-[1]" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden .... max-[320px]:h-[15rem] .... min-[320px]:h-[15rem] .... min-[470px]:h-[20rem] .... min-[600px]:h-[25rem] .... min-[750px]:h-[30rem] .... min-[870px]:h-[35rem] .... min-[1024px]:h-[25rem] .... min-[1500px]:h-[40rem]">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="Architect_files/images/house.jpg" class="absolute block w-full h-full object-cover">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="Architect_files/images/house1.jpg" class="absolute block w-full h-full object-cover">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="Architect_files/images/house2.jpg" class="absolute block w-full h-full object-cover">
                        </div>
                    </div>
                    <h2 class="hidden" id="category-value">2 storey</h2>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="path-to-aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>