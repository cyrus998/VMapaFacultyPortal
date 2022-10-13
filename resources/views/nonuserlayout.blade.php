<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
</head>

<body>


<nav class="bg-gray-900 border-gray-200 px-2 sm:px-4 py-2.5">
        <div class="container flex flex-wrap justify-between items-center mx-auto">

            <div class="shrink-0 flex items-center">
                <a href="/">
                    <x-jet-application-mark class="block h-9 w-auto" />
                </a>
                <h1 class="text-white text-2xl ml-5">Victorino Mapa HighSchool</h1>
            </div>

            <div class="flex items-center md:order-2">

                <!-- Dropdown menu -->
                <div class="ml-3 relative">



                </div>
            </div>

            {{-- Main Nav Bar Non responsive --}}
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                <ul
                    class="flex flex-col p-4 mt-4 rounded-lg border md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 bg-gray-800 border-gray-700">

                    <a href="/" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('Home') }}
                    </a>

                    <div class="justify-center">
                    <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                    
                    <!-- Dropdown toggle button -->
                    <button @mouseover="open = true">
                        <span class="text-white">About</span>
                    </button>   
            

                    <!-- Dropdown menu -->
                    <div x-show="open"
                            x-transition.scale.origin.top
                            class="absolute right-0 w-48 py-2 mt-2 bg-white bg-gray-100 rounded-md shadow-xl">
                                <a href="/missionandvision"
                                    class="block px-4 py-2 text-sm text-black-300 text-gray-700 hover:bg-gray-900 hover:text-white">
                                    {{ __('Vision and Mission') }}
                                </a>
                                <a href="/aboutview"
                                    class="block px-4 py-2 text-sm text-black-300 text-gray-700 hover:bg-gray-900 hover:text-white">
                                    {{ __('About') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="/submissions/create" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('Admission / Submission of Requirements') }}
                    </a>

                    <a href="/announcements" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('News and Announcements') }}
                    </a>
                </ul>
                <button class="ml-5 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <a href="/portal" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('Faculty Portal') }}
                    </a>
                </button>
            </div>
        </div>

    </nav>

    <div class="container">
        @yield('content')
    </div>
    
    <footer class="bg-gray-900">
        <div class="relative max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8 lg:pt-24">
            <div class="absolute top-4 sm:top-6 lg:top-8 right-4 sm:right-6 lg:right-8">
                <a class="inline-block p-2 text-teal-300 transition bg-gray-700 rounded-full sm:p-3 lg:p-4 hover:bg-gray-600"
                    href="#main">
                    <span class="sr-only">Back to top</span>

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <div class="lg:flex lg:items-end lg:justify-between">
                <div>
                    <div class="flex justify-center text-teal-300 lg:justify-start">
                        <img width="100"
                            src="https://cdn.discordapp.com/attachments/971130306751000636/1013875835075317790/Mapahs-modified.png"
                            alt="">
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
    
</body>

</html>
