<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

<body id="main" class="text-gray-700 " style="font-family: 'Source Sans Pro', sans-serif">
    <!--Nav-->
    <nav x-data="{ isOpen: false }" class="relative shadow bg-gray-800">
        <div class="container px-6 py-4 mx-auto">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex items-center justify-between">
                    <div class="text-xl font-semibold text-gray-700">
                        <a href="{{ route('homeview') }}" class="flex items-center">

                            <x-jet-application-mark class="block h-9 w-auto" />

                            <span class=" ml-5 self-center text-xl font-semibold whitespace-nowrap text-white">Victorino Mapa HighSchool</span>
                        </a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                        <button x-cloak @click="isOpen = !isOpen" type="button" class=" text-gray-200 hover:text-gray-400 focus:outline-none  focus:text-gray-400" aria-label="toggle menu">
                            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                            </svg>

                            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                    <ul class="flex flex-col p-4 mt-4 rounded-lg border md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 bg-gray-700 border-gray-400 ">
                        <li>
                            <a href="/" class="block py-2 pl-3 pr-4 text-white  rounded md:p-0 md:text-white md:bg-transparent" aria-current="page">Home</a>
                        </li>


                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium border-b md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto text-white hover:text-cyan focus:text-white border-gray-700 hover:bg-gray-700 md:hover:bg-transparent">About <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>

                            <div id="dropdownNavbar" class="z-10 hidden font-normal divide-y rounded shadow w-44 bg-white divide-gray-600">
                                <ul class="py-1 text-sm text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/aboutview" class="block px-4 py-2  hover:bg-gray-600 hover:text-white">About Victorino Mapa.</a>
                                    </li>

                                    <li>
                                        <a href="/missionandvision" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">Mission & Vision.</a>
                                    </li>

                                    <li>
                                        <a href="/awardees" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">Excellence Hall.</a>
                                    </li>


                                    <li aria-labelledby="dropdownNavbarLink">
                                        <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2  hover:bg-gray-600 hover:text-white">Dropdown<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                            </svg></button>
                                        <div id="doubleDropdown" class="z-10 hidden divide-y divide-gray-100 rounded shadow w-44 bg-white">
                                            <ul class="py-1 text-sm text-gray-200" aria-labelledby="doubleDropdownButton">
                                                <li>
                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-600 text-gray-400 hover:text-white">Overview</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-600 text-gray-400 hover:text-white">My downloads</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-600 text-gray-400 hover:text-white">Billing</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-600 text-gray-400 hover:text-white">Rewards</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <!-- Announcements -->
                        <li>
                            <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium border-b md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto text-white hover:text-cyan focus:text-white border-gray-700 hover:bg-gray-700 md:hover:bg-transparent">Admission and Submission of Requirements <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>

                            <div id="dropdownNavbar2" class="z-10 hidden font-normal divide-y rounded shadow w-44 bg-white divide-gray-600">
                                <ul class="py-1 text-sm text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/submissions/create" class="block px-4 py-2  hover:bg-gray-600 hover:text-white">Submit an Enrollment.</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="/publicnews" class="block py-2 pl-3 pr-4 text-white  rounded md:p-0 md:text-white md:bg-transparent" aria-current="page">News and Announcements</a>
                        </li>




                    </ul>
                    <button class="ml-5 bg-transparent hover:bg-blue-500 text-blue-700 hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <a href="/portal" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('Faculty Portal') }}
                    </a>
                </button>



                </div>
            </div>
        </div>
    </nav>

    <!--Hero-->
    <div class="py-20 bg-[url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=990&q=80')]">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold mb-2 text-white">
                Victorino Mapa High School Official
            </h2>
            <h3 class="text-2xl mb-8 text-gray-200">
                Mataas na Paaralang Victorino Mapa
            </h3>
            <button class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">
                More Information.
            </button>
        </div>
    </div>
    {{-- Contents --}}

    <aside>
        <div class="px-4 py-8 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="p-8 bg-blue-600 md:p-12 lg:px-16 lg:py-24 md:order-last">
                    <div class="max-w-xl mx-auto text-center">
                        <h2 class="text-2xl font-bold text-white md:text-3xl">
                            Where education starts.
                        </h2>

                        <p class="hidden sm:block sm:mt-4 text-white/90">
                            Victorino Mapa High School (Filipino: Mataas na Paaralang Victorino Mapa) (formerly Manila
                            East High School), situated in San Miguel, Manila, is one of the oldest public high schools
                            in the city. It has produced a list of successful graduates in various fields since its
                            foundation in 1923.
                        </p>

                        <div class="mt-4 md:mt-8">
                            <a href="#" class="inline-block px-12 py-3 text-sm font-medium text-blue-500 transition bg-white border border-white rounded hover:bg-transparent hover:text-white focus:outline-none focus:ring focus:ring-yellow-400">
                                See school amenities.
                            </a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 md:grid-cols-1 lg:grid-cols-2">
                    <img alt="#" src="https://live.staticflickr.com/8081/8414223880_059ccb5dfc_z.jpg" class="object-cover w-full h-40 sm:h-56 md:h-full" />

                    <img alt="#" src="https://lh5.googleusercontent.com/p/AF1QipPyzuIC4AoTAqUBmLzWCEIqoy-h-naXHhlAlN0n=s677-k-no" class="object-cover w-full h-40 sm:h-56 md:h-full" />
                </div>
            </div>
        </div>
    </aside>

    {{-- Programs Offered --}}

    <!-- 
content starts here -->
    <!-- ====== About Section Start -->

    <section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden mx-40 ">

        <div class="container">
            <div class="flex flex-wrap justify-between items-center -mx-4">
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex items-center -mx-3 sm:-mx-4">
                        <div class="w-full xl:w-1/2 px-3 sm:px-4">
                            <div class="py-3 sm:py-4">
                                <img src="https://iili.io/ZPMWOJ.jpg" alt="" class="rounded-2xl w-full" />
                            </div>
                            <div class="py-3 sm:py-4">
                                <img src="https://iili.io/ZPMjxR.jpg" alt="" class="rounded-2xl w-full" />
                            </div>
                        </div>
                        <div class="w-full xl:w-1/2 px-3 sm:px-4">
                            <div class="my-4 relative z-10">
                                <img src="https://iili.io/ZPMXDv.jpg" alt="" class="rounded-2xl w-full" />

                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                    <div class="mt-10 lg:mt-0">
                        <span class="font-semibold text-lg text-primary mb-2 block">
                            Your Journey Starts Here.
                        </span>
                        <h2 class="font-bold text-3xl sm:text-4xl text-dark mb-8">
                            Why choose Victorino Mapa HighSchool?
                        </h2>
                        <p class="text-base text-body-color mb-8">
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                            The point of using Lorem Ipsum is that it has a more-or-less.
                        </p>
                        <p class="text-base text-body-color mb-12">
                            A domain name is one of the first steps to establishing your
                            brand. Secure a consistent brand image with a domain name that
                            matches your business.
                        </p>
                        <a href="javascript:void(0)" class="
                  py-4
                  px-10
                  lg:px-8
                  xl:px-10
                  inline-flex
                  items-center
                  justify-center
                  text-center text-white text-base
                  bg-primary
                  hover:bg-opacity-90
                  font-normal
                  rounded-lg
                  ">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:flex">
            <div class="flex items-center justify-center w-full px-6 py-8 lg:h-[32rem] lg:w-1/2">
                <div class="max-w-xl">
                    <h2 class="text-2xl font-semibold text-gray-800 lg:text-3xl">Victorino Mapa HighSchool <span class="text-blue-600 ">History:</span></h2>

                    <p class="mt-2 text-sm text-gray-500  lg:text-base">
                        Victorino Mapa High School opened its first classes (Manila East High School) as one of the four schools in City of Manila together with Torres High School (Manila South High School) and Arellano High School (Manila North High School) in June 1923.

                    </p>
                    <br>
                    <p class="mt-2 text-sm text-gray-500  lg:text-base">
                        Mapa Has been under the administration of principals since it was founded in June 1923. The three of these were Americans namely, John Carl, Sarah M. England and James Burns. The first Filipino principal of the School was Indolencio Madamba in 1951. In his term, the Parents-Teachers Association was organized and succession of principals took over, after Madamba retired in May 1956.
                    </p>

                </div>
            </div>

            <div class="w-full h-64 lg:w-1/2 lg:h-auto rounded-2xl">
                <div class="w-full rounded-2xl h-full bg-cover" style="background-image: url(https://images.unsplash.com/photo-1508394522741-82ac9c15ba69?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=748&q=80)">
                    <div class="w-full h-full rounded-2xl bg-black opacity-25"></div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section class="py-20 bg-[url('https://images.unsplash.com/photo-1593588332695-cd49488a8ec8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80')] ">

        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-center capitalize xl:text-5xl lg:text-4xl ">
                <span class="text-white "> Schools Organization</span>
            </h1>

            <p class="max-w-2xl mx-auto mt-6 text-center text-neutral-50 ">
                Principal and Guidance
            </p>

            <section class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 lg:grid-cols-2 xl:grid-cols-3">
                <div class="p-12 bg-neutral-800 border rounded-lg ">
                    <p class="leading-loose text-white ">
                        “There's nothing more important than our good health - that's our principal capital asset”.
                    </p>

                    <div class="flex items-center mt-8 -mx-2">
                        <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 " src="https://scontent.fmnl2-2.fna.fbcdn.net/v/t1.6435-9/33060388_636582630006475_6440931242836754432_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=2Ws5H1V8EC8AX9idkoa&_nc_ht=scontent.fmnl2-2.fna&oh=00_AT9orkoccL0kGPnPV6UMLOxONB8kjJPipUPoE4BfJlzl1g&oe=636C663A" alt="">

                        <div class="mx-2">
                            <h1 class="font-semibold text-white">Robert Velasquez</h1>
                            <span class="text-sm text-gray-50">School Principal of the Victorino Mapa High School</span>
                        </div>
                    </div>
                </div>

                <div class="p-8 bg-neutral-800 border rounded-lg">
                    <p class="leading-loose text-white">
                        “When you have a dream, you've got to grab it and never let go, Leaders don't rise to the pinnacle of success without developing the right set of attittudes and habits; they make every day a masterpiece”.
                    </p>

                    <div class="flex items-center mt-8 -mx-2">
                        <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 " src="https://scontent.fmnl2-2.fna.fbcdn.net/v/t1.6435-9/33060388_636582630006475_6440931242836754432_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=2Ws5H1V8EC8AX9idkoa&_nc_ht=scontent.fmnl2-2.fna&oh=00_AT9orkoccL0kGPnPV6UMLOxONB8kjJPipUPoE4BfJlzl1g&oe=636C663A" alt="">

                        <div class="mx-2">
                            <h1 class="font-semibold text-white">Robert Velasquez</h1>
                            <span class="text-sm text-white">School Principal of the Victorino Mapa High School</span>
                        </div>
                    </div>
                </div>

                <div class="p-8 bg-neutral-800 border rounded-lg">
                    <p class="leading-loose text-white">
                        “Do not look at how long it will take you to accomplish those goals or how hard it will be, take it step by step and know day it will all be worth it.”.
                    </p>

                    <div class="flex items-center mt-8 -mx-2">
                        <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 " src="https://scontent.fmnl2-2.fna.fbcdn.net/v/t1.6435-9/33060388_636582630006475_6440931242836754432_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=2Ws5H1V8EC8AX9idkoa&_nc_ht=scontent.fmnl2-2.fna&oh=00_AT9orkoccL0kGPnPV6UMLOxONB8kjJPipUPoE4BfJlzl1g&oe=636C663A"     alt="">

                        <div class="mx-2">
                            <h1 class="font-semibold text-White">Robert Velasquez</h1>
                            <span class="text-sm text-white">School Principal of the Victorino Mapa High School</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    {{-- Footer --}}

    <footer class="bg-gray-900">
        <div class="relative max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8 lg:pt-24">
            <div class="absolute top-4 sm:top-6 lg:top-8 right-4 sm:right-6 lg:right-8">
                <a class="inline-block p-2 text-teal-300 transition bg-gray-700 rounded-full sm:p-3 lg:p-4 hover:bg-gray-600" href="#main">
                    <span class="sr-only">Back to top</span>

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <div class="lg:flex lg:items-end lg:justify-between">
                <div>
                    <div class="flex justify-center text-teal-300 lg:justify-start">
                        <img width="100" src="https://cdn.discordapp.com/attachments/971130306751000636/1013875835075317790/Mapahs-modified.png" alt="">
                        <h1 class="text-white text-2xl text-center ml-5 mt-10">Victorino Mapa High School
                        </h1>
                    </div>

                    <p class="max-w-md mx-auto mt-6 leading-relaxed text-center text-gray-400 lg:text-left">
                        Address: HXXR+5V7, Concepcion Aguila St, San Miguel, Manila, 1008 Metro Manila
                    </p>
                </div>

                <nav class="mt-12 lg:mt-0" aria-labelledby="footer-navigation">
                    <h2 class="sr-only" id="footer-navigation">Footer navigation</h2>

                    <ul class="flex flex-wrap justify-center gap-6 lg:justify-end md:gap-8 lg:gap-12">
                        <li>
                            <a class="text-white transition hover:text-white/75" href="/">
                                About
                            </a>
                        </li>

                        <li>
                            <a class="text-white transition hover:text-white/75" href="/">
                                Job Openings
                            </a>
                        </li>

                        <li>
                            <a class="text-white transition hover:text-white/75" href="/">
                                Admissions
                            </a>
                        </li>

                        <li>
                            <a class="text-white transition hover:text-white/75" href="/">
                                Requirements
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <p class="mt-12 text-sm text-center text-gray-400 lg:text-right">
                Copyright &copy; 2022. All rights reserved.
            </p>
        </div>
    </footer>

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>