<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

<body id="main" class="text-gray-700 " style="font-family: 'Source Sans Pro', sans-serif">
    <!--Nav-->
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
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <a href="/portal" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('Faculty Portal') }}
                    </a>
                </button>
            </div>
        </div>

    </nav>

    <!--Hero-->
    <div
    class="py-20 bg-[url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=990&q=80')]">
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
                            <img src="https://scontent.fmnl9-2.fna.fbcdn.net/v/t1.18169-9/166302_187768457918333_3527613_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeF8CXIUu4XjkGaDDgjo3av7tV6iVEEvJtO1XqJUQS8m06LjPdzYkujkr69PmZM56uLt6YANy6K2rlVaw7nbjHEA&_nc_ohc=XKu2dLxvOg4AX8GS1vp&_nc_ht=scontent.fmnl9-2.fna&oh=00_AT8B8XZSjy0betfVgwswLya8FFmRf3jdIHqoLK77THk62g&oe=6340E400" alt="" class="rounded-2xl w-full" />
                        </div>
                        <div class="py-3 sm:py-4">
                            <img src="https://scontent.fmnl8-1.fna.fbcdn.net/v/t1.18169-9/162822_187487007946478_7240829_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeE2hp50epEL3gu4asHJr_wh2Wotu7Qo5K3Zai27tCjkrcHbP7LDvBb9L03kV2-zX3JIkbvxaPLsmXYtMG0pLXxC&_nc_ohc=Opo8sTILI9wAX8Uqv0c&tn=VkflTHCVtXw-JD2u&_nc_ht=scontent.fmnl8-1.fna&oh=00_AT8gDq7P7-8Y9stnUsT-NFadpEoMZSC90donxrboBF_fEw&oe=6342D711" alt="" class="rounded-2xl w-full" />
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10">
                            <img src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.18169-9/12540812_1195326113829224_1568043238246640753_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeHxLai1dcYrK9UfYHlTSoXmyjjFSZZObajKOMVJlk5tqGpRW_i49u5y4Mc1WFRt2D84tHQRTxsaYwvKn3l8xIW-&_nc_ohc=POu6rn3WaF0AX_YdtTG&_nc_ht=scontent.fmnl9-1.fna&oh=00_AT8bgdGFnokGa36GhjQJyMDEbvJjytBsaq13vSGLu6oWow&oe=6342DD6C" alt="" class="rounded-2xl w-full" />

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
    <section class= "py-20 bg-[url('https://images.unsplash.com/photo-1593588332695-cd49488a8ec8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80')] ">
   
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
                    <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 " src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">

                    <div class="mx-2">
                        <h1 class="font-semibold text-white">Jeny Doe</h1>
                        <span class="text-sm text-white">Edit ko patong part nato bare with me :)</span>
                    </div>
                </div>
            </div>

            <div class="p-8 bg-neutral-800 border rounded-lg">
                <p class="leading-loose text-white">
                    “Do not look at how long it will take you to accomplish those goals or how hard it will be, take it step by step and know day it will all be worth it.”.
                </p>

                <div class="flex items-center mt-8 -mx-2">
                    <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 " src="https://images.unsplash.com/photo-1488508872907-592763824245?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                    <div class="mx-2">
                        <h1 class="font-semibold text-White">Ema Watson </h1>
                        <span class="text-sm text-white">Edit ko patong part nato bare with me :)</span>
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
