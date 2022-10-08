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
</script>

</html>


<style>
    .livechat {
        bottom: 10px;
        left: 10px;
        position: fixed;
    }
</style>
