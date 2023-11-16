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


    <div class="" id="contrast"></div>
    <div class="aboslute top-0 left-0 w-full .... max-[320px]:h-[40vh] .... min-[320px]:h-[40vh] .... min-[426px]:h-[53vh]">
        <img class="h-full w-full object-cover overflow-hidden" src="Architect_files/images/dine-in.jpg">
    </div>

    <div class="text-zinc-800 text-center font-bold mb-[2%] .... max-[320px]:text-[2.5rem] max-[320px]:mt-[2rem] .... min-[320px]:text-[2.5rem] min-[320px]:mt-[2rem] .... min-[375px]:text-[3rem] min-[375px]:mt-[2rem] .... min-[768px]:text-[3.5rem] min-[768px]:mt-[2rem] .... min-[1024px]:text-[4.5rem] min-[1024px]:mt-[4rem]">
        Our Showcase
    </div>


    <div class="font-semibold text-gray-600 max-[320px]:text-center .... min-[320px]:text-center .... min-[425px]:text-left min-[425px]:ml-[3rem]">
        <select name="categories" id="categories" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-[15rem] p-2.5">
            <option class="text-gray-600 font-semibold" value="All">All</option>
            <option class="text-gray-600 font-semibold" value="2 storey">2 storey</option>
            <option class="text-gray-600 font-semibold" value="3 storey">3 storey</option>
            <option class="text-gray-600 font-semibold" value="Mansion">Mansion</option>
            <option class="text-gray-600 font-semibold" value="School">School</option>
            <option class="text-gray-600 font-semibold" value="Bungalow">Bungalow</option>
        </select>
    </div>

    <div class="grid gap-8 m-[2rem] ....max-[1023px]:grid-cols-1 .... min-[1024px]:grid-cols-2 .... min-[1500px]:grid-cols-3" id="container">
        <a href="#" id="showcase">
            <div class="relative h-[400px]">
                <div id="default-carousel" class="relative w-full z-[1]" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden .... max-[1023px]:h-[23rem] .... min-[1024px]:h-[25rem]">
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
                    <div class="absolute z-[20] bg-black/25 h-full w-full top-0 hover:bg-black/75 hover:opacity-75">
                        <h1 class="absolute w-full text-gray-50 drop-shadow-md bottom-4 px-[0.7rem] font-bold text-left.... max-[320px]:text-[1.8rem] .... min-[320px]:text-[1.8rem] .... min-[768px]:text-[2.5rem]">2 Storey</h1>
                    </div>
                    <h2 class="hidden" id="category-value">2 storey</h2>
                </div>
            </div>
        </a>

        <a href="#" id="showcase">
            <div class="relative h-[400px]">
                <div id="default-carousel" class="relative w-full z-[1]" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden .... max-[1023px]:h-[23rem] .... min-[1024px]:h-[25rem]">
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
                    <div class="absolute z-[20] bg-black/25 h-full w-full top-0 hover:bg-black/75 hover:opacity-75">
                        <h1 class="absolute w-full text-gray-50 drop-shadow-md bottom-4 px-[0.7rem] font-bold text-left.... max-[320px]:text-[1.8rem] .... min-[320px]:text-[1.8rem] .... min-[768px]:text-[2.5rem]">Mansion</h1>
                    </div>
                    <h2 class="hidden" id="category-value">Mansion</h2>
                </div>
            </div>
        </a>

        <a href="#" id="showcase">
            <div class="relative h-[400px]">
                <div id="default-carousel" class="relative w-full z-[1]" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden .... max-[1023px]:h-[23rem] .... min-[1024px]:h-[25rem]">
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
                    <div class="absolute z-[20] bg-black/25 h-full w-full top-0 hover:bg-black/75 hover:opacity-75">
                        <h1 class="absolute w-full text-gray-50 drop-shadow-md bottom-4 px-[0.7rem] font-bold text-left.... max-[320px]:text-[1.8rem] .... min-[320px]:text-[1.8rem] .... min-[768px]:text-[2.5rem]">Mansion</h1>
                    </div>
                    <h2 class="hidden" id="category-value">Mansion</h2>
                </div>
            </div>
        </a>

        <a href="#" id="showcase">
            <div class="relative h-[400px]">
                <div id="default-carousel" class="relative w-full z-[1]" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden .... max-[1023px]:h-[23rem] .... min-[1024px]:h-[25rem]">
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
                    <div class="absolute z-[20] bg-black/25 h-full w-full top-0 hover:bg-black/75 hover:opacity-75">
                        <h1 class="absolute w-full text-gray-50 drop-shadow-md bottom-4 px-[0.7rem] font-bold text-left.... max-[320px]:text-[1.8rem] .... min-[320px]:text-[1.8rem] .... min-[768px]:text-[2.5rem]">3 storey</h1>
                    </div>

                    <h2 class="hidden" id="category-value">3 storey</h2>
                </div>
            </div>
        </a>

        <a href="#" id="showcase">
            <div class="relative h-[400px]">
                <div id="default-carousel" class="relative w-full z-[1]" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden .... max-[1023px]:h-[23rem] .... min-[1024px]:h-[25rem]">
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
                    <div class="absolute z-[20] bg-black/25 h-full w-full top-0 hover:bg-black/75 hover:opacity-75">
                        <h1 class="absolute w-full text-gray-50 drop-shadow-md bottom-4 px-[0.7rem] font-bold text-left.... max-[320px]:text-[1.8rem] .... min-[320px]:text-[1.8rem] .... min-[768px]:text-[2.5rem]">3 storey</h1>
                    </div>
                    <h2 class="hidden" id="category-value">3 storey</h2>
                </div>
            </div>
        </a>

        <a href="#" id="showcase">
            <div class="relative h-[400px]">
                <div id="default-carousel" class="relative w-full z-[1]" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden .... max-[1023px]:h-[23rem] .... min-[1024px]:h-[25rem]">
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
                    <div class="absolute z-[20] bg-black/25 h-full w-full top-0 hover:bg-black/75 hover:opacity-75">
                        <h1 class="absolute w-full text-gray-50 drop-shadow-md bottom-4 px-[0.7rem] font-bold text-left.... max-[320px]:text-[1.8rem] .... min-[320px]:text-[1.8rem] .... min-[768px]:text-[2.5rem]">3 storey</h1>
                    </div>
                    <h2 class="hidden" id="category-value">3 storey</h2>
                </div>
            </div>
        </a>

        <a href="#" id="showcase">
            <div class="relative h-[400px]">
                <div id="default-carousel" class="relative w-full z-[1]" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden .... max-[1023px]:h-[23rem] .... min-[1024px]:h-[25rem]">
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
                    <div class="absolute z-[20] bg-black/25 h-full w-full top-0 hover:bg-black/75 hover:opacity-75">
                        <h1 class="absolute w-full text-gray-50 drop-shadow-md bottom-4 px-[0.7rem] font-bold text-left.... max-[320px]:text-[1.8rem] .... min-[320px]:text-[1.8rem] .... min-[768px]:text-[2.5rem]">School</h1>
                    </div>
                    <h2 class="hidden" id="category-value">School</h2>
                </div>
            </div>
        </a>

        <a href="#" id="showcase">
            <div class="relative h-[400px]">
                <div id="default-carousel" class="relative w-full z-[1]" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden .... max-[1023px]:h-[23rem] .... min-[1024px]:h-[25rem]">
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
                    <div class="absolute z-[20] bg-black/25 h-full w-full top-0 hover:bg-black/75 hover:opacity-75">
                        <h1 class="absolute w-full text-gray-50 drop-shadow-md bottom-4 px-[0.7rem] font-bold text-left.... max-[320px]:text-[1.8rem] .... min-[320px]:text-[1.8rem] .... min-[768px]:text-[2.5rem]">School</h1>
                    </div>
                    <h2 class="hidden" id="category-value">School</h2>
                </div>
            </div>
        </a>

        <a href="#" id="showcase">
            <div class="relative h-[400px]">
                <div id="default-carousel" class="relative w-full z-[1]" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden .... max-[1023px]:h-[23rem] .... min-[1024px]:h-[25rem]">
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
                    <div class="absolute z-[20] bg-black/25 h-full w-full top-0 hover:bg-black/75 hover:opacity-75">
                        <h1 class="absolute w-full text-gray-50 drop-shadow-md bottom-4 px-[0.7rem] font-bold text-left.... max-[320px]:text-[1.8rem] .... min-[320px]:text-[1.8rem] .... min-[768px]:text-[2.5rem]">Bungalow</h1>
                    </div>
                    <h2 class="hidden" id="category-value">Bungalow</h2>
                </div>
            </div>
        </a>
    </div>

    <!-- pagination -->
    <div class="flex justify-center">
    <ul class="flex" id="pagination">
    </ul>
</div>

    <!-- Contact us -->
    <div class="bg-gray-950 grid h-full .... max-[320px]:grid-cols-1 max-[320px]:mt-[3rem] max-[320px]:px-[9%] max-[320px]:py-[1rem] .... min-[320px]:grid-cols-1 min-[320px]:mt-[3rem] min-[320px]:px-[9%] min-[320px]:py-[1rem] .... min-[1024px]:grid-cols-3 min-[1024px]:text-center min-[1024px]:py-[2.5rem] min-[1024px]:mt-[9rem]">
        <div class="text-white font-bold .... max-[320px]:text-[3.5rem] .... min-[320px]:text-[3.5rem]">SZD</div>

        <div class="text-white">
            <div class="font-bold .... max-[320px]:text-[1.8rem] .... min-[320px]:text-[1.8rem]">Contact us</div>
            <div class="max-[320px]:text-[0.8rem] .... min-[320px]:text-[0.8rem]">Address: Santa Barbara, Philippines</div>
            <div class="max-[320px]:text-[0.8rem] .... min-[320px]:text-[0.8rem]">Email: szddesignstudio@gmail.com</div>
            <div class="max-[320px]:text-[0.8rem] .... min-[320px]:text-[0.8rem]">Whatsapp: +63 917 715 4075</div>
        </div>

        <div class="text-white max-[320px]:mt-[2rem]">
            <div class="font-bold .... max-[320px]:text-[1.8rem] max-[320px]:mt-[1%] .... min-[320px]:text-[1.8rem] min-[320px]:mt-[1%]">
                Follow us
            </div>

            <div class="flex text-black min-[1024px]:justify-center">
                <a href="https://www.facebook.com/szdarchitectsph" target="https://www.facebook.com/szdarchitectsph" class="bg-slate-200 font-bold rounded-md hover:opacity-75 .... max-[320px]:mx-[0.2rem] max-[320px]:px-[0.8rem] max-[320px]:py-[0.3rem] max-[320px]:mt-[0.4rem] max-[320px]:text-[1.3rem] .... min-[320px]:mx-[0.2rem] min-[320px]:px-[0.8rem] min-[320px]:py-[0.3rem] min-[320px]:mt-[0.4rem] min-[320px]:text-[1.3rem]"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/szddesignstudioph/" target="https://www.instagram.com/szddesignstudioph/" class="bg-slate-200 font-bold rounded-md hover:opacity-75 .... max-[320px]:mx-[0.2rem] max-[320px]:px-[0.7rem] max-[320px]:py-[0.3rem] max-[320px]:mt-[0.4rem] max-[320px]:text-[1.3rem] .... min-[320px]:mx-[0.2rem] min-[320px]:px-[0.7rem] min-[320px]:py-[0.3rem] min-[320px]:mt-[0.4rem] min-[320px]:text-[1.3rem]"><i class="fa-brands fa-instagram"></i></a>
                <a href="" target="" class="bg-slate-200 font-bold rounded-md hover:opacity-75 .... max-[320px]:mx-[0.2rem] max-[320px]:px-[0.7rem] max-[320px]:py-[0.3rem] max-[320px]:mt-[0.4rem] max-[320px]:text-[1.3rem] .... min-[320px]:mx-[0.2rem] min-[320px]:px-[0.7rem] min-[320px]:py-[0.3rem] min-[320px]:mt-[0.4rem] min-[320px]:text-[1.3rem]"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="category.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>