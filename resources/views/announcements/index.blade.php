@extends('nonuserlayout')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>News and Announcements</title>

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" > --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

@section('content')
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
                                <form action="{{ route('announcements.destroy', $announcement->hashid) }}" method="Post" class="mb-5 mt-3 m-3">
                                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                        href="{{ route('announcements.edit', $announcement->hashid) }}">Edit</a>
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
@endsection

