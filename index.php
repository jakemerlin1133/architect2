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

    <!-- Services -->
    <div class="text-center grid max-[1023px]:grid-cols-1 min-[1024px]:grid-cols-2  .... max-[969px]:pt-[58%] min-[970px]:pt-[83vh] w-full">
        <div class="mx-auto w-[80%]">
            <div class="text-center font-bold text-[3.5em] mb-[2%]">
                Our Services
            </div>

            <div class="text-[1.3rem]">
                <div class="text-justify font-semibold text-gray-700">
                    <div>
                        We create award-winning spaces that inspire, motivate and empower the working community. Workspace design and functionality vary according to the people in them, and no projects are identical - something we have learnt over the past 25 years.
                    </div>
                    <div class="text-justify mt-[4%]">
                        To deliver a people-centric, we constantly strive to provide an array of interior design solutions that can be combined in various ways to meet different project needs. We believe that the design and construction process should be systematic, seamless nad integrated, with minimal hassle to our clients.
                    </div>
                </div>
                <div>

                </div>
                <h1 class="text-black text-left mb-[5%]"><i class=" fa-solid fa-plus mt-[5%] text-2xl py-[10px] px-[15px] bg-blue-600 rounded-full"></i><a href=""><span class="ml-[15px] text-xl font-bold hover:text-blue-600 cursor-pointer">View more.</span></a></h1>
            </div>
        </div>

        <div class="max-[1023px]:mx-auto grid grid-cols-2 bg-black w-[80%]  .... max-[375px]:p-[1rem] max-[375px]:gap-4 max-[375px]:h-[20rem] .... max-[425px]:p-[1rem] max-[425px]:gap-4 max-[425px]:h-[28rem] .... min-[426px]:p-[2rem] min-[426px]:gap-8 min-[426px]:h-[44rem]">
            <!-- image 1 -->
            <div class="relative">
                <img class="absolute w-full h-full object-cover transform transition-all duration-700 min-[1023px]:hover:scale-110" src="Architect_files/images/hylands.jpg">
            </div>
            <!-- content -->
            <div class="relative">
                <div class="absolute bg-gray-600 w-full h-full font-bold flex flex-col justify-center items-center">
                    <h1 class="text-white .... max-[767px]:text-[2.5vw] .... min-[768px]:text-[1.2vw]">Hello There.</h1>
                    <h1 class="text-black .... max-[767px]:text-[5vw] .... min-[768px]:text-[2.7vw]">Hello There.</h1>
                    <h1 class="text-white .... max-[767px]:text-[2.5vw] .... min-[768px]:text-[1.2vw]">Hello There.</h1>
                </div>
            </div>
            <!-- image 2 -->
            <div class="relative">
                <img class="absolute w-full h-full object-cover transform transition-all duration-700 min-[1023px]:hover:scale-110" src="Architect_files/images/house.jpg">
            </div>
            <!-- image 3 -->
            <div class="relative">
                <img class="absolute w-full h-full object-cover transform transition-all duration-700 min-[1023px]:hover:scale-110" src="Architect_files/images/best.jpg">
            </div>
        </div>
    </div>

    <!-- Portfolio -->
    <div class="font-bold text-center text-[3.5em] mt-[3rem] mb-[1rem]">
        Our Portfolio
    </div>

    <!-- 1st carousel -->
    <div class="min-[1023px]:p-[2.5vw] grid max-[1023px]:grid-cols-1 min-[1024px]:grid-cols-2" style="grid-template-columns: 2fr 1fr;">
        <div>
            <div id="default-carousel" class="relative w-full z-[1]" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden .... max-[1023px]:h-[23rem] .... min-[1024px]:h-[40rem]">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="Architect_files/images/house.jpg" class="absolute block w-full h-full object-cover">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="Architect_files/images/best.jpg" class="absolute block w-full h-full object-cover">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="Architect_files/images/hylands.jpg" class="absolute block w-full h-full object-cover">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>

        <div class="bg-black w-full pt-[10%] pl-[10%] .... min-[1024px]:my-auto min-[1024px]:h-[90%]">
            <div class="text-sky-600 font-bold text-[1.5em]">Design Cunsultancy</div>
            <div class="text-white font-bold text-[3em] pr-[5%]">Amazon Singapore</div>
            <div class="text-white font-bold w-[80%] text-[1.2em] mt-[2%]">Tech-giant amazon scales up their presence in Singapore through a new office spanning three floors at Asia Squre. The new space will house up to 700 employees from Amazon's consumer business and corporate functions.</div>
            <h1 class="text-white mb-[5%]"><i class=" fa-solid fa-plus mt-[11%] text-2xl py-[10px] px-[15px] bg-blue-600 rounded-full"></i><a href=""><span class="ml-[15px] text-xl font-bold hover:text-blue-600 cursor-pointer">View more.</span></a></h1>
        </div>
    </div>

    <!-- 2nd carousel -->
    <div class="mt-[7%] min-[1023px]:p-[2.5vw] grid max-[1023px]:grid-cols-1 min-[1024px]:grid-cols-2" style="grid-template-columns: 1fr 2fr;">
        <div class="bg-black w-full pt-[10%] pl-[10%] .... min-[1024px]:my-auto min-[1024px]:h-[90%]">
            <div class="text-sky-600 font-bold text-[1.5em]">Design Cunsultancy</div>
            <div class="text-white font-bold text-[3em] pr-[5%]">Amazon Singapore</div>
            <div class="text-white font-bold w-[80%] text-[1.2em] mt-[2%]">Tech-giant amazon scales up their presence in Singapore through a new office spanning three floors at Asia Squre. The new space will house up to 700 employees from Amazon's consumer business and corporate functions.</div>
            <h1 class="text-white mb-[5%]"><i class=" fa-solid fa-plus mt-[11%] text-2xl py-[10px] px-[15px] bg-blue-600 rounded-full"></i><a href=""><span class="ml-[15px] text-xl font-bold hover:text-blue-600 cursor-pointer">View more.</span></a></h1>
        </div>

        <div>
            <div id="default-carousel" class="relative w-full z-[1]" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden .... max-[1023px]:h-[23rem] .... min-[1024px]:h-[40rem]">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="Architect_files/images/best.jpg" class="absolute block w-full h-full object-cover">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="Architect_files/images/house.jpg" class="absolute block w-full h-full object-cover">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="Architect_files/images/hylands.jpg" class="absolute block w-full h-full object-cover">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>

        <!-- 3rd carousel -->
        <div class="mt-[7%] min-[1023px]:p-[2.5vw] grid max-[1023px]:grid-cols-1 min-[1024px]:grid-cols-2" style="grid-template-columns: 2fr 1fr;">
        <div>
            <div id="default-carousel" class="relative w-full z-[1]" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden .... max-[1023px]:h-[23rem] .... min-[1024px]:h-[40rem]">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="Architect_files/images/hylands.jpg" class="absolute block w-full h-full object-cover">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="Architect_files/images/house.jpg" class="absolute block w-full h-full object-cover">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="Architect_files/images/best.jpg" class="absolute block w-full h-full object-cover">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>

        <div class="bg-black w-full pt-[10%] pl-[10%] .... min-[1024px]:my-auto min-[1024px]:h-[90%]">
            <div class="text-sky-600 font-bold text-[1.5em]">Design Cunsultancy</div>
            <div class="text-white font-bold text-[3em] pr-[5%]">Amazon Singapore</div>
            <div class="text-white font-bold w-[80%] text-[1.2em] mt-[2%]">Tech-giant amazon scales up their presence in Singapore through a new office spanning three floors at Asia Squre. The new space will house up to 700 employees from Amazon's consumer business and corporate functions.</div>
            <h1 class="text-white mb-[5%]"><i class=" fa-solid fa-plus mt-[11%] text-2xl py-[10px] px-[15px] bg-blue-600 rounded-full"></i><a href=""><span class="ml-[15px] text-xl font-bold hover:text-blue-600 cursor-pointer">View more.</span></a></h1>
        </div>
    </div>


    <div class="h-[100vh]">

    </div>

    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>