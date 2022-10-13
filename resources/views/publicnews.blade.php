@extends('nonuserlayout')

@section('content')
<div class="relative mx-auto max-w-7xl">

    <div class="grid max-w-lg gap-12 mx-auto mt-12 lg:grid-cols-3 lg:max-w-none">

        @foreach (App\Models\PublicAnnouncement::get() as $publicannouncement)
        <div class="flex flex-col mb-12 overflow-hidden cursor-pointer shadow-lg">
            <a href="" class="hidden">{{ $publicannouncement->id }}</a>
            <a href="">
                <div class="flex-shrink-0">
                    <img class="object-cover w-full h-52 rounded-lg" src="{{ Storage::url($publicannouncement->image) }}" alt="">
                </div>
            </a>
            <div class="flex flex-col justify-between flex-1 p-3">
                <a href=""></a>
                <div class="flex-1">
                    <a href="">
                        <div class="flex pt-6 space-x-1 text-sm text-gray-500">
                            <time datetime="2020-03-10"> Date to be added</time>
                            <span aria-hidden="true"> · </span>
                            <span> 4 min read </span>
                        </div>
                    </a>
                    <a href="#" class="block mt-2 space-y-6">
                        <h3 class="text-2xl font-semibold leading-none tracking-tighter text-neutral-600">
                            {{ $publicannouncement->title }}
                        </h3>
                        <p class="text-lg font-normal text-gray-500">{{ $publicannouncement->description }}</p>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection