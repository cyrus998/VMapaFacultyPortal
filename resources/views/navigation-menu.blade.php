<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- admin links -->
    @if (Auth::user()->role == '1')
    <nav x-data="{ isOpen: false }" class="relative  shadow bg-gray-800">
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
                        <button x-cloak @click="isOpen = !isOpen" type="button" class=" text-gray-200  hover:text-gray-400 focus:outline-none  focus:text-gray-400" aria-label="toggle menu">
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
                            <a href="submissions" class="block py-2 pl-3 pr-4 text-white  rounded md:p-0 md:text-white md:bg-transparent" aria-current="page">Manage Admissions</a>
                        </li>


                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium border-b md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto text-white hover:text-cyan focus:text-white border-gray-700 hover:bg-gray-700 md:hover:bg-transparent">User Management <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>

                            <div id="dropdownNavbar" class="z-10 hidden font-normal divide-y rounded shadow w-44 bg-white divide-gray-600">
                                <ul class="py-1 text-sm text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="users" class="block px-4 py-2  hover:bg-gray-600 hover:text-white">User And Roles</a>
                                    </li>

                                    <li>
                                        <a href="subjects" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">Manage Subjects</a>
                                    </li>

                                    <li>
                                        <a href="portfolios" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">Instructor Information</a>
                                    </li>

                                    <!-- UNCOMMENT IF YOU WANT SUB DROPDOWN -->
                                    <!-- <li aria-labelledby="dropdownNavbarLink">
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
                                    </li> -->

                                </ul>
                            </div>
                        </li>

                        <!-- Announcements -->
                        <li>
                            <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium border-b md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto text-white hover:text-cyan focus:text-white border-gray-700 hover:bg-gray-700 md:hover:bg-transparent">Manage Announcements <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>

                            <div id="dropdownNavbar2" class="z-10 hidden font-normal divide-y rounded shadow w-44 bg-white divide-gray-600">
                                <ul class="py-1 text-sm text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="publicannouncements" class="block px-4 py-2  hover:bg-gray-600 hover:text-white">Public Announcements</a>
                                    </li>

                                    <li>
                                        <a href="facultyannouncements" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">Faculty Announcements</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Other Administrator Tools -->
                        <li>
                            <button id="dropdownNavbarLink3" data-dropdown-toggle="dropdownNavbar3" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium border-b md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto text-white hover:text-cyan focus:text-white border-gray-700 hover:bg-gray-700 md:hover:bg-transparent">Administrator Tools<svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>

                            <div id="dropdownNavbar3" class="z-10 hidden font-normal divide-y rounded shadow w-44 bg-white divide-gray-600">
                                <ul class="py-1 text-sm text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="adminchat" class="block px-4 py-2  hover:bg-gray-600 hover:text-white">Chat API Dashboard</a>
                                    </li>

                                    <li>
                                        <a href="allcontactusmessages" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">Inquiries Forms</a>
                                    </li>

                                    <li>
                                        <a href="logs" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">Logs</a>
                                    </li>

                                    <li>
                                        <a href="chart" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">Analytics</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>


                        </li>
                    </ul>
                    <x-jet-dropdown>
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())

                            <div class="flex items-center mt-4 lg:mt-0">
                                <button class="hidden mx-4  transition-colors duration-300 transform lg:block text-gray-200  hover:text-gray-400  focus:text-gray-400 focus:outline-none" aria-label="show notifications">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                                <button type="button" class="flex items-center focus:outline-none" aria-label="toggle profile dropdown">
                                    <div class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full">
                                        <img src="{{ Auth::user()->profile_photo_url }}" class="object-cover w-full h-full" alt="avatar">
                                    </div>

                                    <h3 class="mx-2text-gray-700 text-gray-200 lg:hidden">{{ Auth::user()->name }}</h3>
                                </button>
                            </div>
                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                    {{ Auth::user()->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }} (ID: <span class="text-stone-700 font-bold">{{ auth()->user()->facultyNumber }} </span>)
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link class="bg-red-500 rounded" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>


                </div>
            </div>
        </div>
    </nav>
    @endif
    <!-- user tab -->
    @if (Auth::user()->role == '0')
    <nav x-data="{ isOpen: false }" class="relative  shadow bg-gray-800">
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
                        <button x-cloak @click="isOpen = !isOpen" type="button" class=" text-gray-200  hover:text-gray-400 focus:outline-none  focus:text-gray-400" aria-label="toggle menu">
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
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out  bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                    <ul class="flex flex-col p-4 mt-4 rounded-lg border md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 bg-gray-700 border-gray-400">

                        <li>
                            <a href="/" class="block py-2 pl-3 pr-4 text-white  rounded md:p-0 md:text-white md:bg-transparent" aria-current="page">Home</a>
                        </li>

                        <li>
                            <a href="/facultyannouncements" class="block py-2 pl-3 pr-4 text-white  rounded md:p-0 md:text-white md:bg-transparent" aria-current="page">View Faculty Announcements</a>
                        </li>

                        <li>
                            <a href="/selfinfos" class="block py-2 pl-3 pr-4 text-white  rounded md:p-0 md:text-white md:bg-transparent" aria-current="page">View My Personal Details.</a>
                        </li>

                        <li>
                            <a href="/myhandledsections" class="block py-2 pl-3 pr-4 text-white  rounded md:p-0 md:text-white md:bg-transparent" aria-current="page">View My Handled Sections.</a>
                        </li>



                    </ul>
                    <x-jet-dropdown>
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())

                            <div class="flex items-center mt-4 lg:mt-0">
                                <button class="hidden mx-4  transition-colors duration-300 transform lg:block text-gray-200 hover:text-gray-400  focus:text-gray-400 focus:outline-none" aria-label="show notifications">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                                <button type="button" class="flex items-center focus:outline-none" aria-label="toggle profile dropdown">
                                    <div class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full">
                                        <img src="{{ Auth::user()->profile_photo_url }}" class="object-cover w-full h-full" alt="avatar">
                                    </div>

                                    <h3 class="mx-2  text-gray-200 lg:hidden">{{ Auth::user()->name }}</h3>
                                </button>
                            </div>
                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                    {{ Auth::user()->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }} (ID: <span class="text-stone-700 font-bold">{{ auth()->user()->facultyNumber }} </span>)
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>



                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link class="bg-red-500 rounded" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>


                </div>
            </div>
        </div>
    </nav>
    @endif

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>

</html>