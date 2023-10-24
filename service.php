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

    <div class="" id="contrast"></div>
    <div class="aboslute top-0 left-0 w-full .... max-[320px]:h-[40vh] .... min-[320px]:h-[40vh] .... min-[426px]:h-[54vh]">
        <img class="h-full w-full object-cover overflow-hidden" src="Architect_files/images/sketch-working.jpg">
    </div>

    <!-- Services -->
    <div class="w-full text-center grid .... min-[320px]:mt-[3rem] .... min-[425px]:mt-[4rem] .... max-[1023px]:grid-cols-1 max-[1023px]:mt-[4rem] .... min-[1024px]:grid-cols-2 min-[1024px]:px-[6rem] min-[1024px]:mt-[6rem] .... min-[1700px]:mt-[8rem]">

        <div>
            <div class="text-zinc-900 text-center font-extrabold mb-[2%] .... max-[320px]:text-[2.1em] .... min-[320px]:text-[2.1em] .... min-[375px]:text-[2.5em] .... min-[425px]:text-[2.8em] .... min-[768px]:text-[4.2em] .... min-[1024px]:text-[3em] .... min-[1440px]:text-[4.2em] .... min-[1631px]:text-[5.1em]">
                About our Service
            </div>

            <div class="max-[1023px]:mx-auto grid grid-cols-2 bg-zinc-800 w-full  .... min-[375px]:p-[1rem] min-[375px]:gap-4 min-[375px]:h-[20rem] .... max-[375px]:p-[1rem] max-[375px]:gap-4 max-[375px]:h-[20rem] .... min-[425px]:p-[1rem] min-[425px]:gap-4 min-[425px]:h-[28rem] .... min-[426px]:p-[2rem] min-[426px]:gap-8 min-[426px]:h-[44rem]">

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

            <div class="max-[320px]:text-[1rem] max-[320px]:pt-[2rem] .... min-[320px]:text-[1rem] min-[320px]:pt-[2rem] .... min-[425px]:text-[1.2rem] .... min-[768px]:text-[1.4rem] .... min-[1024px]:text-[1.2rem] min-[1024px]:pt-[5rem] .... min-[1300px]:text-[1.3rem] min-[1300px]:pt-[11rem] .... min-[1549px]:text-[1.4rem]">
                <div class="font-semibold text-gray-700">
                    <div class="text-justify mt-[4%]">
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

    <!-- first grid -->
    <div class="grid gap-12 px-[2rem] mt-[8rem] bg-stone-200 .... max-[1023px]:grid-cols-1 max-[1023px]:py-[2rem] .... min-[1024px]:grid-cols-2 min-[1024px]:px-[4rem] min-[1024px]:py-[4rem]">
        <div class="my-auto">
            <div class="font-extrabold text-left text-neutral-800 .... max-[320px]:text-[2.5rem] .... min-[320px]:text-[2.5rem] .... min-[425px]:text-[3.3rem] .... min-[1024px]:text-[4.1rem]">
                Pre-leasing services
            </div>

            <div class="text-justify font-semibold text-gray-700 .... max-[320px]:text-[1rem] .... min-[320px]:text-[1rem] .... min-[425px]:text-[1.2rem] .... min-[768px]:text-[1.4rem] .... min-[1024px]:text-[1.2rem] .... min-[1300px]:text-[1.3rem] .... min-[1548px]:text-[1.4rem]">
                Searching for an ideal and conductive office space can prove quite a complex and tedious task. At DB&B, we provide comprehensive pre-lease services to aid in your consideration and decision-making, DB&B offers valuable tools such as establishing actual space requirements and building analysis to aid in your selection. With our suite of tools and sevices, you can select the ideal workspace that meets your business objectives in the long run.
            </div>
        </div>

        <div>
            <img class=" w-full h-full object-cover" src="Architect_files/images/house.jpg">
        </div>
    </div>

    <!-- second grid -->
    <div class="grid gap-12 px-[2rem] bg-stone-300 .... max-[1023px]:grid-cols-1 max-[1023px]:py-[2rem] .... min-[1024px]:grid-cols-2 min-[1024px]:px-[4rem] min-[1024px]:py-[4rem]">
        <div>
            <img class=" w-full h-full object-cover" src="Architect_files/images/house1.jpg">
        </div>

        <div class="my-auto">
            <div class="font-extrabold text-left text-neutral-800 .... max-[320px]:text-[2.5rem] .... min-[320px]:text-[2.5rem] .... min-[425px]:text-[3.3rem] .... min-[1024px]:text-[4.1rem]">
                Interior design and planning
            </div>

            <div class="text-justify font-semibold text-gray-700 .... max-[320px]:text-[1rem] .... min-[320px]:text-[1rem] .... min-[425px]:text-[1.2rem] .... min-[768px]:text-[1.4rem] .... min-[1024px]:text-[1.2rem] .... min-[1300px]:text-[1.3rem] .... min-[1548px]:text-[1.4rem]">
                At DB&B, we arm ourselves with a good understanding of all the factors imperative for a suceessful business environment. We make sure that our design concepts articulate your business objectives, process, culture, brand positioning and future business plans. It is our goal to help all our clients develop a highly innovative, ergonomic environment that optimizes work performance and meets every functional and budgetary concern.
            </div>
        </div>
    </div>

    <!-- third grid -->
    <div class="grid gap-12 px-[2rem] bg-stone-200 .... max-[1023px]:grid-cols-1 max-[1023px]:py-[2rem] .... min-[1024px]:grid-cols-2 min-[1024px]:px-[4rem] min-[1024px]:py-[4rem]">
        <div class="my-auto">
            <div class="font-extrabold text-left text-neutral-800 .... max-[320px]:text-[2.5rem] .... min-[320px]:text-[2.5rem] .... min-[425px]:text-[3.3rem] .... min-[1024px]:text-[4.1rem]">
                Engineering services on buildings
            </div>

            <div class="text-justify font-semibold text-gray-700 .... max-[320px]:text-[1rem] .... min-[320px]:text-[1rem] .... min-[425px]:text-[1.2rem] .... min-[768px]:text-[1.4rem] .... min-[1024px]:text-[1.2rem] .... min-[1300px]:text-[1.3rem] .... min-[1548px]:text-[1.4rem]">
                <div>
                    Among our wide range of services. DB&B also design mechanical and electrical systems that are compatible with base building provisions to meet Client's operatng requirements and safety standards for the workplace environment.
                </div>
                <div class="mt-[1.5rem]">
                    With a thorough understanding of your needs for lightning, power, air-conditioning and fire services, we ensure optimal distribution and performance throughout you office.
                </div>
            </div>
        </div>

        <div>
            <img class=" w-full h-full object-cover" src="Architect_files/images/house3.jpg">
        </div>
    </div>


    <!-- fourth grid -->
    <div class="grid gap-12 px-[2rem] bg-stone-300 .... max-[1023px]:grid-cols-1 max-[1023px]:py-[2rem] .... min-[1024px]:grid-cols-2 min-[1024px]:px-[4rem] min-[1024px]:py-[4rem]">
        <div>
            <img class=" w-full h-full object-cover" src="Architect_files/images/house2.jpg">
        </div>

        <div class="my-auto">
            <div class="font-extrabold text-left text-neutral-800 .... max-[320px]:text-[2.5rem] .... min-[320px]:text-[2.5rem] .... min-[425px]:text-[3.3rem] .... min-[1024px]:text-[4.1rem]">
                Procurement and construction
            </div>

            <div class="text-justify font-semibold text-gray-700 .... max-[320px]:text-[1rem] .... min-[320px]:text-[1rem] .... min-[425px]:text-[1.2rem] .... min-[768px]:text-[1.4rem] .... min-[1024px]:text-[1.2rem] .... min-[1300px]:text-[1.3rem] .... min-[1548px]:text-[1.4rem]">
                <div>
                    Sourcing for quality materials for construction and choosing conducive furniture is an essential part of your space transformation journey. Alongside our partners, our procurement team and designers work together to curate a collection that fits your projects budget while meeting your transformation goals.
                </div>

                <div class="mt-[2rem]">
                    Our onsite team take care of the entire construction process. This includes behinde-the-scenes paperwork submission to relevant authorities, testing and commisioning after the fit-out period. defects checking during and after handover, and support in any certifications your new office can be accredited for.
                </div>
            </div>
        </div>
    </div>

    <!-- fifth grid -->
    <div class="grid gap-12 px-[2rem] bg-stone-200 .... max-[1023px]:grid-cols-1 max-[1023px]:py-[2rem] .... min-[1024px]:grid-cols-2 min-[1024px]:px-[4rem] min-[1024px]:py-[4rem]">
        <div class="my-auto">
            <div class="font-extrabold text-left text-neutral-800 .... max-[320px]:text-[2.5rem] .... min-[320px]:text-[2.5rem] .... min-[425px]:text-[3.3rem] .... min-[1024px]:text-[4.1rem]">
                Project management
            </div>

            <div class="text-justify font-semibold text-gray-700 .... max-[320px]:text-[1rem] .... min-[320px]:text-[1rem] .... min-[425px]:text-[1.2rem] .... min-[768px]:text-[1.4rem] .... min-[1024px]:text-[1.2rem] .... min-[1300px]:text-[1.3rem] .... min-[1548px]:text-[1.4rem]">
                <div>
                    As clients, you can count on your thorough and competent project management team to oversee the entire setup- from pre-construction to the final handover. The project managers will keep you informed of the progress, saving you the hassle of inspecting the site daily.
                </div>
            </div>
        </div>

        <div>
            <img class=" w-full h-full object-cover" src="Architect_files/images/house4.jpg">
        </div>
    </div>

    <!-- sixth grid -->
    <div class="grid gap-12 px-[2rem] bg-stone-300 .... max-[1023px]:grid-cols-1 max-[1023px]:py-[2rem] .... min-[1024px]:grid-cols-2 min-[1024px]:px-[4rem] min-[1024px]:py-[4rem]">
        <div>
            <img class=" w-full h-full object-cover" src="Architect_files/images/house2.jpg">
        </div>

        <div class="my-auto">
            <div class="font-extrabold text-left text-neutral-800 .... max-[320px]:text-[2.5rem] .... min-[320px]:text-[2.5rem] .... min-[425px]:text-[3.3rem] .... min-[1024px]:text-[4.1rem]">
                Migration and management
            </div>

            <div class="text-justify font-semibold text-gray-700 .... max-[320px]:text-[1rem] .... min-[320px]:text-[1rem] .... min-[425px]:text-[1.2rem] .... min-[768px]:text-[1.4rem] .... min-[1024px]:text-[1.2rem] .... min-[1300px]:text-[1.3rem] .... min-[1548px]:text-[1.4rem]">
                <div>
                    Our services to clients do not cease upon completion of construction. As part of our end-to-end services, we assist in overseeing the migration of your office equipment to ensure a smooth and flawless transition to your new workspace. Our team will expedite effective migration management to avoid long periods of down-time which may incur adverse results on your business operations.
                </div>
            </div>
        </div>
    </div>

    <!-- seventh grid -->
    <div class="grid gap-12 px-[2rem] bg-stone-200 .... max-[1023px]:grid-cols-1 max-[1023px]:py-[2rem] .... min-[1024px]:grid-cols-2 min-[1024px]:px-[4rem] min-[1024px]:py-[4rem]">
        <div class="my-auto">
            <div class="font-extrabold text-left text-neutral-800 .... max-[320px]:text-[2.5rem] .... min-[320px]:text-[2.5rem] .... min-[425px]:text-[3.3rem] .... min-[1024px]:text-[4.1rem]">
                In-house production
            </div>

            <div class="text-justify font-semibold text-gray-700 .... max-[320px]:text-[1rem] .... min-[320px]:text-[1rem] .... min-[425px]:text-[1.2rem] .... min-[768px]:text-[1.4rem] .... min-[1024px]:text-[1.2rem] .... min-[1300px]:text-[1.3rem] .... min-[1548px]:text-[1.4rem]">
                <div>
                    Our production facility spans across 26,000 square feet, furnished with a full office set-up, meeting facilities, storage and training spaces. This well-equipped space is part of a 60,000 square feet production network we have in Asia and is designed to ensure we uphold our Environmental, Health & Safety commitments. Over the years, our capabilities have grown from simple carpentry to sophisticated designs to support our creative team's directions. Our aim, is to continually provide solutions and bring value to our clients through quality workmanship.
                </div>
            </div>
        </div>

        <div>
            <img class=" w-full h-full object-cover" src="Architect_files/images/house4.jpg">
        </div>
    </div>

    <!-- eigth grid -->
    <div class="grid gap-12 px-[2rem] bg-stone-300 .... max-[1023px]:grid-cols-1 max-[1023px]:py-[2rem] .... min-[1024px]:grid-cols-2 min-[1024px]:px-[4rem] min-[1024px]:py-[4rem]">
        <div>
            <img class=" w-full h-full object-cover" src="Architect_files/images/house2.jpg">
        </div>

        <div class="my-auto">
            <div class="font-extrabold text-left text-neutral-800 .... max-[320px]:text-[2.5rem] .... min-[320px]:text-[2.5rem] .... min-[425px]:text-[3.3rem] .... min-[1024px]:text-[4.1rem]">
                Workplace safety & health
            </div>

            <div class="text-justify font-semibold text-gray-700 .... max-[320px]:text-[1rem] .... min-[320px]:text-[1rem] .... min-[425px]:text-[1.2rem] .... min-[768px]:text-[1.4rem] .... min-[1024px]:text-[1.2rem] .... min-[1300px]:text-[1.3rem] .... min-[1548px]:text-[1.4rem]">
                <div>
                    At DB&B we adopt stringent occupational health and safety practices to ensure work is carried out in an injury and illness free environment. We operate an in-house drawn occupational health and safety management system that includes providing accurate information about the health and safety aspects of our operations and maintain the practice of continual improvement. We also inform our panel of suppliers on the expectations and require them to adopt sound occupational health and safety management practices in line with ours.
                </div>
            </div>
        </div>
    </div>


                <!-- ninth grid -->
                <div class="grid gap-12 px-[2rem] bg-stone-200 .... max-[1023px]:grid-cols-1 max-[1023px]:py-[2rem] .... min-[1024px]:grid-cols-2 min-[1024px]:px-[4rem] min-[1024px]:py-[4rem]">
        <div class="my-auto">
            <div class="font-extrabold text-left text-neutral-800 .... max-[320px]:text-[2.5rem] .... min-[320px]:text-[2.5rem] .... min-[425px]:text-[3.3rem] .... min-[1024px]:text-[4.1rem]">
                Green design and sustainability 
            </div>

            <div class="text-justify font-semibold text-gray-700 .... max-[320px]:text-[1rem] .... min-[320px]:text-[1rem] .... min-[425px]:text-[1.2rem] .... min-[768px]:text-[1.4rem] .... min-[1024px]:text-[1.2rem] .... min-[1300px]:text-[1.3rem] .... min-[1548px]:text-[1.4rem]">
              <div>
                 In 2008, the DB&B Group established a Green Policy containing medium to long-term environment and sustainability strategies. The objective was to attain a high level of "sustainable quality" in our services and corporate activities throughout the Group. Our delivery is a holistic, well balanced approach to space planning, design development and construction with all levels of staff committed to the practice of this green policy. We have successfully helped key clients achieve their desired sustainability certifications and continue to do so. DB&B also possesses knowledge in sustainable design that is in line with LEED and the BCA Green Mark requirements.
                </div>
            </div>
        </div>

        <div>
            <img class=" w-full h-full object-cover" src="Architect_files/images/house4.jpg">
        </div>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>