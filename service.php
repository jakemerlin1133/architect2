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
                <i class="fa-solid fa-bars text-white ml-[10px] pb-[5px]" id="burger"></i>
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
                        <a href="team.php">About Us</a>
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
            <div id="archi-name" class="text-white font-bold my-auto .... max-[1023px]:text-[1.8em] max-[1023px]:ml-[5px]" data-aos="fade-up" data-aos-duration="3000">SZD</div>
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
                <a href="team.php">About Us</a>
            </li>

            <li>
                <a href="contact-us.php">Contact Us</a>
            </li>
        </ul>
    </div>

    <div class="aboslute top-0 left-0 w-full .... max-[320px]:h-[40vh] .... min-[320px]:h-[40vh] .... min-[426px]:h-[54vh]">
        <img class="h-full w-full object-cover overflow-hidden" src="Architect_files/images/sketch-working.jpg">
    </div>

    <!-- Services -->
    <div class="w-full text-center grid .... min-[320px]:mt-[2rem] .... min-[425px]:mt-[4rem] .... max-[1023px]:grid-cols-1 max-[1023px]:mt-[4rem] .... min-[1024px]:grid-cols-2 min-[1024px]:px-[6rem] min-[1024px]:mt-[6rem] .... min-[1700px]:mt-[8rem]">

        <div >
            <div class="text-zinc-900 text-center font-bold .... max-[1023px]:text-[2.7em] .... min-[1024px]:text-[4em] mb-[2%]">
                About our Service
            </div>

            <div class="max-[1023px]:mx-auto grid grid-cols-2 bg-zinc-900 w-full  .... min-[375px]:p-[1rem] min-[375px]:gap-4 min-[375px]:h-[20rem] .... max-[375px]:p-[1rem] max-[375px]:gap-4 max-[375px]:h-[20rem] .... min-[425px]:p-[1rem] min-[425px]:gap-4 min-[425px]:h-[28rem] .... min-[426px]:p-[2rem] min-[426px]:gap-8 min-[426px]:h-[44rem]">

                <!-- image 1 -->
                <div class="relative">
                    <img class="absolute w-full h-full object-cover transform transition-all duration-700 min-[1024px]:hover:scale-110" src="Architect_files/images/house3.jpg">
                </div>

                <!-- image 2 -->
                <div class="relative">
                    <img class="absolute w-full h-full object-cover transform transition-all duration-700 min-[1024px]:hover:scale-110" src="Architect_files/images/house.jpg">
                </div>

                <!-- image 3 -->
                <div class="relative">
                    <img class="absolute w-full h-full object-cover transform transition-all duration-700 min-[1024px]:hover:scale-110" src="Architect_files/images/socialized housing_3.jpg">
                </div>

                <!-- image 4 -->
                <div class="relative">
                    <img class="absolute w-full h-full object-cover transform transition-all duration-700 min-[1024px]:hover:scale-110" src="Architect_files/images/house2.jpg">
                </div>
            </div>
        </div>
        <div class="mx-auto w-[80%]">

            <div class="max-[1023px]:text-[0.7rem] .... min-[1024px]:text-[1.02rem] min-[1024px]:pt-[11rem] .... min-[1300px]:text-[1.15rem] .... min-[1549px]:text-[1.4rem]">
                <div class="text-justify font-semibold text-gray-700">
                    <div>
                        DB&B's divese clientle, comprising the corporate sector, is testament to our ability to respond to the evolving nature of the architectural landscape. We retain the resounding trademark of precise craftsmanship, without forgetting the need for a distinctive corporate image whilst contributing to overall productivity.
                    </div>
                    <div class="text-justify mt-[4%]">
                        From design conceptualization to space planning, DB&B's comprehensive project management services encompass even minute details like lightning and customized system furniture in every aspect.
                    </div>
                    <div class="text-justify mt-[4%]">
                        As clients, you can count on us to deliver a complete design and project management package. Translating your unique needs accurately into a space plan, we will carry through your idea from inception to the eventual use.
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class=" grid grid-cols-2">
        <div>
            1
        </div>
        <div>
            2
        </div>
    </div>





    <div class="h-[100vh]"></div>



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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="path-to-aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>