<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victorino Mapa.</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

</head>

<body>
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
                        <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-200 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
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
                    <ul class="flex flex-col p-4 mt-4 rounded-lg border md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 bg-gray-700 border-gray-400">
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
                            <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium border-b md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto text-white hover:text-cyan focus:text-white border-gray-700 hover:bg-gray-700 md:hover:bg-transparent">Submission of Requirements <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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


    @yield('content')


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

</html>