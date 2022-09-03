<!DOCTYPE html>
<html>

<head>
    <title>All Submitted Requirements by Applicants</title>
    <script src="https://cdn.tailwindcss.com"></script>
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

                    <a href="/" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('Vision and Mission') }}
                    </a>

                    <a href="/submissions/create" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('Admission / Submission of Requirements') }}
                    </a>

                    <a href="/" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('About') }}
                    </a>

                    <a href="/announcements" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('News and Announcements') }}
                    </a>

                    <a href="/portal" style="color: white;" href="" :active="request() - > routeIs('/')">
                        {{ __('Faculty Portal') }}
                    </a>

                </ul>
            </div>
        </div>

    </nav>


        @yield('content')


</body>

</html>