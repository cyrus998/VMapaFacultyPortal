<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>News and Announcements</title>

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" > --}}
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

                    <a href="/" style="color: white;" href="" :active="request() - > routeIs('/')">
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


    {{-- blocks --}}
    <section class="m-5">
        <div class="pb-4 border-b border-gray-600">

            <h3 class="text-xl font-semibold leading-6 text-gray-800">Latest Entries</h3>
            @if (Auth::check())
                @if (Auth::user()->role == '1')
                    <a class="btn btn-success" href="{{ route('announcements.create') }}"> Create Announcement</a>
                @endif
            @endif

        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="grid max-w-lg gap-12 mx-auto mt-12 lg:grid-cols-3 lg:max-w-none">

                @foreach ($announcements as $announcement)
                    <div class="flex flex-col mb-12 overflow-hidden cursor-pointer shadow-lg">
                        <a href="" class="hidden">{{ $announcement->id }}</a>
                        <a href="">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-52 rounded-lg"
                                    src="{{ $announcement->photourl }}" alt="">
                            </div>
                        </a>
                        <div class="flex flex-col justify-between flex-1 p-3">
                            <a href=""></a>
                            <div class="flex-1">
                                <a href="">
                                    <div class="flex pt-6 space-x-1 text-sm text-gray-500">
                                        <time datetime="2020-03-10"> {{ $announcement->date }}</time>
                                        <span aria-hidden="true"> · </span>
                                        <span> 4 min read </span>
                                    </div>
                                </a>
                                <a href="#" class="block mt-2 space-y-6">
                                    <h3 class="text-2xl font-semibold leading-none tracking-tighter text-neutral-600">
                                        {{ $announcement->title }}</h3>
                                    <p class="text-lg font-normal text-gray-500">{{ $announcement->description }}</p>
                                </a>
                            </div>
                        </div>
                        @if (Auth::check())
                            @if (Auth::user()->role == '1')
                                <form action="{{ route('announcements.destroy', $announcement->id) }}" method="Post" class="mb-5 mt-3 m-3">
                                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                        href="{{ route('announcements.edit', $announcement->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </form>
                            @endif
                        @endif
                    </div>
                @endforeach


                {!! $announcements->links() !!}

            </div>
        </div>
        </div>
    </section>


</body>

</html>
