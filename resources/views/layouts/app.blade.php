<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/63415d2037898912e96d85f8/1gerl7ikv';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->


    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <div hidden class="livechat">
            <a href="https://wa.me/+639693141458?text=Hello%20I%20Need%20your%20Help%20Thank%20You" target="_blank">
                <img height="80px" width="80px" src="{{ asset('assets/images/livechat.png') }}" alt="">
            </a>
        </div>

    </div>

    @stack('modals')

    @livewireScripts

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

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    window.addEventListener('show-delete-confirmation', event => {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit('deleteConfirmed')
            }
        })

    });

    // userDeleted
    window.addEventListener('userDeleted', event => {
        Swal.fire(
            'Deleted',
            'The User has been Deleted.',
            'success'
        )
    });


    // infoDeleted
    window.addEventListener('infoDeleted', event => {
        Swal.fire(
            'Deleted',
            'The Information has been Deleted.',
            'success'
        )
    });

    // subject deleted
    window.addEventListener('subjectDeleted', event => {
        Swal.fire(
            'Deleted',
            'The Subject has been Deleted.',
            'success'
        )
    });

    // subject added
    window.addEventListener('subjectAdded', event => {
        Swal.fire(
            'Success',
            'The Subject has been Added.',
            'success'
        )
    });

    // user added
    window.addEventListener('userAdded', event => {
        Swal.fire(
            'Success',
            'The User has been Added.',
            'success'
        )
    });

    // info saved
    window.addEventListener('infoSaved', event => {
        Swal.fire(
            'Success',
            'The Information has been Saved.',
            'success'
        )
    });

     //reply deleted
     window.addEventListener('contactReplied', event => {
        Swal.fire(
            'Success',
            'You have deleted a reply.',
            'success'
        )
    });


    // announcement saved
    window.addEventListener('announcementSaved', event => {
        Swal.fire(
            'Success',
            'The Announcement has been Saved and Posted.',
            'success'
        )
    });
</script>

</html>


<style>
    .livechat {
        bottom: 10px;
        left: 10px;
        position: fixed;
    }
</style>
