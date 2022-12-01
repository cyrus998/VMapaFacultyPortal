@extends('nonuserlayout')


@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<div class="relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0">
    <div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
        <svg class="absolute left-0 hidden h-full text-white transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
            <path d="M50 0H100L50 100H0L50 0Z"></path>
        </svg>
        <img class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full" src="https://images.unsplash.com/photo-1495727034151-8fdc73e332a8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1730&q=80" alt="" />
    </div>
    <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
        <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                Hall of Excellence.
            </p>
            <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                Tradition of excellence<br class="hidden md:block" />
                <span class="inline-block text-deep-purple-accent-400">Victorino Mapa.</span>
            </h2>
            <p class="pr-5 mb-5 text-base text-gray-700 md:text-lg">
                True blooded mapans have varied out their burning passion and constant pursuit for excellence thus, creating a history not only for themselves but also for their Alma Mater. </p>
            <p class="pr-5 mb-5 text-base text-gray-700 md:text-lg">In grateful recognition for their contributions, this milestone was conceptualized a concrete manifestation of the school’s commendation which will serve as an inspiration to its stakeholders</p>
            <div class="flex items-center">
                <a href="#teachers" class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-slate-800 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                   Faculty Awardees
                </a>
                <a href="#students" aria-label="" class="inline-flex items-center font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700">Student Awardees.</a>
            </div>
        </div>
    </div>
</div>

<section class="bg-gray-900 text-white" id="teachers">
    <div class="mx-auto max-w-screen-xl px-4 pt-10 lg:flex lg:items-center">
        <div class="mx-auto max-w-3xl text-center">
            <h1 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl pb-4">
                <span class="sm:block"> Outstanding teachers. </span>
            </h1>

            <p class="mx-auto mt-4 max-w-full sm:text-l sm:leading-relaxed">
                Victorino Mapa high school wall of achievers was completed for public viewing on December 7,2011 through the initiative of Dr. Alice B. Blas and ably supported by Class 79
            </p>
        </div>
    </div>

    <section class="bg-gray-900 text-white">

        <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 md:gap-12 lg:grid-cols-3 px-32">
            <div class="flex items-start sm:max-w-full">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Doloss .</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        2016 winner teacher | category
                        Outstanding public school education of manila

                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Les p. Valenzuela
                    </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2016 gold medal, International Intellectual Property invention
                        Innovation technology exposition 2016, Indonesian Innovation and invention
                        Promotion association in Thailand inventor’s day Bangkok, Thailand <br> <br>
                        2016 RECEPIENT, scholarship grant from south east Asian ministers of education organization regional center for science and mathematics (SEAMO RECSAM) Penang, Malaysia
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">
                        Amalia M. Antalan
                    </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2016 BRONZE MEDAL, International intellectual property invention, innovation technology ecpostiion 2016 (IIPTEX 2016) Bangkok, Thailand
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Luzviminda A. Dinglasan</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2016 SECOND PLACE, National level teacher category (team) association of science education of the Philippines
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Alice Blas, Ed. D </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1978-1979 Outstanding teacher, district awardee
                        1978-1979 Guro Award Search, MPSTA Awardee, DCS Manila

                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Anicia Austria </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 1983-1984 Outstanding science teacher, NCR
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Leticia De Jesus </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1986 Outstanding social studies teacher, Bluefalcon awardee
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Victoria Cervantes </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1988-1989 Special teacher of the year, finalist, lions club awardee
                        1988-2000 Outstanding school paper adviser, National Level

                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Teresa Salvatierra </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 1990 Outstanding social studies teacher, DCS, Manila
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Cynthia Mercelino </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1991 Outstanding social studies teacher, DCS, Manila
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Eden Temploruevo </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1992 Outstanding social studies teacher, DCS, Manila
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Amalia Dasalia </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1994 Outstanding TLE/HE Teacher, DCS, Manila
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Esmelita Asuncion </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1994 Outstanding Science Teacher, 6th Place, DCS, Manila
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Luisa Rollon </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1994 Outstanding Science Teacher, 5th Place, DCS, Manila
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Edwin Pacio </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1996 Outstanding Science Teacher, DCS, Manila <br><br>
                        1997 Ten Outstanding Science Teacher (TOST), Silver Medalist, DCS, Manila

                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Celia Divina </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1999 Outstanding Science Teacher, DCS, Manila
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Herminia Panlasique </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2004 Outstanding Science Teacher, DCS, Manila
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Elselie Gozon </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2009 Outstanding VMHS Teacher, Class ’57 Awardee
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Gloria Galindo </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2009 Outstanding VMHS Teacher, Class ’57 Awardee
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Jeanette Wang </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2009 Outstanding VMHS Teacher, Class ’57 Awardee
                        Regional Hall of Famer, Best Trainer, Cake Decoration

                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Luzviminda Dinglasan </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2010 Ten Outstanding Science Teacher (TOST), Finalist, DCS, Manila
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Asuncion Manto </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2010 Outstanding Commisioner, District 6-A, Boys Scout of the Philippines
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Apolonia Castro </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2010 Outstanding Troop Leader, Girls Scout of the Philippines </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Luzviminda A. Dinglasan </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2013 RECEPIENT, Scholarship Grant (SEAMO RECSAM), Penang, Malaysia
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Gloria F. Galindo </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2014 WINNER, Teacher Category Search for Outstanding Public School Educators of Manila </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Sunny L. Abaya </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2015 PROMOTED, Head Teacher III
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Cecilia S. Concepcion </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2015 PROMOTED, NCR Education Program Specialist
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Dr. Yolanda F. Tolentino </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2015 GOLD, 6th Korea Cyber International Genius Inventor Fair 2015, Seoul, South Korea <br><br>
                        – 2015 SILVER, Thailand Inventor’s day 2015, Muangthong Thani, Thailand
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Lea P. Valenzuela </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2015 GOLD, 6th Korea Cyber International Genius Inventor Fair 2015, Seoul, South Korea <br> <br>
                        2015 SILVER, Thailand Inventor’s day 2015, Muangthong Thani, Thailand
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Danilo R. Sumeracruz </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2016 PROMOTED, Head Teacher VI
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Dr. Yolanda F. Tolentino </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2016 WINNER, Principal Category Outstanding Public School Educators of Manila <br> <br>– 2016 GOLD MEDAL, International Intellectual Property Invention
                        Innovation Technology Exposition 2016, Bangkok, Thailand

                        <br> <br>– 2016 GOLD MEDAL, Indonesian Innovation and Invention Promotion
                        Association in Thailand Inventor’s Day, Bangkok, Thailand

                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Dr. Mark R. Hernandez </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2016 WINNER, Teacher III Category Outstanding Public School Educators of Manila
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold"> Amalia M. Antalan </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2016 WINNER, Teacher II Category Outstanding Public School Educators of Manila
                </div>
            </div>


        </div>

    </section>
    <section class="bg-gray-900 text-white" id="students">
        <div class="mx-auto max-w-screen-xl px-4 pt-10 lg:flex lg:items-center">
            <div class="mx-auto max-w-3xl text-center">
                <h1 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl pb-4">
                    <span class="sm:block">Exemplary Students </span>
                </h1>

                <p class="mx-auto mt-4 max-w-full sm:text-l sm:leading-relaxed">
                </p>
            </div>
        </div>

        <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 md:gap-12 lg:grid-cols-3 px-32">
            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Judith Arandiano </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1978 US Scientist, Techo Club
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Albert Flavier </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1981 US Scientist, Techno Club
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Rowena Grey </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1983 Regional Search for the Outstanding Youth Scientist, 2nd Place
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Amalia Bautista </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1991 Minority Floor Leader Manila (Boys and Girls Week)
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Beneth Flor </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 1999 Ambassador of Goodwill, Tokyo, Japan. Rotary International
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Mary Rose Sotalo </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2000 Education Summit Exchange Student, Bangkok, Thailand
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Jessie Consolacion </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        – 2001 Most Outstanding Boy Scout, National Level (TOBS)
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Generose Bulatao </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2003 AFS Inter-Cultural Program Exchange Student, Tokyo, Japan
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Wilfredo Quijano </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2003 National Champion Cake Decoration
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Jose Ramil Natindin Jr. </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - UK 2004-2005 Most Outstanding Boy Scout of Manila
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">April Felix </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2004 Regional Champion Cake Decoration
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Mark Caalim</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2004-2005 Most Outstanding Boy Scout of Manila
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Henrey Benitez </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2005 Outstanding Student Leader of Manila
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Charmaine Frilles </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2005 Regional Champion Cake Decoration
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Rosalie Fedelis </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2008 National Champion Cocktail Mixing
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Jihan Al-Shadifat </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2008 Vice Mayor of Manila, (Boys and Girls Week),
                        Noli De Castro Excellence Award and Exemplary Leadership,
                        2008 Ten Outstanding Public School Students, NCR

                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Aaron Corpuz </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2009-2010 Most Outstanding Boy Scout of Manila
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Renz Francis Sasa </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2011 Most Outstanding Student Leader of Manila, City Councilor (Boys and Girls Week)
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Sean Luke Cabiles, Jeffrey Abulencia, John David Caburnay </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2011 Young Scientist Finalist, Inter Science and Engineering Fair, Los Angeles CA, USA
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Michael Angelo B. De Chavez, John Steven D. Ablong, Danise B. Chan </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2014 FINALIST, International Science & Engineering Fair, Los Angeles, California, USA
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Christian Wilson Joi M. Antalan </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2015 GOLD MEDAL Cyber International Genius Invention Fair, Seoul, South Korea
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Reniel Jacob M. Belecina </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2015 SILVER MEDAL, Thailand Investor's Day 2015, Muangthong Thani, Thailand
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Christian Wilson Joi M. Antalan </h2>

                    <p class="mt-1 text-sm text-gray-300">
                        - 2016 GOLD MEDAL International Intellectual Property Invention, Innovation Technology Exposition <br> <br>
                        2016 (IIPTEX 2016), Bangkok, Thailand<br> <br>
                        2016 GOLD MEDAL Indonesian Innovation and Invention Promotion Association in Thailand Inventor's Day Bangkok, Thailand 2016 RECIPIENT, College Scholarship Grant from King Mungkut's University of Technology Thonburi Bangkok, Thailand

                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Philomena Rita V, Valera </h2>

                    <p class="mt-1 text-sm text-gray-300">
                    - 2016 SPECIAL AWARD for Science Principles and Processes Search For SEAMEO Young Scientists Penang, Malaysia 
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <span class="flex-shrink-0 rounded-lg bg-gray-800 p-4">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>

                <div class="ml-4">
                    <h2 class="text-lg font-bold">Madel M. Pineda </h2>

                    <p class="mt-1 text-sm text-gray-300">
                    - 2016 FINALIST, National Level, Tagaytay City ★ FIRST PLACE, Regional Level Valmasci High School National Science & Technology Fair (NSTF)                    </p>
                </div>
            </div>

            
    </section>




    @endsection