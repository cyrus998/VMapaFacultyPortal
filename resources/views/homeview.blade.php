<script src="https://cdn.tailwindcss.com"></script>

<body id="main" class="text-gray-700 bg-white" style="font-family: 'Source Sans Pro', sans-serif">
    <!--Nav-->
    <nav class="bg-gray-900 border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">
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
                    class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <a href="/" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('Home') }}
                    </a>

                    <a href="/" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('Vision and Mission') }}
                    </a>

                    <a href="/" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('Admission / Submission of Requirements') }}
                    </a>

                    <a href="/" style="color: white;" href="" :active="request() - > routeIs('/')">
                      {{ __('About') }}
                  </a>

                    <a href="/announcements" style="color: white;" href="" :active="request() - > routeIs('/announcements')">
                        {{ __('News and Announcements') }}
                    </a>

                    <a href="/portal" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('Faculty Portal') }}
                    </a>

                </ul>
            </div>
        </div>

    </nav>

    <!--Hero-->
    <div
        class="py-20 bg-[url('https://images.unsplash.com/photo-1613899209236-ea0496f96180?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80')]">
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
                            <a href="#"
                                class="inline-block px-12 py-3 text-sm font-medium text-blue-500 transition bg-white border border-white rounded hover:bg-transparent hover:text-white focus:outline-none focus:ring focus:ring-yellow-400">
                                See school amenities.
                            </a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 md:grid-cols-1 lg:grid-cols-2">
                    <img alt="#" src="https://live.staticflickr.com/8081/8414223880_059ccb5dfc_z.jpg"
                        class="object-cover w-full h-40 sm:h-56 md:h-full" />

                    <img alt="#"
                        src="https://lh5.googleusercontent.com/p/AF1QipPyzuIC4AoTAqUBmLzWCEIqoy-h-naXHhlAlN0n=s677-k-no"
                        class="object-cover w-full h-40 sm:h-56 md:h-full" />
                </div>
            </div>
        </div>
    </aside>

    {{-- Programs Offered --}}

    <section>
        <div class="max-w-screen px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-8 lg:gap-x-16 lg:items-center">
                <div class="max-w-lg mx-auto text-center lg:text-left lg:mx-0">
                    <h2 class="text-3xl font-bold sm:text-4xl">Find your career path</h2>

                    <p class="mt-4 text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut vero
                        aliquid sint distinctio iure ipsum cupiditate? Quis, odit assumenda?
                        Deleniti quasi inventore, libero reiciendis minima aliquid tempora.
                        Obcaecati, autem.
                    </p>

                    <a class="inline-flex items-center px-8 py-3 mt-8 text-white bg-indigo-600 border border-indigo-600 rounded hover:bg-transparent hover:text-indigo-600 active:text-indigo-500 focus:outline-none focus:ring"
                        href="/get-started">
                        <span class="text-sm font-medium"> Get Started </span>

                        <svg class="w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                    <a class="block p-4 border border-gray-100 shadow-sm rounded-xl focus:outline-none focus:ring hover:border-gray-200 hover:ring-1 hover:ring-gray-200"
                        href="/accountant">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <img src="https://media.discordapp.net/attachments/971130306751000636/980725050418274334/unknown.png"
                                width="25" alt="">
                        </span>

                        <h6 class="mt-2 font-bold">Accountant</h6>

                        <p class="hidden sm:mt-1 sm:text-sm sm:text-gray-600 sm:block">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block p-4 border border-gray-100 shadow-sm rounded-xl focus:outline-none focus:ring hover:border-gray-200 hover:ring-1 hover:ring-gray-200"
                        href="/accountant">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <img src="https://media.discordapp.net/attachments/971130306751000636/980725050418274334/unknown.png"
                                width="25" alt="">
                        </span>

                        <h6 class="mt-2 font-bold">Accountant</h6>

                        <p class="hidden sm:mt-1 sm:text-sm sm:text-gray-600 sm:block">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block p-4 border border-gray-100 shadow-sm rounded-xl focus:outline-none focus:ring hover:border-gray-200 hover:ring-1 hover:ring-gray-200"
                        href="/accountant">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <img src="https://media.discordapp.net/attachments/971130306751000636/980725050418274334/unknown.png"
                                width="25" alt="">
                        </span>

                        <h6 class="mt-2 font-bold">Accountant</h6>

                        <p class="hidden sm:mt-1 sm:text-sm sm:text-gray-600 sm:block">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block p-4 border border-gray-100 shadow-sm rounded-xl focus:outline-none focus:ring hover:border-gray-200 hover:ring-1 hover:ring-gray-200"
                        href="/accountant">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <img src="https://media.discordapp.net/attachments/971130306751000636/980725050418274334/unknown.png"
                                width="25" alt="">
                        </span>

                        <h6 class="mt-2 font-bold">Accountant</h6>

                        <p class="hidden sm:mt-1 sm:text-sm sm:text-gray-600 sm:block">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block p-4 border border-gray-100 shadow-sm rounded-xl focus:outline-none focus:ring hover:border-gray-200 hover:ring-1 hover:ring-gray-200"
                        href="/accountant">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <img src="https://media.discordapp.net/attachments/971130306751000636/980725050418274334/unknown.png"
                                width="25" alt="">
                        </span>

                        <h6 class="mt-2 font-bold">Accountant</h6>

                        <p class="hidden sm:mt-1 sm:text-sm sm:text-gray-600 sm:block">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block p-4 border border-gray-100 shadow-sm rounded-xl focus:outline-none focus:ring hover:border-gray-200 hover:ring-1 hover:ring-gray-200"
                        href="/accountant">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <img src="https://media.discordapp.net/attachments/971130306751000636/980725050418274334/unknown.png"
                                width="25" alt="">
                        </span>

                        <h6 class="mt-2 font-bold">Accountant</h6>

                        <p class="hidden sm:mt-1 sm:text-sm sm:text-gray-600 sm:block">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section class="bg-gray-100">
        <div class="container mx-auto px-6 py-20">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">
                Testimonials
            </h2>
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <div class="bg-white rounded shadow py-2">
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam possimus fuga dolor rerum
                            dicta, ipsum laboriosam est totam iusto alias incidunt cum tempore aliquid aliquam error
                            quisquam ipsam asperiores! Iste?
                        </p>
                        <p class="text-gray-500 text-xs md:text-sm px-6">
                            John Doe
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <div class="bg-white rounded shadow py-2">
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam possimus fuga dolor rerum
                            dicta, ipsum laboriosam est totam iusto alias incidunt cum tempore aliquid aliquam error
                            quisquam ipsam asperiores! Iste?
                        </p>
                        <p class="text-gray-500 text-xs md:text-sm px-6">
                            Jane Doe
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <div class="bg-white rounded shadow py-2">
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam possimus fuga dolor rerum
                            dicta, ipsum laboriosam est totam iusto alias incidunt cum tempore aliquid aliquam error
                            quisquam ipsam asperiores! Iste?
                        </p>
                        <p class="text-gray-500 text-xs md:text-sm px-6">
                            James Doe
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}

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
